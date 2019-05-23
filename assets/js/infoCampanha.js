$(document).ready(function () {

  $.post(
    "http://127.0.0.1/PINT-Web/api/campanha_empresa", {
      keyEmpresa: JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Utilizador"],
      keyCampanha: window.location.href.split("/").pop()
    },
    function (data) {
      infoCampanhas = JSON.parse(data);
      console.log(infoCampanhas);
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

      var myChart = new Chart($("#myChart"), {
        type: 'doughnut',
        data: {
          labels: ["Utilizado", "Não Utilizado"],
          datasets: [{
            label: "Utilizações",
            data: newData,
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
          }]
        },
      });
    });
});