document.querySelectorAll(".media").forEach((media) => {
	media.querySelector("a").addEventListener("click", function () {
		document.querySelectorAll("input").forEach((input) => {
			input.disabled = input.readOnly = false;
		});
	});
});
