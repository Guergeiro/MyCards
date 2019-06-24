const getClientes = async () => {
	const response = await fetch(`https://mycards.dsprojects.pt/api/empresa`);
	return await response.json();
}

let empresas;

getClientes().then(data => {
	empresas = data;
	data.forEach(empresa => {
		if (empresa["Ativo"] == 1 && empresa["TipoEmpresa"] == 0) {
			document.querySelector("table tbody").innerHTML += `<tr><th scope="row" class="align-middle">${empresa["ID_Empresa"]}</th><td class="align-middle">${empresa["Nome"]}</td><td class="align-middle">${empresa["Email"]}</td><td class="align-middle"><div class="btn-group" role="group"><button class="btn py-2 px-2 btn-success" data-id="${empresa["ID_Empresa"]}">Aceitar</button><button class="btn py-2 px-2 btn-warning" data-toggle="modal" data-target="#modal" data-id="${empresa["ID_Empresa"]}">Ver Mais</button><button class="btn py-2 px-2 btn-danger" data-id="${empresa["ID_Empresa"]}">Recusar</button></div></td></tr>`;
		}
	});
});
$(document).ready(function () {
	$("#modal").on("show.bs.modal", function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
		var recipient = button.data("id") // Extract info from data-* attributes
		// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		// Update the modal"s content. We"ll use jQuery here, but you could use a data binding library or other methods instead.
		var modal = $(this)
		modal.find(".modal-title").text(recipient)
		modal.find(".modal-body input").val(recipient)
	});
});