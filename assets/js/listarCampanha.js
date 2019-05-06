document.querySelectorAll("tr").forEach((row) => {
	row.addEventListener("click", function () {
		$("#exampleModalCenter").modal();
	})
})
