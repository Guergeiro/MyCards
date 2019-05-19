function validation(form) {
	let email = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	if (!email.test(document.querySelector("input#email").value)) {
		document.querySelector("input#email").parentElement.lastElementChild.classList.add("d-block");
		document.querySelector("input#email").parentElement.lastElementChild.innerHTML = "Email inválido."
		return false;
	} else {
		document.querySelector("input#email").parentElement.lastElementChild.classList.remove("d-block");
	}

	let password = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?!.*?[^\w\s]).{8,}$/;

	if (!password.test(document.querySelector("input#password").value)) {
		document.querySelector("input#password").parentElement.lastElementChild.classList.add("d-block");
		document.querySelector("input#password").parentElement.lastElementChild.innerHTML = "A password deve conter pelo menos 8 carateres, pelo menos uma letra e um número."
		return false;
	} else {
		document.querySelector("input#password").parentElement.lastElementChild.classList.remove("d-block");
	}

	if (document.querySelector("input#password").value != document.querySelector("input#repassword").value) {
		document.querySelectorAll("input[type=password]").forEach((input) => {
			input.parentElement.lastElementChild.classList.add("d-block");
			input.parentElement.lastElementChild.innerHTML = "As passwords devem ser iguais.";
		});
		return false;
	} else {
		document.querySelectorAll("input[type=password]").forEach((input) => {
			input.parentElement.lastElementChild.classList.remove("d-block");
			input.parentElement.lastElementChild.innerHTML = "As passwords devem ser iguais.";
		});
	}

	return true;
}