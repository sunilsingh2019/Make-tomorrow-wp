jQuery(document).ready(function ($) {
    $('.full-nav-toggle').click(function () {
        var fullNav = $('#fullNav'),
            siteContent = $('.sitecontent');

        if (fullNav.hasClass('active')) {
            fullNav.removeClass('active');
            siteContent.removeClass('nav-open');
            $('html').css('overflowY', '');
        } else {
            fullNav.addClass('active');
            siteContent.addClass('nav-open');
            $('html').css('overflowY', 'hidden');
        }
    });

    $('.scroll-down').click(function () {
        var parentSection = $(this).parents('.section'),
            nextSection = parentSection.next('.section');

        $("html, body").stop().animate({
            scrollTop: $(nextSection).offset().top
        }, 500);

    });
});