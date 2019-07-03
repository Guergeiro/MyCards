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

distritos.forEach((distrito) => {
    document.querySelector(
        "#localizacao"
    ).innerHTML += `<option value=${distrito}>${distrito}</option>`;
});

function validation(form) {
    let email = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if (!email.test(form.querySelector("input#email").value)) {
        form.querySelector("input#email").parentElement.lastElementChild.classList.add("d-block");
        form.querySelector("input#email").parentElement.lastElementChild.innerHTML = "Email inválido."
        return false;
    } else {
        form.querySelector("input#email").parentElement.lastElementChild.classList.remove("d-block");
    }

    let password = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?!.*?[^\w\s]).{8,}$/;

    if (!password.test(form.querySelector("input#password").value)) {
        form.querySelector("input#password").parentElement.lastElementChild.classList.add("d-block");
        form.querySelector("input#password").parentElement.lastElementChild.innerHTML = "A password deve conter pelo menos 8 carateres, pelo menos uma letra e um número."
        return false;
    } else {
        form.querySelector("input#password").parentElement.lastElementChild.classList.remove("d-block");
    }

    if (form.querySelector("input#password").value != form.querySelector("input#repassword").value) {
        form.querySelectorAll("input[type=password]").forEach((input) => {
            input.parentElement.lastElementChild.classList.add("d-block");
            input.parentElement.lastElementChild.innerHTML = "As passwords devem ser iguais.";
        });
        return false;
    } else {
        form.querySelectorAll("input[type=password]").forEach((input) => {
            input.parentElement.lastElementChild.classList.remove("d-block");
            input.parentElement.lastElementChild.innerHTML = "As passwords devem ser iguais.";
        });
    }

    if (form.querySelector("#nif").value.length != 9 || form.querySelector("#nif").value < 100000000 || form.querySelector("#nif").value > 999999999) {
        form.querySelector("#nif").parentElement.lastElementChild.classList.add("d-block");
        form.querySelector("#nif").parentElement.lastElementChild.innerHTML = "O NIF deve conter 9 números."
        return false;
    } else {
        form.querySelector("#nif").parentElement.lastElementChild.classList.remove("d-block");
    }

    let color = /^#(?:[0-9a-f]{3}){1,2}$/i;
    if (!color.test(form.querySelector("input#cor").value)) {
        form.querySelector("input#cor").parentElement.lastElementChild.classList.add("d-block");
        form.querySelector("input#cor").parentElement.lastElementChild.innerHTML = "Cor inválida."
        return false;
    } else {
        form.querySelector("input#cor").parentElement.lastElementChild.classList.remove("d-block");
    }

    if (form.querySelector("select#areainteresse").value == "null") {
        form.querySelector("select#areainteresse").parentElement.lastElementChild.classList.add("d-block");
        form.querySelector("select#areainteresse").parentElement.lastElementChild.innerHTML = "Escolha uma área.";
        return false;
    } else {
        form.querySelector("select#areainteresse").parentElement.lastElementChild.classList.remove("d-block");
    }

    if (form.querySelector("select#localizacao").value == "null") {
        form.querySelector("select#localizacao").parentElement.lastElementChild.classList.add("d-block");
        form.querySelector("select#localizacao").parentElement.lastElementChild.innerHTML = "Escolha uma localização.";
        return false;
    } else {
        form.querySelector("select#localizacao").parentElement.lastElementChild.classList.remove("d-block");
    }

    return true;
}