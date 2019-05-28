function validation(form) {
	let returnValue = true;
	document.querySelectorAll("input").forEach((input) => {
		if (input.value.trim().length == 0) {
			returnValue = false;
		}
	});
	return returnValue;
}
$(document).ready(function () {
	$.get("./api/empresa/" + JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"] + "/colaborador", function (data) {
		data = JSON.parse(data);
		data.forEach(dataElement => {
			console.log(dataElement);
			let elementParent = document.querySelector(".row");
			elementParent.innerHTML +=
				"<div class=\"col-sm-6 col-md-3 p-3\">" +
				"<div class=\"card h-100\">" +
				"<img class=\"card-img-top\" src=\"assets/imgs/users/" + dataElement.ID_Empresa + "/" + dataElement.URL + "\">" +
				"<div class=\"card-body h-100\">" +
				"<h4 class=\"card-title\">" + dataElement.Nome + "</h4>" +
				"<p class=\"card-text\"> " + (dataElement.Dono == 1 ? "Dono" : "Colaborador") + " </p>" + "</div>" +
				"</div>" +
				"</div>";
			if (dataElement.Dono == 0) {
				let button = document.createElement("button");
				button.classList.add("btn", "btn-danger", "h-100");
				button.innerHTML = "<i class=\"fas fa-trash-alt fa-fw\"></i>";
				button.addEventListener("click", function () {
					$.ajax({
						url: "./api/empresa/" + JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"] + "/colaborador/" + dataElement.Nome,
						type: "DELETE"
					});

				});
				elementParent.querySelector(".card-body").innerHTML += "<div class=\"text-right\"></div>";
				elementParent.querySelector(".card-body .text-right").appendChild(button);
			}
		});
	});
});