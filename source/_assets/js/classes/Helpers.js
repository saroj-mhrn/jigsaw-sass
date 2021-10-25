import '../global.js';

export const InputFilled = () => {
    var input = $('input');

    input.keyup(function () {
        if ($(this).val() == 0) {
            $(this).removeClass('input-filled');
        } else {
            $(this).addClass('input-filled');
        }
    });
};

export const FixedHeader = () => {
    var lastScroll = jQuery(window).scrollTop();
    jQuery(window).on('scroll', function (e) {
        var win = jQuery(window),
            currentScroll = win.scrollTop(),
            fixedItem = jQuery('.header-sticks');
        if (currentScroll > 0) {
            fixedItem.addClass('header-sticky');
        } else {
            fixedItem.removeClass('header-sticky');
        }
        lastScroll = currentScroll;
    });
    jQuery(window).scroll();
};