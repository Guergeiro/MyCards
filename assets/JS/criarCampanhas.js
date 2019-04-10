var hideAllPreviews = function() {
    $('div[class^=preview]').hide();
}

var hideAllSwitchs = function() {
    $('div[class^=switch]').hide();
}

$('#selectDesconto').on('change', function () {
    var category = $(this).val();

    /* Mostra div selecionada */
    if (category == '1') {
        $('.switchDataCupoes').show();
        $('.switchDataRaspadinha').hide();
        $('.switchDataCarimbo').hide();
        $('.previewCupoes').show();
        $('.previewRaspadinhaCover').hide();
        $('.previewRaspadinhaUnCover').hide();
        $('.previewCarimbos').hide();
    } else if (category == '2') {
        $('.switchDataRaspadinha').show();
        $('.switchDataCarimbo').hide();
        $('.switchDataCupoes').hide();
        $('.previewCupoes').hide();
        $('.previewRaspadinhaCover').show();
        $('.previewRaspadinhaUnCover').hide();
        $('.previewCarimbos').hide();
    } else if (category == '3') {
        $('.switchDataCarimbo').show();
        $('.switchDataCupoes').hide();
        $('.switchDataRaspadinha').hide();
        $('.previewCupoes').hide();
        $('.previewRaspadinhaCover').hide();
        $('.previewRaspadinhaUnCover').hide();
        $('.previewCarimbos').show();
    } else {
        hideAllSwitchs();
        hideAllPreviews();
    }

});

$('#imgClickCover').on('click', function () { 
    $('.previewRaspadinhaCover').hide();
    $('.previewRaspadinhaUnCover').show();
});

$('#imgClickUnCover').on('click', function () { 
    $('.previewRaspadinhaCover').show();
    $('.previewRaspadinhaUnCover').hide();
});

$('#filtersMenu').on('click', function() {
    $('.insertData').hide();
    $('.menuFilters').show();
    $("#filtersMenu").addClass('active');
    $("#insertMenu").removeClass('active');
});

$('#insertMenu').on('click', function() {
    $('.insertData').show();
    $('.menuFilters').hide();
    $("#filtersMenu").removeClass('active');
    $("#insertMenu").addClass('active');
});