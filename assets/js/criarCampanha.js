$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

const idEmpresa = JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"];

const checkCorrectDate = (firstDate, secondDate) => {
    let date1 = new Date(firstDate);
    let date2 = new Date(secondDate);

    return (date1 < date2);
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
    novaCampanha(formData).then(location.reload);
}

const novaCampanhaCarimbo = () => {
    let formData = new FormData();
    let dataInicio = new Date(document.querySelector("input#dataInicioCarimbo").value);
    let dataFim = new Date(document.querySelector("input#dataFimCarimbo").value);
    formData.append("Designacao", document.querySelector("input#designacaoCarimbo").value);
    formData.append("Descricao", document.querySelector("input#descricaoCarimbo").value);
    formData.append("DataInicio", formatDate(dataInicio));
    formData.append("DataFim", formatDate(dataFim));
    formData.append("TipoCampanha", 1);
    novaCampanha(formData).then(location.reload);
}

const novaCampanhaPonto = () => {
    let formData = new FormData();
    let dataInicio = new Date(document.querySelector("input#dataInicioPonto").value);
    let dataFim = new Date(document.querySelector("input#dataFimPonto").value);
    formData.append("Designacao", document.querySelector("input#designacaoPonto").value);
    formData.append("Descricao", document.querySelector("input#premioPatamar").value);
    formData.append("DataInicio", formatDate(dataInicio));
    formData.append("DataFim", formatDate(dataFim));
    formData.append("Valor", document.querySelector("input#patamar").value);
    formData.append("TipoCampanha", 2);
    novaCampanha(formData).then(location.reload);
}

const validateForm = (element) => {
    let returnValue = true;
    let parentElement = element.parentElement.parentElement;
    parentElement.querySelectorAll("input").forEach(input => {
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
        return false;
    }
    let dates = parentElement.querySelectorAll("input[type=date]");
    let data1 = dates[0];
    let data2 = dates[1];
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
        return false;
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
    return returnValue;
}

document.querySelectorAll("main button").forEach(button => {
    button.addEventListener("click", () => {
        if (validateForm(button)) {
            switch (button.getAttribute("id")) {
                case "buttonCupao":
                    novaCampanhaCupao();
                    break;
                case "buttonCarimbo":
                    novaCampanhaCarimbo();
                    break;
                case "buttonPontos":
                    novaCampanhaPonto();
                    break;
            }
        }
    });
});