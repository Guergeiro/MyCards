const meses = [
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

const ageGroups = ["<18", "18-24", "25-50", "51>"];

/* Criar Chart Estatisticas Gerais */
var chartEstatisticasGerais = new Chart($("#myChartEG"), {
  type: "line",
  data: {
    labels: meses
  }
});

/* Criar Chart Estatisticas Campanhas */
var chartEstatisticasCampanhas = new Chart($("#myChartEC"), {
  type: "bar"
});

/* Criar Chart Localizacao dos Fidelizados */
var chartLocalizacaoFidelizados = new Chart($("#myChartLF"), {
  type: "doughnut"
});

/* Criar Chart Idade dos Fidelizados */
var chartIdadeFidelizados = new Chart($("#myChartIF"), {
  type: "pie"
});

$(".teste").click(function () {
  if ($(this).hasClass("text-muted")) {
    $(this)
      .removeClass("text-muted")
      .addClass("text-primary");
    addDataBar(
      chartEstatisticasGerais,
      meses,
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
function addDataBar(chart, labels, label, data = dbInfo) {
  let newData = [];
  for (i = 0; i < labels.length; i++) {
    newData[i] = 0;
  }
  switch (label) {
    case "Clientes Fidelizados":
      for (i = 0; i < data["clientes"].length; i++) {
        newData[getMonth(data["clientes"][i].DataFidelizacao)] += 1;
      }
      break;
    case "Crescimento da Empresa":
      // code block
      break;

    case "Crescimento de Rating":
      // Podemos testar com media de rating em vez de numero de rates
      for (i = 0; i < data.length; i++) {
        newData[getMonth(data[i].DataRating)] += 1;
      }
      break;
    case "Campanhas Utilizadas":
      for (i = 0; i < data["instancias"].length; i++) {
        newData[getMonth(data["instancias"][i].DataUtilizacao)] += 1;
      }
      break;
    default:
      for (i = 0; i < labels.length; i++) {
        newData[i] = Math.floor(Math.random() * 25);
      }
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
var dynamicColors = function () {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return "rgba(" + r + "," + g + "," + b + ",0.6" + ")";
};

let dbInfo = {};
let clientes = [];
$(document).ready(function () {
  $.post(
    "http://127.0.0.1/PINT-Web/api/todas_campanhas_empresa", {
      keyEmpresa: 1
    },
    function (infoCampanhas) {
      $.post(
        "http://127.0.0.1/PINT-Web/api/todos_clientes_empresa", {
          keyEmpresa: 1
        },
        function (infoClientes) {
          $.post(
            "http://127.0.0.1/PINT-Web/api/todas_instanciascampanhas_empresa", {
              keyEmpresa: 1
            },
            function (infoInstancias) {
              dbInfo["campanhas"] = JSON.parse(infoCampanhas);
              dbInfo["clientes"] = JSON.parse(infoClientes);
              dbInfo["instancias"] = JSON.parse(infoInstancias);


              // Grafica de Estatisticas de Campanhas
              addDataBar(
                chartEstatisticasCampanhas,
                getLabels(dbInfo["campanhas"][0]),
                dbInfo["campanhas"][0].Designacao
              );
              let parent = document.querySelector("#myChartEC").parentElement.parentElement.parentElement.parentElement;
              parent.classList.remove("d-none");
              dbInfo["campanhas"].forEach((campanha => {
                parent.querySelector(".carousel-inner").innerHTML += "<div class=\"carousel-item\"><div><h5 class=\"mb-2 h5\">" + campanha["Designacao"] + "</h5><small>Campanha válida até " + campanha["DataFim"] + "</small></div></div>";
              }));
              parent.querySelector(".carousel-inner").firstElementChild.classList.add("active");

              // Grafico de Estatisticas Gerais
              addDataBar(
                chartEstatisticasGerais,
                meses,
                "Clientes Fidelizados",
                dbInfo
              );

              // Grafico de Localizacao de Fidelizados
              let localizacao = getLocalizaoClientes(dbInfo["clientes"]);
              let labels = [];
              Object.keys(localizacao).forEach(function (key) {
                labels.push(key);
                chartLocalizacaoFidelizados.data.labels.push(key);
              });
              addDataPie(chartLocalizacaoFidelizados, labels, localizacao);

              // Grafico de Idade de Fidelizados
              labels = [];
              let idades = getIdadesClientes(dbInfo["clientes"]);

              Object.keys(idades).forEach(function (key) {
                labels.push(key);
                chartIdadeFidelizados.data.labels.push(key);
              });
              addDataPie(chartIdadeFidelizados, labels, idades);
            }
          );
        }
      );
    }
  );
});

$("#carouselExampleControls").on("slid.bs.carousel", function (event) {
  chartEstatisticasCampanhas.data.datasets.pop();
  let nlabels = chartEstatisticasCampanhas.data.labels.length;
  for (i = 0; i < nlabels; i++) {
    chartEstatisticasCampanhas.data.labels.pop();
  }
  addDataBar(
    chartEstatisticasCampanhas,
    getLabels(dbInfo["campanhas"][event.to]),
    dbInfo["campanhas"][event.to].Designacao
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

function getLocalizaoClientes(data) {
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
  return localizacao;
}

function getIdadesClientes(data) {
  let idades = {};
  for (i = 0; i < ageGroups.length; i++) idades[ageGroups[i]] = 0;
  data.forEach(info => {
    let idade = calcularIdade(info["DataNascimento"]);
    if (idade < 18) {
      idades["<18"] += 1;
    }
    if (idade >= 18 && idade <= 24) {
      idades["18-24"] += 1;
    }
    if (idade >= 25 && idade <= 50) {
      idades["25-50"] += 1;
    }
    if (idade > 51) {
      idades["51>"] += 1;
    }
  });
  return idades;
}

function calcularIdade(data) {
  var birthday = +new Date(data);
  return ~~((Date.now() - birthday) / 31557600000);
}

function getMonth(data) {
  data = new Date(data);
  return data.getMonth();
}