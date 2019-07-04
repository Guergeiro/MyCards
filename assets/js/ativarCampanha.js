let notificacoes = new Array();

//const idEmpresa = JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"];

const idEmpresa = 2;

let url = window.location.hash.substr(1);
if (url.length > 0) {
    url = window.location.hash.substr(1).split("&");
    document.querySelector("#codigocartao").value = url[0].split("=")[1];
    document.querySelector("#codigocartao").focus();
    document.querySelector("#codigocampanha").value = url[1].split("=")[1];
    document.querySelector("#codigocampanha").focus();
    document.querySelector("#valor").focus();
}
/*
setInterval(function () {
    $.get("https://mycards.dsprojects.pt/api/empresa/" + JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"] + "/campanha", function (data) {
        data = JSON.parse(data);
        data.forEach(campanha => {
            $.get("https://mycards.dsprojects.pt/api/empresa/" + JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"] + "/campanha/" + campanha["ID_Campanha"] + "/instanciascampanha", function (instancias) {
                instancias = JSON.parse(instancias);
                instancias.forEach(element => {
                    if (!contains(element)) {
                        notificacoes.push(element);

                        let elementParent = document.querySelector(".card-body .row");

                        let oldinnerHtml = document.querySelector(".card-body .row").innerHTML;

                        elementParent.innerHTML =
                            '<div class="col-sm-6 col-md-4"><div class="toast mx-auto my-1" role="alert" aria-live="assertive" aria-atomic="true" data-delay="60000"><div class="toast-header"><strong class="mr-auto">Campanha: ' +
                            element.ID_Campanha +
                            '</strong><button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button></div><div class="toast-body text-center" data-idcampanha="' +
                            element.ID_Campanha +
                            '" data-idcartao="' +
                            element.ID_Cartao +
                            '"><span class="id-cliente">Cartão: ' +
                            element.ID_Cartao +
                            "</span><span>Número de utilizações: " +
                            element.Utilizado +
                            "</span><hr>Clique para utilizar campanha</span></div></div></div>" +
                            oldinnerHtml;

                        $(".toast").toast("show");
                        $(".toast").each(function () {
                            $(this).on("hidden.bs.toast", function () {
                                $.post("https://mycards.dsprojects.pt/api/empresa/" + JSON.parse($("head").attr("data-session"))["ID_Empresa"] + "/campanha/" + $(this).find(".toast-body").attr("data-idcampanha") + "/instanciacampanha/" + $(this).find(".toast-body").attr("data-idcartao"), {
                                    Notificacao: 0
                                }).then(function () {
                                    for (let i = 0; i < notificacoes.length; i++) {
                                        if (notificacoes[i]["ID_Cartao"] == $(this).find(".toast-body").attr("data-idcartao") && notificacoes[i]["ID_Campanha"] == $(this).find(".toast-body").attr("data-idcampanha")) {
                                            notificacoes.splice(i, 1);
                                            break;
                                        }
                                    }
                                });

                                $(this).parent().remove();
                            });
                        });

                        document.querySelectorAll(".toast-body").forEach(toast => {
                            toast.addEventListener("click", function () {
                                document.querySelector("#codigocartao").value = toast.getAttribute("data-idcartao");
                                document.querySelector("#codigocartao").focus();
                                document.querySelector("#codigocampanha").value = toast.getAttribute("data-idcampanha");
                                document.querySelector("#codigocampanha").focus();
                                document.querySelector("#valor").focus();
                            });
                        });
                    }
                });
            });
        });
    });
}, 5000);
*/
function contains(element) {
    let estado = false;

    if (element["Notificacao"] == 0) {
        estado = true;
    }

    if (notificacoes.length > 0) {
        notificacoes.forEach(objElement => {
            if (objElement["ID_Cartao"] == element["ID_Cartao"] && objElement["ID_Campanha"] == element["ID_Campanha"]) {
                estado = true;
            }
        });
    }

    return estado;
}

const getCampanhas = async () => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}/campanha/`);
    const data = await response.json();
    return data;
}

const getInstanciasCampanha = async (idCampanha) => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}/campanha/${idCampanha}/instanciacampanha`);
    const data = await response.json();
    return data;
}

getCampanhas().then(campanhas => {
    for (const campanha of campanhas) {
        getInstanciasCampanha(campanha["ID_Campanha"]).then(instancias => {
            for (const instancia of instancias) {
                if (instancia["Notificacao"] == 1) {
                    notificacoes.push(instancia);
                }
            }
        });
    }
});

const apagarNotificacao = async (codigocampanha, codigocartao) => {
    let formData = new FormData();
    formData.append("notificacao", 0);
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}/campanha/${codigocampanha}/instanciacampanha/${codigocartao}`, {
        method: "POST",
        body: formData
    });
    return await response.json();
}

const ativarCampanha = async (codigocampanha, codigocartao) => {
    let formData = new FormData();
    formData.append("valor", document.querySelector("form input#valor").value);
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}/campanha/${codigocampanha}/instanciascampanha/${codigocartao}`, {
        method: "POST",
        body: formData
    });
    return await response.json();
}

document.querySelector("form #ativar").addEventListener("click", () => {
    let estado = true,
        form = document.querySelector("form");
    form.querySelectorAll("input").forEach(input => {
        if (input.value.trim().length == 0) {
            estado = false;
        }
    });
    if (estado) {
        ativarCampanha(document.querySelector("#codigocampanha").value, document.querySelector("#codigocartao").value).then(data => {
            switch (data["status"]) {
                case "true":

            }
        });
    }
});