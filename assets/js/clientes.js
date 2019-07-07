let hash = {};

const idEmpresa = JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"];

const atualizarRatingCliente = async (idCliente) => {
    let formData = new FormData();
    formData.append("idEmpresa", idEmpresa);
    formData.append("rating", document.querySelector("input#rating").value);
    const response = await fetch(`https://mycards.dsprojects.pt/api/cliente/${idCliente}/rating/`, {
        method: "POST",
        body: formData
    });
    const data = await response.json();
    return data;
}

const getRatingCliente = async (idCliente) => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/cliente/${idCliente}/rating/${idEmpresa}`);
    const data = await response.json();
    return data;
}

const getCliente = async (idCliente) => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/cliente/${idCliente}`);
    const data = await response.json();
    return data;
}

const getCartoes = async () => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}/cartao`);
    const data = await response.json();

    for (const cartao of data) {
        let cliente = await getCliente(cartao["ID_Cliente"]);
        cliente = cliente[0];
        hash[cartao["ID_Cartao"]] = cliente;
        document.querySelector("table tbody").innerHTML +=
            `<tr data-url="${cartao["ID_Cartao"]}"><th scope="row">${cartao["ID_Cartao"]}</th><td>${cliente["PrimeiroNome"]}</td><td>${cliente["Localizacao"]}</td><td>${cliente["DataNascimento"]}</td><td>${cartao["DataFidelizacao"]}</td><td>${cartao["Pontos"]}</td></tr>`;
    }
}

getCartoes().then(() => {
    $(document).ready(() => {
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
        }), $(".dataTables_length").addClass("bs-select");
        document.querySelectorAll("tbody tr").forEach(row => {
            row.addEventListener("click", () => {
                $("#modal").modal();
                const cols = document.querySelectorAll("#modal .modal-body .row .col-12");
                document.querySelector("#modal button#atualizar").setAttribute("data-url", row.getAttribute("data-url"));
                cols[0].innerHTML = `Nome: ${hash[row.getAttribute("data-url")]["PrimeiroNome"]} ${hash[row.getAttribute("data-url")]["UltimoNome"]}`;
                getRatingCliente(hash[row.getAttribute("data-url")]["ID_Cliente"]).then(rating => {
                    rating = rating["message"][0];
                    let star = ``;
                    let index = 0;
                    for (; index < rating["Rating"]; index++) {
                        star += `<i class="fas fa-star"></i>`;
                    }
                    for (; index < 5; index++) {
                        star += `<i class="far fa-star"></i>`;
                    }
                    cols[1].innerHTML = `O seu rating: <span class="text-warning">${star}</span>`;
                });
            })
        });
    });
});

document.querySelector("#modal .modal-footer button#atualizar").addEventListener("click", (e) => {
    let returnValue = true;
    const input = document.querySelector("#modal .modal-body input#rating");
    if (input.value.trim().length == 0 || input.value < 1 || input.value > 5) {
        returnValue = false;
        input.parentElement.lastElementChild.innerHTML = "Rating inválido."
        input.parentElement.lastElementChild.classList.remove("valid-tooltip");
        input.parentElement.lastElementChild.classList.add("d-block", "invalid-tooltip");
    }
    if (returnValue) {
        atualizarRatingCliente(hash[e.target.getAttribute("data-url")]["ID_Cliente"]).then(location.reload());
    }
});