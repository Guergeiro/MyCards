const notificacoes = new Array();

setInterval(function () {
	/* Atualiza notificações a cada 5s */
	$.post("http://[::1]/PINT-Web/api/todas_instanciascampanhas_empresa", {
		keyEmpresa: JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Utilizador"]
	}, function (data) {
		data = JSON.parse(data);
		data.forEach(element => {
			if (!contains(element)) {
				notificacoes.push(element);

				let elementParent = document.querySelector("form");

				let oldinnerHtml = document.querySelector("form").innerHTML;

				elementParent.innerHTML =
					"<div class=\"col-sm-6 col-md-4\"><div class=\"toast mx-auto my-1\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-autohide=\"false\"><div class=\"toast-header\"><strong class=\"mr-auto\">" + element.ID_Cliente + "</strong><button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fas fa-times\"></i></span></button></div><div class=\"toast-body text-center\"><span class=\"id-cliente\">" + element.ID_Cliente + "</span><hr><span class=\"id-campanha\">" + element.ID_Campanha + "</span></div></div></div>" + oldinnerHtml;

				$('.toast').toast('show');


				let toastBody = document.createElement("div");
				toastBody.addEventListener("click", function () {
					document.querySelector("#codigo").value = toastBody.querySelector(".id-campanha").innerHTML;
					document.querySelector("#codigo").focus();
				});
			}
		});

		function contains(element) {
			let estado = false;
			
			if (notificacoes.length > 0) {
				notificacoes.forEach(objElement => {
					if (objElement["ID_Cliente"] == element["ID_Cliente"] && objElement["ID_Campanha"] == element["ID_Campanha"]) {
						estado = true;
					}
				});
			}

			return estado;
		}

	});

	document.querySelectorAll(".toast-body").forEach((toast) => {
		toast.addEventListener("click", function () {
			document.querySelector("#codigo").value = toast.querySelector(".id-campanha").innerHTML;
			document.querySelector("#codigo").focus();
		});
	});
	console.log(notificacoes);
}, 5000);





