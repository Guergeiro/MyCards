window.addEventListener("load", () => {
    this.setTimeout(function () {
        document.querySelector("#loader").style.opacity = 0;
        document.querySelector("body").style.opacity = 1;
        document.querySelector("body").style.overflow = "initial";
        setTimeout(function () {
            document.querySelector("#loader").remove();
        }, 1000);
    }, 1000);
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

function validation(form) {
    let returnValue = true;
    form.querySelectorAll("input").forEach(input => {
        if (input.value.length == 0) {
            returnValue = false;
        }
    });
    return returnValue;
}