$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

const idEmpresa = JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"];

const checkCorrectDate = (firstDate, secondDate) => {
    let date1 = new Date(firstDate);
    let date2 = new Date(secondDate);

    return (date1 < date2);
}

const createAlert = (element) => {
    document.querySelector("#body").innerHTML += element;
}

const formatDate = (date) => {
    let day = date.getDate();
    let month = date.getMonth();
    let year = date.getFullYear();
    return (`${year}-${month}-${day}`);
}

const novaCampanha = async (formData) => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}/campanha`, {
        method: "POST",
        body: formData
    });

    const data = await response.json();
    return data;
}

const novaCampanhaCupao = () => {
    let formData = new FormData();
    let dataInicio = new Date(document.querySelector("input#dataInicioCupao").value);
    let dataFim = new Date(document.querySelector("input#dataFimCupao").value);
    formData.append("Designacao", document.querySelector("input#designacaoCupao").value);
    formData.append("Descricao", document.querySelector("input#descricaoCupao").value);
    formData.append("DataInicio", formatDate(dataInicio));
    formData.append("DataFim", formatDate(dataFim));
    formData.append("Valor", document.querySelector("input#valorCupao").value);
    formData.append("TipoCampanha", 0);
    let element = "";
    novaCampanha(formData).catch(err => {
        element = `<div class="alert alert-warning alert-dismissible fade show" role="alert">Ocorreu um erro ao criar campanha.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button></div>`;
    }).then(data => {
        if (data["status"] == "true") {
            element = `<div class="alert alert-success alert-dismissible fade show" role="alert">Campanha criada com sucesso.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button></div>`;
        } else {
            element = `<div class="alert alert-warning alert-dismissible fade show" role="alert">Ocorreu um erro ao criar campanha.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button></div>`;
        }
    })
}

document.querySelector("button#buttonCupao").addEventListener("click", (e) => {
    let returnValue = true;
    e.target.parentElement.parentElement.querySelectorAll("input").forEach(input => {
        if (input.value.trim().length == 0) {
            returnValue = false;
            input.parentElement.lastElementChild.innerHTML = "Preencha os campos."
            input.parentElement.lastElementChild.classList.remove("valid-tooltip");
            input.parentElement.lastElementChild.classList.add("d-block", "invalid-tooltip");
        } else {
            input.parentElement.lastElementChild.innerHTML = "Correto!"
            input.parentElement.lastElementChild.classList.remove("invalid-tooltip");
            input.parentElement.lastElementChild.classList.add("d-block", "valid-tooltip");
        }
    });
    if (!returnValue) {
        return;
    }
    let data1 = document.querySelector("input#dataInicioCupao");
    let data2 = document.querySelector("input#dataFimCupao");
    returnValue = checkCorrectDate(data1.value, data2.value);
    if (returnValue) {
        data1.parentElement.lastElementChild.innerHTML = "Datas Corretas.";
        data1.parentElement.lastElementChild.classList.remove("invalid-tooltip");
        data1.parentElement.lastElementChild.classList.add("d-block", "valid-tooltip");

        data2.parentElement.lastElementChild.innerHTML = "Datas Corretas.";
        data2.parentElement.lastElementChild.classList.remove("invalid-tooltip");
        data2.parentElement.lastElementChild.classList.add("d-block", "valid-tooltip");
    } else {
        data1.parentElement.lastElementChild.innerHTML = "Data de inicio tem de ser menor do que data de fim.";
        data1.parentElement.lastElementChild.classList.remove("valid-tooltip");
        data1.parentElement.lastElementChild.classList.add("d-block", "invalid-tooltip");

        data2.parentElement.lastElementChild.innerHTML = "Data de inicio tem de ser menor do que data de fim.";
        data2.parentElement.lastElementChild.classList.remove("valid-tooltip");
        data2.parentElement.lastElementChild.classList.add("d-block", "invalid-tooltip");
    }
    if (!returnValue) {
        return;
    }
    let today = new Date();
    returnValue = checkCorrectDate(today.toDateString(), data1.value);
    if (returnValue) {
        data1.parentElement.lastElementChild.innerHTML = "Datas Corretas.";
        data1.parentElement.lastElementChild.classList.remove("invalid-tooltip");
        data1.parentElement.lastElementChild.classList.add("d-block", "valid-tooltip");

        data2.parentElement.lastElementChild.innerHTML = "Datas Corretas.";
        data2.parentElement.lastElementChild.classList.remove("invalid-tooltip");
        data2.parentElement.lastElementChild.classList.add("d-block", "valid-tooltip");
    } else {
        data1.parentElement.lastElementChild.innerHTML = "Data de inicio tem de ser após o dia atual.";
        data1.parentElement.lastElementChild.classList.remove("valid-tooltip");
        data1.parentElement.lastElementChild.classList.add("d-block", "invalid-tooltip");

        data2.parentElement.lastElementChild.innerHTML = "Data de inicio tem de ser após o dia atual.";
        data2.parentElement.lastElementChild.classList.remove("valid-tooltip");
        data2.parentElement.lastElementChild.classList.add("d-block", "invalid-tooltip");
    }
    if (!returnValue) {
        return;
    }
    novaCampanhaCupao();
});