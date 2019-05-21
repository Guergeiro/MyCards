setInterval(function () {
	/* Atualiza notificações a cada 5s */
	$.post("http://[::1]/PINT-Web/api/test/123456", function (data) {
		data = JSON.parse(data);

	});
}, 5000);

$('.toast').toast('show');

document.querySelectorAll(".toast-body").forEach((toast) => {
	toast.addEventListener("click", function () {
		document.querySelector("#codigo").value = toast.querySelector(".id-campanha").innerHTML;
		document.querySelector("#codigo").focus();
	});
});