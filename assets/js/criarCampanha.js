document.querySelectorAll(".media").forEach((media) => {
	media.addEventListener("click", function () {
		document.querySelectorAll(".media").forEach((mediaDeep) => {
			mediaDeep.querySelectorAll("i").forEach((i) => {
				i.classList.remove("text-success");
				i.classList.add("text-muted");
			});
			mediaDeep.querySelector("span").classList.remove("text-success", "text-primary");
			mediaDeep.querySelector("span").classList.add("text-muted");
		});
		this.querySelectorAll("i").forEach((i) => {
			i.classList.remove("text-muted");
			i.classList.add("text-success");
		});
		this.querySelectorAll("span").forEach((span) => {
			span.classList.remove("text-muted");
			span.classList.add("text-success");
		});
		document.querySelectorAll("input").forEach((input) => {
			input.disabled = input.readOnly = false;
		});
		document.querySelector("button[type=submit]").disabled = false;
		document.querySelector("#preVisualizacao").querySelectorAll("*").forEach((h) => {
			if (h.getAttribute("data-name")) {
				h.setAttribute("data-type", this.getAttribute("data-type"));
			}
		});
	});
});

/* A data minima possivel é apenas a partir do localdate */
document.querySelectorAll("input[type=date]").forEach((input) => {
	let date = new Date();
	input.min = addZero(date.getFullYear()) + "-" + addZero(date.getMonth() + 1) + "-" + addZero(date.getDate());
	/* Adds 0 (zero) if < 10 */
	function addZero(number) {
		if (number < 10) {
			return "0" + number;
		}
		return number.toString();
	}
});

document.querySelectorAll("input").forEach((input) => {
	input.addEventListener("input", function () {
		document.querySelector("#preVisualizacao").querySelectorAll("*").forEach((h) => {
			if (input.getAttribute("name").match(h.getAttribute("data-name"))) {
				h.innerHTML = input.value;
				if (h.getAttribute("data-type")) {
					h.innerHTML += h.getAttribute("data-type");
				}
			}
		});
		if (input.getAttribute("type").match("text")) {
			input.nextElementSibling.nextElementSibling.innerHTML = input.value.length + "/" + input.nextElementSibling.nextElementSibling.getAttribute("max");
		}
	});
});

function validation(form) {
	let returnValue = true;
	document.querySelectorAll("input").forEach((input) => {
		if (input.value.trim().length == 0) {
			returnValue = false;
		}
	});
	return returnValue;
}
