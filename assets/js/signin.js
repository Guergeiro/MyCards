function validation(form) {
	let returnValue = true;
	document.querySelectorAll("input").forEach((input) => {
		if (input.value.trim().length == 0) {
			returnValue = false;
		}
	});
	if (document.querySelector("input#password").value.trim() != document.querySelector("input#repassword").value.trim()) {
		returnValue = false;
	}
	return returnValue;
}
