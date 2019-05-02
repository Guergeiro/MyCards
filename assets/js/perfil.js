function validation(form) {
	let inputs = form.querySelectorAll("input[type=password]");
	let regex = new RegExp("[A-Z]");
	if (inputs[0].value.trim().length == 0) {
		inputs[0].classList.remove("is-valid", "is-invalid");
		inputs[1].classList.remove("is-valid", "is-invalid");

		inputs[0].nextElementSibling.classList.remove("invalid-tooltip", "valid-tooltip");
		inputs[0].nextElementSibling.innerHTML = "";
		inputs[1].nextElementSibling.classList.remove("invalid-tooltip", "valid-tooltip");
		inputs[1].nextElementSibling.innerHTML = "";
		return false;
	}
	if (regex.test(inputs[0].value)) {
		inputs[0].classList.add("is-valid");
		inputs[0].classList.remove("is-invalid");
		inputs[0].nextElementSibling.classList.remove("invalid-tooltip");
		inputs[0].nextElementSibling.classList.add("valid-tooltip");
		inputs[0].nextElementSibling.innerHTML = "Correto!";
	} else {
		inputs[0].classList.remove("is-valid");
		inputs[0].classList.add("is-invalid");
		inputs[0].nextElementSibling.classList.remove("valid-tooltip");
		inputs[0].nextElementSibling.classList.add("invalid-tooltip");
		inputs[0].nextElementSibling.innerHTML = "A password deve conter no mínimo 8 caracteres, e 1 número.";
		return false;
	}

	if (inputs[0].value.trim() != inputs[1].value.trim()) {
		inputs[1].classList.remove("is-valid");
		inputs[1].classList.add("is-invalid");
		inputs[1].nextElementSibling.classList.remove("valid-tooltip");
		inputs[1].nextElementSibling.classList.add("invalid-tooltip");
		inputs[1].nextElementSibling.innerHTML = "Re-escreva a password corretamente.";
		return false;
	}

	inputs[0].classList.add("is-valid");
	inputs[0].classList.remove("is-invalid");
	inputs[0].nextElementSibling.classList.remove("invalid-tooltip");
	inputs[0].nextElementSibling.classList.add("valid-tooltip");
	inputs[0].nextElementSibling.innerHTML = "Correto!";
	inputs[1].classList.add("is-valid");
	inputs[1].classList.remove("is-invalid");
	inputs[1].nextElementSibling.classList.remove("invalid-tooltip");
	inputs[1].nextElementSibling.classList.add("valid-tooltip");
	inputs[1].nextElementSibling.innerHTML = "Correto!";
	return true;
}
