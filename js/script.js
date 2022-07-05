// NAVIGATION
jQuery(document).ready(function ($) {

    "use strict";
    var siteMenuClone = function () {

        // Clone main navigation
        $('.clone-main-nav').each(function () {
            var $this = $(this);
            $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
        });

        setTimeout(function () {
            var counter = 0;
            $('.site-mobile-menu .menu-item-has-children').each(function () {
                var $this = $(this);

                $this.prepend('<span class="arrow-collapse collapsed">');

                $this.find('.arrow-collapse').attr({
                    'data-toggle': 'collapse',
                    'data-target': '#collapseItem' + counter,
                });

                $this.find('> ul').attr({
                    'class': 'collapse',
                    'id': 'collapseItem' + counter,
                });

                counter++;
            });
        }, 1000);

        $('body').on('click', '.arrow-collapse', function (e) {
            var $this = $(this);
            if ($this.closest('li').find('.collapse').hasClass('show')) {
                $this.removeClass('active');
            } else {
                $this.addClass('active');
            }
            e.preventDefault();

        });

        // Switch to mobile Menu at -768 screen size
        $(window).resize(function () {
            var $this = $(this),
                w = $this.width();

            if (w > 900) {
                if ($('body').hasClass('offcanvas-menu')) {
                    $('body').removeClass('offcanvas-menu');
                }
            }
        })

        // Open & Close side menu
        $('body').on('click', '.js-menu-toggle', function (e) {
            var $this = $(this);
            e.preventDefault();

            if ($('body').hasClass('offcanvas-menu')) {
                $('body').removeClass('offcanvas-menu');
                $this.removeClass('active');
            } else {
                $('body').addClass('offcanvas-menu');
                $this.addClass('active');
            }
        })

        // Close side menu when clicked outisde offcanvas
        $(document).mouseup(function (e) {
            var container = $(".site-mobile-menu");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('body').hasClass('offcanvas-menu')) {
                    $('body').removeClass('offcanvas-menu');
                }
            }
        });
    };
    siteMenuClone();
});

$(document).ready(function () {
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if (startchange.length) {
        $(document).scroll(function () {
            scroll_start = $(this).scrollTop();
            if (scroll_start > offset.top) {
                $(".container-fluid.for-header").css('background-color', 'rgba(255, 255, 255, 0.5)');
            } else {
                $('.container-fluid.for-header').css('background-color', 'rgba(255, 255, 255, 0.5)');
            }
        });
    }


    function toggleSearch(type) {
        if (type == "close") {
            //close search 
            $('.search').removeClass('is-visible');
            $('.search-trigger').removeClass('search-is-visible');

        } else {
            //toggle search visibility
            $('.search').toggleClass('is-visible');
            $('.search-trigger').toggleClass('search-is-visible');
        }
    }

    // Open Search Form
    $('.search-trigger').on('click', function (event) {
        event.preventDefault();
        toggleSearch();
    });


});


$(document).ready(function () {

    // SLIDER/S OPTIONS
    $('#homeSlider').owlCarousel({
        loop: true,
        autoplay: 10000,
        lazyLoad: true,
        animateOut: 'fadeOut',
        autoplayTimeout: 10000,
        smartSpeed: 1000,
        dots: true,
        items: 1,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            }
        }
    })

    $('#portfoliosSlider').owlCarousel({
        loop: true,
        autoplay: false,
        dots: true,
        items: 1,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            }
        }
    })
    $('#productsSlider').owlCarousel({
        loop: true,
        autoplay: true,
        dots: true,

        items: 1,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            }
        }
    })
    $('#testimonialSlider').owlCarousel({
        loop: true,
        dots: true,
        autoplay: 20000,
        autoplayTimeout: 20000,
        smartSpeed: 1000,
        lazyLoad: true,
        items: 1,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            }
        }
    })
})



$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#outriskHeader').addClass('sticky')
    } else {
        $('#outriskHeader').removeClass('sticky')
    }
});


