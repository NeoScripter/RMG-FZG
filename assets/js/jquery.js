(function($) {
    $(document).ready(function() {
        $('#openPopup').click(function() {
            $('.popup').toggleClass('open');
        });

        $('.toggle-faq').click(function() {
            $(this).find('svg').toggleClass('openSvg');
            $(this).closest(".stages-faq__item").find(".stages-faq__item-content").slideToggle();
        });
    });
})(jQuery);