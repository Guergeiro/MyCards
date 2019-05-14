var meses = [
	"Janeiro",
	"Fevereiro",
	"Março",
	"Abril",
	"Maio",
	"Junho",
	"Julho",
	"Agosto",
	"Setembro",
	"Outubro",
	"Novembro",
	"Dezembro"
];

/* Criar Chart Estatisticas Gerais */
var chartEstatisticasGerais = new Chart($("#myChartEG"), {
	type: "line",
	data: {
		labels: meses
	}
});

/* Criar Chart Estatisticas Campanhas */
var chartEstatisticasCampanhas = new Chart($("#myChartEC"), {
	type: "bar",
	data: {
		labels: meses
	}
});

/* Criar Chart para Localizacao de Clientes */
var chartEstatisticasCampanhas = new Chart($("#myChartLC"), {
	type: "doughnut"
});

/* Inicio Estatisticas Gerais */
$(".teste").click(function() {
	if ($(this).hasClass("text-muted")) {
		$(this)
			.removeClass("text-muted")
			.addClass("text-primary");
		addData(
			chartEstatisticasGerais,
			$(this)
				.children()
				.last()
				.html()
		);
	} else {
		$(this)
			.removeClass("text-primary")
			.addClass("text-muted");
		removeData(
			chartEstatisticasGerais,
			$(this)
				.children()
				.last()
				.html()
		);
	}
});

/* Adicionar Dataset ao grafico */
function addData(chart, newLabel) {
	var newData = [];
	for (i = 0; i < 12; i++) {
		newData.push(Math.floor(Math.random() * 50));
	}

	var newDataset = {
		label: newLabel,
		backgroundColor: dynamicColors(),
		borderColor: "rgba(99, 255, 132, 1)",
		borderWidth: 1,
		data: newData
	};
	chart.data.datasets.push(newDataset);
	chart.update();
}

/* Remover Dataset ao grafico */
function removeData(chart, label) {
	chart.data.datasets.forEach(dataset => {
		if (dataset.label == label) {
			chart.data.datasets.splice(chart.data.datasets.indexOf(dataset), 1);
			chart.update();
		}
	});
}

/* Funcao para criar cores dinamicas */
var dynamicColors = function() {
	var r = Math.floor(Math.random() * 255);
	var g = Math.floor(Math.random() * 255);
	var b = Math.floor(Math.random() * 255);
	return "rgba(" + r + "," + g + "," + b + ",0.6" + ")";
};
/* FIM Estatisticas Gerais */

/* INICIO Estatisticas Campanhas */
var campanhas = [];
$(document).ready(function() {
	$.get("http://127.0.0.1/PINT-Web/api/todas_campanhas/1", function(data) {
		data = JSON.parse(data);
		data.forEach(info => {
			campanhas.push(info);
		});
		addData(chartEstatisticasGerais, "Clientes Fidelizados");
		addData(chartEstatisticasCampanhas, campanhas[0].Designacao);
	});
});

$("#carouselExampleControls").on("slid.bs.carousel", function(event) {
	chartEstatisticasCampanhas.data.datasets.pop();
	addData(chartEstatisticasCampanhas, campanhas[event.to].Designacao);
});
