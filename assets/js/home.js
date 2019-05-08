var ctx = document.getElementById("myChartBar").getContext("2d");
var myChart = new Chart(ctx, {
	type: "line",
	data: {
		labels: ["Red", "Green", "Cepo", "Nutz", "Jeff", "To"],
		datasets: [
			{
				label: "# of Votes",
				data: [12, 19, 3, 5, 2, 3],
				backgroundColor: ["rgba(255, 99, 132, 0.2)"],
				borderColor: ["rgba(255, 99, 132, 1)"],
				borderWidth: 1
			}
		]
	},
	options: {
		scales: {
			yAxes: [
				{
					ticks: {
						beginAtZero: true
					}
				}
			]
		}
	}
});
