$(document).ready(function() {
	addData(myChart, "Clientes Fidelizados");
});

/* Inicio Estatisticas Gerais */
$(".teste").click(function() {
	if ($(this).hasClass("text-muted")) {
		$(this)
			.removeClass("text-muted")
			.addClass("text-primary");
		addData(
			myChart,
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
			myChart,
			$(this)
				.children()
				.last()
				.html()
		);
	}
});

/* Criar Chart */
var ctx = document.getElementById("myChartBar").getContext("2d");
var myChart = new Chart(ctx, {
	type: "line",
	data: {
		labels: [
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
		]
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
	return "rgba(" + r + "," + g + "," + b + ",0.2" + ")";
};

/* FIM Estatisticas Gerais */
