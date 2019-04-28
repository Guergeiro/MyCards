/*Resize Elements*/
$(window).on('load resize', function () {
    var win = $(this); //this = window
    if (win.width() <= 576) {
        $('.createCampain').removeClass('float-right');
        $('.createCampain').addClass('float-left');
    }
    if (win.width() >= 576) {
        $('.createCampain').addClass('float-right');
        $('.createCampain').removeClass('float-left');
    }
});
/**/

/*Search JQUERY*/
$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
/**/
