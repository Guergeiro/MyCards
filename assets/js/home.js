$(window).on('resize', function () {
    var win = $(this); //this = window
    if (win.width() <= 1000) {
        $('.tempoClass').removeClass('text-right');
        $('.tempoClass').addClass('text-left');
    }
    if (win.width() >= 1000) { 
        $('.tempoClass').addClass('text-right');
        $('.tempoClass').removeClass('text-left');
    }   
});