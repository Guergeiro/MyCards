window.addEventListener("load", () => {
	this.setTimeout(function () {
		document.querySelector("#loader").style.opacity = 0;
		document.querySelector("body").style.opacity = 1;
		document.querySelector("body").style.overflow = "initial";
		setTimeout(function () {
			document.querySelector("#loader").remove();
		}, 1000);
	}, 1000);
});

function validation(form) {
	let returnValue = true;
	form.querySelectorAll("input").forEach(input => {
		if (input.value.length == 0) {
			returnValue = false;
		}
	});
	return returnValue;
}