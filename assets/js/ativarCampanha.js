setInterval(function () {
	/* Atualiza notificações a cada 5s */
	$.get("http://[::1]/PINT-Web/products/1", function (data) {
		console.log(data);
	});
}, 5000);
