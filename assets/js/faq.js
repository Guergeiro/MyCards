document.querySelectorAll(".questoesHeader").forEach(row => {
  row.addEventListener("click", function() {
    this.nextElementSibling.classList.toggle("d-none");
  });
});
