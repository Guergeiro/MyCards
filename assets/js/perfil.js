$(document).ready(function () {
	$.get("./api/empresa/" + JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"] + "/colaborador", function (data) {
		data = JSON.parse(data);
		data.forEach(dataElement => {
			let elementParent = document.querySelector(".row");
			let div = document.createElement("div");
			div.classList.add("col-sm-6", "col-md-3", "p-3");

			let card = document.createElement("div");
			card.classList.add("card", "h-100");
			card.innerHTML = "<img class=\"card-img-top\" src=\"assets/avatar/" + dataElement.URL + ".png\">";

			let cardBody = document.createElement("div");
			cardBody.classList.add("card-body", "text-center");
			cardBody.innerHTML = "<h4 class=\"card-title\">" + dataElement.Nome + "</h4><p class=\"card-text\">" + (dataElement.Dono == 1 ? "Dono" : "Colaborador") + " </p></div></div>";
			card.appendChild(cardBody);
			div.appendChild(card);
			card.addEventListener("click", function () {
				$("#modal").modal("toggle");
				document.querySelector("#modalTitle").innerHTML = dataElement.Nome;
				document.querySelector("#nome").value = dataElement.Nome;
			});
			elementParent.appendChild(div);
		});
	});
});

function validation(form) {
	let okay = true;
	document.querySelectorAll("input").forEach(input => {
		if (input.value.length == 0) {
			okay = false;
		}
	});
	return okay;
}