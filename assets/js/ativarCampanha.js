setInterval(function () {
	/* Atualiza notificações a cada 5s */
	$.get("http://[::1]/PINT-Web/api/test/123456", function (data) {
		data = JSON.parse(data);
		if (data.key == "123456") {
			let output = "<div class=\"media\"><div class=\"align-self-center mr-3\"><img src=\"" + data.img + "\"></div><span class=\"text-justify\">" + data.key + "</span></div>";
			let li = document.createElement("li");
			li.classList.add("list-group-item", "p3");
			li.innerHTML = output;
			li.addEventListener("click", function () {
				document.querySelector("#codigo").value = this.querySelector("span").innerHTML;
			});
			document.querySelector("main ul.list-group").appendChild(li);
		}
	});
}, 5000);
