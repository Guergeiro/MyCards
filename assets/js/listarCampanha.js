    $(document).ready(function () {
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
    });

    $("#modal").on("show.bs.modal", function () {
    	$.get("http://www.omdbapi.com/?s=Naruto&apikey=510614e8", function (data) {
    		let result = {};
    		data["Search"].forEach(function (o) {
    			Object.keys(o).forEach(function (k) {
    				result[k] = result[k] || {};
    				result[k][o[k]] = (result[k][o[k]] || 0) + 1;
    			});
    		});
    		let array = arrayColors(Object.keys(result["Type"]).length),
    			backgroundColor = [],
    			borderColor = [];
    		array.forEach((color) => {
    			backgroundColor.push("rgba(" + color[0] + "," + color[1] + "," + color[2] + ",0.6)");
    			borderColor.push("rgba(" + color[0] + "," + color[1] + "," + color[2] + ",1.0)");
    		});
    		let chart = new Chart(document.querySelector("#chart"), {
    			type: "doughnut",
    			data: {
    				labels: Object.keys(result["Type"]),
    				datasets: [{
    					label: "type",
    					data: Object.values(result["Type"]),
    					backgroundColor: backgroundColor,
    					borderColor: borderColor,
    					borderWidth: 1
    				}]
    			}
    		});
    	});
    });

    document.querySelectorAll("tr").forEach((row) => {
    	row.addEventListener("click", function () {
    		document.querySelector("#modal").setAttribute("data-url", this.getAttribute("data-url"));
    		document.querySelector("#modal").querySelector("#modalTitle").innerHTML = this.lastElementChild.innerHTML;
    		$("#modal").modal();
    	})
    })
