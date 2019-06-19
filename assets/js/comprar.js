$(document).ready(function() {
  document.getElementById("pagar").addEventListener("click", function() {
    document.getElementById("success").classList.replace("d-none", "d-block");
    document.getElementById("success").classList.add("show");

    setTimeout(function() {
      document.getElementById("success").classList.remove("show");
      document.getElementById("success").classList.replace("d-block", "d-none");
    }, 3000);
  });
});
