$(document).ready(function () {
	$.get("https://mycards.dsprojects.pt/api/empresa/" + JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"], function (data) {
		data = JSON.parse(data);
		data.forEach(da => {
			/* Nome */
			document.getElementById("nome").focus();
			document.getElementById("nome").value = da["Nome"];
			document.getElementById("nome").setAttribute("disabled", "disabled");

			/* Email */
			document.getElementById("email").focus();
			document.getElementById("email").value = da["Email"];
			document.getElementById("email").setAttribute("disabled", "disabled");


			/* Localizacao */
			document.getElementById("localizacao").focus();
			document.getElementById("localizacao").value = da["Localizacao"];
			document.getElementById("localizacao").setAttribute("disabled", "disabled");

			/* Nif */
			document.getElementById("nif").focus();
			document.getElementById("nif").value = da["NIF"];
			document.getElementById("nif").setAttribute("disabled", "disabled");

			/* Plano de Subscrição */
			document.getElementById("plano").focus();
			switch (da["TipoEmpresa"]) {
				case "0":
					document.getElementById("plano").value = "Grátis";
					break;
				case "1":
					document.getElementById("plano").value = "Básico";
					break;
				case "2":
					document.getElementById("plano").value = "Intermédio";
					break;
				case "3":
					document.getElementById("plano").value = "Profissional";
					break;
				default:
					break;
			}
			document.getElementById("plano").setAttribute("disabled", "disabled");
		});
	});
	$.get("https://mycards.dsprojects.pt/api/empresa/" + JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"] + "/colaborador", function (data) {
		data = JSON.parse(data);
		/* Colaboradores */
		document.getElementById("colaboradores").focus();
		document.getElementById("colaboradores").value = data.length;
		document.getElementById("colaboradores").setAttribute("disabled", "disabled");
	});

	$.get("https://mycards.dsprojects.pt/api/empresa/" + JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"] + "/cartao", function (data) {
		data = JSON.parse(data);
		/* Colaboradores */
		document.getElementById("cartoes").focus();
		document.getElementById("cartoes").value = data.length;
		document.getElementById("cartoes").setAttribute("disabled", "disabled");
	});
});