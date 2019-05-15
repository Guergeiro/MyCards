// Smooth scroll
$("main #carousel .carousel-inner a").on("click", function (e) {
	if (this.hash !== "") {
		e.preventDefault();

		const hash = this.hash;

		$("html, body")
			.animate({
				scrollTop: $(hash).offset().top - 72 - 48
			}, 800);
	}
});
