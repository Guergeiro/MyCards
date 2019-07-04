let cartoes = [];
$(document).ready(function() {
    $.get(
        "https://mycards.dsprojects.pt/api/empresa/" +
        JSON.parse(document.querySelector("head").getAttribute("data-session"))[
            "ID_Empresa"
        ] +
        "/cartao",
        function(data) {
            cartoes = JSON.parse(data);

            cartoes.forEach(cartao => {
                $.get("https://mycards.dsprojects.pt/api/cliente/" + cartao["ID_Cliente"], function(data) {
                    data = JSON.parse(data);
                    data.forEach(da => {
                        document.querySelector("table tbody").innerHTML +=
                            '<tr data-url="' +
                            da["ID_Cliente"] +
                            '"><th scope="row">' +
                            da["ID_Cliente"] +
                            "</th><td>" +
                            da["PrimeiroNome"] +
                            "</td><td>" +
                            da["Localizacao"] +
                            "</td><td>" +
                            da["DataNascimento"] +
                            "</td><td>" +
                            cartao["DataFidelizacao"] +
                            "</td></tr>" +
                            cartao["Pontos"] +
                            "</td></tr>";
                    });
                });
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
            });
        }
    );
});