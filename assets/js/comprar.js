$(document).ready(function() {
  let arr = window.location.href.split("/");
  switch (arr[arr.length - 1][1]) {
    case "1":
      document.getElementById("preview").innerHTML +=
        '<div class="card my-4 text-center"><div class="card-header"><small>Desde</small><h1 class="text-primary">25&euro;</h1><small>/mês</small></div><div class="card-body"><h4 class="card-title">Inclui</h4><p class="card-text text-success">3 campanhas simultâneas <i class="far fa-check-circle"></i></p><p class="card-text text-success">Cupões de Desconto Direto <i class="far fa-check-circle"></i></p><p class="card-text text-success">Cartão de Carimbos <i class="far fa-check-circle"></i></p><p class="card-text text-success">Estatísticas Gerais <i class="far fa-check-circle"></i></p><p class="card-text text-danger">Recompensas pontuais <i class="far fa-times-circle"></i></p><p class="card-text text-danger">Patamar de pontos <i class="far fa-times-circle"></i></p><p class="card-text text-danger">Estatísticas de Clientes <i class="far fa-times-circle"></i></p><p class="card-text text-danger">Estatísticas por Campanha <i class="far fa-times-circle"></i></p></div></div>';
      break;
    case "2":
      document.getElementById("preview").innerHTML +=
        '<div class="card my-4 text-center"><div class="card-header"><small>Desde</small><h1 class="text-primary">50&euro;</h1><small>/mês</small></div><div class="card-body"><h4 class="card-title">Inclui</h4><p class="card-text text-success">6 campanhas simultâneas <iclass="far fa-check-circle"></i></p><p class="card-text text-success">Cupões de Desconto Direto <iclass="far fa-check-circle"></i></p><p class="card-text text-success">Cartão de Carimbos <i class="far fa-check-circle"></i></p><p class="card-text text-success">Estatísticas Gerais <iclass="far fa-check-circle"></i></p><p class="card-text text-success">Recompensas pontuais <iclass="far fa-check-circle"></i></p><p class="card-text text-danger">Patamar de pontos <i class="far fa-times-circle"></i></p><p class="card-text text-danger">Estatísticas de Clientes <iclass="far fa-times-circle"></i></p><p class="card-text text-danger">Estatísticas por Campanha <iclass="far fa-times-circle"></i></p></div></div>';
      break;
    case "3":
      document.getElementById("preview").innerHTML +=
        '<div class="card my-4 text-center"><div class="card-header"><small>Desde</small><h1 class="text-primary">75&euro;</h1><small>/mês</small></div><div class="card-body"><h4 class="card-title">Inclui</h4><p class="card-text text-success">Campanhas Ilimitadas <iclass="far fa-check-circle"></i></p><p class="card-text text-success">Cupões de Desconto Direto <iclass="far fa-check-circle"></i></p><p class="card-text text-success">Cartão de Carimbos <i class="far fa-check-circle"></i><p class="card-text text-success">Estatísticas Gerais <iclass="far fa-check-circle"></i></p></p><p class="card-text text-success">Recompensas pontuais <iclass="far fa-check-circle"></i></p><p class="card-text text-success">Patamar de pontos <i class="far fa-check-circle"></i></p><p class="card-text text-success">Estatísticas de Clientes <iclass="far fa-check-circle"></i></p><p class="card-text text-success">Estatísticas por Campanha <iclass="far fa-check-circle"></i></p></div></div>';
      break;
  }
  document.getElementById("pagar").addEventListener("click", function() {
    document.getElementById("success").classList.replace("d-none", "d-block");
    document.getElementById("success").classList.add("show");

    setTimeout(function() {
      document.getElementById("success").classList.remove("show");
      document.getElementById("success").classList.replace("d-block", "d-none");
    }, 3000);
  });
});
