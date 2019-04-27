/*main.js, containes in itself the main scripts that allow the components that are similar in every page, in this case the Navbar and SideBar, to perform certain actions*/

function showSideMenu() {
	document.getElementById("sidebarMenu").classList.toggle("active");
}

$(".fa-bars").click(function(e) {
	if ($(".sidenav").width() > 0) {
		$(".fa-times").removeClass("fa-times").addClass("fa-bars");
		$(".sidenav").css("width", "0px");
	}
	else {
		$(".fa-bars").removeClass("fa-bars").addClass("fa-times");
		$(".sidenav").css("width", "320px");
	}
});
