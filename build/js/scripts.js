$(document).ready(function () {
    var scrollTop = 0;
    $(window).scroll(function () {
        scrollTop = $(window).scrollTop();
        $('.counter').html(scrollTop);

        if (scrollTop >= 100) {
            $('#global-nav').addClass('scrolled-nav');
        } else if (scrollTop < 100) {
            $('#global-nav').removeClass('scrolled-nav');
        }

    });

});


$('input[type=range]').on('input', function (e) {
    var min = e.target.min,
        max = e.target.max,
        val = e.target.value;

    $(e.target).css({
        'backgroundSize': (val - min) * 100 / (max - min) + '% 100%'
    });
}).trigger('input');