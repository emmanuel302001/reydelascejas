$(document).ready(function () {
    var visEle = $(".card-sites:visible");
    var hidEle = $(".card-sites:not(:visible)");

    if (hidEle.length > 0) {
        $('.card-sites:last').after('<button class="btn btn-secondary showMore">Mostrar Más</button>')
    }

    $(document).on("click", ".showMore", function () {
        hidEle.first().show();
        hidEle = $(".card-sites:not(:visible)");
        if (hidEle.length == 0) {
            $(".showMore").hide();
        }
    });
});

$(".navbar .nav-link").on("click", function () {
    $(".navbar").find(".active").removeClass("active");
    $(this).addClass("active");
});