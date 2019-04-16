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
        //Show Forms
        $('.switchDataCupoes').show();

        //Hide Forms
        $('.switchDataRaspadinha').hide();
        $('.switchDataCarimbo').hide();

        //Show Preview
        $('.previewCupoes').show();

        //Hide Preview
        $('.previewRaspadinhaCover').hide();
        $('.previewRaspadinhaUnCover').hide();
        $('.previewCarimbos').hide();

        //Remove d-none Class
        $('.switchDataCupoes').removeClass('d-none');
        $('.previewCupoes').removeClass('d-none');
        $('.previewbody').addClass('bg-primary');
    } else if (category == '2') {
        //Show Forms
        $('.switchDataRaspadinha').show();

        //Hide Forms
        $('.switchDataCarimbo').hide();
        $('.switchDataCupoes').hide();

        //Show Preview
        $('.previewRaspadinhaCover').show();

        //Hide Preview
        $('.previewCupoes').hide();
        $('.previewRaspadinhaUnCover').hide();
        $('.previewCarimbos').hide();

        //Remove d-none Class
        $('.switchDataRaspadinha').removeClass('d-none');
        $('.previewRaspadinhaCover').removeClass('d-none');
        $('.previewbody').addClass('bg-primary');
    } else if (category == '3') {
        //Show Forms
        $('.switchDataCarimbo').show();

        //Hide Forms
        $('.switchDataCupoes').hide();
        $('.switchDataRaspadinha').hide();

        //Hide Preview
        $('.previewCupoes').hide();
        $('.previewRaspadinhaCover').hide();
        $('.previewRaspadinhaUnCover').hide();

        //Show Preview
        $('.previewCarimbos').show();

        //Remove d-none Class
        $('.switchDataCarimbo').removeClass('d-none');
        $('.previewCarimbos').removeClass('d-none');
        $('.previewbody').addClass('bg-primary');
    } else {
        //Hide all data
        hideAllSwitchs();
        hideAllPreviews();
        $('.previewbody').removeClass('bg-primary');
    }

});

$('#imgClickCover').on('click', function () { 

    $('.previewRaspadinhaCover').hide();
    $('.previewRaspadinhaUnCover').show();
    
    //Remove d-none Class
    $('.previewRaspadinhaUnCover').removeClass('d-none');
});

$('#imgClickUnCover').on('click', function () { 
    $('.previewRaspadinhaCover').show();
    $('.previewRaspadinhaUnCover').hide();
});

$('#filtersMenu').on('click', function() {~
    
    $('.menuFilters').removeClass('d-none');

    $('.insertData').hide();
    $('.menuFilters').show();
});

$('#insertMenu').on('click', function() {
    $('.insertData').show();
    $('.menuFilters').hide();
});