		let instanciaCampanhas = [];
		let campanhas = [];
		$(document).ready(function () {
			$.post(
				"http://127.0.0.1/PINT-Web/api/todas_campanhas_empresa", {
					keyEmpresa: JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Utilizador"]
				},
				function (data) {
					campanhas = JSON.parse(data);

					campanhas.forEach(campanha => {
						document.querySelector("table tbody").innerHTML += "<tr data-url=\"" + campanha["ID_Campanha"] + "\"><th scope=\"row\">" + campanha["ID_Campanha"] + "</th><td>" + campanha["TipoCampanha"] + "</td><td>" + campanha["DataInicio"] + "</td><td>" + campanha["DataFim"] + "</td><td>" + campanha["Designacao"] + "</td></tr>";
					});
					$("table").DataTable({
							"language": {
								"lengthMenu": "Display _MENU_ records per page",
								"zeroRecords": "Nada Encontrado - desculpe",
								"info": "Página _PAGE_ de _PAGES_",
								"infoEmpty": "Não existem resultados para a procura",
								"infoFiltered": "(filtrado de _MAX_ resultados)",
								"sLengthMenu": "Mostrar _MENU_ entradas",
								"oSearch": "Anterior"
							},
							"language": {
								"emptyTable": "Nenhuma informação disponível.",
								"info": "A mostrar _START_ de _TOTAL_ resultados",
								"infoEmpty": "A mostrar 0 de 0 resultados",
								"infoFiltered": "(filtrado de _MAX_ total resultados)",
								"infoPostFix": "",
								"thousands": ",",
								"lengthMenu": "Mostrar _MENU_ resultados",
								"loadingRecords": "A carregar...",
								"processing": "A processar...",
								"search": "Procurar:",
								"zeroRecords": "Nenhum resultado corresponde",
								"paginate": {
									"first": "Primeiro",
									"last": "Último",
									"next": "Anterior",
									"previous": "Seguinte"
								},
								"aria": {
									"sortAscending": ": ative para ordenar por ordem crescente a coluna",
									"sortDescending": ": ative para ordenar por ordem descendente a coluna"
								}
							}
						}),
						$(".dataTables_length").addClass("bs-select");
					document.querySelectorAll("tr").forEach((row) => {
						row.addEventListener("click", function () {
							document.querySelector("#modal").setAttribute("data-url", this.getAttribute("data-url"));
							document.querySelector("#modal .modal-footer a").href += "/" + this.getAttribute("data-url");
							document.querySelector("#modal").querySelector("#modalTitle").innerHTML = this.lastElementChild.innerHTML;
							$("#modal").modal();

						})
					})
				});
			$.post(
				"http://127.0.0.1/PINT-Web/api/todas_instanciascampanhas_empresa", {
					keyEmpresa: JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Utilizador"]
				},
				function (data) {
					instanciaCampanhas = JSON.parse(data);
				});
		});
		$("#modal").on("show.bs.modal", function () {
			let array = arrayColors(2),
				backgroundColor = [],
				borderColor = [];
			array.forEach((color) => {
				backgroundColor.push("rgba(" + color[0] + "," + color[1] + "," + color[2] + ",0.6)");
				borderColor.push("rgba(" + color[0] + "," + color[1] + "," + color[2] + ",1.0)");
			});

			let newData = [0, 0];
			instanciaCampanhas.forEach(instancias => {
				if (instancias["ID_Campanha"] == document.querySelector(".modal").getAttribute("data-url")) {
					if (instancias["Utilizado"] == 0) {
						newData[1] += 1;
					} else {
						newData[0] += 1;
					}
				}
			});
			let chart = new Chart(document.querySelector("#chart"), {
				type: "doughnut",
				data: {
					labels: ["Utilizado", "Não Utilizado"],
					datasets: [{
						label: "Utilizações",
						data: newData,
						backgroundColor: backgroundColor,
						borderColor: borderColor,
						borderWidth: 1
					}]
				}
			});
		});