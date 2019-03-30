document.querySelector("nav").querySelector(".navbar-toggler").addEventListener("click", function () {
	let sidebar = document.querySelector("#ourNavbar");
	if (sidebar.style.width == "300px") {
		sidebar.style.width = "0";
		sidebar.style.marginLeft = "-300px";
	} else {
		this.style.marginLeft = "0px";
		sidebar.style.width = "300px";
		sidebar.style.marginLeft = "0";
	}
});

document.querySelector("#ourNavbar").style.marginTop = document.querySelector("nav").offsetHeight;