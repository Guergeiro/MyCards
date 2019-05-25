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

$(document).ready(function () {
  $.post(
    "http://127.0.0.1/PINT-Web/api/campanha_empresa", {
      keyEmpresa: JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Utilizador"],
      keyCampanha: window.location.href.split("/").pop()
    },
    function (data) {
      infoCampanhas = JSON.parse(data);
      $(".empresa").html(infoCampanhas[0].Designacao);
      $(".desconto").html(infoCampanhas[0].Valor + "%");
      $(".tipo").html(infoCampanhas[0].TipoCampanha);
      $(".fimCampanha").html(infoCampanhas[0].DataFim);

      let newData = [0, 0];
      infoCampanhas.forEach(info => {
        if (info["Utilizado"] == 0) {
          newData[1] += 1;
        } else {
          newData[0] += 1;
        }
      });

      new Chart($("#myChart1"), {
        type: 'doughnut',
        data: {
          labels: ["Utilizado", "Não Utilizado"],
          datasets: [{
            label: "Utilizações",
            data: newData,
            backgroundColor: [
              'rgba(255, 99, 132, 0.8)',
              'rgba(54, 162, 235, 0.8)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
          }]
        },
      });

      let nmeses = getDates(infoCampanhas[0].DataInicio, infoCampanhas[0].DataFim);
      let labels = [];
      let obj = {};
      for (i = 0; i < nmeses.length; i++) {
        obj[meses[nmeses[i]]] = 0;
        labels.push(meses[nmeses[i]]); 
      }

      infoCampanhas.forEach(campanhas => {
      obj[meses[getMonth(campanhas.DataUtilizacao)]] += 1;
      });

      newData = [];
      Object.keys(obj).forEach(function (key) {
        newData.push(obj[key]);
      });

      new Chart($("#myChart2"), {
        type: 'bar',
        data: {
          labels: labels,
          datasets: [{
            label: "Utilizações por mês",
            data: newData,
            backgroundColor:'rgba(244, 182, 66, 0.8)',
            borderColor:'rgba(244, 182, 66, 1)',
            borderWidth: 1
          }]
        },
      });
    });
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

function getMonth(data) {
  data = new Date(data);
  return data.getMonth();
}