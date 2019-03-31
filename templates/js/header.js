document.querySelector("nav").querySelector(".navbar-toggler").addEventListener("click", function () {
	let sidebar = document.querySelector("#ourNavbar");
	if (sidebar.style.width == "250px") {
		document.querySelector("nav").querySelector(".navbar-toggler").querySelector("i").classList.remove("fa-times");
		document.querySelector("nav").querySelector(".navbar-toggler").querySelector("i").classList.add("fa-bars");
		sidebar.style.width = "0";
		sidebar.style.marginLeft = "-250px";
	} else {
		document.querySelector("nav").querySelector(".navbar-toggler").querySelector("i").classList.remove("fa-bars");
		document.querySelector("nav").querySelector(".navbar-toggler").querySelector("i").classList.add("fa-times");
		sidebar.style.width = "250px";
		sidebar.style.marginLeft = "0";
	}
});

document.querySelector("#ourNavbar").style.paddingTop = document.querySelector("nav").offsetHeight;