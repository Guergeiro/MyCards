/*ArrowClickChangeDivs*/
$('#arrowC').on('click', function () {
    $('.selectCardLast').removeClass('d-none');
    $('.selectCardFirst').addClass('d-none');
});

$('#arrowB').on('click', function () {
    $('.selectCardLast').removeClass('d-none');
    $('.selectCardFirst').addClass('d-none');
});

$('#arrowA').on('click', function () {
    $('.selectCardFirst').removeClass('d-none');
    $('.selectCardLast').addClass('d-none');
});
/**/


/*Resize Elements*/
$(window).on('load resize', function () {
    var win = $(this); //this = window
    if (win.width() <= 576) {
        $('.createCampain').removeClass('float-right');
        $('.createCampain').addClass('float-left');
        $('.arrowBClass').removeClass('d-none');
        $('.arrowAClass').removeClass('mt-5 pl-4');
        $('.arrowBClass').removeClass('mt-5 pl-4');
        $('.arrowBClassB').addClass('d-none');
        $('.divSearch').addClass('w-75');
        $('.divDropBox').addClass('w-25');
    }
    if (win.width() >= 576) {
        $('.createCampain').addClass('float-right');
        $('.createCampain').removeClass('float-left');
        $('.arrowBClass').addClass('d-none');
        $('.arrowAClass').addClass('mt-5 pl-4');
        $('.arrowBClassB').removeClass('d-none')
        $('.divSearch').removeClass('w-75');
        $('.divDropBox').removeClass('w-25');
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

$('#dropdownMenuCenter').on('change', function () {
    var category = $(this).val();

    if (category === '1') {
        alert("Hello! I am an alert box!!");
    }
});
