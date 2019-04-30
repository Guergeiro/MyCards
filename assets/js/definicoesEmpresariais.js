function readURLLogo(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgSRC')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
/*Resize Elements*/
$(window).on('load resize', function () {
    var win = $(this); //this = window
    if (win.width() <= 1365) {
        $('.classColaboradores').addClass('d-block');
        $('.classNew').removeClass('text-right');
        $('.classNew').removeClass('col-md-6 col-xs-6 col-sm-6');
        $('.classNew').addClass('col-md-12 col-xs-12 col-sm-12');
        $('.className').addClass('col-md-12 col-xs-12 col-sm-12');
        $('.className').removeClass('col-md-6 col-xs-6 col-sm-6');
        $('.classRowBlock').addClass('d-block');
        $('.classCardRow').removeClass('col-md-4 col-xs-4 col-sm-4');
        $('.classCardRow').addClass('col-md-12 col-xs-12 col-sm-12');

    }
    if (win.width() >= 1366) {
        $('.classColaboradores').removeClass('d-block');
        $('.classNew').addClass('text-right');
        $('.classNew').addClass('col-md-6 col-xs-6 col-sm-6');
        $('.classNew').removeClass('col-md-12 col-xs-12 col-sm-12');
        $('.className').removeClass('col-md-12 col-xs-12 col-sm-12');
        $('.className').addClass('col-md-6 col-xs-6 col-sm-6');
        $('.classRowBlock').removeClass('d-block');
        $('.classCardRow').removeClass('col-md-12 col-xs-12 col-sm-12');
        $('.classCardRow').addClass('col-md-4 col-xs-4 col-sm-4');
    }

});
    /**/
