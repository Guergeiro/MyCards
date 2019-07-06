const idEmpresa = JSON.parse(document.querySelector("head").getAttribute("data-session"))["ID_Empresa"];

const getAllDadosEmpresa = async () => {
    const response1 = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}`);
    const response2 = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}/colaborador`);
    const response3 = await fetch(`https://mycards.dsprojects.pt/api/empresa/${idEmpresa}/cartao`);

    return Promise.all([response1.json(), response2.json(), response3.json()]);
}

getAllDadosEmpresa().then(data => {
    /* Nome */
    document.querySelector("input#nome").value = data[0][0]["Nome"];

    /* Email */
    document.querySelector("input#email").value = data[0][0]["Email"];

    /* Localizacao */
    document.querySelector("input#localizacao").value = data[0][0]["Localizacao"];

    /* Nif */
    document.querySelector("input#nif").value = data[0][0]["NIF"];

    /* Plano de Subscrição */
    switch (data[0][0]["TipoEmpresa"]) {
        case "1":
            document.querySelector("input#plano").value = "Grátis";
            break;
        case "2":
            document.querySelector("input#plano").value = "Intermédio";
            break;
        case "3":
            document.querySelector("input#plano").value = "Profissional";
            break;
    }

    /* Colaboradores */
    document.querySelector("input#colaboradores").value = data[1].length;

    /* Colaboradores */
    document.querySelector("input#cartoes").value = data[2].length;

    document.querySelectorAll("input").forEach(input => {
        input.focus();
        input.blur();
        input.setAttribute("disabled", "disabled");
    });
});