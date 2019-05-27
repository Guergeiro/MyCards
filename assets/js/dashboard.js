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
let chartEstatisticasGerais = new Chart($("#myChartEG"), {
  type: "line",
  data: {
    labels: meses
  }
});

/* Criar Chart Estatisticas Campanhas */
let chartEstatisticasCampanhas = new Chart($("#myChartEC"), {
  type: "bar"
});

/* Criar Chart Localizacao dos Fidelizados */
let chartLocalizacaoFidelizados = new Chart($("#myChartLF"), {
  type: "doughnut"
});

/* Criar Chart Idade dos Fidelizados */
let chartIdadeFidelizados = new Chart($("#myChartIF"), {
  type: "pie"
});

document.querySelectorAll(".teste").forEach(div => {
  div.addEventListener("click", function() {
    if (div.classList.contains("text-muted")) {
      div.classList.remove("text-muted");
      div.classList.add("text-primary");
      addDataBar(
        chartEstatisticasGerais,
        meses,
        div.lastElementChild.innerHTML
      );
    } else {
      div.classList.add("text-muted");
      div.classList.remove("text-primary");
      removeData(chartEstatisticasGerais, div.lastElementChild.innerHTML);
    }
  });
});

/* Adicionar Dataset ao grafico */
function addDataBar(chart, labels, label, data) {
  let newData = [];
  for (i = 0; i < labels.length; i++) {
    newData[i] = 0;
  }
  switch (label) {
    case "Clientes Fidelizados":
      cartoes.forEach(cartao => {
        newData[getMonth(cartao["DataFidelizacao"])] += 1;
      });
      break;
    case "Crescimento da Empresa":
      // code block
      break;

    case "Crescimento de Rating":
      // Podemos testar com media de rating em vez de numero de rates
      for (i = 0; i < rating.length; i++) {
        newData[getMonth(rating[i].DataRating)] += 1;
      }
      break;
    case "Campanhas Utilizadas":
      campanhas.forEach(campanha => {
        campanha.instancias.forEach(instancia => {
          newData[getMonth(instancia["DataUtilizacao"])] += 1;
        });
      });
      break;
    default:
      let nmeses = getDates(data.DataInicio, data.DataFim);
      let labels = [];
      let obj = {};
      for (i = 0; i < nmeses.length; i++) {
        obj[meses[nmeses[i]]] = 0;
        labels.push(meses[nmeses[i]]);
      }

      data["instancias"].forEach(campanhas => {
        obj[meses[getMonth(campanhas.DataUtilizacao)]] += 1;
      });

      newData = [];
      Object.keys(obj).forEach(function(key) {
        newData.push(obj[key]);
      });
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
let cartoes = [];
let campanhas = [];
let instanciascampanha = [];
let dbInfo = {};
let clientes = [];

$("#carouselExampleControls").on("slid.bs.carousel", function(event) {
  chartEstatisticasCampanhas.data.datasets.pop();
  let nlabels = chartEstatisticasCampanhas.data.labels.length;
  for (i = 0; i < nlabels; i++) {
    chartEstatisticasCampanhas.data.labels.pop();
  }
  addDataBar(
    chartEstatisticasCampanhas,
    getLabels(campanhas[event.to]),
    campanhas[event.to].Designacao,
    campanhas[event.to]
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
    dates.push(current);
    current++;
  }
  return dates;
}

function getLabels(campanha) {
  let labels = getDates(campanha.DataInicio, campanha.DataFim);
  labels.forEach(label => {
    chartEstatisticasCampanhas.data.labels.push(meses[label]);
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
  let birthday = +new Date(data);
  return ~~((Date.now() - birthday) / 31557600000);
}

function getMonth(data) {
  data = new Date(data);
  return data.getMonth();
}

let rating = [];
$(document).ready(function() {
  $.get(
    "./api/empresa/" +
      JSON.parse(document.querySelector("head").getAttribute("data-session"))[
        "ID_Empresa"
      ] +
      "/cartao",
    function(data) {
      data = JSON.parse(data);
      data.forEach(cartao => {
        cartoes.push(cartao);
        $.ajax({
          url: "./api/cliente/" + cartao["ID_Cliente"],
          type: "GET",
          async: false,
          success: function(cliente) {
            cliente = JSON.parse(cliente);
            cliente.forEach(split => {
              clientes.push(split);
            });
          }
        });
      });
    }
  ).done(function() {
    addDataBar(chartEstatisticasGerais, meses, "Clientes Fidelizados");
    let localizacao = getLocalizaoClientes(clientes);
    let labels = [];
    Object.keys(localizacao).forEach(function(key) {
      labels.push(key);
      chartLocalizacaoFidelizados.data.labels.push(key);
    });
    addDataPie(chartLocalizacaoFidelizados, labels, localizacao);

    labels = [];
    let idades = getIdadesClientes(clientes);

    Object.keys(idades).forEach(function(key) {
      labels.push(key);
      chartIdadeFidelizados.data.labels.push(key);
    });

    addDataPie(chartIdadeFidelizados, labels, idades);
  });
  $.get(
    "./api/empresa/" +
      JSON.parse(document.querySelector("head").getAttribute("data-session"))[
        "ID_Empresa"
      ] +
      "/campanha",
    function(data) {
      data = JSON.parse(data);
      data.forEach(campanha => {
        campanhas.push(campanha);
        $.ajax({
          url:
            "./api/empresa/" +
            JSON.parse(
              document.querySelector("head").getAttribute("data-session")
            )["ID_Empresa"] +
            "/campanha/" +
            campanha["ID_Campanha"] +
            "/instanciascampanha",
          type: "GET",
          async: false,
          success: function(instancias) {
            campanha["instancias"] = JSON.parse(instancias);
          }
        });
      });
    }
  ).done(function() {
    addDataBar(
      chartEstatisticasCampanhas,
      getLabels(campanhas[0]),
      "Utilizações",
      campanhas[0]
    );
    let parent = document.querySelector("#myChartEC").parentElement
      .parentElement.parentElement.parentElement;
    parent.classList.remove("d-none");
    campanhas.forEach(campanha => {
      parent.querySelector(".carousel-inner").innerHTML +=
        '<div class="carousel-item"><div><h5 class="mb-2 h5">' +
        campanha["Designacao"] +
        "</h5><small>Campanha válida até " +
        campanha["DataFim"] +
        "</small></div></div>";
    });
    parent
      .querySelector(".carousel-inner")
      .firstElementChild.classList.add("active");
  });
  $.get(
    "./api/empresa/" +
      JSON.parse(document.querySelector("head").getAttribute("data-session"))[
        "ID_Empresa"
      ] +
      "/rating",
    function(data) {
      rating = JSON.parse(data);
    }
  );
});
