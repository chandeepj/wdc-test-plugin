(function ($) {
    if( ! $('body').is('.post-type-archive-wdc-demo, .single-wdc-demo') ) {
        return;
    }

    window.onload = (function () {
        replaceHelloText();
    })();

    function replaceHelloText() {
        var now = new Date();
        var hour = now.getHours();
        if (hour <= 11) {
            $('.entry-content').html(function() {
                return $(this).html().replace( /Hello/g, 'Good Morning' );
            });
        }
    }
})(jQuery);