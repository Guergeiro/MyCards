let instanciaCampanhas = [];
let campanhas = [];

const idEmpresa = JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"];

$(document).ready(function () {
    $.get(
        "https://mycards.dsprojects.pt/api/empresa/" +
        idEmpresa +
        "/campanha",
        function (data) {
            campanhas = JSON.parse(data);

            campanhas.forEach(campanha => {
                $.get(
                    "https://mycards.dsprojects.pt/api/empresa/" +
                    idEmpresa +
                    "/campanha/" +
                    campanha["ID_Campanha"] +
                    "/instanciacampanha",
                    function (data) {
                        data = JSON.parse(data);
                        data.forEach(da => {
                            instanciaCampanhas.push(da);
                        });
                    }
                );
                let tipoCampanha;
                switch (campanha["TipoCampanha"]) {
                    case "0":
                        tipoCampanha = "Cupão";
                        break;
                    case "1":
                        tipoCampanha = "Carimbo";
                        break;
                    case "2":
                        tipoCampanha = "Pontos";
                        break;
                }
                document.querySelector("table tbody").innerHTML +=
                    '<tr data-url="' +
                    campanha["ID_Campanha"] +
                    '"><th scope="row">' +
                    campanha["ID_Campanha"] +
                    "</th><td>" +
                    tipoCampanha +
                    "</td><td>" +
                    campanha["DataInicio"] +
                    "</td><td>" +
                    campanha["DataFim"] +
                    "</td><td>" +
                    campanha["Designacao"] +
                    "</td></tr>";
            });
            $("table").DataTable({
                    language: {
                        lengthMenu: "Display _MENU_ records per page",
                        zeroRecords: "Nada Encontrado - desculpe",
                        info: "Página _PAGE_ de _PAGES_",
                        infoEmpty: "Não existem resultados para a procura",
                        infoFiltered: "(filtrado de _MAX_ resultados)",
                        sLengthMenu: "Mostrar _MENU_ entradas",
                        oSearch: "Anterior"
                    },
                    language: {
                        emptyTable: "Nenhuma informação disponível.",
                        info: "A mostrar _START_ de _TOTAL_ resultados",
                        infoEmpty: "A mostrar 0 de 0 resultados",
                        infoFiltered: "(filtrado de _MAX_ total resultados)",
                        infoPostFix: "",
                        thousands: ",",
                        lengthMenu: "Mostrar _MENU_ resultados",
                        loadingRecords: "A carregar...",
                        processing: "A processar...",
                        search: "Procurar:",
                        zeroRecords: "Nenhum resultado corresponde",
                        paginate: {
                            first: "Primeiro",
                            last: "Último",
                            next: "Anterior",
                            previous: "Seguinte"
                        },
                        aria: {
                            sortAscending: ": ative para ordenar por ordem crescente a coluna",
                            sortDescending: ": ative para ordenar por ordem descendente a coluna"
                        }
                    }
                }),
                $(".dataTables_length").addClass("bs-select");
            document.querySelectorAll("tr:not(#head)").forEach(row => {
                row.addEventListener("click", function () {
                    document
                        .querySelector("#modal")
                        .setAttribute("data-url", this.getAttribute("data-url"));
                    document.querySelector("#modal .modal-footer a").href =
                        "./infoCampanha/" + this.getAttribute("data-url");
                    document
                        .querySelector("#modal")
                        .querySelector(
                            "#modalTitle"
                        ).innerHTML = this.lastElementChild.innerHTML;
                    $("#modal").modal();
                });
            });
        }
    );
});
$("#modal").on("show.bs.modal", function () {
    let array = arrayColors(2),
        backgroundColor = [],
        borderColor = [];
    array.forEach(color => {
        backgroundColor.push(
            "rgba(" + color[0] + "," + color[1] + "," + color[2] + ",0.6)"
        );
        borderColor.push(
            "rgba(" + color[0] + "," + color[1] + "," + color[2] + ",1.0)"
        );
    });

    let newData = [0, 0];
    instanciaCampanhas.forEach(instancias => {
        if (
            instancias["ID_Campanha"] ==
            document.querySelector(".modal").getAttribute("data-url")
        ) {
            if (instancias["Utilizado"] == 0) {
                newData[1] += 1;
            } else {
                newData[0] += 1;
            }
        }
    });
    let chart = new Chart(document.querySelector("#chart"), {
        type: "doughnut",
        data: {
            labels: ["Utilizado", "Não Utilizado"],
            datasets: [{
                label: "Utilizações",
                data: newData,
                backgroundColor: backgroundColor,
                borderColor: borderColor,
                borderWidth: 1
            }]
        }
    });
});

const deleteCampanha = async (idCampanha) => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}/campanha/${idCampanha}`, {
        method: "DELETE"
    });
    const data = await response.json();
    return data;
}

document.querySelector("button#delete").addEventListener("click", (e) => {
    const id = e.target.parentElement.parentElement.parentElement.parentElement.getAttribute("data-url");
    deleteCampanha(id).then(location.reload());
});