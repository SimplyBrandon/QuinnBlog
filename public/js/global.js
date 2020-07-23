$(document).ready(function(){
    $(window).on('scroll', function(){
        if($(window).scrollTop() > 200){
            $('header#sticky-scroll').addClass('bg-white shadow-lg');
            $('header#sticky-scroll nav').addClass('text-black');
        } else {
            $('header#sticky-scroll').removeClass('bg-white shadow-lg');
            $('header#sticky-scroll nav').removeClass('text-black');
        }
    });

    $('html').easeScroll();

    $('#open-navigation').on('click', function(){
        var navContainer = $('#site_navigation');
        var eventHandle = $(this);


        navContainer.addClass('open');

        if(eventHandle.hasClass('nav-open')){
            eventHandle.removeClass('nav-open');
    
            eventHandle.animateRotate(0, 200);
            navContainer.animate({
                'margin-right': '-20%'
            });
            $('body').animate({
                'margin-left': '0'
            });
            $('.hero-text').animate({
                'width': '50%'
            });
        } else {
            eventHandle.addClass('nav-open');
            
            eventHandle.animateRotate(180, 200);
            navContainer.animate({
                'margin-right': '0'
            });
            $('body').animate({
                'margin-left': '-20%'
            });
            $('.hero-text').animate({
                'width': '41.666667%'
            });
        }
    });

    $.fn.animateRotate = function(angle, duration, easing, complete) {
        var args = $.speed(duration, easing, complete);
        var step = args.step;
        return this.each(function(i, e) {
            args.complete = $.proxy(args.complete, e);
            args.step = function(now) {
                $.style(e, 'transform', 'rotate(' + now + 'deg)');
                if (step) return step.apply(e, arguments);
            };

            $({deg: 0}).animate({deg: angle}, args);
        });
    };
});