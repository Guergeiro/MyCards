$(document).ready(function () {
	$.get(
		"https://mycards.dsprojects.pt/api/empresa/" +
		JSON.parse(document.querySelector("head").getAttribute("data-session"))[
			"ID_Empresa"
		] +
		"/colaborador",
		function (data) {
			data = JSON.parse(data);
			data.forEach(dataElement => {
				let elementParent = document.querySelector(".row");
				let div = document.createElement("div");
				div.classList.add("col-sm-6", "col-md-3", "p-3");

				let card = document.createElement("div");
				card.classList.add("card", "h-100");
				card.innerHTML =
					'<img class="card-img-top" src="assets/avatar/' +
					dataElement.URL +
					'.png">';

				let cardBody = document.createElement("div");
				cardBody.classList.add("card-body", "text-center");
				cardBody.innerHTML =
					'<h4 class="card-title">' +
					dataElement.Nome +
					'</h4><p class="card-text">' +
					(dataElement.Dono == 1 ? "Dono" : "Colaborador") +
					" </p></div></div>";

				if (dataElement.Dono == 0) {
					let button = document.createElement("button");
					button.classList.add("btn", "btn-danger");
					button.innerHTML = '<i class="fas fa-trash-alt fa-fw"></i>';
					button.addEventListener("click", function () {
						$.ajax({
							url: encodeURI(
								"https://mycards.dsprojects.pt/api/empresa/" +
								JSON.parse(
									document.querySelector("head").getAttribute("data-session")
								)["ID_Empresa"] +
								"/colaborador/" +
								dataElement.Nome
							),
							type: "DELETE",
							success: location.reload(true)
						});
					});
					cardBody.appendChild(button);
				}
				card.appendChild(cardBody);
				div.appendChild(card);
				elementParent.appendChild(div);
			});
		}
	);
});

document
	.querySelector(".modal-footer button.btn-primary")
	.addEventListener("click", function () {
		let okay = true;
		document.querySelectorAll("input").forEach(input => {
			if (input.value.length == 0) {
				okay = false;
			}
		});
		if (okay) {
			$.post(
				"https://mycards.dsprojects.pt/api/empresa/" +
				JSON.parse(
					document.querySelector("head").getAttribute("data-session")
				)["ID_Empresa"] +
				"/colaborador", {
					nome: document.querySelector("#nome").value,
					codigoAcesso: document.querySelector("#codigoAcesso").value,
					dono: document.querySelector("#colaboradorOption").value
				},
				location.reload(true)
			);
		}
	});