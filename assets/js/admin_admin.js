const getEmpresas = async () => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa`);
    return await response.json();
}

const processMonthsEmpresa = (year) => {
    let months = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    empresas.forEach(empresa => {
        if (year == parseInt(empresa["DataRegisto"].split(" ")[0].split("-")[0])) {
            months[parseInt(empresa["DataRegisto"].split(" ")[0].split("-")[1].split("-")[0]) - 1] += 1;
        }
    });
}

const processEmpresas = () => {
    let years = [];
    empresas.forEach(empresa => {
        let year = empresa["DataRegisto"].split(" ")[0].split("-")[0];
        if (!years.includes(year)) {
            years = [...years, year];
        }
    });
    let datasets = [];
    years.forEach(year => {
        let pool = arrayColors(1);
        datasets.push({
            label: year,
            fill: false,
            backgroundColor: `rgb(${pool[0][0]},${pool[0][1]},${pool[0][2]},1)`,
            borderColor: `rgb(${pool[0][0]},${pool[0][1]},${pool[0][2]},0.5)`,
            data: processMonthsEmpresa(year)
        });
    });

    return datasets;
}

const acceptEmpresa = async (idEmpresa) => {
    let formData = new FormData();
    formData.append("TipoEmpresa", 1);
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}`, {
        method: "POST",
        body: formData
    });
    location.reload();
}

const deleteEmpresa = async (idEmpresa) => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}`, {
        method: "DELETE"
    });
    location.reload();
}

const ctxEmpresas = document.querySelector("#myChartEmpresas").getContext("2d");
let empresas = [];

getEmpresas().then(data => {
    data.forEach(empresa => {
        if (empresa["Ativo"] == 1 && empresa["TipoEmpresa"] == 0) {
            document.querySelector("table tbody").innerHTML += `<tr><th scope="row" class="align-middle">${empresa["ID_Empresa"]}</th><td class="align-middle">${empresa["Nome"]}</td><td class="align-middle">${empresa["Email"]}</td><td class="align-middle"><div class="btn-group" role="group"><button class="btn py-2 px-2 btn-success" data-id="${empresa["ID_Empresa"]}">Aceitar</button><button class="btn py-2 px-2 btn-warning" data-toggle="modal" data-target="#modal" data-id="${empresa["ID_Empresa"]}">Ver Mais</button><button class="btn py-2 px-2 btn-danger" data-id="${empresa["ID_Empresa"]}">Recusar</button></div></td></tr>`;
        }
        if (empresa["Ativo"] == 1 && empresa["TipoEmpresa"] != 0) {
            empresas = [...empresas, empresa];
        }
    });
    document.querySelectorAll("table tbody .btn-success").forEach(botao => {
        botao.addEventListener("click", () => {
            acceptEmpresa(botao.getAttribute("data-id"));
        });
    });
    document.querySelectorAll("table tbody .btn-danger").forEach(botao => {
        botao.addEventListener("click", () => {
            deleteEmpresa(botao.getAttribute("data-id"));
        });
    });
    new Chart(ctxEmpresas, {
        type: "line",
        data: {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
            datasets: processEmpresas()
        }
    });
});

const getClientes = async () => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/cliente`);
    return await response.json();
}

const ctxClientes = document.querySelector("#myChartClientes").getContext("2d");
let clientes = [];

const processMonthsCliente = (year) => {
    let months = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    clientes.forEach(cliente => {
        if (year == parseInt(cliente["DataRegisto"].split(" ")[0].split("-")[0])) {
            months[parseInt(cliente["DataRegisto"].split(" ")[0].split("-")[1].split("-")[0]) - 1] += 1;
        }
    });
    return months;
}

const processClientes = () => {
    let years = [];
    clientes.forEach(cliente => {
        let year = cliente["DataRegisto"].split(" ")[0].split("-")[0];
        if (!years.includes(year)) {
            years = [...years, year];
        }
    });
    let datasets = [];
    years.forEach(year => {
        let pool = arrayColors(1);
        datasets.push({
            label: year,
            fill: false,
            backgroundColor: `rgb(${pool[0][0]},${pool[0][1]},${pool[0][2]},1)`,
            borderColor: `rgb(${pool[0][0]},${pool[0][1]},${pool[0][2]},0.5)`,
            data: processMonthsCliente(year)
        });
    });

    return datasets;
}

getClientes().then(data => {
    data.forEach(cliente => {
        if (cliente["Ativo"] == 1) {
            clientes = [...clientes, cliente];
        }
    });
    new Chart(ctxClientes, {
        type: "line",
        data: {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
            datasets: processClientes()
        }
    });
});

const key = "b3c7dc7d8f72f52ae14527a8da25979e";

const getInfoEmpresa = async (nif) => {
    const response = await fetch(`https://www.nif.pt/?json=1&q=${nif}&key=${key}`);
    const data = await response.json();
    return data;
}

const getEmpresaById = async (id) => {
    const response = await fetch(`https://mycards.dsprojects.pt/api/empresa/${id}`)
    const data = await response.json();
    return data[0];
}

$(document).ready(function () {
    $("#modal").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipient = button.data("id"); // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal"s content. We"ll use jQuery here, but you could use a data binding library or other methods instead.
        const modal = document.querySelector("#modal");
        modal.querySelector("#modalTitle").innerHTML = recipient;
        getEmpresaById(recipient).then(empresa => {
            console.log(empresa)
            getInfoEmpresa(empresa["NIF"]).then(data => {
                if (data["result"] == "error") {
                    // Não existe nif ou nif é pessoal
                    modal.querySelector(".modal-body .container-fluid .row").innerHTML = `<div class="col-12 alert alert-warning text-center" role="alert">O NIF indicado é válido mas não conseguimos determinar a entidade associada.</div>`;
                } else {
                    // Tudo ok
                    modal.querySelectorAll(".modal-body .container-fluid .row").innerHTML = `<div class="col-md-12>Nome: ${data["records"][nif]["title"]}</div><div class="col-md-6">NIF: ${nif}</div><div class="col-md-6">Cidade: ${data["records"][nif]["city"]}</div><div class="col-md-6">Email: ${data["records"][nif]["contacts"]["email"]}</div><div class="col-md-6">Telefone: ${data["records"][nif]["contacts"]["phone"]}</div>`;
                }
            }).catch(err => {
                modal.querySelector(".modal-body .container-fluid .row").innerHTML = `<div class="col-12 alert alert-danger text-center" role="alert">Ocorreu um erro a ir buscar a informação. Tente mais tarde.</div>`;
            });
        });
    });
});