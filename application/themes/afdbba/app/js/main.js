// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

$(document).ready(function(){
    /* LOGO SVG IE */
    if (!Modernizr.svg) {
        $('img[src*="svg"]').attr('src', function () {
            return $(this).attr('src').replace('.svg', '.png');
        });
    }
    /* END LOGO SVG IE */

    $(".fancybox").fancybox({
        prevEffect	: 'none',
        nextEffect	: 'none',
        maxWidth	: 800,
        maxHeight	: 600,
        helpers	: {
            title	: {
                type: 'outside'
            },
            thumbs	: {
                width	: 50,
                height	: 50
            },
            overlay: {
                locked: false
            }
        }
    });

    var key = '65diabolo65';

    $('.dia-obfuscated').each(function(){
        var obfuscated = $(this).data("obfuscated");
        var res = obfuscated.replace(key, "@");
        var href='mailto:'+res;
    $(this).attr('href', href);
    $(this).text(res);
    });

    //-----------SMOTH SCROLL + Cacher le menu-----------//
    $('.next-slide').click(function(){
        var the_id = $(this).attr("href");

        $('html, body').animate({
            scrollTop:$(the_id).offset().top
        }, 'slow');
        return false;
    });

    $('.main-menu a').click(function(){
        var the_id = $(this).attr("href");

        $('html, body').animate({
            scrollTop:$(the_id).offset().top + 1
        }, 'slow');


        $('.menu').toggleClass('actif');
        $('.cache-menu-actif').toggleClass('cache-actif');
        $('body, html').toggleClass('stop-scroll');
        $('.open-menu-fix').removeClass('hideme');

        return false;
    });

    $('.txt-content a').click(function(){
        var the_id = $(this).attr("href");

        $('html, body').animate({
            scrollTop:$(the_id).offset().top + 1
        }, 'slow');
    });
    //-----------END SMOTH SCROLL-----------//

    //-----------JE CACHE / JE MONTRE LE MENU-----------//
    $( ".menu-mobile" ).click(function() {
        $('.menu').toggleClass('actif');
        $('.cache-menu-actif').toggleClass('cache-actif');
        $('body, html').toggleClass('stop-scroll');
        $('.open-menu-fix').removeClass('hideme');
    });

    $( ".cache-menu-actif, .close-menu").click(function() {
        $('.menu').toggleClass('actif');
        $('.cache-menu-actif').toggleClass('cache-actif');
        $('body, html').toggleClass('stop-scroll');
        $('.open-menu-fix').removeClass('hideme');
    });

    $( ".open-menu-fix" ).click(function() {
        $('.menu').toggleClass('actif');
        $('.cache-menu-actif').toggleClass('cache-actif');
        $('body, html').toggleClass('stop-scroll');
        $('.open-menu-fix').addClass('hideme');
    });
    //-----------END JE CACHE / JE MONTRE LE MENU-----------//

    if($('.success-message').length || $('.form-errors').length){
        $('#introduction').fadeOut("slow", function(){
            $('#inscription').fadeIn("slow");
        });
    }
$('.js-suscription').click(function(){
    $('#introduction').fadeOut("slow", function(){
        $('#inscription').fadeIn("slow");
    });
});






});






