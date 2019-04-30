/*main.js, containes in itself the main scripts that allow the components that are similar in every page, in this case the Navbar and SideBar, to perform certain actions*/

function showSideMenu() {
	document.getElementById("sidebarMenu").classList.toggle("active");
}

document.querySelector("#sidenav-button").addEventListener("click", function() {
	if (document.querySelector(".sidenav").style.marginLeft == "-320px") {
		this.classList.add("side-close");
		document.querySelector(".sidenav").style.marginLeft = "0";
	} else {
		document.querySelector(".sidenav").style.marginLeft = "-320px";

		this.classList.remove("side-close");
	}
});

document
	.querySelector(".sidenav")
	.querySelectorAll("li")
	.forEach(element => {
		element.addEventListener("click", function() {
			if (
				this.querySelector(".fa-angle-down").classList.contains("side-close")
			) {
				this.querySelector(".fa-angle-down").classList.remove("side-close");
			} else {
				this.querySelector(".fa-angle-down").classList.add("side-close");
			}
		});
	});
