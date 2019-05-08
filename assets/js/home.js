$(".teste").click(function() {
	/*	console.log(
		$(this)
			.children()
			.last()
			.html()
	);*/
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
		],
		datasets: [
			{
				label: "# of Votes",
				data: [12, 19, 3, 5, 2, 3, 0, 1, 3, 25, 2, 3],
				backgroundColor: ["rgba(66, 133, 244, 0.2)"],
				borderColor: ["rgba(66, 133, 244, 1)"],
				borderWidth: 1
			}
		]
	}
});

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

function removeData(chart, label) {
	chart.data.datasets.forEach(dataset => {
		if (dataset.label == label) {
			chart.data.datasets.splice(chart.data.datasets.indexOf(dataset), 1);
			chart.update();
		}
	});
}

var dynamicColors = function() {
	var r = Math.floor(Math.random() * 255);
	var g = Math.floor(Math.random() * 255);
	var b = Math.floor(Math.random() * 255);
	return "rgba(" + r + "," + g + "," + b + ",0.2" + ")";
};
