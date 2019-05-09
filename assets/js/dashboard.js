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

$(document).ready(function() {
	addData(chartEstatisticasGerais, "Clientes Fidelizados");
	addData(chartEstatisticasCampanhas, "1 - Nome da Campanha");
});

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
let campanhas = [
	"1 - Nome da Campanha",
	"2 - Nome da Campanha",
	"3 - Nome da Campanha",
	"4 - Nome da Campanha",
	"5 - Nome da Campanha",
	"6 - Nome da Campanha"
];

$("#carouselExampleControls").on("slid.bs.carousel", function(event) {
	chartEstatisticasCampanhas.data.datasets.pop();
	addData(chartEstatisticasCampanhas, campanhas[event.to]);
});
