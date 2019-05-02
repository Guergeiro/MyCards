document.querySelector("body").style.paddingTop = document.querySelector("nav").offsetHeight;
document.querySelector("nav").querySelector("#sidebarToggler").addEventListener("click", function () {
	if (document.querySelector("#ourNavbar").style.marginLeft == "0px") {
		document.querySelector("nav").querySelector("#sidebarToggler").querySelector("i").classList.remove("close-effect");
		document.querySelector("#ourNavbar").style.marginLeft = "-320px";
	} else {
		document.querySelector("nav").querySelector("#sidebarToggler").querySelector("i").classList.add("close-effect");
		document.querySelector("#ourNavbar").style.marginLeft = "0px";
	}
});

document.querySelector("#ourNavbar").querySelectorAll(".list-group-item").forEach((item) => {
	item.addEventListener("click", function () {
		if (this.nextElementSibling.nodeName == "DIV") {
			if (!this.nextElementSibling.classList.contains("collapsing")) {
				if (this.nextElementSibling.classList.contains("show")) {
					this.querySelector(".fa-chevron-down").classList.remove("close-effect");
				} else {
					this.querySelector(".fa-chevron-down").classList.add("close-effect");
				}
			}
		}
	});
});

document.querySelector("nav").querySelector("#navbarToggler").addEventListener("click", function () {
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
