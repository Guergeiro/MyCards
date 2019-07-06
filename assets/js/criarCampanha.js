$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

const checkCorrectDate = (firstDate, secondDate) => {
    let date1 = new Date(firstDate);
    let date2 = new Date(secondDate);

    return (date1 < date2);
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
    console.log(today.toDateString());
    returnValue = checkCorrectDate(data1.value, today.toDateString());
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
    console.log(returnValue);
    if (!returnValue) {
        return;
    }
});