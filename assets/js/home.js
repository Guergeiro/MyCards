$(document).ready(function() {
        $("#arrowOrderFirst").on("click", function() {
            $(".anchorArrowSecond").removeClass('d-none');
            $(".anchorArrowFirst").addClass('d-none');
        });
        
        $("#arrowOrderSecond").on("click", function() {
            $(".anchorArrowSecond").addClass('d-none');
            $(".anchorArrowFirst").removeClass('d-none');
        });
});