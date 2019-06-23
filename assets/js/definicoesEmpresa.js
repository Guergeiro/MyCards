document.querySelector("button#redes-sociais").addEventListener("click", () => {
	$.post();
});

const distritos = [
	"Aveiro",
	"Beja",
	"Braga",
	"Bragança",
	"Castelo Branco",
	"Coimbra",
	"Évora",
	"Faro",
	"Guarda",
	"Leiria",
	"Lisboa",
	"Portalegre",
	"Porto",
	"Santarém",
	"Setúbal",
	"Viana do Castelo",
	"Vila Real",
	"Viseu"
];

distritos.forEach((distrito) => {
	document.querySelector(
		"#localizacao"
	).innerHTML += `<option value=${distrito}>${distrito}</option>`;
});

function validation(form) {
	let password = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?!.*?[^\w\s]).{8,}$/;
	if (form.querySelector("input#prepassword").value.trim().length == 0) {
		form.querySelector("input#prepassword").parentElement.lastElementChild.classList.add("d-block");
		form.querySelector("input#prepassword").parentElement.lastElementChild.innerHTML = "Campo deve estar preenchido.";
		return false;
	} else {
		form.querySelector("input#prepassword").parentElement.lastElementChild.classList.remove("d-block");
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
		form.querySelectorAll("input[type=password]:not(#prepassword)").forEach((input) => {
			input.parentElement.lastElementChild.classList.remove("d-block");
			input.parentElement.lastElementChild.innerHTML = "As passwords devem ser iguais.";
		});
	}
	return true;
}