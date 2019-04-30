$(window).on('load resize', function () {
    var win = $(this); //this = window
    if (win.width() <= 1024) {
        $('.dataCardL').removeClass('fa-5x');
        $('.dataCardL').addClass('fa-2x');
        $('.dataCardL').addClass('mt-4');
        $('.dBlock').addClass('d-block');
        $('.elementResize').removeClass('col-md-12 col-sm-12 col-xs-12');
        $('.elementResize').addClass('col-md-12 col-sm-12 col-xs-12');
    }
    if (win.width() <= 900) {
        $('.dataCardL').removeClass('fa-2x');
        $('.dataCardL').removeClass('mt-4');
        $('.dataCardL').addClass('fa-2x');
        $('.cardColTag').addClass('mt-2');
        $('.cardPreviewCol').addClass('ml-3');
    }
    if (win.width() >= 1025) {
        $('.dataCardL').removeClass('fa-2x');
        $('.dataCardL').removeClass('mt-4');
        $('.dataCardL').addClass('fa-5x');
        $('.dBlock').removeClass('d-block');
        $('.elementResize').addClass('col-md-12 col-sm-12 col-xs-12');
        $('.elementResize').removeClass('col-md-12 col-sm-12 col-xs-12');
        $('.cardColTag').removeClass('mt-2');
        $('.cardPreviewCol').removeClass('ml-3');
    }
});