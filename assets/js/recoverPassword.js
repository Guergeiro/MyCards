function validation(form) {
	let returnValue = true;
	let email = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	if (!email.test(document.querySelector("input#email").value)) {
		document.querySelector("input#email").parentElement.lastElementChild.classList.add("d-block");
		document.querySelector("input#email").parentElement.lastElementChild.innerHTML = "Email inválido."
		returnValue = false;
	} else {
		document.querySelector("input#email").parentElement.lastElementChild.classList.remove("d-block");
	}
	return returnValue;
}