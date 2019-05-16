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
  data: {}
});

/* Criar Chart Localizacao dos Fidelizados */
var chartLocalizacaoFidelizados = new Chart($("#myChartLF"), {
  type: "doughnut",
  data: {}
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
function addDataBar(chart, labels, label) {
  let newData = [];
  for (i = 0; i < labels.length; i++) {
    newData[i] = Math.floor(Math.random() * 25);
  }
  let newDataset = {
    label: label,
    backgroundColor: dynamicColors(),
    borderColor: "rgba(99, 255, 132, 1)",
    borderWidth: 1,
    data: newData
  };

  chart.data.datasets.push(newDataset);
  chart.update();
}

function addDataPie(chart, labels, obj) {
  let newData = [];
  let colors = [];
  for (i = 0; i < labels.length; i++) {
    colors.push(dynamicColors());
    newData.push(obj[labels[i]]);
  }
  var newDataset = {
    label: labels,
    backgroundColor: colors,
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
var clientes = [];
$(document).ready(function() {
  //addData(chartEstatisticasGerais, "Clientes Fidelizados");
  $.post(
    "http://127.0.0.1/PINT-Web/api/todas_campanhas_empresa	",
    { key: 1 },
    function(data) {
      data = JSON.parse(data);
      data.forEach(info => {
        campanhas.push(info);
      });

      addDataBar(
        chartEstatisticasCampanhas,
        getLabels(campanhas[0]),
        campanhas[0].Designacao
      );
    }
  );
  $.post(
    "http://127.0.0.1/PINT-Web/api/todos_clientes_empresa	",
    { key: 1 },
    function(data) {
      data = JSON.parse(data);
      let localizacao = {};
      data.forEach(info => {
        if (!('"' + info["Localizacao"] + '"' in localizacao)) {
          if (localizacao[info["Localizacao"]] == 1) {
            localizacao[info["Localizacao"]] += 1;
          } else {
            localizacao[info["Localizacao"]] = 1;
          }
        }
        clientes.push(info);
      });
      let labels = [];

      Object.keys(localizacao).forEach(function(key) {
        labels.push(key);
        chartLocalizacaoFidelizados.data.labels.push(key);
      });
      addDataPie(chartLocalizacaoFidelizados, labels, localizacao);
    }
  );
});

$("#carouselExampleControls").on("slid.bs.carousel", function(event) {
  chartEstatisticasCampanhas.data.datasets.pop();
  let nlabels = chartEstatisticasCampanhas.data.labels.length;
  for (i = 0; i < nlabels; i++) {
    console.log(chartEstatisticasCampanhas.data.labels);
    chartEstatisticasCampanhas.data.labels.pop();
  }
  addDataBar(
    chartEstatisticasCampanhas,
    getLabels(campanhas[event.to]),
    campanhas[event.to].Designacao
  );
});

function getDates(startDate, endDate) {
  let dates = [];
  startDate = new Date(startDate);
  endDate = new Date(endDate);
  let months =
    endDate.getMonth() -
    startDate.getMonth() +
    12 * (endDate.getFullYear() - startDate.getFullYear());

  let current = startDate.getMonth();
  for (i = 0; i <= months; i++) {
    if (current == 12) {
      current = 0;
    }
    dates.push(meses[current]);
    current++;
  }
  return dates;
}

function getLabels(campanha) {
  let labels = getDates(campanha.DataInicio, campanha.DataFim);
  labels.forEach(label => {
    chartEstatisticasCampanhas.data.labels.push(label);
  });
  return labels;
}
