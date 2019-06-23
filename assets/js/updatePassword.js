function validation(form) {
	let password = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?!.*?[^\w\s]).{8,}$/;

	if (!password.test(form.querySelector("input#prepassword").value)) {
		form.querySelector("input#prepassword").parentElement.lastElementChild.classList.add("d-block");
		form.querySelector("input#prepassword").parentElement.lastElementChild.innerHTML = "Password inválida."
		return false;
	} else {
		form.querySelector("input#password").parentElement.lastElementChild.classList.remove("d-block");
	}

	if (!password.test(form.querySelector("input#password").value)) {
		form.querySelector("input#password").parentElement.lastElementChild.classList.add("d-block");
		form.querySelector("input#password").parentElement.lastElementChild.innerHTML = "A password deve conter pelo menos 8 carateres, pelo menos uma letra e um número."
		return false;
	} else {
		form.querySelector("input#password").parentElement.lastElementChild.classList.remove("d-block");
	}

	if (form.querySelector("input#password").value != form.querySelector("input#repassword").value) {
		form.querySelectorAll("input[type=password]:not(#prepassword)").forEach((input) => {
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

	return true;
}