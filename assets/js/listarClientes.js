$(document).ready(function () {
    $('table').DataTable( {
        "language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nada Encontrado - desculpe",
            "info": "Página _PAGE_ de _PAGES_",
            "infoEmpty": "Não existem resultados para a procura",
            "infoFiltered": "(filtrado de _MAX_ resultados)",
            "sLengthMenu": "Mostrar _MENU_ entradas",
            "oSearch": "Anterior"
        }
    }),
    $('.dataTables_length').addClass('bs-select');
});
