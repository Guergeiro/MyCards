const validation = (form) => {
    let returnValue = true;
    form.querySelectorAll("input").forEach(input => {
        if (input.value.trim().length == 0) {
            input.parentElement.lastElementChild.classList.remove("valid-tooltip");
            input.parentElement.lastElementChild.classList.add("d-block", "invalid-tooltip");
            input.parentElement.lastElementChild.innerHTML = "Campo obrigatório.";
            returnValue = false;
        } else {
            input.parentElement.lastElementChild.classList.remove("invalid-tooltip");
            input.parentElement.lastElementChild.classList.add("d-block", "valid-tooltip");
            input.parentElement.lastElementChild.innerHTML = "Correto!";
        }
    });
    let email = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if (!email.test(form.querySelector("input#email").value)) {
        form.querySelector("input#email").parentElement.lastElementChild.classList.remove("valid-tooltip");
        form.querySelector("input#email").parentElement.lastElementChild.classList.add("d-block", "invalid-tooltip");
        form.querySelector("input#email").parentElement.lastElementChild.innerHTML = "Email inválido."
        returnValue = false;
    } else {
        form.querySelector("input#email").parentElement.lastElementChild.classList.remove("invalid-tooltip");
        form.querySelector("input#email").parentElement.lastElementChild.classList.add("d-block", "valid-tooltip");
        form.querySelector("input#email").parentElement.lastElementChild.innerHTML = "Correto!";
    }
    let textarea = form.querySelector("textarea");
    if (textarea.value.trim().length == 0) {
        textarea.parentElement.lastElementChild.classList.remove("valid-tooltip");
        textarea.parentElement.lastElementChild.classList.add("d-block", "invalid-tooltip");
        textarea.parentElement.lastElementChild.innerHTML = "Campo obrigatório.";
        returnValue = false;
    } else {
        textarea.parentElement.lastElementChild.classList.remove("invalid-tooltip");
        textarea.parentElement.lastElementChild.classList.add("d-block", "valid-tooltip");
        textarea.parentElement.lastElementChild.innerHTML = "Correto!";
    }
    return returnValue;
}