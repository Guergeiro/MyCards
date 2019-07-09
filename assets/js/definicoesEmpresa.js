const idEmpresa = JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"];

const distritos = [
    "Aveiro",
    "Beja",
    "Braga",
    "Bragança",
    "Castelo Branco",
    "Coimbra",
    "Évora",
    "Faro",
    "Guarda",
    "Leiria",
    "Lisboa",
    "Portalegre",
    "Porto",
    "Santarém",
    "Setúbal",
    "Viana do Castelo",
    "Vila Real",
    "Viseu"
];

const postDadosEmpresa = async (formData) => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}`, {
        method: "POST",
        body: formData
    });
    const data = await response.json();
    return data[0];
}

const getDadosEmpresa = async () => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}`);
    const data = await (response.json());
    return data[0];
}

const setLocalizacaoEmpresa = async (data) => {
    document.querySelectorAll("#localizacao option").forEach(option => {
        if (option.innerHTML == data["Localizacao"]) {
            option.selected = true;
        }
    });
}

const setAreaEmpresa = async (data) => {
    document.querySelectorAll("#areainteresse option").forEach(option => {
        if (option.value == data["AreaInteresse"]) {
            option.selected = true;
        }
    });
}

const setSocialEmpresa = async (data) => {
    document.querySelector("input#facebook").value = data["Facebook"] != null ? data["Facebook"] : "";
    document.querySelector("input#facebook").focus();
    document.querySelector("input#facebook").blur();
    document.querySelector("input#twitter").value = data["Twitter"] != null ? data["Twitter"] : "";
    document.querySelector("input#twitter").focus();
    document.querySelector("input#twitter").blur();
    document.querySelector("input#linkedin").value = data["LinkedIn"] != null ? data["LinkedIn"] : "";
    document.querySelector("input#linkedin").focus();
    document.querySelector("input#linkedin").blur();
}

getDadosEmpresa().then(data => {
    setLocalizacaoEmpresa(data);
    setAreaEmpresa(data);
    setSocialEmpresa(data);
});

document.querySelector("button#area-interesse").addEventListener("click", () => {
    let select = document.querySelector("select#areainteresse");
    let formData = new FormData();
    formData.append("AreaInteresse", select.options[select.selectedIndex].value);
    postDadosEmpresa(formData).then(location.reload());
});

document.querySelector("button#localizacao-empresa").addEventListener("click", () => {
    let select = document.querySelector("select#localizacao");
    let formData = new FormData();
    formData.append("Localizacao", select.options[select.selectedIndex].value);
    postDadosEmpresa(formData).then(location.reload());
});

document.querySelector("button#redes-sociais").addEventListener("click", (e) => {
    let formData = new FormData();
    e.target.parentElement.parentElement.querySelectorAll("input").forEach(input => {
        if (input.value.trim().length != 0) {
            switch (input.getAttribute("id")) {
                case "Facebook":
                    let regex = /^(?:https?:\/\/)?(?:www\.)?facebook\.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*?(\/)?([\w\-\.]{5,})$/i;
                    if (!regex.test(document.querySelector("input#Facebook").value)) {
                        document.querySelector("input#Facebook").parentElement.lastElementChild.classList.add("d-block");
                        document.querySelector("input#Facebook").parentElement.lastElementChild.innerHTML = "URL inválido."
                        return false;
                    } else {
                        document.querySelector("input#Facebook").parentElement.lastElementChild.classList.remove("d-block");
                        formData.append(input.getAttribute("id"), input.value);
                    }
                    break;
                case "Twitter":
                    let regex = /^(?:https?:\/\/)?(?:www\.)?twitter\.com\/([\w\-\.]{2,})$/i;
                    if (!regex.test(document.querySelector("input#Twitter").value)) {
                        document.querySelector("input#Twitter").parentElement.lastElementChild.classList.add("d-block");
                        document.querySelector("input#Twitter").parentElement.lastElementChild.innerHTML = "URL inválido."
                        return false;
                    } else {
                        document.querySelector("input#Twitter").parentElement.lastElementChild.classList.remove("d-block");
                        formData.append(input.getAttribute("id"), input.value);
                    }
                    break;
            }
        }
    });
    postDadosEmpresa(formData).then(location.reload());
});

distritos.forEach((distrito) => {
    document.querySelector(
        "#localizacao"
    ).innerHTML += `<option value="${distrito}">${distrito}</option>`;
});

function validation(form) {
    let password = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?!.*?[^\w\s]).{8,}$/;
    if (form.querySelector("input#prepassword").value.trim().length == 0) {
        form.querySelector("input#prepassword").parentElement.lastElementChild.classList.add("d-block");
        form.querySelector("input#prepassword").parentElement.lastElementChild.innerHTML = "Campo deve estar preenchido.";
        return false;
    } else {
        form.querySelector("input#prepassword").parentElement.lastElementChild.classList.remove("d-block");
    }
    if (!password.test(form.querySelector("input#password").value)) {
        form.querySelector("input#password").parentElement.lastElementChild.classList.add("d-block");
        form.querySelector("input#password").parentElement.lastElementChild.innerHTML = "A password deve conter pelo menos 8 carateres, pelo menos uma letra e um número."
        return false;
    } else {
        form.querySelector("input#password").parentElement.lastElementChild.classList.remove("d-block");
    }

    if (form.querySelector("input#password").value != form.querySelector("input#repassword").value) {
        form.querySelectorAll("input[type=password]:not(#prepassword)").forEach((input) => {
            input.parentElement.lastElementChild.classList.add("d-block");
            input.parentElement.lastElementChild.innerHTML = "As passwords devem ser iguais.";
        });
        return false;
    } else {
        form.querySelectorAll("input[type=password]:not(#prepassword)").forEach((input) => {
            input.parentElement.lastElementChild.classList.remove("d-block");
            input.parentElement.lastElementChild.innerHTML = "As passwords devem ser iguais.";
        });
    }
    return true;
}