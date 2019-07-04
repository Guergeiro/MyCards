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

const criarElemento = (notificacao) => {
    let elementParent = document.querySelectorAll(".card-body .row")[1];

    let oldinnerHtml = document.querySelectorAll(".card-body .row")[1].innerHTML;

    elementParent.innerHTML = `<div class="col-sm-6 col-md-4"><div class="toast mx-auto my-1" role="alert" aria-live="assertive" aria-atomic="true" data-delay="60000"><div class="toast-header"><strong class="mr-auto">Campanha: ${notificacao["ID_Campanha"]}</strong><button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button></div><div class="toast-body text-center"><span class="id-cliente">Cartão: ${notificacao["ID_Cartao"]}</span><span>Número de utilizações: ${notificacao["Utilizado"]}</span><hr><button data-idcampanha="${notificacao["ID_Campanha"]}" data-idcartao="${notificacao["ID_Cartao"]}" class="btn btn-info" type="button">Utilizar Campanha</button></div></div></div>`;

    elementParent.innerHTML += oldinnerHtml;

    $(".toast").toast("show");
    $(".toast").each(function () {
        $(this).on("hidden.bs.toast", function () {
            postNotificacao($(this).find(".toast-body").find("button").attr("data-idcampanha"), $(this).find(".toast-body").find("button").attr("data-idcartao"));
            apagarNotificacao($(this).find(".toast-body").find("button").attr("data-idcampanha"), $(this).find(".toast-body").find("button").attr("data-idcartao"));
            $(this).parent().remove();
        });
    });

    document.querySelectorAll(".toast-body button").forEach(button => {
        button.addEventListener("click", () => {
            document.querySelector("#codigocartao").value = button.getAttribute("data-idcartao");
            document.querySelector("#codigocartao").focus();
            document.querySelector("#codigocampanha").value = button.getAttribute("data-idcampanha");
            document.querySelector("#codigocampanha").focus();
            document.querySelector("#valor").focus();
        });
    });
}

const novaNotificacao = (notificacao) => {
    let nova = true;
    notificacoes.forEach(element => {
        if (element["ID_Campanha"] == notificacao["ID_Campanha"] && element["ID_Cartao"] == notificacao["ID_Cartao"]) {
            nova = false;
        }
    });
    return nova;
}

const apagarNotificacao = (idCampanha, idCartao) => {
    let i = -1;
    notificacoes.forEach((notificacao, index) => {
        if (notificacao["ID_Campanha"] == idCampanha && notificacao["ID_Cartao"] == idCartao) {
            i = index;
        }
    });
    if (i > -1) {
        notificacoes.splice(i, 1);
    }
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
setInterval(() => {
    getCampanhas().then(campanhas => {
        for (const campanha of campanhas) {
            getInstanciasCampanha(campanha["ID_Campanha"]).then(instancias => {
                for (const instancia of instancias) {
                    if (instancia["Notificacao"] == 1 && novaNotificacao(instancia)) {
                        notificacoes.push(instancia);
                        criarElemento(instancia);
                    }
                }
            });
        }
    });
}, 5000);

const postNotificacao = async (codigocampanha, codigocartao) => {
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
    formData.append("valor", document.querySelector("input#valor").value);
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}/campanha/${codigocampanha}/instanciacampanha/${codigocartao}`, {
        method: "POST",
        body: formData
    });
    return await response.json();
}

document.querySelector("#ativar").addEventListener("click", (e) => {
    let estado = true,
        form = e.target.parentElement.parentElement;
    form.querySelectorAll("input").forEach(input => {
        if (input.value.trim().length == 0) {
            estado = false;
        }
    });
    if (estado) {
        ativarCampanha(document.querySelector("#codigocampanha").value, document.querySelector("#codigocartao").value).then(data => {
            let cardBody = document.querySelector(".card-body");
            let alert = document.createElement("div");
            alert.classList.add("alert", "alert-dismissible", "fade", "show");
            switch (data["status"]) {
                case "true":
                    alert.classList.add("alert-success");
                    alert.innerHTML = "Campanha ativada!";
                    break;
                case "false":
                    alert.classList.add("alert-danger");
                    alert.innerHTML = "Erro ao ativar campanha!";
                    break;
            }
            alert.innerHTML += `<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>`;
            cardBody.insertBefore(alert, cardBody.childNodes[0]);
        });
    }
});