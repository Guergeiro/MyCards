$(window).on('load resize', function () {
    var win = $(this); //this = window
    if (win.width() <= 1024) {
        $('.dataCardL').removeClass('fa-5x');
        $('.dataCardL').addClass('fa-2x');
        $('.dataCardL').addClass('mt-4');
        $('.dBlock').addClass('d-block');
        $('.elementResize').removeClass('col-md-12 col-sm-12 col-xs-12');
        $('.elementResize').addClass('col-md-12 col-sm-12 col-xs-12');
        $('.imgResize').addClass('w-75');
        $('.btnGravar').addClass('float-right');
        $('.btnGravar').removeClass('text-center');
    }
    if (win.width() <= 768) {
        $('.dataCardL').removeClass('mt-4');
        $('.cardColTag').addClass('mt-2');
        $('.cardPreviewCol').addClass('ml-3');
        $('.btnGravar').removeClass('float-right');
        $('.btnGravar').addClass('text-center');
    }
    if (win.width() >= 768) {
        $('.cardPreviewCol').removeClass('ml-3');
        $('.btnGravar').addClass('float-right');
        $('.btnGravar').removeClass('text-center');
    }
    if (win.width() >= 1025) {
        $('.dataCardL').removeClass('fa-2x');
        $('.dataCardL').removeClass('mt-4');
        $('.dataCardL').addClass('fa-5x');
        $('.dBlock').removeClass('d-block');
        $('.elementResize').addClass('col-md-12 col-sm-12 col-xs-12');
        $('.elementResize').removeClass('col-md-12 col-sm-12 col-xs-12');
        $('.cardColTag').removeClass('mt-2');
        $('.btnGravar').addClass('float-right');
        $('.btnGravar').removeClass('text-center');
    }
});


$('.cuponJS').on('click', function () {
    $('.cupaoDiv').removeClass('d-none');
    $('.carimboDiv').addClass('d-none');
    $('.raspadinhaDiv').addClass('d-none');
    $('.previewCupao').removeClass('d-none');
    $('.previewRaspadinha').addClass('d-none');
    $('.previewCarimbos').addClass('d-none');
});

$('.raspadinhaJS').on('click', function () {
    $('.raspadinhaDiv').removeClass('d-none');
    $('.previewCupao').addClass('d-none');
    $('.carimboDiv').addClass('d-none');
    $('.cupaoDiv').addClass('d-none');
    $('.previewRaspadinha').removeClass('d-none');
    $('.previewCarimbos').addClass('d-none');
});

$('.carimboJS').on('click', function () {
    $('.carimboDiv').removeClass('d-none');
    $('.previewCupao').addClass('d-none');
    $('.raspadinhaDiv').addClass('d-none');
    $('.cupaoDiv').addClass('d-none');
    $('.previewRaspadinha').addClass('d-none');
    $('.previewCarimbos').removeClass('d-none');
});

$('.imgResize').on('click', function () {
    $('.imgResize').addClass('d-none');
    $('.selectPrize').removeClass('d-none');
});

$('.selectPrize').on('click', function () {
    $('.imgResize').removeClass('d-none');
    $('.selectPrize').addClass('d-none');
});

/*InputsPreviewFill */
$("#input-char-counter1").on("input", function() {
    $("#desigCupaoPreview").html($(this).val());
});

$("#input-char-counter10").on("input", function() {
    $("#desigRaspadinhaPreview").html($(this).val());
});

$("#input-char-counter11").on("input", function() {
    $("#desigRaspadinhaPreviewCondição").html($(this).val());
});

$("#input-char-counter2").on("input", function() {
    $("#desigCupaoPreviewDesi").html($(this).val());
});

$("#input-char-counter3").on("input", function() {
    $("#desigRaspadinhaPreviewPremio").html($(this).val());
});

$("#selectValor").on("change", function() {
    $("#desigCupaoPreviewValor").html($(this).val());
});

$("#inputMDEx").on("change", function() {
    $("#designCupaoDataP").html($(this).val());
});

$("#inputMDEx2").on("change", function() {
    $('.ateLabel').removeClass('d-none');
    $("#designCupaoDataF").html($(this).val());
});

$("#input-char-counter30").on("input", function() {
    $("#desigCarimboPreviewDesig").html($(this).val());
});

$("#input-char-counter31").on("input", function() {
    $("#desigCarimboPreviewPc").html($(this).val());
});

$("#numberExample").on("change", function() {
    $("#desigCarimboPreviewNc").html($(this).val());
});