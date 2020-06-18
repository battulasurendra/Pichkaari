jQuery(function($){
    
    function populate_animations(){
        var cls = "animate";
        $("."+cls).each(function() {
            if ( isEleInView($(this), 200) ) {
                $(this).removeClass(cls);
                animation_class($(this));
            }
        });
    }
    
    function isEleInView (ele, verticaloffset) {
        var win = $(window);

        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var bounds = ele.offset();
        bounds.right = bounds.left + ele.outerWidth();
        bounds.bottom = bounds.top + ele.outerHeight();

        return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top + verticaloffset || viewport.top > bounds.bottom));
    }

    function animation_class(ele) {
        ele.addClass("animated");
        // anim class for media(video/audio) elements - added directly to the video/audio tag
        if (ele.hasClass('anim')) {
            el.get(0).play();
        } else if (ele.hasClass('up')) {
            ele.addClass('fadeInUp');
        } else if (ele.hasClass('right')) {
            ele.addClass('fadeInRight');
        } else if (ele.hasClass('down')) {
            ele.addClass('fadeInDown');
        } else if (ele.hasClass('left')) {
            ele.addClass('fadeInLeft');
        } else if (ele.hasClass('shrink')) {
            ele.addClass('fadeInShrink');
        } else if (ele.hasClass('explode')) {
            ele.addClass('fadeInExplode');
        } else {
            ele.addClass('fadeIn');
        }
    }

    function equalHeight(selector){
        var maxHeight = 0,
            elements = $(selector);
        
        elements.each(function(){
            var height = $(this).innerHeight();
            if(height > maxHeight) {
                maxHeight = height;
            }
        });

        elements.innerHeight(maxHeight);
    }

    function themeChanges() {
        var scrollPos = $(window).scrollTop();
                    
        sections.each(function(){
            var secPos = $(this).offset().top;
            var navTheme = $(this).data('nav') || '';
            var theme = $(this).data('theme') || '';
            var floats = $(this).data('float') || '';
            
            if((scrollPos + headerHeight/2) >= secPos) {
                header.removeClass().addClass(navTheme);
            }
            
            if((scrollPos + screenHeight/2) >= secPos) {
                if(floats === 'hide') {
                    scrollTop.hide();
                } else {
                    scrollTop.show();
                }

                scrollTop.removeClass('dark').addClass(theme);
            }

            if((scrollPos + screenHeight) >= secPos) {
                if(floats === 'hide') {
                    connect.hide();
                } else {
                    connect.show();
                }
                
                connect.removeClass('dark').addClass(theme);
            }
        });
    }

    var screenHeight = $(window).height(),
        headerHeight = $('#header-menu').height(),
        sections = $('section'),
        header = $('header'),
        scrollTop = $('#scrollToTop'),
        connect = $('.connectFloat');

    var actions = {
        preload: {
            init: function() {

                if($('#fullpage').length > 0){
                    $('#fullpage').fullpage({
                        //options here
                        autoScrolling:true,
                        slideSelector: '.fullpageSlide',
                        licenseKey: '897A7684-99CB4ACB-931F45AA-AA7D475B',
                        parallaxKey: '7E0A0283-09AA4525-99BE6DBB-A249FD6C',                    
                        scrollOverflowResetKey: '11698024-1B244CC9-A3467738-31627BAC',                    
                        parallax: true,
                        scrollOverflow: true,
                        scrollOverflowReset: true,
                        afterLoad: function(origin, destination, direction){
                            populate_animations();
                            themeChanges();
                        }
                    });
                
                    //methods
                    $.fn.fullpage.setAllowScrolling(true);
                }

                $('#scrollToTopBtn').click(function() {
                    $.fn.fullpage.moveTo(1);
                    $("html, body").animate({ scrollTop: "0" });
                });

                $(window).on("scroll", function() {
                    populate_animations();
                    themeChanges();
                });
            }
        },
        home: {
            init: function() {
                var categories = ['branding', 'package design', 'marketing & communication', 'ui/ux development', 'information design', 'motion graphics & video'];

                $('.clientLocation').hover(function() {
                    var ele = $(this);
                    $('.clientLocation.active').removeClass('active');
                    $(ele).addClass('active');
                    $('#clientCountry').html($(ele).data('location'));
                });

                $('#categorySlider').slick({
                    arrows: false,
                    infinite: true,
                    dots: true,
                    autoplay: false,
                    autoplaySpeed: 5000,
                    adaptiveHeight: true,
                    customPaging: function(slider, i) {
                        return '<div class="ttu fc4 fw5 fs1">' + categories[i] + '</div>';
                    },
                    appendDots: "#categorySliderLinks"
                });

                $('#brandSlider').slick({
                    centerMode: true,
                    infinite: true,
                    variableWidth: true,
                    autoplay: true,
                    autoplaySpeed: 1000,
                    prevArrow: $("#brandSliderArrow1"),
                    nextArrow: $("#brandSliderArrow2")
                });

                $('#testimonialSlider').on('init',function(event, slick) {
                    $('#testimonialSliderPosition').html(slick.currentSlide+1);
                    $('#testimonialSliderLength').html(slick.slideCount);
                }).on('afterChange', function(event, slick, currentSlide){
                    $('#testimonialSliderPosition').html(slick.currentSlide+1);
                }).slick({
                    infinite: false,
                    variableWidth: true,
                    autoplay: false,
                    autoplaySpeed: 5000,
                    adaptiveHeight: true,
                    prevArrow: $("#testimonialSliderArrow1"),
                    nextArrow: $("#testimonialSliderArrow2")
                });
            }
        },
        career: {
            init: function() {
                $('#dealSlider').on('init',function(event, slick) {
                    $('#dealSliderPosition').html(slick.currentSlide+1);
                    $('#dealSliderLength').html(slick.slideCount);
                }).on('afterChange', function(event, slick, currentSlide){
                    $('#dealSliderPosition').html(slick.currentSlide+1);
                }).slick({
                    infinite: true,
                    variableWidth: true,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    adaptiveHeight: true,
                    prevArrow: $("#dealSliderArrow1"),
                    nextArrow: $("#dealSliderArrow2")
                });

                equalHeight($('#dealSlider .slide .secText'));

                $('#slaySlider').slick({
                    infinite: true,
                    autoplay: false,
                    autoplaySpeed: 5000,
                    adaptiveHeight: true,
                    // fade: true,
                    // cssEase: 'linear',
                    prevArrow: $("#slaySliderArrow1"),
                    nextArrow: $("#slaySliderArrow2")
                });

                $('#jobsSlider').slick({
                    infinite: true,
                    variableWidth: true,
                    autoplay: false,
                    autoplaySpeed: 5000,
                    adaptiveHeight: true,
                    prevArrow: $("#jobsSliderArrow1"),
                    nextArrow: $("#jobsSliderArrow2")
                });
            }
        },
        about: {
            init: function() {

                $('#empathySlider').slick({
                    infinite: true,
                    autoplay: false,
                    autoplaySpeed: 5000,
                    adaptiveHeight: true,
                    prevArrow: $("#empathySliderArrow1"),
                    nextArrow: $("#empathySliderArrow2")
                });
                
                $('#founderSlider').slick({
                    infinite: true,
                    autoplay: false,
                    autoplaySpeed: 5000,
                    adaptiveHeight: true,
                    prevArrow: $("#founderSliderArrow1"),
                    nextArrow: $("#founderSliderArrow2")
                });
                
            }
        },
        postload: {
            init: function() {
                $('#page_loader').fadeOut();
                populate_animations();                  
                themeChanges();
            }
        }
    },
    page = {
        fire: function(func, funcname, args) {
            var namespace = actions;
            funcname = (funcname === undefined) ? 'init' : funcname;
            if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function() {
            window.scrollTo(0,0);
            page.fire("preload");
            $.each(document.body.className.replace(/-/g, "_").split(/\s+/), function(i, v) {
                page.fire(v);
            });
            page.fire("postload");
        }
    };

    $(document).ready(page.loadEvents);
});