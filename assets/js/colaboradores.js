function validation(form) {
	let returnValue = true;
	document.querySelectorAll("input").forEach((input) => {
		if (input.value.trim().length == 0) {
			returnValue = false;
		}
	});
	return returnValue;
}
$(document).ready(function () {

	$.post("http://[::1]/PINT-Web/api/todos_colaboradores_empresa", {
		keyEmpresa: JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Utilizador"]
	}, function (data) {
		data = JSON.parse(data);
		console.log(data);
		data.forEach(dataElement => {
			let elementParent = document.querySelector(".row");
			elementParent.innerHTML +=
				"<div id=\"cardColaborador\" class=\"col-sm-6 col-md-3 p-3\">" +
				"<div class=\"card h-100\">" +
				"<img class=\"card-img-top\" src=\"assets/imgs/users/" + dataElement.ID_Empresa + "/" + dataElement.Imagem + "\">" +
				"<div class=\"card-body h-100\">" +
				"<h4 class=\"card-title\">" + dataElement.Nome + "</h4>" +
				"<p class=\"card-text\"> " + (dataElement.Dono == 1 ? "Dono" : "Colaborador") + " </p>" +
				(dataElement.Dono == 0 ?
					"<div class=\"text-right\" id=\"elementClear\"><a href=\"#\" class=\"btn btn-danger h-100\"><i class=\"fas fa-trash-alt fa-fw\"></i></a></div>"
					: "") +
				"</div>" +
				"</div>" +
				"</div>";
		})
	});
});

document.querySelector("#criarColaborador").addEventListener("submit", function () {
	$.post(
		"http://127.0.0.1/PINT-Web/api/novo_colaborador_empresa", {
			keyEmpresa: JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Utilizador"],
		},
		function (data) {
			window.location.href = "<?php echo site_url('Api/novo_colaborador_empresa');?>";
		});
});

document.querySelector("#elementClear").addEventListener("click", function () {
	$.post(
		"http://127.0.0.1/PINT-Web/api/eliminar_colaborador_empresa", {
			keyEmpresa: JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Utilizador"],
		},
		function (data) {
			
		});
});