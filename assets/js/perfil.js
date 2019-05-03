let inputs = document.querySelectorAll("input[type=password]");
inputs.forEach((input) => {
	input.addEventListener("input", function () {
		if (input.value.trim().length == 0) {
			input.classList.remove("is-valid", "is-invalid");
			input.nextElementSibling.classList.remove("invalid-tooltip", "valid-tooltip");
			input.nextElementSibling.innerHTML = "";
		} else {
			let regex = new RegExp("[A-Z]");
			if (regex.test(input.value.trim())) {
				input.classList.add("is-valid");
				input.classList.remove("is-invalid");
				input.nextElementSibling.classList.remove("invalid-tooltip");
				input.nextElementSibling.classList.add("valid-tooltip");
				input.nextElementSibling.innerHTML = "Correto!";
			} else {
				input.classList.remove("is-valid");
				input.classList.add("is-invalid");
				input.nextElementSibling.classList.add("invalid-tooltip");
				input.nextElementSibling.classList.remove("valid-tooltip");
				input.nextElementSibling.innerHTML = "A password deve conter no mínimo 8 caracteres, e 1 número.";
			}
		}
	});
});

function validation(form) {
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
