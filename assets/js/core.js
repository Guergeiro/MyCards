/*main.js, containes in itself the main scripts that allow the components that are similar in every page, in this case the Navbar and SideBar, to perform certain actions*/

function showSideMenu() {
	document.getElementById("sidebarMenu").classList.toggle("active");
}

$(".fa-bars").click(function(e) {
	console.log($(".sidenav").width());
	if ($(".sidenav").width() == 318.75) {
		$(".sidenav").css("width", "0px");
	}
	if ($(".sidenav").width() == -0.25) {
		$(".sidenav").css("width", "320px");
	}
});
