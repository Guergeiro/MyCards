window.addEventListener("load", function () {
	this.setTimeout(function () {
		document.querySelector("#loader").style.opacity = 0;
		document.querySelector("body").style.opacity = 1;
		document.querySelector("body").style.overflow = "initial";
		setTimeout(function () {
			document.querySelector("#loader").remove();
		}, 1000);
	}, 1000);
});

const scrollButton = document.querySelector("#moveUp");

$(document).ready(function () {
	$("#moveUp").click(function () {
		$("html, body").animate({
			scrollTop: 0
		}, 750);
	});
	// Smooth scroll
	$("a[href^=\"#\"]").on("click", function (e) {
		if (this.hash !== "") {
			e.preventDefault();

			const hash = this.hash;

			$("html, body")
				.animate({
					scrollTop: $(hash).offset().top - 72
				}, 750);
		}
	});
});



window.addEventListener("scroll", function () {
	if (document.body.scrollTop > window.innerHeight / 3 || document.documentElement.scrollTop > window.innerHeight / 3) {
		scrollButton.style.opacity = 1;
		scrollButton.style.pointerEvents = "initial";
	} else {
		scrollButton.style.opacity = 0;
		scrollButton.style.pointerEvents = "none";
	}
});

function randomColor() {
	let result = [];
	result.push(Math.floor(Math.random() * 255));
	result.push(Math.floor(Math.random() * 255));
	result.push(Math.floor(Math.random() * 255));
	return result;
}

function arrayColors(number) {
	let pool = [];
	for (let i = 0; i < number; i++) {
		let aux = randomColor();
		if (!pool.includes(aux)) {
			pool.push(aux);
		}
	}
	return pool;
}

document
	.querySelector("nav")
	.querySelector("#sidebarToggler")
	.addEventListener("click", function () {
		if (document.querySelector("#ourNavbar").style.marginLeft == "0px") {
			document
				.querySelector("nav")
				.querySelector("#sidebarToggler")
				.querySelector("i")
				.classList.remove("close-effect");
			document.querySelector("#ourNavbar").style.marginLeft = "-320px";
		} else {
			document
				.querySelector("nav")
				.querySelector("#sidebarToggler")
				.querySelector("i")
				.classList.add("close-effect");
			document.querySelector("#ourNavbar").style.marginLeft = "0px";
		}
	});

document
	.querySelector("#ourNavbar")
	.querySelectorAll(".list-group-item")
	.forEach(item => {
		item.addEventListener("click", function () {
			if (this.nextElementSibling.nodeName == "DIV") {
				if (!this.nextElementSibling.classList.contains("collapsing")) {
					if (this.nextElementSibling.classList.contains("show")) {
						this.querySelector(".fa-chevron-down").classList.remove(
							"close-effect"
						);
					} else {
						this.querySelector(".fa-chevron-down").classList.add(
							"close-effect"
						);
					}
				}
			}
		});
	});

document
	.querySelector("nav")
	.querySelector("#navbarToggler")
	.addEventListener("click", function () {
		if (!this.nextElementSibling.classList.contains("collapsing")) {
			if (this.nextElementSibling.classList.contains("show")) {
				this.querySelector("i").classList.add("fa-bars");
				this.querySelector("i").classList.remove("fa-times");
			} else {
				this.querySelector("i").classList.remove("fa-bars");
				this.querySelector("i").classList.add("fa-times");
			}
		}
	});