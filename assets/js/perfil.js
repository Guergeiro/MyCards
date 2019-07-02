const idEmpresa = 1;

document.querySelector("#criarDono").addEventListener("click", function () {
    let okay = true;
    document.querySelectorAll("#modalDono input").forEach(input => {
        if (input.value.length == 0) {
            okay = false;
        }
    });
    if (okay) {
        let formData = new FormData();
        formData.append("nome", document.querySelector("#nomeDono").value);
        formData.append("codigoAcesso", document.querySelector("#codigoAcessoDono").value);
        formData.append("dono", document.querySelector("#colaboradorOption").value);
        postEmpresa(formData).then(location.reload());
    }
});

const getEmpresa = async () => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}`);
    const data = await response.json();
    return data[0];
}

const postEmpresa = async (formData) => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}/colaborador`, {
        method: "POST",
        body: formData
    });
    const data = response.json();
}

const getColaboradores = async () => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}/colaborador`);
    const data = await response.json();
    if (data.length == 0) {
        document.querySelector(".row").innerHTML +=
            '<div class="text-center col-12"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDono"><i class="fas fa-plus fa-fw"></i></button></div>';
    }
    data.forEach(dataElement => {
        let elementParent = document.querySelector(".row");
        let div = document.createElement("div");
        div.classList.add("col-sm-6", "col-md-3", "p-3");

        let card = document.createElement("div");
        card.classList.add("card", "h-100");
        card.innerHTML =
            '<img class="card-img-top" src="assets/avatar/' +
            dataElement.URL +
            '.png">';

        let cardBody = document.createElement("div");
        cardBody.classList.add("card-body", "text-center");
        cardBody.innerHTML =
            '<h4 class="card-title">' +
            dataElement.Nome +
            '</h4><p class="card-text">' +
            (dataElement.Dono == 1 ? "Dono" : "Colaborador") +
            " </p></div></div>";
        card.appendChild(cardBody);
        div.appendChild(card);
        card.addEventListener("click", function () {
            setTimeout(() => {
                document.getElementById("codigoAcesso").focus();
            }, 500);
            $("#modal").modal("toggle");
            document.querySelector("#modalTitle").innerHTML = dataElement.Nome;
            document.querySelector("#nome").value = dataElement.Nome;
        });
        elementParent.appendChild(div);
    });
}

getEmpresa().then(empresa => {
    if (empresa["TipoEmpresa"] != 0) {
        getColaboradores();
    } else {
        document.querySelector("main .card-body .row").innerHTML = "<div class=\"col-12 text-center\"><div class=\"alert alert-info\" role=\"alert \">A sua empresa ainda não foi aceite pelos administradores!</div></div>";
    }
});

function validation(form) {
    let okay = true;
    form.querySelectorAll("input").forEach(input => {
        if (input.value.length == 0) {
            okay = false;
        }
    });
    return okay;
}