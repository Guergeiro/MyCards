function validation(form) {
	let password = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?!.*?[^\w\s]).{8,}$/;

	if (!password.test(document.querySelector("input#prepassword").value)) {
		document.querySelector("input#prepassword").parentElement.lastElementChild.classList.add("d-block");
		document.querySelector("input#prepassword").parentElement.lastElementChild.innerHTML = "Password inválida."
		return false;
	} else {
		document.querySelector("input#password").parentElement.lastElementChild.classList.remove("d-block");
	}

	if (!password.test(document.querySelector("input#password").value)) {
		document.querySelector("input#password").parentElement.lastElementChild.classList.add("d-block");
		document.querySelector("input#password").parentElement.lastElementChild.innerHTML = "A password deve conter pelo menos 8 carateres, pelo menos uma letra e um número."
		return false;
	} else {
		document.querySelector("input#password").parentElement.lastElementChild.classList.remove("d-block");
	}

	if (document.querySelector("input#password").value != document.querySelector("input#repassword").value) {
		document.querySelectorAll("input[type=password]:not(#prepassword)").forEach((input) => {
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