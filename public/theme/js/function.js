$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#dynamic').addClass('newClass');
    } else {
        $('#dynamic').removeClass('newClass');
    }
});

// mouse scroll javascript: start here
wow = new WOW(
    {
        animateClass: 'animated',
        offset: 100,
    }
);
wow.init();

// mouse scroll javascript: end here


