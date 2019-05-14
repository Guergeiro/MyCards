function validation(form) {
	let returnValue = true;
	document.querySelectorAll("input").forEach((input) => {
		if (input.value.trim().length == 0) {
			returnValue = false;
		}
	});
	return returnValue;
}
