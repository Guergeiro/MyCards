function validation(form) {
	let returnValue = true;
	let email = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	if (!email.test(form.querySelector("input#email").value)) {
		form.querySelector("input#email").parentElement.lastElementChild.classList.add("d-block");
		form.querySelector("input#email").parentElement.lastElementChild.innerHTML = "Email inválido."
		returnValue = false;
	} else {
		form.querySelector("input#email").parentElement.lastElementChild.classList.remove("d-block");
	}
	return returnValue;
}