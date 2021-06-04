/* ----------------- Start Document ----------------- */

(function ($) {
    "use strict";

    $(document).ready(function () {

        //add class for mobile nav button
        $(function () {
            setTimeout(function () {
                if ($('.mobile-nav-button').length) {
                    $('.mobile-nav-button').on("click", function () {
                        $('.sidebar-nav-wrap').addClass("mobile-nav");
                        $('body').addClass("mobile-nav-fix");
                        $('body-overlay').addClass("body-overlay-inner");

                    });
                }
                if ($('.button.cross-btn').length) {
                    $('button.cross-btn').on("click", function () {
                        $('.sidebar-nav-wrap').removeClass("mobile-nav");
                        $('body').removeClass("mobile-nav-fix");
                        $('body-overlay').removeClass("body-overlay-inner");
                        $('ul.about-child.open').removeClass('open');
                        $('a.sidebar-nav-about').removeClass("active");
                        $('ul.leting-child.open').removeClass('open');
                        $('a.let-your-home').removeClass("active");
                        $('ul.mobile-services-child.open').removeClass('open');
                        $('a.mobile-services').removeClass("active");
                    });
                }
                if ($('a.sidebar-nav-about').length) {
                    $('a.sidebar-nav-about').on("click", function () {
                        $(this).toggleClass("active");
                        $('ul.about-child').toggleClass("open");
                        $('ul.leting-child.open').removeClass('open');
                        $('a.let-your-home').removeClass("active");
                        $('ul.mobile-services-child.open').removeClass('open');
                        $('a.mobile-services').removeClass("active");
                    });
                }
                if ($('a.let-your-home').length) {
                    $('a.let-your-home').on("click", function () {
                        $(this).toggleClass("active");
                        $('ul.leting-child').toggleClass("open");
                        $('ul.about-child.open').removeClass('open');
                        $('a.sidebar-nav-about').removeClass("active");
                        $('ul.mobile-services-child.open').removeClass('open');
                        $('a.mobile-services').removeClass("active");
                    });
                }
                if ($('a.mobile-services').length) {
                    $('a.mobile-services').on("click", function () {
                        $(this).toggleClass("active");
                        $('ul.mobile-services-child').toggleClass("open");
                        $('ul.about-child.open').removeClass('open');
                        $('a.sidebar-nav-about').removeClass("active");
                        $('ul.leting-child.open').removeClass('open');
                        $('a.let-your-home').removeClass("active");
                    });
                }

                $('.body-overlay').on("click", function () {
                    $('.sidebar-nav-wrap').removeClass("mobile-nav");
                    $('body').removeClass("mobile-nav-fix");
                    $('body-overlay').removeClass("body-overlay-inner");
                    $('ul.about-child.open').removeClass('open');
                    $('a.sidebar-nav-about').removeClass("active");
                    $('ul.leting-child.open').removeClass('open');
                    $('a.let-your-home').removeClass("active");
                    $('ul.mobile-services-child.open').removeClass('open');
                    $('a.mobile-services').removeClass("active");


                });
            }, 1000);

        });


        /*--------------------------------------------------*/
        /*  Mobile Menu - mmenu.js
        /*--------------------------------------------------*/
        $(function () {
            function mmenuInit() {
                var wi = $(window).width();
                if (wi <= '1024') {

                    $(".mmenu-init").remove();
                    $("#navigation").clone().addClass("mmenu-init").insertBefore("#navigation").removeAttr('id').removeClass('style-1 style-2')
                        .find('ul, div').removeClass('style-1 style-2 mega-menu mega-menu-content mega-menu-section').removeAttr('id');
                    $(".mmenu-init").find("ul").addClass("mm-listview");
                    $(".mmenu-init").find(".mobile-styles .mm-listview").unwrap();


                    $(".mmenu-init").mmenu({
                        "counters": true
                    }, {
                        // configuration
                        offCanvas: {
                            pageNodetype: "#wrapper"
                        }
                    });

                    var mmenuAPI = $(".mmenu-init").data("mmenu");
                    var $icon = $(".hamburger");

                    $(".mmenu-trigger").click(function () {
                        mmenuAPI.open();
                    });

                    mmenuAPI.bind("open:finish", function () {
                        setTimeout(function () {
                            $icon.addClass("is-active");
                        });
                    });
                    mmenuAPI.bind("close:finish", function () {
                        setTimeout(function () {
                            $icon.removeClass("is-active");
                        });
                    });


                }
                $(".mm-next").addClass("mm-fullsubopen");
            }

            mmenuInit();
            $(window).resize(function () {
                mmenuInit();
            });
        });

        /*  User Menu */
        if ($('.mobile-nav-button').length) {
            $('.mobile-nav-button').on('click', function () {
                $(this).toggleClass('active');
            });
        }

        // Closes notification dropdown on click outside the conatainer
        var mouse_is_inside = false;
        if ($('.user-menu').length) {
            $(".user-menu").on("mouseenter", function () {
                mouse_is_inside = true;
            });
        }
        if ($('.user-menu').length) {
            $(".user-menu").on("mouseleave", function () {
                mouse_is_inside = false;
            });
        }

        $("body").mouseup(function () {
            if (!mouse_is_inside) $(".user-menu").removeClass('active');
        });


        /*----------------------------------------------------*/
        /*  Sticky Header
        /*----------------------------------------------------*/
        $("#header").not("#header.not-sticky").clone(true).addClass('cloned unsticky').insertAfter("#header");
        $('#header.cloned #sign-in-dialog').remove();
        $("#navigation.style-2").clone(true).addClass('cloned unsticky').insertAfter("#navigation.style-2");

        // Logo for header style 2
        $("#logo .sticky-logo").clone(true).prependTo("#navigation.style-2.cloned ul#responsive");


        // sticky header script
        var headerOffset = 140; // height on which the sticky header will shows

        $(window).scroll(function () {
            if ($(window).scrollTop() >= headerOffset) {
                $("#header.cloned").addClass('sticky').removeClass("unsticky");
                $("#navigation.style-2.cloned").addClass('sticky').removeClass("unsticky");
            } else {
                $("#header.cloned").addClass('unsticky').removeClass("sticky");
                $("#navigation.style-2.cloned").addClass('unsticky').removeClass("sticky");
            }
        });

        // Sticky Logo
        $(window).on('scroll load', function () {
            $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
        });

        /*----------------------------------------------------*/
        /*  Back to Top
        /*----------------------------------------------------*/
        var pxShow = 600; // height on which the button will show
        var scrollSpeed = 500; // how slow / fast you want the button to scroll to top.

        $(window).scroll(function () {
            if ($(window).scrollTop() >= pxShow) {
                $("#backtotop").addClass('visible');
            } else {
                $("#backtotop").removeClass('visible');
            }
        });
        if ($('#backtotop a').length) {
            $('#backtotop a').on('click', function () {
                $('html, body').animate({scrollTop: 0}, scrollSpeed);
                return false;
            });
        }

        /*----------------------------------------------------*/

        /*  Inline CSS replacement for backgrounds etc.
        /*----------------------------------------------------*/
        function inlineCSS() {

            // Common Inline CSS
            $(".main-search-container, section.fullwidth, .listing-slider .item, .listing-slider-small .item, .address-container, .img-box-background, .image-edge, .edge-bg").each(function () {
                var attrImageBG = $(this).attr('data-background-image');
                var attrColorBG = $(this).attr('data-background-color');

                if (attrImageBG !== undefined) {
                    $(this).css('background-image', 'url(' + attrImageBG + ')');
                }

                if (attrColorBG !== undefined) {
                    $(this).css('background', '' + attrColorBG + '');
                }
            });

        }

        // Init
        inlineCSS();

        function parallaxBG() {

            $('.parallax').prepend('<div class="parallax-overlay"></div>');
            if ($('.parallax').length) {
                $(".parallax").each(function () {
                    var attrImage = $(this).attr('data-background');
                    var attrColor = $(this).attr('data-color');
                    var attrOpacity = $(this).attr('data-color-opacity');

                    if (attrImage !== undefined) {
                        $(this).css('background-image', 'url(' + attrImage + ')');
                    }

                    if (attrColor !== undefined) {
                        $(this).find(".parallax-overlay").css('background-color', '' + attrColor + '');
                    }

                    if (attrOpacity !== undefined) {
                        $(this).find(".parallax-overlay").css('opacity', '' + attrOpacity + '');
                    }

                });
            }
        }

        parallaxBG();


        /*----------------------------------------------------*/
        /*  Image Box
        /*----------------------------------------------------*/
        if ($('.category-box').length) {
            $('.category-box').each(function () {

                // add a photo container
                $(this).append('<div class="category-box-background"></div>');

                // set up a background image for each tile based on data-background-image attribute
                $(this).children('.category-box-background').css({'background-image': 'url(' + $(this).attr('data-background-image') + ')'});

                // background animation on mousemove
                // $(this).on('mousemove', function(e){
                //   $(this).children('.category-box-background').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
                // })
            });
        }

        /*----------------------------------------------------*/
        /*  Image Box
        /*----------------------------------------------------*/
        if ($('.img-box').length) {
            $('.img-box').each(function () {
                $(this).append('<div class="img-box-background"></div>');
                $(this).children('.img-box-background').css({'background-image': 'url(' + $(this).attr('data-background-image') + ')'});
            });
        }


        /*----------------------------------------------------*/
        /*  Parallax
        /*----------------------------------------------------*/

        /* detect touch */
        if ("ontouchstart" in window) {
            document.documentElement.className = document.documentElement.className + " touch";
        }
        if (!$("html").hasClass("touch")) {
            /* background fix */
            $(".parallax").css("background-attachment", "fixed");
        }

        /* fix vertical when not overflow
        call fullscreenFix() if .fullscreen content changes */
        function fullscreenFix() {
            var h = $('body').height();
            // set .fullscreen height
            $(".content-b").each(function (i) {
                if ($(this).innerHeight() > h) {
                    $(this).closest(".fullscreen").addClass("overflow");
                }
            });
        }

        $(window).resize(fullscreenFix);
        fullscreenFix();

        /* resize background images */
        function backgroundResize() {
            var windowH = $(window).height();
            $(".parallax").each(function (i) {
                var path = $(this);
                // variables
                var contW = path.width();
                var contH = path.height();
                var imgW = path.attr("data-img-width");
                var imgH = path.attr("data-img-height");
                var ratio = imgW / imgH;
                // overflowing difference
                var diff = 100;
                diff = diff ? diff : 0;
                // remaining height to have fullscreen image only on parallax
                var remainingH = 0;
                if (path.hasClass("parallax") && !$("html").hasClass("touch")) {
                    //var maxH = contH > windowH ? contH : windowH;
                    remainingH = windowH - contH;
                }
                // set img values depending on cont
                imgH = contH + remainingH + diff;
                imgW = imgH * ratio;
                // fix when too large
                if (contW > imgW) {
                    imgW = contW;
                    imgH = imgW / ratio;
                }
                //
                path.data("resized-imgW", imgW);
                path.data("resized-imgH", imgH);
                path.css("background-size", imgW + "px " + imgH + "px");
            });
        }


        $(window).resize(backgroundResize);
        $(window).focus(backgroundResize);
        backgroundResize();

        /* set parallax background-position */
        function parallaxPosition(e) {
            var heightWindow = $(window).height();
            var topWindow = $(window).scrollTop();
            var bottomWindow = topWindow + heightWindow;
            var currentWindow = (topWindow + bottomWindow) / 2;
            $(".parallax").each(function (i) {
                var path = $(this);
                var height = path.height();
                var top = path.offset().top;
                var bottom = top + height;
                // only when in range
                if (bottomWindow > top && topWindow < bottom) {
                    //var imgW = path.data("resized-imgW");
                    var imgH = path.data("resized-imgH");
                    // min when image touch top of window
                    var min = 0;
                    // max when image touch bottom of window
                    var max = -imgH + heightWindow;
                    // overflow changes parallax
                    var overflowH = height < heightWindow ? imgH - height : imgH - heightWindow; // fix height on overflow
                    top = top - overflowH;
                    bottom = bottom + overflowH;


                    // value with linear interpolation
                    // var value = min + (max - min) * (currentWindow - top) / (bottom - top);
                    var value = 0;
                    if ($('.parallax').is(".titlebar")) {
                        value = min + (max - min) * (currentWindow - top) / (bottom - top) * 2;
                    } else {
                        value = min + (max - min) * (currentWindow - top) / (bottom - top);
                    }

                    // set background-position
                    var orizontalPosition = path.attr("data-oriz-pos");
                    orizontalPosition = orizontalPosition ? orizontalPosition : "50%";
                    $(this).css("background-position", orizontalPosition + " " + value + "px");
                }
            });
        }

        if (!$("html").hasClass("touch")) {
            $(window).resize(parallaxPosition);
            //$(window).focus(parallaxPosition);
            $(window).scroll(parallaxPosition);
            parallaxPosition();
        }

        // Jumping background fix for IE
        if (navigator.userAgent.match(/Trident\/7\./)) { // if IE
            $('body').on("mousewheel", function () {
                event.preventDefault();

                var wheelDelta = event.wheelDelta;
                var currentScrollPosition = window.pageYOffset;
                window.scrollTo(0, currentScrollPosition - wheelDelta);
            });
        }


        /*----------------------------------------------------*/
        /*  Chosen Plugin
        /*----------------------------------------------------*/

        var config = {
            '.chosen-select': {disable_search_threshold: 10, width: "100%"},
            '.chosen-select-deselect': {allow_single_deselect: true, width: "100%"},
            '.chosen-select-no-single': {disable_search_threshold: 100, width: "100%"},
            '.chosen-select-no-single.no-search': {disable_search_threshold: 10, width: "100%"},
            '.chosen-select-no-results': {no_results_text: 'Oops, nothing found!'},
            '.chosen-select-width': {width: "95%"}
        };

        for (var selector in config) {
            if (config.hasOwnProperty(selector)) {
                $(selector).chosen(config[selector]);
            }
        }


        /*----------------------------------------------------*/
        /*  Magnific Popup
        /*----------------------------------------------------*/
        if ($('.mfp-gallery-container').length) {
            $('.mfp-gallery-container').each(function () { // the containers for all your galleries

                $(this).magnificPopup({
                    type: 'image',
                    delegate: 'a.mfp-gallery',

                    fixedContentPos: true,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: false,
                    preloader: true,

                    removalDelay: 0,
                    mainClass: 'mfp-fade',

                    gallery: {enabled: true, tCounter: ''}
                });
            });
        }
        if ($('.popup-with-zoom-anim').length) {

            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        }
        if ($('.mfp-image').length) {
            $('.mfp-image').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-fade',
                image: {
                    verticalFit: true
                }
            });
        }
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });


        /*----------------------------------------------------*/
        /*  Slick Carousel
        /*----------------------------------------------------*/
        if ($('.fullwidth-slick-carousel').length) {
            $('.fullwidth-slick-carousel').slick({
                centerMode: true,
                centerPadding: '20%',
                slidesToShow: 3,
                dots: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1920,
                        settings: {
                            centerPadding: '15%',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 1441,
                        settings: {
                            centerPadding: '10%',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 1025,
                        settings: {
                            centerPadding: '10px',
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            centerPadding: '10px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
            // Fix for carousel if there are less than 4 categories
            $(window).on('load resize', function (e) {
                var carouselListItems = $(".fullwidth-slick-carousel .fw-carousel-item").length;
                if (carouselListItems < 4) {
                    $('.fullwidth-slick-carousel .slick-slide').css({
                        'pointer-events': 'all',
                        'opacity': '1',
                    });
                }
            });
        }

        if ($('.testimonial-carousel').length) {
            $('.testimonial-carousel').slick({
                centerMode: true,
                centerPadding: '34%',
                slidesToShow: 1,
                dots: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1025,
                        settings: {
                            centerPadding: '10px',
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            centerPadding: '10px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        }
        if ($('.listing-slider').length) {
            $('.listing-slider').slick({
                centerMode: true,
                centerPadding: '20%',
                slidesToShow: 2,
                responsive: [
                    {
                        breakpoint: 1367,
                        settings: {
                            centerPadding: '15%'
                        }
                    },
                    {
                        breakpoint: 1025,
                        settings: {
                            centerPadding: '0'
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            centerPadding: '0',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        }

        if ($('.listing-slider-small').length) {
            $('.listing-slider-small').slick({
                centerMode: true,
                centerPadding: '0',
                slidesToShow: 3,
                responsive: [
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            })
        }

        // Mobile fix for small listing slider
        $(window).on('load resize', function (e) {
            var carouselListItems = $(".listing-slider-small .slick-track").children().length
            if (carouselListItems < 2) {
                $('.listing-slider-small .slick-track').css({
                    transform: 'none'
                });
            }
        });

        if ($('.simple-slick-carousel').length) {
            $('.simple-slick-carousel').slick({
                infinite: true,
                cssEase: 'linear',
                slidesToShow: 4,
                slidesToScroll: 1,


                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,

                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 476,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 350,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

        }
        if ($('.simple-fw-slick-carousel').length) {
            $('.simple-fw-slick-carousel').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                dots: true,
                arrows: false,

                responsive: [
                    {
                        breakpoint: 1610,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 1365,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        }
        if ($('.logo-slick-carousel').length) {
            $('.logo-slick-carousel').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 4,
                dots: true,
                arrows: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }


        /*----------------------------------------------------*/
        /*  Tabs
        /*----------------------------------------------------*/

        var $tabsNav = $('.tabs-nav'),
            $tabsNavLis = $tabsNav.children('li');

        $tabsNav.each(function () {
            var $this = $(this);

            $this.next().children('.tab-content').stop(true, true).hide()
                .first().show();

            $this.children('li').first().addClass('active').stop(true, true).show();
        });

        $tabsNavLis.on('click', function (e) {
            var $this = $(this);

            $this.siblings().removeClass('active').end()
                .addClass('active');

            $this.parent().next().children('.tab-content').stop(true, true).hide()
                .siblings($this.find('a').attr('href')).fadeIn();

            e.preventDefault();
        });
        var hash = window.location.hash;
        var anchor = $('.tabs-nav a[href="' + hash + '"]');
        if (anchor.length === 0) {
            $(".tabs-nav li:first").addClass("active").show(); //Activate first tab
            $(".tab-content:first").show(); //Show first tab content
        } else {
            anchor.parent('li').click();
        }


        /*----------------------------------------------------*/
        /*  Accordions
        /*----------------------------------------------------*/
        if ($('.accordion').length) {
            var $accor = $('.accordion');

            $accor.each(function () {
                $(this).toggleClass('ui-accordion ui-widget ui-helper-reset');
                $(this).find('h3').addClass('ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all');
                $(this).find('div').addClass('ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom');
                $(this).find("div").hide();

            });

            var $trigger = $accor.find('h3');

            $trigger.on('click', function (e) {
                e.preventDefault();

                var location = $(this).parent();

                if ($(this).next().is(':hidden')) {
                    var $triggerloc = $('h3', location);
                    $triggerloc.removeClass('ui-accordion-header-active ui-state-active ui-corner-top').next().slideUp(300);
                    $triggerloc.find('span').removeClass('ui-accordion-icon-active');
                    $(this).find('span').addClass('ui-accordion-icon-active');
                    $(this).addClass('ui-accordion-header-active ui-state-active ui-corner-top').next().slideDown(300);
                }
            });

        }
        /*----------------------------------------------------*/
        /*	Toggle
        /*----------------------------------------------------*/

        $(".toggle-container").hide();

        $('.trigger, .trigger.opened').on('click', function (a) {
            $(this).toggleClass('active');
            a.preventDefault();
        });

        $(".trigger").on('click', function () {
            $(this).next(".toggle-container").slideToggle(300);
        });

        $(".trigger.opened").addClass("active").next(".toggle-container").show();


        /*----------------------------------------------------*/
        /*  Tooltips
        /*----------------------------------------------------*/

        $(".tooltip.top").tipTip({
            defaultPosition: "top"
        });

        $(".tooltip.bottom").tipTip({
            defaultPosition: "bottom"
        });

        $(".tooltip.left").tipTip({
            defaultPosition: "left"
        });

        $(".tooltip.right").tipTip({
            defaultPosition: "right"
        });


        /*----------------------------------------------------*/

        /*  Rating Overview Background Colors
        /*----------------------------------------------------*/
        function ratingOverview(ratingElem) {

            $(ratingElem).each(function () {
                var dataRating = $(this).attr('data-rating');

                // Rules
                if (dataRating >= 4.0) {
                    $(this).addClass('high');
                    $(this).find('.rating-bars-rating-inner').css({width: (dataRating / 5) * 100 + "%",});
                } else if (dataRating >= 3.0) {
                    $(this).addClass('mid');
                    $(this).find('.rating-bars-rating-inner').css({width: (dataRating / 5) * 80 + "%",});
                } else if (dataRating < 3.0) {
                    $(this).addClass('low');
                    $(this).find('.rating-bars-rating-inner').css({width: (dataRating / 5) * 60 + "%",});
                }

            });
        }

        ratingOverview('.rating-bars-rating');

        $(window).on('resize', function () {
            ratingOverview('.rating-bars-rating');
        });


        /*----------------------------------------------------*/
        /*  Custom Upload Button
        /*----------------------------------------------------*/

        var uploadButton = {
            $button: $('.uploadButton-input'),
            $nameField: $('.uploadButton-file-name')
        };

        uploadButton.$button.on('change', function () {
            _populateFileField($(this));
        });

        function _populateFileField($button) {
            var selectedFile = [];
            for (var i = 0; i < $button.get(0).files.length; ++i) {
                selectedFile.push($button.get(0).files[i].name + '<br>');
            }
            uploadButton.$nameField.html(selectedFile);
        }


        /*----------------------------------------------------*/
        /*  Recaptcha Holder
        /*----------------------------------------------------*/
        if ($('.message-vendor').length) {
            $('.message-vendor').on('click', function () {
                $('.captcha-holder').addClass('visible')
            });
        }


        /*----------------------------------------------------*/
        /*  Like Icon Trigger
        /*----------------------------------------------------*/
        $('.like-icon, .widget-button, .like-button').on('click', function (e) {
            e.preventDefault();
            $(this).toggleClass('liked');
            $(this).children('.like-icon').toggleClass('liked');
        });

        /*----------------------------------------------------*/
        /*  Searh Form More Options
        /*----------------------------------------------------*/
        if ($('.more-search-options-trigger').length) {
            $('.more-search-options-trigger').on('click', function (e) {
                e.preventDefault();
                $('.more-search-options, .more-search-options-trigger').toggleClass('active');
                $('.more-search-options.relative').animate({height: 'toggle', opacity: 'toggle'}, 300);
            });

        }
        /*----------------------------------------------------*/
        /*  Half Screen Map Adjustments
        /*----------------------------------------------------*/
        $(window).on('load resize', function () {
            var winWidth = $(window).width();
            var headerHeight = $("#header-container").height(); // height on which the sticky header will shows

            $('.fs-inner-container, .fs-inner-container.map-fixed, #dashboard').css('padding-top', headerHeight);

            if (winWidth < 992) {
                $('.fs-inner-container.map-fixed').insertBefore('.fs-inner-container.content');
            } else {
                $('.fs-inner-container.content').insertBefore('.fs-inner-container.map-fixed');
            }

        });


        /*----------------------------------------------------*/
        /*  Rating Script Init
        /*----------------------------------------------------*/

        // Leave Rating
        if ($('.leave-rating input').length) {
            $('.leave-rating input').change(function () {
                var $radio = $(this);
                $('.leave-rating .selected').removeClass('selected');
                $radio.closest('label').addClass('selected');
            });
        }


        /*----------------------------------------------------*/
        /* Dashboard Scripts
        /*----------------------------------------------------*/
        $('.dashboard-nav ul li a').on('click', function () {
            if ($(this).closest('li').has('ul').length) {
                $(this).parent('li').toggleClass('active');
            }
        });

        // Dashbaord Nav Scrolling
        $(window).on('load resize', function () {
            var wrapperHeight = window.innerHeight;
            var headerHeight = $("#header-container").height();
            var winWidth = $(window).width();

            if (winWidth > 992) {
                $(".dashboard-nav-inner").css('max-height', wrapperHeight - headerHeight);
            } else {
                $(".dashboard-nav-inner").css('max-height', '');
            }
        });


        // Tooltip
        $(".tip").each(function () {
            var tipContent = $(this).attr('data-tip-content');
            $(this).append('<div class="tip-content">' + tipContent + '</div>');
        });

        $(".verified-badge.with-tip").each(function () {
            var tipContent = $(this).attr('data-tip-content');
            $(this).append('<div class="tip-content">' + tipContent + '</div>');
        });

        $(window).on('load resize', function () {
            var verifiedBadge = $('.verified-badge.with-tip');
            verifiedBadge.find('.tip-content').css({
                'width': verifiedBadge.outerWidth(),
                'max-width': verifiedBadge.outerWidth(),
            });
        });


        // Switcher
        if ($('.add-listing-section').length) {
            $(".add-listing-section").each(function () {

                var switcherSection = $(this);
                var switcherInput = $(this).find('.switch input');

                if (switcherInput.is(':checked')) {
                    $(switcherSection).addClass('switcher-on');
                }

                switcherInput.change(function () {
                    if (this.checked === true) {
                        $(switcherSection).addClass('switcher-on');
                    } else {
                        $(switcherSection).removeClass('switcher-on');
                    }
                });

            });

        }
        // Responsive Nav Trigger
        if ($('.dashboard-responsive-nav-trigger').length) {
            $('.dashboard-responsive-nav-trigger').on('click', function (e) {
                e.preventDefault();
                $(this).toggleClass('active');

                var dashboardNavContainer = $('body').find(".dashboard-nav");

                if ($(this).hasClass('active')) {
                    $(dashboardNavContainer).addClass('active');
                } else {
                    $(dashboardNavContainer).removeClass('active');
                }

            });
        }
        // Dashbaord Messages Alignment
        $(window).on('load resize', function () {
            var msgContentHeight = $(".message-content").outerHeight();
            var msgInboxHeight = $(".messages-inbox ul").height();

            if (msgContentHeight > msgInboxHeight) {
                $(".messages-container-inner .messages-inbox ul").css('max-height', msgContentHeight)
            }
        });


        /*----------------------------------------------------*/
        /* Time Slots
        /*----------------------------------------------------*/

        // Add validation parts
        if ($(".day-slots").length) {
            $('.day-slots').each(function () {

                var daySlots = $(this);

                daySlots.find('.add-slot-btn').on('click', function () {

                    var slotTime_Start = daySlots.find('.add-slot-inputs input.time-slot-start').val();
                    var slotTimePM_AM_Start = daySlots.find('.add-slot-inputs select.time-slot-start').val();

                    var slotTime_End = daySlots.find('.add-slot-inputs input.time-slot-end').val();
                    var slotTimePM_AM_End = daySlots.find('.add-slot-inputs select.time-slot-end').val();

                    // Checks if input values are not blank
                    if (slotTime_Start.length > 0 && slotTime_End.length > 0) {

                        // New Time Slot Div
                        var newTimeSlot = daySlots
                            .find('.single-slot.cloned')
                            .clone(true)
                            .addClass('slot-animation')
                            .removeClass('cloned');

                        setTimeout(function () {
                            newTimeSlot.removeClass('slot-animation');
                        }, 300);

                        newTimeSlot.find('.plusminus input').val('1');

                        // Plus - Minus Init
                        newTimeSlot.find('.plusminus').numberPicker();

                        // Check if there's am/pm dropdown
                        var $twelve_hr = $('.add-slot-inputs select.twelve-hr');

                        if ($twelve_hr.length) {
                            newTimeSlot.find('.single-slot-time').html(slotTime_Start + ' ' + '<i class="am-pm">' + slotTimePM_AM_Start + '</i>' + ' - ' + slotTime_End + ' ' + '<i class="am-pm">' + slotTimePM_AM_End + '</i>');
                        } else {
                            newTimeSlot.find('.single-slot-time').html('' + slotTime_Start + ' - ' + slotTime_End);
                        }

                        // Appending new slot
                        newTimeSlot.appendTo(daySlots.find('.slots-container'));

                        // Refresh sotrable script
                        $(".slots-container").sortable('refresh');
                    }

                    // Validation Error
                    else {
                        daySlots.find('.add-slot').addClass('add-slot-shake-error');
                        setTimeout(function () {
                            daySlots.find('.add-slot').removeClass('add-slot-shake-error');
                        }, 600);
                    }
                });

                // Removing "no slots" message
                function hideSlotInfo() {
                    var slotCount = daySlots.find(".slots-container").children().length;
                    if (slotCount < 1) {
                        daySlots.find(".no-slots")
                            .addClass("no-slots-fadein")
                            .removeClass("no-slots-fadeout");
                    }
                }

                hideSlotInfo();


                // Removing Slot
                daySlots.find('.remove-slot').bind('click', function () {
                    $(this).closest('.single-slot').animate({height: 0, opacity: 0}, 'fast', function () {
                        $(this).remove();
                    });

                    // Removing "no slots" message
                    setTimeout(function () {
                        hideSlotInfo()
                    }, 400);

                });

                // Showing "no slots" message
                daySlots.find('.add-slot-btn').on('click', function () {
                    var slotCount = daySlots.find(".slots-container").children().length;
                    if (slotCount >= 1) {
                        daySlots.find(".no-slots")
                            .removeClass("no-slots-fadein")
                            .addClass("no-slots-fadeout");
                    }
                });

            });
        }
        // Sotrable Script
        if ($(".slots-container").length) {
            $(".slots-container").sortable();
        }

        // 24 hour clock type switcher
        if ($('.availability-slots').attr('data-clock-type') == '24hr') {
            $('.availability-slots').addClass('twenty-four-clock');
            $('.availability-slots').find('input[type="time"]').attr({"max": "24:00"});
        }

        // Number Picker - TobyJ
        (function ($) {
            $.fn.numberPicker = function () {
                var dis = 'disabled';
                return this.each(function () {
                    var picker = $(this),
                        p = picker.find('button:last-child'),
                        m = picker.find('button:first-child'),
                        input = picker.find('input'),
                        min = parseInt(input.attr('min'), 10),
                        max = parseInt(input.attr('max'), 10),
                        inputFunc = function (picker) {
                            var i = parseInt(input.val(), 10);
                            if ((i <= min) || (!i)) {
                                input.val(min);
                                p.prop(dis, false);
                                m.prop(dis, true);
                            } else if (i >= max) {
                                input.val(max);
                                p.prop(dis, true);
                                m.prop(dis, false);
                            } else {
                                p.prop(dis, false);
                                m.prop(dis, false);
                            }
                        },
                        changeFunc = function (picker, qty) {
                            var q = parseInt(qty, 10),
                                i = parseInt(input.val(), 10);
                            if ((i < max && (q > 0)) || (i > min && !(q > 0))) {
                                input.val(i + q);
                                inputFunc(picker);
                            }
                        };
                    m.on('click', function () {
                        changeFunc(picker, -1);
                    });
                    p.on('click', function () {
                        changeFunc(picker, 1);
                    });
                    input.on('change', function () {
                        inputFunc(picker);
                    });
                    inputFunc(picker); //init
                });
            };
        }(jQuery));

        // Init
        if ($('.plusminus').length) {
            $('.plusminus').numberPicker();
        }


        /*----------------------------------------------------*/

        /* Pricing List
        /*----------------------------------------------------*/
        function newMenuItem() {
            var newElem = $('tr.pricing-list-item.pattern').first().clone();
            newElem.find('input').val('');
            newElem.appendTo('table#pricing-list-container');
        }

        if ($("table#pricing-list-container").is('*')) {
            $('.add-pricing-list-item').on('click', function (e) {
                e.preventDefault();
                newMenuItem();
            });

            // remove ingredient
            $(document).on("click", "#pricing-list-container .delete", function (e) {
                e.preventDefault();
                $(this).parent().parent().remove();
            });

            // add submenu
            $('.add-pricing-submenu').on('click', function (e) {
                e.preventDefault();

                var newElem = $('' +
                    '<tr class="pricing-list-item pricing-submenu">' +
                    '<td>' +
                    '<div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>' +
                    '<div class="fm-input"><input type="text" placeholder="Category Title" /></div>' +
                    '<div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>' +
                    '</td>' +
                    '</tr>');

                newElem.appendTo('table#pricing-list-container');
            });

            $('table#pricing-list-container tbody').sortable({
                forcePlaceholderSize: true,
                forceHelperSize: false,
                placeholder: 'sortableHelper',
                zIndex: 999990,
                opacity: 0.6,
                tolerance: "pointer",
                start: function (e, ui) {
                    ui.placeholder.height(ui.helper.outerHeight());
                }
            });
        }


        // Unit character
        var fieldUnit = $('.pricing-price').children('input').attr('data-unit');
        $('.pricing-price').children('input').before('<i class="data-unit">' + fieldUnit + '</i>');


        /*----------------------------------------------------*/
        /*  Notifications
        /*----------------------------------------------------*/
        $("a.close").removeAttr("href").on('click', function () {

            function slideFade(elem) {
                var fadeOut = {opacity: 0, transition: 'opacity 0.5s'};
                elem.css(fadeOut).slideUp();
            }

            slideFade($(this).parent());

        });


        /*----------------------------------------------------*/

        /* Panel Dropdown
        /*----------------------------------------------------*/
        function close_panel_dropdown() {
            $('.panel-dropdown').removeClass("active");
            $('.fs-inner-container.content').removeClass("faded-out");
        }

        $('.panel-dropdown a').on('click', function (e) {

            if ($(this).parent().is(".active")) {
                close_panel_dropdown();
            } else {
                close_panel_dropdown();
                $(this).parent().addClass('active');
                $('.fs-inner-container.content').addClass("faded-out");
            }

            e.preventDefault();
        });

        // Apply / Close buttons
        $('.panel-buttons button').on('click', function (e) {
            $('.panel-dropdown').removeClass('active');
            $('.fs-inner-container.content').removeClass("faded-out");
        });

        // Closes dropdown on click outside the conatainer
        var mouse_is_inside = false;

        $('.panel-dropdown').hover(function () {
            mouse_is_inside = true;
        }, function () {
            mouse_is_inside = false;
        });

        $("body").mouseup(function () {
            if (!mouse_is_inside) close_panel_dropdown();
        });

        // "All" checkbox
        $('.checkboxes.categories input').on('change', function () {
            if ($(this).hasClass('all')) {
                $(this).parents('.checkboxes').find('input').prop('checked', false);
                $(this).prop('checked', true);
            } else {
                $('.checkboxes input.all').prop('checked', false);
            }
        });

        if ($('input[type="range"].distance-radius').length) {
            $('input[type="range"].distance-radius').rangeslider({
                polyfill: false,
                onInit: function () {
                    this.output = $('<div class="range-output" />').insertBefore(this.$range).html(this.$element.val());
                    var radiustext = $('.distance-radius').attr('data-title');
                    $('.range-output').after('<i class="data-radius-title">' + radiustext + '</i>');
                },
                onSlide: function (position, value) {
                    this.output.html(value);
                }
            });
        }

        /*----------------------------------------------------*/
        /*  Show More Button
        /*----------------------------------------------------*/
        if ($('.show-more-button').length) {
            $('.show-more-button').on('click', function (e) {
                e.preventDefault();
                $(this).toggleClass('active');

                $('.show-more').toggleClass('visible');
                if ($('.show-more').is(".visible")) {

                    var el = $('.show-more'),
                        curHeight = el.height(),
                        autoHeight = el.css('height', 'auto').height();
                    el.height(curHeight).animate({height: autoHeight}, 400);


                } else {
                    $('.show-more').animate({height: '450px'}, 400);
                }
            });
        }


        /*----------------------------------------------------*/
        /* Listing Page Nav
        /*----------------------------------------------------*/

        $(window).on('load resize scroll', function () {
            var containerWidth = $(".container").width();
            $('.listing-nav-container.cloned .listing-nav').css('width', containerWidth);
        });

        if (document.getElementById("listing-nav") !== null) {
            $(window).scroll(function () {
                var window_top = $(window).scrollTop();
                var div_top = $('.listing-nav').not('.listing-nav-container.cloned .listing-nav').offset().top + 90;
                if (window_top > div_top) {
                    $('.listing-nav-container.cloned').addClass('stick');
                } else {
                    $('.listing-nav-container.cloned').removeClass('stick');
                }
            });
        }
        if ($('.listing-nav-container').length) {
            $(".listing-nav-container").clone(true).addClass('cloned').prependTo("body");
        }

        // Smooth scrolling using scrollto.js
        $('.listing-nav a, a.listing-address, .star-rating a').on('click', function (e) {
            e.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash, {gap: {y: -20}});
        });

        $(".listing-nav li:first-child a, a.add-review-btn, a[href='#add-review']").on('click', function (e) {
            e.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash, {gap: {y: -100}});
        });


        // Highlighting functionality.
        $(window).on('load resize', function () {
            var aChildren = $(".listing-nav li").children();
            var aArray = [];
            for (var i = 0; i < aChildren.length; i++) {
                var aChild = aChildren[i];
                var ahref = $(aChild).attr('href');
                aArray.push(ahref);
            }

            $(window).scroll(function () {
                var windowPos = $(window).scrollTop();
                for (var i = 0; i < aArray.length; i++) {
                    var theID = aArray[i];
                    var divPos = $(theID).offset().top - 150;
                    var divHeight = $(theID).height();
                    if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                        $("a[href='" + theID + "']").addClass("active");
                    } else {
                        $("a[href='" + theID + "']").removeClass("active");
                    }
                }
            });
        });


        /*----------------------------------------------------*/
        /*  Payment Accordion
        /*----------------------------------------------------*/
        var radios = document.querySelectorAll('.payment-tab-trigger > input');

        for (var i = 0; i < radios.length; i++) {
            radios[i].addEventListener('change', expandAccordion);
        }

        function expandAccordion(event) {
            var allTabs = document.querySelectorAll('.payment-tab');
            for (var i = 0; i < allTabs.length; i++) {
                allTabs[i].classList.remove('payment-tab-active');
            }
            event.target.parentNode.parentNode.classList.add('payment-tab-active');
        }


        /*----------------------------------------------------*/
        /*  Booking Sticky Footer
        /*----------------------------------------------------*/
        if ($('.booking-sticky-footer a.button').length) {
            $('.booking-sticky-footer a.button').on('click', function (e) {
                var $anchor = $(this);
                $("html, body").animate({scrollTop: $($anchor.attr('href')).offset().top - 100}, 1000);
            });
        }


        /*----------------------------------------------------*/
        /*  Contact Form
        /*----------------------------------------------------*/

        var shake = "No";

        $('#message').hide();

        // Add validation parts
        $('#contact input[type=text], #contact input[type=number], #contact input[type=email], #contact input[type=url], #contact input[type=tel], #contact select, #contact textarea').each(function () {

        });

        // Validate as you type
        $('#name, #comments, #subject').focusout(function () {
            if (!$(this).val()) {
                $(this).addClass('error').parent().find('mark').removeClass('valid').addClass('error');
            } else {
                $(this).removeClass('error').parent().find('mark').removeClass('error').addClass('valid');
            }
            $('#submit')
                .prop('disabled', false)
                .removeClass('disabled');
        });
        $('#email').focusout(function () {
            if (!$(this).val() || !isEmail($(this).val())) {
                $(this).addClass('error').parent().find('mark').removeClass('valid').addClass('error');
            } else {
                $(this).removeClass('error').parent().find('mark').removeClass('error').addClass('valid');
            }
        });

        $('#email').focusin(function () {
            $('#submit')
                .prop('disabled', false)
                .removeClass('disabled');
        });

        $('#submit').on('click', function () {
            $("#contact-message").slideUp(200, function () {
                $('#contact-message').hide();

                // Kick in Validation
                $('#name, #subject, #phone, #comments, #website, #email').triggerHandler("focusout");

                if ($('#contact mark.error').size() > 0) {
                    if (shake == "Yes") {
                        $('#contact').effect('shake', {times: 2}, 75, function () {
                            $('#contact input.error:first, #contact textarea.error:first').focus();
                        });
                    } else $('#contact input.error:first, #contact textarea.error:first').focus();

                    return false;
                }

            });
        });

        $('#contactform').submit(function () {

            if ($('#contact mark.error').size() > 0) {
                if (shake == "Yes") {
                    $('#contact').effect('shake', {times: 2}, 75);
                }
                return false;
            }

            var action = $(this).attr('action');

            $('#contact #submit').after('<img src="images/loader.gif" class="loader" />');

            $('#submit')
                .prop('disabled', true)
                .addClass('disabled');

            $.post(action, $('#contactform').serialize(),
                function (data) {
                    $('#contact-message').html(data);
                    $('#contact-message').slideDown();
                    $('#contactform img.loader').fadeOut('slow', function () {
                        $(this).remove();
                    });
                    // $('#contactform #submit').removeAttr('disabled');
                    if (data.match('success') !== null) $('#contactform').slideUp('slow');

                }
            );

            return false;

        });

        function isEmail(emailAddress) {

            var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

            return pattern.test(emailAddress);
        }

// ------------------ End Document ------------------ //
    });

})(this.jQuery);


/*!
 * jquery.scrollto.js 0.0.1 - https://github.com/yckart/jquery.scrollto.js
 * Copyright (c) 2012 Yannick Albert (http://yckart.com)
 * Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php).
 **/

$.scrollTo = $.fn.scrollTo = function (x, y, options) {
    if (!(this instanceof $)) return $.fn.scrollTo.apply($('html, body'), arguments);

    options = $.extend({}, {
        gap: {
            x: 0,
            y: 0
        },
        animation: {
            easing: 'swing',
            duration: 600,
            complete: $.noop,
            step: $.noop
        }
    }, options);

    return this.each(function () {
        var elem = $(this);
        elem.stop().animate({
            scrollLeft: !isNaN(Number(x)) ? x : $(y).offset().left + options.gap.x,
            scrollTop: !isNaN(Number(y)) ? y : $(y).offset().top + options.gap.y
        }, options.animation);
    });
};


//services pages

$(document).ready(function () {
    if ($('.formbut').length) {
        $("#formbut").click(function () {
            $(".new_form").addClass("show");
            $("#propertiesdropdown").addClass("disable");
        });
    }
    if ($('.remove_form').length) {
        $(".remove_form").click(function () {
            $(".new_form").removeClass("show");
            $("#propertiesdropdown").removeClass("disable");
            $(".new_property_form").removeClass("show");
        });
    }
    if ($('#add_new').length) {
        $("#add_new").click(function () {
            $(".new_property_form").addClass("show");
        });
    }
    if ($('.remove_new_property').length) {
        $(".remove_new_property").click(function () {
            $(".new_property_form").removeClass("show");
        });
    }
    if ($('#phot_add_new').length) {
        $("#phot_add_new").click(function () {
            $(".photo_property_form").addClass("show");
        });
    }
    if ($('.remove_photo_property').length) {
        $(".remove_photo_property").click(function () {
            $(".photo_property_form").removeClass("show");
        });
    }
    if ($('#inventory_add_new').length) {
        $("#inventory_add_new").click(function () {
            $(".inventory_property_form").addClass("show");
        });
    }
    if ($('.inventory_photo_property').length) {
        $(".inventory_photo_property").click(function () {
            $(".inventory_property_form").removeClass("show");
        });
    }
    if ($('#tenant_add_new').length) {
        $("#tenant_add_new").click(function () {
            $(".tenant_property_form").addClass("show");
        });
    }
    if ($('.tenant_new_property').length) {
        $(".tenant_new_property").click(function () {
            $(".tenant_property_form").removeClass("show");
        });
    }
    // $("#AddEICR").click(function () {
    //     $(".eicr-num-bedrooms").addClass("show");
    // });
    // $("#electrical-no").click(function () {
    //     $(".eicr-num-bedrooms").removeClass("show");
    //     checkTotal();
    // });
});

$(document).ready(function () {


//input plus and minus

    $(document).ready(function () {
        if ($(".minus").length) {
            $('.minus').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) > 0 ? parseInt($input.val()) - 1 : 0;

                $input.val(count);
                $input.change();
                return false;
            });
        }
        if ($(".plus").length) {
            $('.plus').click(function () {
                console.log();
                var $input = $(this).parent().find('input');
                var count = isNaN(parseInt($input.val())) ? 1 : parseInt($input.val()) + 1;

                $input.val(count);
                $input.change();
                return false;
            });
        }
    });


});//end

//append guarantor details form
$(document).ready(function () {

    // $('#add_guarantor').on('click', function () {
    //     $('#exercises').append('<div class="exercise"><input type="text" name="exercise[]"><button class="remove">x</button></div>');
    //     return false; //prevent form submission
    // });
    if ($('#exercises').length) {
        $('#exercises').on('click', '.remove', function () {
            $(this).parent().remove();
            return false; //prevent form submission
        });
    }

});

//	radio buton data show and hide
function hideapp1() {
    document.getElementById('pat-testing-more').style.display = 'none';
}

function showapp1() {
    document.getElementById('pat-testing-more').style.display = 'block';
}

//	radio buton data show and hide
function show2() {
    document.getElementById('pmoney').style.display = 'none';
}

function show1() {
    document.getElementById('pmoney').style.display = 'block';
}

<!--On load functions call-->
$(document).ready(function () {
    $(window).on('load', function () {

        if ($('.dashboard-stat-content h4').length)
            $('.dashboard-stat-content h4').counterUp({
                delay: 100,
                time: 800
            });

        if ($("#content-slider").length > 0) {
            $("#content-slider").lightSlider({
                item: 1,
                loop: true,
                keyPress: true,
                cssEasing: 'ease',
                easing: 'linear',
                speed: 1000,
                onSliderLoad: function () {
                    $('#content-slider').removeClass('cS-hidden');
                },
                responsive: [
                    {
                        breakpoint: 901,
                        settings: {
                            item: 1,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },

                ]
            });
        }

        if ($("#search-slider").length > 0) {
            $("#search-slider").lightSlider({
                item: 1,
                loop: true,
                keyPress: true,
                cssEasing: 'ease',
                easing: 'linear',
                speed: 1000,
                onSliderLoad: function () {
                    $('#content-slider').removeClass('cS-hidden');
                },
                responsive: [
                    {
                        breakpoint: 901,
                        settings: {
                            item: 1,
                            slideMove: 1,
                            slideMargin: 0,
                        }
                    },

                ]
            });
        }

        if ($("#price-slider").length > 0) {
            $("#price-slider").lightSlider({
                item: 3,
                loop: true,
                keyPress: true,
                cssEasing: 'ease',
                easing: 'linear',
                speed: 1000,
                onSliderLoad: function () {
                    $('#content-slider').removeClass('cS-hidden');
                },
                responsive: [
                    {
                        breakpoint: 901,
                        settings: {
                            item: 1,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },

                ]
            });
        }

        if ($("#logo-slider").length > 0) {
            $("#logo-slider").lightSlider({
                item: 5,
                loop: true,
                keyPress: true,
                cssEasing: 'ease',
                easing: 'linear',
                speed: 1000,
                controls: false,
                autoWidth: false,
                thumbItem: 1,
                pager: true,
                gallery: false,
                galleryMargin: 5,
                thumbMargin: 5,
                currentPagerPosition: 'middle',
                onSliderLoad: function () {
                    $('#logo-slider').removeClass('cS-hidden');
                },
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            item: 4,
                            slideMove: 1,
                            slideMargin: 6,
                        }

                    },
                    {
                        breakpoint: 801,
                        settings: {
                            item: 3,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 476,
                        settings: {
                            item: 1,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },

                ]
            });
        }
    });
});

function scrollNav() {
    if ($('.overview-description a').length) {
        $('.overview-description a').click(function () {
            $(".active").removeClass("active");
            $(this).addClass("active");

            $('html, body').stop().animate({
                scrollTop: $($(this).attr('href')).offset().top - 160
            }, 300);
            return false;
        });
    }
}

scrollNav();


/*
  Can explicitly limit the services shown (https://www.addthis.com/services/list)
  However, if the user has an AddThis account, these can be overwritten :(
  */
var addthis_config =
    {
        services_compact: "linkedin,twitter,facebook,google_plusone_share,favorites"
    };
$("[data-toggle=popover]").popover(
    {html: true}
);


//other payments options
$(document).ready(function () {
    if ($('.payment-options span').length) {
        $(".payment-options span").click(function () {
            $(".other-options").toggleClass("show");

        });
    }
    if ($('.ultimate-dvertising-btn').length) {
        $(".ultimate-dvertising-btn").click(function () {
            $(".ultimate-dvertising-info").toggleClass("show");

        });
    }


//	popover script


});

//property details button disable
$(document).ready(function () {
    $(':input[type="submit"]').prop('disabled', true);
    $('input[type="text"]').keyup(function () {
        if ($(this).val() != '') {
            $(':input[type="submit"]').prop('disabled', false);
        }
    });
});


//post code finder

$(document).ready(function () {

    //Property location search button
    if ($('#post_code').length) {
        $('#post_code').change(function () {

            if ($(this).val()) {
                $('.required-error').html('')
                $("#post_code").css("border-color", "#ced4da");
                $("#post_code_finder").click(function () {
                    $(".add-property-details-inputs").addClass("show");
                    $(".add-property-details-inputs").removeClass("dispaly");
                });
            } else {
                $(".add-property-details-inputs").removeClass("show");
            }
        });
    }

    //alert
    if ($('#post_code_finder').length) {
        $('#post_code_finder').click(function () {
            if ($('#post_code').val() == '') {
                $("#post_code").next(".invalid-feedback").show()
                $("#post_code").css("border-color", "#dc3545");
            }
        });
    }

    if ($('#select_address_manually').length) {
        $("#select_address_manually").click(function () {
            $(".add-property-details-inputs").addClass("dispaly");
            $(".add-property-details-inputs").removeClass("show");
        });
    }


//	custom deposit amount
    if ($('#DepositSelector').length) {
        $('#DepositSelector').on('change', function () {
            if ($(this).val() === "custom") {
                $("#custom-deposit").show()
            } else {
                $("#custom-deposit").hide()
            }
        });
    }

});
$(document).ready(function () {
    <!--date picker-->
    if ($('#datepicker').length) {
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        $('#datepicker').datepicker({

            minDate: today,
            // defaultViewDate: today,
            format: "dd-mm-yyyy",
            "setDate": new Date(),

            "autoclose": true
        });
    }
});

<!--summer note-->

$(document).ready(function () {
    if ($("#summernote").length) {
        $('.today').prop("disabled", false);
        $('#summernote').summernote();
    }
});


//property description buttons
$(document).ready(function () {
    if ($('#write-description').length) {
        $("#write-description").click(function () {

            $(".description-write").addClass("show");
            $(".samrt-description").removeClass("remover-btn");
            $(".description-samrt").removeClass("show");
        });
    }
    if ($('#smart-description').length) {
        $("#smart-description").click(function () {
            $(".description-samrt").addClass("show");
            $(".samrt-description").addClass("remover-btn");
            $(".description-write").removeClass("show");
        });
    }
});

// address search inner text change on 420px
$(window).resize(function () {
    var width = $(window).width();
    if (width < 421) {
        $('#post_code_finder').html('Search');
    }
});


//form validation
(function () {
    'use strict';
    window.addEventListener('load', function () {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

// Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();

                }

                form.classList.add('was-validated');

            }, false);
        });
    }, false);
})();


//slick-carousel

$(document).ready(function () {
    if ($(".ads-slick-carousel").length) {
        $('.ads-slick-carousel').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            autoplay: true,
            arrows: false,
            autoplaySpeed: 2000,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }
});


<!--file upload script-->
$(document).ready(function () {
    if ($("#test-upload").length) {
        $("#test-upload").fileinput({
            'theme': 'fas',
            'showPreview': false,
            'allowedFileExtensions': ['jpg', 'png', 'gif'],
            'elErrorContainer': '#errorBlock'
        });
    }
    if ($("#kv-explorer").length) {
        $("#kv-explorer").fileinput({

            'theme': 'explorer-fas',
            'uploadUrl': '#',
            overwriteInitial: false,
            initialPreviewAsData: true,
            maxFileSize: 100000,
        });
    }

});


// $.validator.setDefaults( {
// 	submitHandler: function () {
// 		alert( "submitted!" );
// 	}
// } );
// $( document ).ready( function () {
// 	$( "#myform" ).validate( {
// 		rules: {
// 			address: "required",
// 			NumberOfbathrooms: {
// 				required: true,
// 				range:[1,5]
// 			},
// 			RentPerMonth:{
// 				required: true,
// 				range:[100,10000]
// 			}
// 		},
// 		// Specify the validation error messages
// 		messages: {
// 			address: "Enter First Name",
// 			NumberOfbathrooms: "Number of bathrooms required",
// 			RentPerMonth:"required",
// 		},
// 		errorElement: "em",
// 		errorPlacement: function ( error, element ) {
// 			// Add the `help-block` class to the error element
// 			error.addClass( "help-block" );
//
// 			if ( element.prop( "type" ) === "checkbox" ) {
// 				error.insertAfter( element.parent( "label" ) );
// 			} else {
// 				error.insertAfter( element );
// 			}
// 		},
// 		highlight: function ( element, errorClass, validClass ) {
// 			console.log('highlight',element,errorClass,validClass)
// 			$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
// 		},
// 		unhighlight: function (element, errorClass, validClass) {
// 			console.log('unhighlight',element,errorClass,validClass)
// 			$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
// 		}
// 	} );
//
// } );


//alert
if ($('#propertySubmitButton').length) {
    $('#propertySubmitButton').click(function () {
        if ($('#NumberOfBedrooms').val() == '0') {
            $(".NumberOfBedrooms_error").show()
            $("#NumberOfBedrooms").css("border-color", "red");
        } else {
            $(".invalid-feedback").css("display", "none")
            $("#NumberOfBedrooms").css("border-color", "#ced4da");
        }
        if ($('#NumberOfbathrooms').val() == '0') {
            $(".NumberOfbathrooms_error").show()
            $("#NumberOfbathrooms").css("border-color", "red");
        } else {
            $(".NumberOfbathrooms_error").hide()
            $("#NumberOfbathrooms").css("border-color", "#ced4da");
        }
        if ($('#NumberOf_Bedrooms').val() == '0') {
            $(".NumberOf_Bedrooms_error").show()
            $("#NumberOf_Bedrooms").css("border-color", "red");
        } else {
            $(".NumberOf_Bedrooms_error").hide()
            $("#NumberOf_Bedrooms").css("border-color", "#ced4da");
        }
        if ($('#NumberOf_bathrooms').val() == '0') {
            $(".NumberOf_bathrooms_error").show()
            $("#NumberOf_bathrooms").css("border-color", "red");
        } else {
            $(".NumberOf_bathrooms_error").hide()
            $("#NumberOf_bathrooms").css("border-color", "#ced4da");
        }
        if ($('#RentPerMonth').val() == '0.00') {
            $(".RentPerMonth_error").show()
            $("#RentPerMonth").css("border-color", "red");
        } else {
            $(".RentPerMonth_error").hide()
            $("#RentPerMonth").css("border-color", "#ced4da");
        }
        if ($('#datepicker').val() == '') {
            $(".invalid-feedback").show()
        } else {
            $(".invalid-feedback").css("display", "none")
        }
    });

}
//only room selected change text in tenancy details
if ($('#room-only').length) {
    $('#room-only').click(function () {
        if ($('.monthly-rent-lable').val("Monthly Rent For Entire Property")) {
            $(".monthly-rent-lable").html("Monthly Rent For Single Room ");
        } else {
            $(".monthly-rent-lable").html("Monthly Rent For Entire Property");
        }
        if ($('.rentper-week-lable').val("Weekly Rent For Entire Property")) {
            $(".rentper-week-lable").html("Weekly Rent For Single Room ");
        } else {
            $(".rentper-week-lable").html("Weekly Rent For Entire Property");
        }


    });
}
if ($('#whole-property').length) {
    $('#whole-property').click(function () {
        if ($('.monthly-rent-lable').val("Monthly Rent For Single Room")) {
            $(".monthly-rent-lable").html("Monthly Rent For Entire Property ");
        } else {
            $(".monthly-rent-lable").html("Monthly Rent For Entire Property");
        }
        if ($('.rentper-week-lable').val("Weekly Rent For Single Room")) {
            $(".rentper-week-lable").html("Weekly Rent For Entire Property ");
        } else {
            $(".rentper-week-lable").html("Weekly Rent For Single Room");
        }


    });
}

//for validation

// $.validator.setDefaults( {
//
// } );
$(document).ready(function () {
    // if($("#myform").length) {
    //     $.validator.addMethod("valueNotEquals", function (value, element, arg) {
    //         return arg !== value;
    //     }, "Value must not equal arg.")
    //     $("#myform").validate({
    //
    //         rules: {
    //             flat: {
    //                 required: "true",
    //                 valueNotEquals: "default",
    //             },
    //             furnishing_options: {
    //                 required: "true",
    //                 valueNotEquals: "default",
    //             },
    //             EPCRating: {
    //                 required: "true",
    //                 valueNotEquals: "default",
    //             },
    //             NumberOfBedrooms: {
    //                 required: "true",
    //                 valueNotEquals: "0",
    //             },
    //             NumberOfbathrooms: {
    //                 required: "true",
    //                 valueNotEquals: "0",
    //             },
    //             WholePropertyType: {
    //                 required: "true",
    //                 valueNotEquals: "default",
    //             },
    //             roomfurnishingoptions: {
    //                 required: "true",
    //                 valueNotEquals: "default",
    //             },
    //             NumberOfBedroomsshared: {
    //                 required: "true",
    //                 valueNotEquals: "0",
    //             },
    //             NumberOfBathroomsshared: {
    //                 required: "true",
    //                 valueNotEquals: "0",
    //             },
    //             postcode: {
    //                 required: "true",
    //             },
    //             address: {
    //                 required: "true",
    //
    //             },
    //             MinimumTenancy: {
    //                 required: "true",
    //                 valueNotEquals: "default",
    //             },
    //             Maximumofccupancy: {
    //                 required: "true",
    //                 valueNotEquals: "0",
    //             },
    //             DepositSelector: {
    //                 required: "true",
    //                 valueNotEquals: "0",
    //             },
    //             RentPerMonth: {
    //                 required: "true",
    //                 valueNotEquals: "0",
    //             },
    //             RentPerWeek: {
    //                 required: "true",
    //                 valueNotEquals: "0",
    //             },
    //             AgreeToTerms: {
    //
    //                 required: function (elem) {
    //                     return $("input.select:checked").length > 0;
    //                 }
    //
    //             }
    //
    //         },
    //         messages: {
    //             flat: "Please select property type",
    //             furnishing_options: "Is the property furnished?",
    //             EPCRating: "What is the EPC rating for this property?",
    //             NumberOfBedrooms: "Select bedroom amount",
    //             NumberOfbathrooms: "Select bathroom amount",
    //             NumberOfBedroomsshared: "Select bedroom amount",
    //             NumberOfBathroomsshared: "Select bathroom amount",
    //             WholePropertyType: "Please select property type",
    //             roomfurnishingoptions: "Is the property furnished?",
    //             postcode: "Post code is required",
    //             address: "Address is required",
    //             MinimumTenancy: "Please enter a minimum contract length",
    //             Maximumofccupancy: "Maximum number of tenants?",
    //             DepositSelector: "Select a deposit amount",
    //             RentPerMonth: "What is the monthly rent amount?",
    //             RentPerWeek: "What is the monthly rent amount?",
    //             AgreeToTerms: "Please tick the box to continue.",
    //         },
    //
    //         submitHandler: function (form) {
    //             form.submit();
    //         }
    //
    //     });
    // }
});


//popover on info
$(document).ready(function () {
    $('.popover-dismiss').popover({
            trigger: 'focus'

        }
    )


});


//bedrooms max and min input
//input plus and minus


$(document).ready(function () {
    // $(".num-bed").click(function () {
    // 	$(".min-max-bedrooms").toggleClass("show");
    //
    // });

    var counter = 1;
    var countervalue = 3;
    var inputval = 0;

// set the + functionality
    $('#min-bedrooms .plus').click(function () {
        $('#min-bed').val(++counter)
    });
// set the - functionality
    $('#min-bedrooms .minus').click(function () {
        $('#min-bed').val((counter - 1 < 0) ? counter : --counter)
    });
// initialize display
    $('#min-bed').val(counter);

    // set the + functionality
    $('#max-bedrooms .plus').click(function () {
        $('#max-bed').val(++countervalue)
    });
// set the - functionality
    $('#max-bedrooms .minus').click(function () {
        $('#max-bed').val((countervalue - 1 < 0) ? countervalue : --countervalue)
    });
// initialize display
    $('#max-bed').val(countervalue);


});
$(document).ready(function () {
    // Click event on body hide the element
    $("body").click(function () {
        $(".min-max-bedrooms").hide();
    });
    $(".min-max-bedrooms").click(function () {
        $(".min-max-bedrooms").show();
    });


    // Click event on button show the element
    $(".num-bed").click(function () {
        $(".min-max-bedrooms").show();
        event.stopPropagation();
    });

//	contact details for show
    $(".contact-details-btn").click(function () {
        $(".contact-details-form").toggleClass("show")
    });


});

//minus button  disabled
$(document).ready(function () {
    if ($('#min-bedroom').length) {
        $('#min-bedroom').on('keyup', function () {
            let empty = false;

            $('#min-bedroom').each(function () {
                empty = $(this).val().length == 0;
            });

            if (empty)
                $('button.minus').attr('disabled', 'disabled');
            else
                $('button.minus').attr('disabled', false);
        });
    }
});

//date picker form

$(document).ready(function () {
    if ($("#datepicker_from").length) {
        <!--date picker-->
        var dateToday = new Date();
        var dates = $("#datepicker_from").datepicker({
            uiLibrary: 'bootstrap4',
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            minDate: dateToday,
            onSelect: function (selectedDate) {
                var option = this.id == "from" ? "minDate" : "maxDate",
                    instance = $(this).data("datepicker"),
                    date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                dates.not(this).datepicker("option", option, date);
            }
        });
    }
});

//Service page date pickers
$(document).ready(function () {
    if ($("#datepicker-to").length) {
        <!--date picker-->
        var dateToday = new Date();
        var dates = $("#datepicker-to").datepicker({
            uiLibrary: 'bootstrap4',
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            minDate: dateToday,
            onSelect: function (selectedDate) {
                var option = this.id == "from" ? "minDate" : "maxDate",
                    instance = $(this).data("datepicker"),
                    date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                dates.not(this).datepicker("option", option, date);
            }
        });
    }
});

//date picker to
$(document).ready(function () {
    if ($("#cp_datepicker").length) {
        <!--date picker-->
        var dateToday = new Date();
        var dates = $("#cp_datepicker").datepicker({
            uiLibrary: 'bootstrap4',
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            minDate: dateToday,
            onSelect: function (selectedDate) {
                var option = this.id == "from" ? "minDate" : "maxDate",
                    instance = $(this).data("datepicker"),
                    date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                dates.not(this).datepicker("option", option, date);
            }
        });
    }
});
$(document).ready(function () {
    if ($("#es_datepicker").length) {
        <!--date picker-->
        var dateToday = new Date();
        var dates = $("#es_datepicker").datepicker({
            uiLibrary: 'bootstrap4',
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 1,
            minDate: dateToday,
            onSelect: function (selectedDate) {
                var option = this.id == "from" ? "minDate" : "maxDate",
                    instance = $(this).data("datepicker"),
                    date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                dates.not(this).datepicker("option", option, date);
            }
        });
    }
});
$(document).ready(function () {
    if ($("#photo_datepicker").length) {
        <!--date picker-->
        var dateToday = new Date();
        var dates = $("#photo_datepicker").datepicker({
            uiLibrary: 'bootstrap4',
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            minDate: dateToday,
            onSelect: function (selectedDate) {
                var option = this.id == "from" ? "minDate" : "maxDate",
                    instance = $(this).data("datepicker"),
                    date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                dates.not(this).datepicker("option", option, date);
            }
        });
    }

});
$(document).ready(function () {
    if ($("#inventory_datepicker").length) {

        <!--date picker-->
        var dateToday = new Date();
        var dates = $("#inventory_datepicker").datepicker({
            uiLibrary: 'bootstrap4',
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            minDate: dateToday,
            onSelect: function (selectedDate) {
                var option = this.id == "from" ? "minDate" : "maxDate",
                    instance = $(this).data("datepicker"),
                    date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                dates.not(this).datepicker("option", option, date);
            }
        });
    }
});


//side bar sticky

$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 167) {
            $(".services-sidebar").addClass("sticky");
        } else {
            $(".services-sidebar").removeClass("sticky");
        }
    });

});

// search preview side bar sticky
$(document).ready(function () {

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 465) {
            $(".searh-preview-card").addClass("sticky-bar");
        } else {
            $(".searh-preview-card").removeClass("sticky-bar");
        }
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 965) {
            $(".searh-preview-card").removeClass("sticky-bar");
        } else return false
    });


});


//Services page functions
$(document).ready(function () {
    // $('#appliances_yes').change(function () {
    //     if (this.checked) {
    //         $('#pat-testing-more').fadeIn('slow');
    //         console.log( 'checked');
    //     }
    // });
    if ($('#appliances_no').length) {
        $('#appliances_no').change(function () {
            if (this.checked) {
                $('#pat-testing-more').css('display', 'none');
            }

            checkTotal();
        });
    }
    // $('#AddEICR').change(function () {
    //     if (this.checked) {
    //         $('#pmoney').fadeIn('slow');
    //     }
    //
    // });
    if ($('#electrical-no').length) {
        $('#electrical-no').change(function () {
            if (this.checked) {
                $('#pmoney').css('display', 'none');
            }
            checkTotal()
        });
    }

//    furnishing option
    //    floor plan
    if ($('#inventory_furnished_yes').length) {
        $('#inventory_furnished_yes').change(function () {
            if (this.checked) {
                $('#app4').fadeIn('slow');
            }

        });
    }
    if ($('#inventory_furnished_no').length) {
        $('#inventory_furnished_no').change(function () {
            if (this.checked) {
                $('#app4').css('display', 'none');
            }

        });
    }
    //inventory_appliances options
    if ($('#inventory_appliances_yes').length) {
        $('#inventory_appliances_yes').change(function () {
            if (this.checked) {
                $('#inventory-pat-testing-more').fadeIn('slow');
            }

        });
    }
    if ($('#inventory_appliances_no').length) {
        $('#inventory_appliances_no').change(function () {
            if (this.checked) {
                $('#inventory-pat-testing-more').css('display', 'none');
            }

        });
    }

//
});


//form clone

$(document).ready(function () {
    if ($('#add_guarantor').length) {
        $("#add_guarantor").click(function () {
            let newUserNo = Math.floor(Math.random() * Math.floor(10000));
            $(".guarantor-details").append(`
                                                 <div class="row tg" id="tg_form_` + newUserNo + `" data-no="` + newUserNo + `">
                                                    <div class="col-md-12">
                                                        <h4>Tenant / Guarantor Details:</h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input name="first_name_` + newUserNo + `" id="first_name_` + newUserNo + `"
                                                                   value="" class="form-control"
                                                                   type="text" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input name="last_name_` + newUserNo + `" id="last_name_` + newUserNo + `" value=""
                                                                   class="form-control" type="text"
                                                                   placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input name="phone_` + newUserNo + `" id="phone_` + newUserNo + `" value="" class="form-control"
                                                                   type="text"
                                                                   placeholder="Phone Number" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input name="email_` + newUserNo + `" id="email_` + newUserNo + `" value="" class="form-control"
                                                                   type="text"
                                                                   placeholder="Email" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul class="radio-button-list"  id="user_type_` + newUserNo + `">
                                                            <li>
                                                                <input type="radio" id="guarantor_` + newUserNo + `" name="user_` + newUserNo + `" tabindex="0"
                                                                       class="radio-button" value="guarantor">
                                                                <label for="guarantor_` + newUserNo + `" class="radio-button__label"
                                                                       style="width: 150px;margin-right: 10px;">Guarantor</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="tenant_` + newUserNo + `" name="user_` + newUserNo + `" tabindex="0"
                                                                       class="radio-button" value="tenant">
                                                                <label for="tenant_` + newUserNo + `" class="radio-button__label"
                                                                       style="width: 150px;margin-right: 10px;">Tenant</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button class="btn btn-danger remove" type="button" onclick="removeTGUser(` + newUserNo + `)"><i
                                                                class="fa fa-remove"></i> Remove
                                                        </button>
                                                    </div>
                                                </div>
        `);

            updateTGUsersSummary();
        });
    }
});

function updateTGUsersSummary() {
    let totalUsers = $('#all_tenant_forms .tg').length;
    addRowIntoSummary('tg_summary', totalUsers + 'x References', parseFloat(totalUsers * 30));
    checkTotal();
}

function removeTGUser(newUserNo) {
    $('#tg_form_' + newUserNo).remove();
    updateTGUsersSummary();
}

// light box
$(document).ready(function () {
    if ($('.imageGallery1 a').length) {
        new SimpleLightbox({
            elements: '.gallery a',
            // more options here
        });
// As a jQuery plugin
        $('.imageGallery1 a').simpleLightbox({
            // options here
        });
    }
});


//collaps close
$(document).click(function (e) {
    if (!$(e.target).is('.panel-body')) {
        $('.collapse').collapse('hide');
    }
});


//scroll to What's Included
if ($('.property-management-covered a').length) {
    $(".property-management-covered a").click(function () {
        $('html, body').animate({
            scrollTop: $("#breakdown-services").offset().top
        }, 2000);
    });
}

$(document).ready(function () {
    if ($('#asap').length) {
        $('#asap').change(function () {
            $("#es_datepicker").prop("disabled", $(this).is(':checked'));
        });
    }

    // $("#appliances_yes").click(function(){
    //     $(".check_card_guest").append("<p>Appended text</p>");
    // });
    // $("#pat_yes").click(function () {
    //     if ($('#appliances_yes').is(':checked')) {
    //         $('.input-append-group').html("<div class=\"row add-pat-testing-val\"><div class=\" col-9 col-sm-9\"><p>1x PAT testing</p></div> <div class=\"col-3 col-sm-3\"><p><input type = \"text\"  value = \"£99\" class=\"price\"  /></p></div></div><div class='row2'></div>");
    //     } else {
    //         $('.input-append-group').html("<p></p>");
    //     }
    //     checkTotal();
    // });
    // $("#appliances_no").click(function () {
    //     if ($('#appliances_no').is(':checked')) {
    //         $('.add-pat-testing-val').html("");
    //         $('.add-pat-testing-val .price').val('0');
    //
    //     } else return false

    // });
    // $("#appliances_yes").click(function () {
    //     if ($('#PAT_2').is(':checked')) {
    //         $('.row2').html("<div class=\"row add-pat-testing-val\"><div class=\" col-9 col-sm-9\"><p>10x  Appliances</p></div> <div class=\"col-3 col-sm-3\"><p><input type = \"text\"  value = \"£0\" class=\"price\"  /></p></div></div>");
    //     } else {
    //         $('.row2').html("<p></p>");
    //     }
    //     checkTotal();
    // });
    //


// //    EICR Checkbox
//     if ($('#AddEICR').length)
//         $("#AddEICR").click(function () {
//             if ($('#AddEICR').is(':checked')) {
//                 $('.input-append-group2').html("<div class=\"row add-EICR-val\"><div class=\" col-9 col-sm-9\"><p>1x EICR Report</p></div> <div class=\"col-3 col-sm-3\"><p><input type = \"text\"  value = \"£129\" class=\"price\"  /></p></div></div><div class='row-bedroom'></div>");
//             } else {
//                 $('.input-append-group2').html("<p></p>");
//             }
//             checkTotal();
//         });
//     if ($('#electrical-no').length)
//         $("#electrical-no").click(function () {
//             if ($('#electrical-no').is(':checked')) {
//                 $('.add-EICR-val').html("");
//             } else return false;
//             checkTotal();
//         });
    if ($('#eicr_bedrooms').length)
        $('#eicr_bedrooms').change(function () {
            let bedNo = parseInt($(this).val());
            let price = bedNo * 10;
            if (!Number.isNaN(bedNo) && !Number.isNaN(price))
                addRowIntoSummary('bed_summary', bedNo + 'x Bedrooms', price);
            else
                $('#bed_summary').remove();
            checkTotal();
        });

//boiler mintanance
    if ($("#AddBoilerService").length)
        $("#AddBoilerService").click(function () {
            // if ($('#AddBoilerService').is(':checked')) {
            addRowIntoSummary('boiler_summary', '1x Boiler Maintenance', 60);
            // $('.input-append-group2').html("<div class=\"row add-EICR-val\"><div class=\" col-9 col-sm-9\"><p>1x Boiler Maintenance</p></div> <div class=\"col-3 col-sm-3\"><p><input type = \"text\"  value = \"£60\" class=\"price\"  /></p></div></div><div class='row-bedroom'></div>");
            // } else {
            //     $('#boiler_summary').remove();
            // $('.input-append-group2').html("<p></p>");
            // }
            checkTotal();
        });
    if ($("#AddBoilerService_no").length)
        $("#AddBoilerService_no").click(function () {
            // if ($('#AddBoilerService_no').is(':checked')) {
            //     $('.add-EICR-val').html("");
            // } else return false
            $('#boiler_summary').remove();
            checkTotal();
        });
    if ($("#pat_yes").length)
        $("#pat_yes").click(function () {
            addRowIntoSummary('pat_yes_summary', '1x PAT', 99);
            addRowIntoSummary('pat_appliance_summary', '10x PAT Appliances', 0);
            $('#pat-testing-more').show();
            checkTotal();
        });
    if ($("#pat_no").length)
        $("#pat_no").click(function () {
            $('#pat-testing-more').hide();
            $('#pat_yes_summary').remove();
            $('#pat_appliance_summary').remove();
            checkTotal();
        });

    if ($('#pat-testing-more').length) {
        $('#pat-testing-more input[type=radio]').change(function () {
            let limit = $(this).attr('data-limit');
            let price = $(this).attr('data-price');
            addRowIntoSummary('pat_appliance_summary', limit + 'x PAT Appliances', price);
            checkTotal();
        })
    }

    if ($('#electrical_yes').length) {
        $('#electrical_yes').click(function () {
            $(".eicr-num-bedrooms").addClass("show");
            addRowIntoSummary('electrical_yes_summary', '1x EICR Report', 129);
            checkTotal();
        })
    }
    if ($('#electrical_no').length) {
        $('#electrical_no').click(function () {
            $(".eicr-num-bedrooms").removeClass("show");
            $('#electrical_yes_summary').remove();
            $('#bed_summary').remove();
            $('#eicr_bedrooms').val('');
            checkTotal();
        })
    }

    if ($('#photo_floor_plan_yes').length) {
        $('#photo_floor_plan_yes').click(function () {
            $('#app3').show();
            addRowIntoSummary('photo_floor_plan_summary', 'Floor Plan', 25);
            checkTotal();
        })
    }
    if ($('#photo_floor_plan_no').length) {
        $('#photo_floor_plan_no').click(function () {
            $('#app3').hide();
            $('#photo_floor_plan_summary').remove();
            checkTotal();
        })
    }


    //boilder mintanance
    if ($('#inventory_furnished_yes').length)
        $("#inventory_furnished_yes").click(function () {
            if ($('#inventory_furnished_yes').is(':checked')) {
                $('.input-append-group2').html("<div class=\"row add-EICR-val\"><div class=\" col-9 col-sm-9\"><p>1x Furnished </p></div> <div class=\"col-3 col-sm-3\"><p><input type = \"text\"  value = \"£15\" class=\"price\"  /></p></div></div><div class='row-bedroom'></div>");
            } else {
                $('.input-append-group2').html("<p></p>");
            }
            checkTotal();
        });
    if ($('#inventory_furnished_no').length)
        $("#inventory_furnished_no").click(function () {
            if ($('#inventory_furnished_no').is(':checked')) {
                $('.add-EICR-val').html("");
            } else return false
            checkTotal();
        });

//    services option
    if ($('#inventory_appliances_yes').length)
        $("#inventory_appliances_yes").click(function () {
            if ($('#inventory_appliances_yes').is(':checked')) {
                $('.input-append-group').html("<div class=\"row add-service-val\"><div class=\" col-9 col-sm-9\"><p>1x Service Option</p></div> <div class=\"col-3 col-sm-3\"><p><input type = \"text\"  value = \"£99\" class=\"price\"  /></p></div></div><div class='row3'></div>");
            } else {
                $('.input-append-group').html("<p></p>");
            }
            checkTotal();
        });
    if ($('#inventory_appliances_no').length)
        $("#inventory_appliances_no").click(function () {
            if ($('#inventory_appliances_no').is(':checked')) {
                $('.add-service-val').html("");
                $('.add-service-val .price').val('0');

            } else return false

        });
    $("#inventory_appliances_yes").click(function () {
        if ($('#service_1').is(':checked')) {
            $('.row3').html("<div class=\"row add-service-val2\"><div class=\" col-9 col-sm-9\"><p>Inventory Only</p></div> <div class=\"col-3 col-sm-3\"><p><input type = \"text\"  value = \"£0\" class=\"price\"  /></p></div></div>");
        } else {
            $('.row3').html("<p></p>");
        }
        checkTotal();
    });
    $("#service_2").click(function () {
        if ($('#service_2').is(':checked')) {
            $('.row3').html("<div class=\"row add-service-val2\"><div class=\" col-9 col-sm-9\"><p>Check-in</p></div> <div class=\"col-3 col-sm-3\"><p><input type = \"text\"  value = \"£40\" class=\"price\"  /></p></div></div>");
        } else {
            $('.row3').html("<p></p>");
        }
        checkTotal();
    });
    $("#service_3").click(function () {
        if ($('#service_3').is(':checked')) {
            $('.row3').html("<div class=\"row add-service-val2\"><div class=\" col-9 col-sm-9\"><p>Check-out Report</p></div> <div class=\"col-3 col-sm-3\"><p><input type = \"text\"  value = \"£10\" class=\"price\"  /></p></div></div>");

        } else {
            $('.add-service-val2').html("<p></p>");
        }
        checkTotal();
    });
});

$(document).ready(function () {
    checkTotal();
    $('.minus_2').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) > 0 ? parseInt($input.val()) - 1 : 0;
        $('.nun_appliances').text(count);
        $('.price').first().val('£' + parseInt($('#appliance_price').attr('data-value')) * count);
        $input.val(count);
        console.log('minus');
        var counter = parseInt($('#counter').val());
        console.log(counter);
        $('#counter').val(counter - 1);
        setTimeout(function () {
            add_applicance_price();
            checkTotal();
        }, 500)
    });
    $('.plus_2').click(function () {
        console.log('plus');
        var $input = $(this).parent().find('input');
        var count = isNaN(parseInt($input.val())) ? 0 : parseInt($input.val()) + 1;
        $('.nun_appliances').text(count);
        $('.price').first().val('£' + parseInt($('#appliance_price').attr('data-value')) * count);
        $input.val(count);
        var counter = parseInt($('#counter').val());
        $('#counter').val(counter + 1);
        setTimeout(function () {
            add_applicance_price();
            checkTotal();
        }, 500)
    });
});

function minus() {
    var counter = parseInt($('#counter').val());
    if (counter > 0) {
        $('#counter').val(counter - 1);
    }
    add_applicance_price();
    checkTotal();
}

function plus() {
    var counter = parseInt($('#counter').val());
    $('#counter').val(counter + 1);
    add_applicance_price();
    checkTotal();
}

function add_applicance_price() {
    let divId = 'per_appliances_summary';
    let appliance = parseInt($('#counter').val());
    $('#price_appliance').remove();
    if (appliance > 0) {
        let total = 10 * appliance;
        addRowIntoSummary(divId, appliance + 'x Appliances', total);
    } else {
        $('#' + divId).remove();
    }
}

function addRowIntoSummary(divId, text, price) {
    $('#' + divId).remove();
    $('.check_card_guest').append(`<div class="input-append-group" id="` + divId + `">
                                    <div class="row add-EICR-val">
                                        <div class=" col-9 col-sm-9">
                                            <p>` + text + `</p>
                                            </div>
                                             <div class="col-3 col-sm-3">
                                             <p><input type="text" value="£` + price + `" class="price"></p>
                                             </div>
                                             </div>
                                             <div class="row-bedroom">
                                             </div>
                                    </div>`);
}

function checkTotal() {
    if ($('#sub_service_price').length) {
        var total = parseFloat($('#sub_service_price').val());
        $('.price').each(function (i, el) {
            total += parseFloat($(el).val().replace('£', ''))
        });
        $('.total-price').val('£' + total.toFixed(2))
    }
}

//pass change
$(function () {
    if ($('#change-pass').length) {
        $('#change-pass').on("click", function () {
            $('.change-password-row').toggleClass("show");
        });
    }
});

//jquery steps
// $(document).ready(function () {
//     var form = $("#myform");
//     form.steps({
//         headerTag: "h6",
//         bodyTag: "section",
//         transitionEffect: "fade",
//
//         titleTemplate: '<span class="step">#index#</span> #title#',
//         /* Labels */
//         labels: {
//             cancel: "Cancel",
//             current: "current step:",
//             pagination: "Pagination",
//             finish: "Finish",
//             next: "Next",
//             previous: "<span>< </span>Back",
//             loading: "Loading ..."
//         }
//     });
//
// });


$(document).ready(function () {
    if ($('#let_home_review_silder').length) {
        $('#let_home_review_silder').lightSlider({
            item: 2,
            loop: true,
            auto: true,
            speed: 1500,
            pause: 5000,
            vertical: true,
            adaptiveHeight: false,
            verticalHeight: 450,
            vThumbWidth: 50,
            thumbItem: 8,
            thumbMargin: 4,
            slideMargin: 0,
            controls: false,
        });
    }
});

//register page show content
$(document).ready(function () {
    if ($('.sign-in').length) {
        $(".sign-in ").click(function () {
            $(".user-type").hide();
        });
    }
    if ($('.sign-in').length) {
        $(".sign-in").click(function () {
            $(".sign-up-form").show();
        });
    }
});

//scroll to checkout
if ($('.preview-publish-box p a').length) {
    $(".preview-publish-box p a").click(function () {
        $('html, body').animate({
            scrollTop: $("#check_card").offset().top - 77
        }, 2000);
    });
}


//payment history date
$(document).ready(function () {
    if ($('#start_date').length && $('#end_date').length) {
        const start = document.getElementById("start_date");
        const end = document.getElementById("end_date");
        const today = new Date().toISOString().split("T")[0];
        start.max = today;
        start.value = today;
        const tomorrowDate = () => {
            let day = new Date(today);
            day.setDate(day.getDate() + 1);
            let tomorrow = day.toISOString().split("T")[0];
            // end.min = today;
            end.max = today;
            end.value = today;
        };
        tomorrowDate();
    }
});

//move in date
$(document).ready(function () {
    if ($("#move_in_datepicker").length) {
        <!--date picker-->
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        $('#move_in_datepicker').datepicker({

            minDate: today,
            // defaultViewDate: today,
            format: "dd-mm-yyyy",
            showOn: "both",
            "setDate": new Date(),

        });

    }
});

$(document).ready(function () {
// Requires jQuery


// https://refreshless.com/nouislider/
    /*! nouislider - 8.3.0 - 2016-02-14 17:37:19 */
    (function (factory) {
        if (typeof define === 'function' && define.amd) {
            // AMD. Register as an anonymous module.
            define([], factory);
        } else if (typeof exports === 'object') {
            // Node/CommonJS
            module.exports = factory();
        } else {
            // Browser globals
            window.noUiSlider = factory();
        }
    }(function () {
        'use strict';

        // Removes duplicates from an array.
        function unique(array) {
            return array.filter(function (a) {
                return !this[a] ? this[a] = true : false;
            }, {});
        }

        // Round a value to the closest 'to'.

        function closest(value, to) {
            return Math.round(value / to) * to;
        }

        // Current position of an element relative to the document.

        function offset(elem) {
            var rect = elem.getBoundingClientRect(),
                doc = elem.ownerDocument,
                docElem = doc.documentElement,
                pageOffset = getPageOffset();
            // getBoundingClientRect contains left scroll in Chrome on Android.
            // I haven't found a feature detection that proves this. Worst case
            // scenario on mis-match: the 'tap' feature on horizontal sliders breaks.
            if (/webkit.*Chrome.*Mobile/i.test(navigator.userAgent)) {
                pageOffset.x = 0;
            }
            return {
                top: rect.top + pageOffset.y - docElem.clientTop,
                left: rect.left + pageOffset.x - docElem.clientLeft
            };
        }

        // Checks whether a value is numerical.

        function isNumeric(a) {
            return typeof a === 'number' && !isNaN(a) && isFinite(a);
        }

        // Rounds a number to 7 supported decimals.

        function accurateNumber(number) {
            var p = Math.pow(10, 7);
            return Number((Math.round(number * p) / p).toFixed(7));
        }

        // Sets a class and removes it after [duration] ms.

        function addClassFor(element, className, duration) {
            addClass(element, className);
            setTimeout(function () {
                removeClass(element, className);
            }, duration);
        }

        // Limits a value to 0 - 100

        function limit(a) {
            return Math.max(Math.min(a, 100), 0);
        }

        // Wraps a variable as an array, if it isn't one yet.

        function asArray(a) {
            return Array.isArray(a) ? a : [a];
        }

        // Counts decimals

        function countDecimals(numStr) {
            var pieces = numStr.split(".");
            return pieces.length > 1 ? pieces[1].length : 0;
        }

        // http://youmightnotneedjquery.com/#add_class

        function addClass(el, className) {
            if (el.classList) {
                el.classList.add(className);
            } else {
                el.className += ' ' + className;
            }
        }

        // http://youmightnotneedjquery.com/#remove_class

        function removeClass(el, className) {
            if (el.classList) {
                el.classList.remove(className);
            } else {
                el.className = el.className.replace(new RegExp('(^|\\b)' +
                    className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
            }
        }

        // https://plainjs.com/javascript/attributes/adding-removing-and-testing-for-classes-9/

        function hasClass(el, className) {
            return el.classList ? el.classList.contains(className) : new RegExp(
                '\\b' + className + '\\b').test(el.className);
        }

        // https://developer.mozilla.org/en-US/docs/Web/API/Window/scrollY#Notes

        function getPageOffset() {
            var supportPageOffset = window.pageXOffset !== undefined,
                isCSS1Compat = ((document.compatMode || "") === "CSS1Compat"),
                x = supportPageOffset ? window.pageXOffset : isCSS1Compat ?
                    document.documentElement.scrollLeft : document.body.scrollLeft,
                y = supportPageOffset ? window.pageYOffset : isCSS1Compat ?
                    document.documentElement.scrollTop : document.body.scrollTop;
            return {
                x: x,
                y: y
            };
        }

        // Shorthand for stopPropagation so we don't have to create a dynamic method

        function stopPropagation(e) {
            e.stopPropagation();
        }

        // todo

        function addCssPrefix(cssPrefix) {
            return function (className) {
                return cssPrefix + className;
            };
        }

        var
            // Determine the events to bind. IE11 implements pointerEvents without
            // a prefix, which breaks compatibility with the IE10 implementation.
            /** @const */
            actions = window.navigator.pointerEnabled ? {
                start: 'pointerdown',
                move: 'pointermove',
                end: 'pointerup'
            } : window.navigator.msPointerEnabled ? {
                start: 'MSPointerDown',
                move: 'MSPointerMove',
                end: 'MSPointerUp'
            } : {
                start: 'mousedown touchstart',
                move: 'mousemove touchmove',
                end: 'mouseup touchend'
            },
            defaultCssPrefix = 'noUi-';
        // Value calculation
        // Determine the size of a sub-range in relation to a full range.
        function subRangeRatio(pa, pb) {
            return (100 / (pb - pa));
        }

        // (percentage) How many percent is this value of this range?

        function fromPercentage(range, value) {
            return (value * 100) / (range[1] - range[0]);
        }

        // (percentage) Where is this value on this range?

        function toPercentage(range, value) {
            return fromPercentage(range, range[0] < 0 ? value + Math.abs(range[0]) :
                value - range[0]);
        }

        // (value) How much is this percentage on this range?

        function isPercentage(range, value) {
            return ((value * (range[1] - range[0])) / 100) + range[0];
        }

        // Range conversion

        function getJ(value, arr) {
            var j = 1;
            while (value >= arr[j]) {
                j += 1;
            }
            return j;
        }

        // (percentage) Input a value, find where, on a scale of 0-100, it applies.

        function toStepping(xVal, xPct, value) {
            if (value >= xVal.slice(-1)[0]) {
                return 100;
            }
            var j = getJ(value, xVal),
                va, vb, pa, pb;
            va = xVal[j - 1];
            vb = xVal[j];
            pa = xPct[j - 1];
            pb = xPct[j];
            return pa + (toPercentage([va, vb], value) / subRangeRatio(pa, pb));
        }

        // (value) Input a percentage, find where it is on the specified range.

        function fromStepping(xVal, xPct, value) {
            // There is no range group that fits 100
            if (value >= 100) {
                return xVal.slice(-1)[0];
            }
            var j = getJ(value, xPct),
                va, vb, pa, pb;
            va = xVal[j - 1];
            vb = xVal[j];
            pa = xPct[j - 1];
            pb = xPct[j];
            return isPercentage([va, vb], (value - pa) * subRangeRatio(pa, pb));
        }

        // (percentage) Get the step that applies at a certain value.

        function getStep(xPct, xSteps, snap, value) {
            if (value === 100) {
                return value;
            }
            var j = getJ(value, xPct),
                a, b;
            // If 'snap' is set, steps are used as fixed points on the slider.
            if (snap) {
                a = xPct[j - 1];
                b = xPct[j];
                // Find the closest position, a or b.
                if ((value - a) > ((b - a) / 2)) {
                    return b;
                }
                return a;
            }
            if (!xSteps[j - 1]) {
                return value;
            }
            return xPct[j - 1] + closest(value - xPct[j - 1], xSteps[j - 1]);
        }

        // Entry parsing

        function handleEntryPoint(index, value, that) {
            var percentage;
            // Wrap numerical input in an array.
            if (typeof value === "number") {
                value = [value];
            }
            // Reject any invalid input, by testing whether value is an array.
            if (Object.prototype.toString.call(value) !== '[object Array]') {
                throw new Error("noUiSlider: 'range' contains invalid value.");
            }
            // Covert min/max syntax to 0 and 100.
            if (index === 'min') {
                percentage = 0;
            } else if (index === 'max') {
                percentage = 100;
            } else {
                percentage = parseFloat(index);
            }
            // Check for correct input.
            if (!isNumeric(percentage) || !isNumeric(value[0])) {
                throw new Error("noUiSlider: 'range' value isn't numeric.");
            }
            // Store values.
            that.xPct.push(percentage);
            that.xVal.push(value[0]);
            // NaN will evaluate to false too, but to keep
            // logging clear, set step explicitly. Make sure
            // not to override the 'step' setting with false.
            if (!percentage) {
                if (!isNaN(value[1])) {
                    that.xSteps[0] = value[1];
                }
            } else {
                that.xSteps.push(isNaN(value[1]) ? false : value[1]);
            }
        }

        function handleStepPoint(i, n, that) {
            // Ignore 'false' stepping.
            if (!n) {
                return true;
            }
            // Factor to range ratio
            that.xSteps[i] = fromPercentage([
                that.xVal[i], that.xVal[i + 1]
            ], n) / subRangeRatio(that.xPct[i], that.xPct[i + 1]);
        }

        // Interface
        // The interface to Spectrum handles all direction-based
        // conversations, so the above values are unaware.

        function Spectrum(entry, snap, direction, singleStep) {
            this.xPct = [];
            this.xVal = [];
            this.xSteps = [singleStep || false];
            this.xNumSteps = [false];
            this.snap = snap;
            this.direction = direction;
            var index, ordered = [ /* [0, 'min'], [1, '50%'], [2, 'max'] */];
            // Map the object keys to an array.
            for (index in entry) {
                if (entry.hasOwnProperty(index)) {
                    ordered.push([entry[index], index]);
                }
            }
            // Sort all entries by value (numeric sort).
            if (ordered.length && typeof ordered[0][0] === "object") {
                ordered.sort(function (a, b) {
                    return a[0][0] - b[0][0];
                });
            } else {
                ordered.sort(function (a, b) {
                    return a[0] - b[0];
                });
            }
            // Convert all entries to subranges.
            for (index = 0; index < ordered.length; index++) {
                handleEntryPoint(ordered[index][1], ordered[index][0], this);
            }
            // Store the actual step values.
            // xSteps is sorted in the same order as xPct and xVal.
            this.xNumSteps = this.xSteps.slice(0);
            // Convert all numeric steps to the percentage of the subrange they represent.
            for (index = 0; index < this.xNumSteps.length; index++) {
                handleStepPoint(index, this.xNumSteps[index], this);
            }
        }

        Spectrum.prototype.getMargin = function (value) {
            return this.xPct.length === 2 ? fromPercentage(this.xVal, value) :
                false;
        };
        Spectrum.prototype.toStepping = function (value) {
            value = toStepping(this.xVal, this.xPct, value);
            // Invert the value if this is a right-to-left slider.
            if (this.direction) {
                value = 100 - value;
            }
            return value;
        };
        Spectrum.prototype.fromStepping = function (value) {
            // Invert the value if this is a right-to-left slider.
            if (this.direction) {
                value = 100 - value;
            }
            return accurateNumber(fromStepping(this.xVal, this.xPct, value));
        };
        Spectrum.prototype.getStep = function (value) {
            // Find the proper step for rtl sliders by search in inverse direction.
            // Fixes issue #262.
            if (this.direction) {
                value = 100 - value;
            }
            value = getStep(this.xPct, this.xSteps, this.snap, value);
            if (this.direction) {
                value = 100 - value;
            }
            return value;
        };
        Spectrum.prototype.getApplicableStep = function (value) {
            // If the value is 100%, return the negative step twice.
            var j = getJ(value, this.xPct),
                offset = value === 100 ? 2 : 1;
            return [this.xNumSteps[j - 2], this.xVal[j - offset], this.xNumSteps[
            j - offset]];
        };
        // Outside testing
        Spectrum.prototype.convert = function (value) {
            return this.getStep(this.toStepping(value));
        };
        /*	Every input option is tested and parsed. This'll prevent
          endless validation in internal methods. These tests are
          structured with an item for every option available. An
          option can be marked as required by setting the 'r' flag.
          The testing function is provided with three arguments:
              - The provided value for the option;
              - A reference to the options object;
              - The name for the option;

          The testing function returns false when an error is detected,
          or true when everything is OK. It can also modify the option
          object, to make sure all values can be correctly looped elsewhere. */
        var defaultFormatter = {
            'to': function (value) {
                return value !== undefined && value.toFixed(2);
            },
            'from': Number
        };

        function testStep(parsed, entry) {
            if (!isNumeric(entry)) {
                throw new Error("noUiSlider: 'step' is not numeric.");
            }
            // The step option can still be used to set stepping
            // for linear sliders. Overwritten if set in 'range'.
            parsed.singleStep = entry;
        }

        function testRange(parsed, entry) {
            // Filter incorrect input.
            if (typeof entry !== 'object' || Array.isArray(entry)) {
                throw new Error("noUiSlider: 'range' is not an object.");
            }
            // Catch missing start or end.
            if (entry.min === undefined || entry.max === undefined) {
                throw new Error("noUiSlider: Missing 'min' or 'max' in 'range'.");
            }
            // Catch equal start or end.
            if (entry.min === entry.max) {
                throw new Error(
                    "noUiSlider: 'range' 'min' and 'max' cannot be equal.");
            }
            parsed.spectrum = new Spectrum(entry, parsed.snap, parsed.dir, parsed
                .singleStep);
        }

        function testStart(parsed, entry) {
            entry = asArray(entry);
            // Validate input. Values aren't tested, as the public .val method
            // will always provide a valid location.
            if (!Array.isArray(entry) || !entry.length || entry.length > 2) {
                throw new Error("noUiSlider: 'start' option is incorrect.");
            }
            // Store the number of handles.
            parsed.handles = entry.length;
            // When the slider is initialized, the .val method will
            // be called with the start options.
            parsed.start = entry;
        }

        function testSnap(parsed, entry) {
            // Enforce 100% stepping within subranges.
            parsed.snap = entry;
            if (typeof entry !== 'boolean') {
                throw new Error("noUiSlider: 'snap' option must be a boolean.");
            }
        }

        function testAnimate(parsed, entry) {
            // Enforce 100% stepping within subranges.
            parsed.animate = entry;
            if (typeof entry !== 'boolean') {
                throw new Error("noUiSlider: 'animate' option must be a boolean.");
            }
        }

        function testConnect(parsed, entry) {
            if (entry === 'lower' && parsed.handles === 1) {
                parsed.connect = 1;
            } else if (entry === 'upper' && parsed.handles === 1) {
                parsed.connect = 2;
            } else if (entry === true && parsed.handles === 2) {
                parsed.connect = 3;
            } else if (entry === false) {
                parsed.connect = 0;
            } else {
                throw new Error(
                    "noUiSlider: 'connect' option doesn't match handle count.");
            }
        }

        function testOrientation(parsed, entry) {
            // Set orientation to an a numerical value for easy
            // array selection.
            switch (entry) {
                case 'horizontal':
                    parsed.ort = 0;
                    break;
                case 'vertical':
                    parsed.ort = 1;
                    break;
                default:
                    throw new Error("noUiSlider: 'orientation' option is invalid.");
            }
        }

        function testMargin(parsed, entry) {
            if (!isNumeric(entry)) {
                throw new Error("noUiSlider: 'margin' option must be numeric.");
            }
            // Issue #582
            if (entry === 0) {
                return;
            }
            parsed.margin = parsed.spectrum.getMargin(entry);
            if (!parsed.margin) {
                throw new Error(
                    "noUiSlider: 'margin' option is only supported on linear sliders."
                );
            }
        }

        function testLimit(parsed, entry) {
            if (!isNumeric(entry)) {
                throw new Error("noUiSlider: 'limit' option must be numeric.");
            }
            parsed.limit = parsed.spectrum.getMargin(entry);
            if (!parsed.limit) {
                throw new Error(
                    "noUiSlider: 'limit' option is only supported on linear sliders."
                );
            }
        }

        function testDirection(parsed, entry) {
            // Set direction as a numerical value for easy parsing.
            // Invert connection for RTL sliders, so that the proper
            // handles get the connect/background classes.
            switch (entry) {
                case 'ltr':
                    parsed.dir = 0;
                    break;
                case 'rtl':
                    parsed.dir = 1;
                    parsed.connect = [0, 2, 1, 3][parsed.connect];
                    break;
                default:
                    throw new Error(
                        "noUiSlider: 'direction' option was not recognized.");
            }
        }

        function testBehaviour(parsed, entry) {
            // Make sure the input is a string.
            if (typeof entry !== 'string') {
                throw new Error(
                    "noUiSlider: 'behaviour' must be a string containing options.");
            }
            // Check if the string contains any keywords.
            // None are required.
            var tap = entry.indexOf('tap') >= 0,
                drag = entry.indexOf('drag') >= 0,
                fixed = entry.indexOf('fixed') >= 0,
                snap = entry.indexOf('snap') >= 0,
                hover = entry.indexOf('hover') >= 0;
            // Fix #472
            if (drag && !parsed.connect) {
                throw new Error(
                    "noUiSlider: 'drag' behaviour must be used with 'connect': true."
                );
            }
            parsed.events = {
                tap: tap || snap,
                drag: drag,
                fixed: fixed,
                snap: snap,
                hover: hover
            };
        }

        function testTooltips(parsed, entry) {
            var i;
            if (entry === false) {
                return;
            } else if (entry === true) {
                parsed.tooltips = [];
                for (i = 0; i < parsed.handles; i++) {
                    parsed.tooltips.push(true);
                }
            } else {
                parsed.tooltips = asArray(entry);
                if (parsed.tooltips.length !== parsed.handles) {
                    throw new Error(
                        "noUiSlider: must pass a formatter for all handles.");
                }
                parsed.tooltips.forEach(function (formatter) {
                    if (typeof formatter !== 'boolean' && (typeof formatter !==
                        'object' || typeof formatter.to !== 'function')) {
                        throw new Error(
                            "noUiSlider: 'tooltips' must be passed a formatter or 'false'."
                        );
                    }
                });
            }
        }

        function testFormat(parsed, entry) {
            parsed.format = entry;
            // Any object with a to and from method is supported.
            if (typeof entry.to === 'function' && typeof entry.from ===
                'function') {
                return true;
            }
            throw new Error(
                "noUiSlider: 'format' requires 'to' and 'from' methods.");
        }

        function testCssPrefix(parsed, entry) {
            if (entry !== undefined && typeof entry !== 'string') {
                throw new Error("noUiSlider: 'cssPrefix' must be a string.");
            }
            parsed.cssPrefix = entry;
        }

        // Test all developer settings and parse to assumption-safe values.

        function testOptions(options) {
            // To prove a fix for #537, freeze options here.
            // If the object is modified, an error will be thrown.
            // Object.freeze(options);
            var parsed = {
                    margin: 0,
                    limit: 0,
                    animate: true,
                    format: defaultFormatter
                },
                tests;
            // Tests are executed in the order they are presented here.
            tests = {
                'step': {
                    r: false,
                    t: testStep
                },
                'start': {
                    r: true,
                    t: testStart
                },
                'connect': {
                    r: true,
                    t: testConnect
                },
                'direction': {
                    r: true,
                    t: testDirection
                },
                'snap': {
                    r: false,
                    t: testSnap
                },
                'animate': {
                    r: false,
                    t: testAnimate
                },
                'range': {
                    r: true,
                    t: testRange
                },
                'orientation': {
                    r: false,
                    t: testOrientation
                },
                'margin': {
                    r: false,
                    t: testMargin
                },
                'limit': {
                    r: false,
                    t: testLimit
                },
                'behaviour': {
                    r: true,
                    t: testBehaviour
                },
                'format': {
                    r: false,
                    t: testFormat
                },
                'tooltips': {
                    r: false,
                    t: testTooltips
                },
                'cssPrefix': {
                    r: false,
                    t: testCssPrefix
                }
            };
            var defaults = {
                'connect': false,
                'direction': 'ltr',
                'behaviour': 'tap',
                'orientation': 'horizontal'
            };
            // Run all options through a testing mechanism to ensure correct
            // input. It should be noted that options might get modified to
            // be handled properly. E.g. wrapping integers in arrays.
            Object.keys(tests).forEach(function (name) {
                // If the option isn't set, but it is required, throw an error.
                if (options[name] === undefined && defaults[name] === undefined) {
                    if (tests[name].r) {
                        throw new Error("noUiSlider: '" + name + "' is required.");
                    }
                    return true;
                }
                tests[name].t(parsed, options[name] === undefined ? defaults[
                    name] : options[name]);
            });
            // Forward pips options
            parsed.pips = options.pips;
            // Pre-define the styles.
            parsed.style = parsed.ort ? 'top' : 'left';
            return parsed;
        }

        function closure(target, options) {
            // All variables local to 'closure' are prefixed with 'scope_'
            var scope_Target = target,
                scope_Locations = [-1, -1],
                scope_Base,
                scope_Handles,
                scope_Spectrum = options.spectrum,
                scope_Values = [],
                scope_Events = {},
                scope_Self;
            var cssClasses = [
                /*  0 */
                'target'
                /*  1 */
                , 'base'
                /*  2 */
                , 'origin'
                /*  3 */
                , 'handle'
                /*  4 */
                , 'horizontal'
                /*  5 */
                , 'vertical'
                /*  6 */
                , 'background'
                /*  7 */
                , 'connect'
                /*  8 */
                , 'ltr'
                /*  9 */
                , 'rtl'
                /* 10 */
                , 'draggable'
                /* 11 */
                , ''
                /* 12 */
                , 'state-drag'
                /* 13 */
                , ''
                /* 14 */
                , 'state-tap'
                /* 15 */
                , 'active'
                /* 16 */
                , ''
                /* 17 */
                , 'stacking'
                /* 18 */
                , 'tooltip'
                /* 19 */
                , ''
                /* 20 */
                , 'pips'
                /* 21 */
                , 'marker'
                /* 22 */
                , 'value'
            ].map(addCssPrefix(options.cssPrefix || defaultCssPrefix));

            // Delimit proposed values for handle positions.
            function getPositions(a, b, delimit) {
                // Add movement to current position.
                var c = a + b[0],
                    d = a + b[1];
                // Only alter the other position on drag,
                // not on standard sliding.
                if (delimit) {
                    if (c < 0) {
                        d += Math.abs(c);
                    }
                    if (d > 100) {
                        c -= (d - 100);
                    }
                    // Limit values to 0 and 100.
                    return [limit(c), limit(d)];
                }
                return [c, d];
            }

            // Provide a clean event with standardized offset values.

            function fixEvent(e, pageOffset) {
                // Prevent scrolling and panning on touch events, while
                // attempting to slide. The tap event also depends on this.
                e.preventDefault();
                // Filter the event to register the type, which can be
                // touch, mouse or pointer. Offset changes need to be
                // made on an event specific basis.
                var touch = e.type.indexOf('touch') === 0,
                    mouse = e.type.indexOf('mouse') === 0,
                    pointer = e.type.indexOf('pointer') === 0,
                    x, y, event = e;
                // IE10 implemented pointer events with a prefix;
                if (e.type.indexOf('MSPointer') === 0) {
                    pointer = true;
                }
                if (touch) {
                    // noUiSlider supports one movement at a time,
                    // so we can select the first 'changedTouch'.
                    x = e.changedTouches[0].pageX;
                    y = e.changedTouches[0].pageY;
                }
                pageOffset = pageOffset || getPageOffset();
                if (mouse || pointer) {
                    x = e.clientX + pageOffset.x;
                    y = e.clientY + pageOffset.y;
                }
                event.pageOffset = pageOffset;
                event.points = [x, y];
                event.cursor = mouse || pointer; // Fix #435
                return event;
            }

            // Append a handle to the base.

            function addHandle(direction, index) {
                var origin = document.createElement('div'),
                    handle = document.createElement('div'),
                    additions = ['-lower', '-upper'];
                if (direction) {
                    additions.reverse();
                }
                addClass(handle, cssClasses[3]);
                addClass(handle, cssClasses[3] + additions[index]);
                addClass(origin, cssClasses[2]);
                origin.appendChild(handle);
                return origin;
            }

            // Add the proper connection classes.

            function addConnection(connect, target, handles) {
                // Apply the required connection classes to the elements
                // that need them. Some classes are made up for several
                // segments listed in the class list, to allow easy
                // renaming and provide a minor compression benefit.
                switch (connect) {
                    case 1:
                        addClass(target, cssClasses[7]);
                        addClass(handles[0], cssClasses[6]);
                        break;
                    case 3:
                        addClass(handles[1], cssClasses[6]);
                    /* falls through */
                    case 2:
                        addClass(handles[0], cssClasses[7]);
                    /* falls through */
                    case 0:
                        addClass(target, cssClasses[6]);
                        break;
                }
            }

            // Add handles to the slider base.

            function addHandles(nrHandles, direction, base) {
                var index, handles = [];
                // Append handles.
                for (index = 0; index < nrHandles; index += 1) {
                    // Keep a list of all added handles.
                    handles.push(base.appendChild(addHandle(direction, index)));
                }
                return handles;
            }

            // Initialize a single slider.

            function addSlider(direction, orientation, target) {
                // Apply classes and data to the target.
                addClass(target, cssClasses[0]);
                addClass(target, cssClasses[8 + direction]);
                addClass(target, cssClasses[4 + orientation]);
                var div = document.createElement('div');
                addClass(div, cssClasses[1]);
                target.appendChild(div);
                return div;
            }

            function addTooltip(handle, index) {
                if (!options.tooltips[index]) {
                    return false;
                }
                var element = document.createElement('div');
                element.className = cssClasses[18];
                return handle.firstChild.appendChild(element);
            }

            // The tooltips option is a shorthand for using the 'update' event.

            function tooltips() {
                if (options.dir) {
                    options.tooltips.reverse();
                }
                // Tooltips are added with options.tooltips in original order.
                var tips = scope_Handles.map(addTooltip);
                if (options.dir) {
                    tips.reverse();
                    options.tooltips.reverse();
                }
                bindEvent('update', function (f, o, r) {
                    if (tips[o]) {
                        tips[o].innerHTML = options.tooltips[o] === true ? f[o] :
                            options.tooltips[o].to(r[o]);
                    }
                });
            }

            function getGroup(mode, values, stepped) {
                // Use the range.
                if (mode === 'range' || mode === 'steps') {
                    return scope_Spectrum.xVal;
                }
                if (mode === 'count') {
                    // Divide 0 - 100 in 'count' parts.
                    var spread = (100 / (values - 1)),
                        v, i = 0;
                    values = [];
                    // List these parts and have them handled as 'positions'.
                    while ((v = i++ * spread) <= 100) {
                        values.push(v);
                    }
                    mode = 'positions';
                }
                if (mode === 'positions') {
                    // Map all percentages to on-range values.
                    return values.map(function (value) {
                        return scope_Spectrum.fromStepping(stepped ?
                            scope_Spectrum.getStep(value) : value);
                    });
                }
                if (mode === 'values') {
                    // If the value must be stepped, it needs to be converted to a percentage first.
                    if (stepped) {
                        return values.map(function (value) {
                            // Convert to percentage, apply step, return to value.
                            return scope_Spectrum.fromStepping(scope_Spectrum.getStep(
                                scope_Spectrum.toStepping(value)));
                        });
                    }
                    // Otherwise, we can simply use the values.
                    return values;
                }
            }

            function generateSpread(density, mode, group) {
                function safeIncrement(value, increment) {
                    // Avoid floating point variance by dropping the smallest decimal places.
                    return (value + increment).toFixed(7) / 1;
                }

                var originalSpectrumDirection = scope_Spectrum.direction,
                    indexes = {},
                    firstInRange = scope_Spectrum.xVal[0],
                    lastInRange = scope_Spectrum.xVal[scope_Spectrum.xVal.length -
                    1],
                    ignoreFirst = false,
                    ignoreLast = false,
                    prevPct = 0;
                // This function loops the spectrum in an ltr linear fashion,
                // while the toStepping method is direction aware. Trick it into
                // believing it is ltr.
                scope_Spectrum.direction = 0;
                // Create a copy of the group, sort it and filter away all duplicates.
                group = unique(group.slice().sort(function (a, b) {
                    return a - b;
                }));
                // Make sure the range starts with the first element.
                if (group[0] !== firstInRange) {
                    group.unshift(firstInRange);
                    ignoreFirst = true;
                }
                // Likewise for the last one.
                if (group[group.length - 1] !== lastInRange) {
                    group.push(lastInRange);
                    ignoreLast = true;
                }
                group.forEach(function (current, index) {
                    // Get the current step and the lower + upper positions.
                    var step, i, q,
                        low = current,
                        high = group[index + 1],
                        newPct, pctDifference, pctPos, type,
                        steps, realSteps, stepsize;
                    // When using 'steps' mode, use the provided steps.
                    // Otherwise, we'll step on to the next subrange.
                    if (mode === 'steps') {
                        step = scope_Spectrum.xNumSteps[index];
                    }
                    // Default to a 'full' step.
                    if (!step) {
                        step = high - low;
                    }
                    // Low can be 0, so test for false. If high is undefined,
                    // we are at the last subrange. Index 0 is already handled.
                    if (low === false || high === undefined) {
                        return;
                    }
                    // Find all steps in the subrange.
                    for (i = low; i <= high; i = safeIncrement(i, step)) {
                        // Get the percentage value for the current step,
                        // calculate the size for the subrange.
                        newPct = scope_Spectrum.toStepping(i);
                        pctDifference = newPct - prevPct;
                        steps = pctDifference / density;
                        realSteps = Math.round(steps);
                        // This ratio represents the ammount of percentage-space a point indicates.
                        // For a density 1 the points/percentage = 1. For density 2, that percentage needs to be re-devided.
                        // Round the percentage offset to an even number, then divide by two
                        // to spread the offset on both sides of the range.
                        stepsize = pctDifference / realSteps;
                        // Divide all points evenly, adding the correct number to this subrange.
                        // Run up to <= so that 100% gets a point, event if ignoreLast is set.
                        for (q = 1; q <= realSteps; q += 1) {
                            // The ratio between the rounded value and the actual size might be ~1% off.
                            // Correct the percentage offset by the number of points
                            // per subrange. density = 1 will result in 100 points on the
                            // full range, 2 for 50, 4 for 25, etc.
                            pctPos = prevPct + (q * stepsize);
                            indexes[pctPos.toFixed(5)] = ['x', 0];
                        }
                        // Determine the point type.
                        type = (group.indexOf(i) > -1) ? 1 : (mode === 'steps' ?
                            2 : 0);
                        // Enforce the 'ignoreFirst' option by overwriting the type for 0.
                        if (!index && ignoreFirst) {
                            type = 0;
                        }
                        if (!(i === high && ignoreLast)) {
                            // Mark the 'type' of this point. 0 = plain, 1 = real value, 2 = step value.
                            indexes[newPct.toFixed(5)] = [i, type];
                        }
                        // Update the percentage count.
                        prevPct = newPct;
                    }
                });
                // Reset the spectrum.
                scope_Spectrum.direction = originalSpectrumDirection;
                return indexes;
            }

            function addMarking(spread, filterFunc, formatter) {
                var style = ['horizontal', 'vertical'][options.ort],
                    element = document.createElement('div'),
                    out = '';
                addClass(element, cssClasses[20]);
                addClass(element, cssClasses[20] + '-' + style);

                function getSize(type) {
                    return ['-normal', '-large', '-sub'][type];
                }

                function getTags(offset, source, values) {
                    return 'class="' + source + ' ' + source + '-' + style + ' ' +
                        source + getSize(values[1]) + '" style="' + options.style +
                        ': ' + offset + '%"';
                }

                function addSpread(offset, values) {
                    if (scope_Spectrum.direction) {
                        offset = 100 - offset;
                    }
                    // Apply the filter function, if it is set.
                    values[1] = (values[1] && filterFunc) ? filterFunc(values[0],
                        values[1]) : values[1];
                    // Add a marker for every point
                    out += '<div ' + getTags(offset, cssClasses[21], values) +
                        '></div>';
                    // Values are only appended for points marked '1' or '2'.
                    if (values[1]) {
                        out += '<div ' + getTags(offset, cssClasses[22], values) +
                            '>' + formatter.to(values[0]) + '</div>';
                    }
                }

                // Append all points.
                Object.keys(spread).forEach(function (a) {
                    addSpread(a, spread[a]);
                });
                element.innerHTML = out;
                return element;
            }

            function pips(grid) {
                var mode = grid.mode,
                    density = grid.density || 1,
                    filter = grid.filter || false,
                    values = grid.values || false,
                    stepped = grid.stepped || false,
                    group = getGroup(mode, values, stepped),
                    spread = generateSpread(density, mode, group),
                    format = grid.format || {
                        to: Math.round
                    };
                return scope_Target.appendChild(addMarking(spread, filter, format));
            }

            // Shorthand for base dimensions.

            function baseSize() {
                var rect = scope_Base.getBoundingClientRect(),
                    alt = 'offset' + ['Width', 'Height'][options.ort];
                return options.ort === 0 ? (rect.width || scope_Base[alt]) : (
                    rect.height || scope_Base[alt]);
            }

            // External event handling

            function fireEvent(event, handleNumber, tap) {
                if (handleNumber !== undefined && options.handles !== 1) {
                    handleNumber = Math.abs(handleNumber - options.dir);
                }
                Object.keys(scope_Events).forEach(function (targetEvent) {
                    var eventType = targetEvent.split('.')[0];
                    if (event === eventType) {
                        scope_Events[targetEvent].forEach(function (callback) {
                            callback.call(
                                // Use the slider public API as the scope ('this')
                                scope_Self,
                                // Return values as array, so arg_1[arg_2] is always valid.
                                asArray(valueGet()),
                                // Handle index, 0 or 1
                                handleNumber,
                                // Unformatted slider values
                                asArray(inSliderOrder(Array.prototype.slice.call(
                                    scope_Values))),
                                // Event is fired by tap, true or false
                                tap || false,
                                // Left offset of the handle, in relation to the slider
                                scope_Locations);
                        });
                    }
                });
            }

            // Returns the input array, respecting the slider direction configuration.

            function inSliderOrder(values) {
                // If only one handle is used, return a single value.
                if (values.length === 1) {
                    return values[0];
                }
                if (options.dir) {
                    return values.reverse();
                }
                return values;
            }

            // Handler for attaching events trough a proxy.

            function attach(events, element, callback, data) {
                // This function can be used to 'filter' events to the slider.
                // element is a node, not a nodeList
                var method = function (e) {
                        if (scope_Target.hasAttribute('disabled')) {
                            return false;
                        }
                        // Stop if an active 'tap' transition is taking place.
                        if (hasClass(scope_Target, cssClasses[14])) {
                            return false;
                        }
                        e = fixEvent(e, data.pageOffset);
                        // Ignore right or middle clicks on start #454
                        if (events === actions.start && e.buttons !== undefined && e.buttons >
                            1) {
                            return false;
                        }
                        // Ignore right or middle clicks on start #454
                        if (data.hover && e.buttons) {
                            return false;
                        }
                        e.calcPoint = e.points[options.ort];
                        // Call the event handler with the event [ and additional data ].
                        callback(e, data);
                    },
                    methods = [];
                // Bind a closure on the target for every event type.
                events.split(' ').forEach(function (eventName) {
                    element.addEventListener(eventName, method, false);
                    methods.push([eventName, method]);
                });
                return methods;
            }

            // Handle movement on document for handle and range drag.

            function move(event, data) {
                // Fix #498
                // Check value of .buttons in 'start' to work around a bug in IE10 mobile (data.buttonsProperty).
                // https://connect.microsoft.com/IE/feedback/details/927005/mobile-ie10-windows-phone-buttons-property-of-pointermove-event-always-zero
                // IE9 has .buttons and .which zero on mousemove.
                // Firefox breaks the spec MDN defines.
                if (navigator.appVersion.indexOf("MSIE 9") === -1 && event.buttons ===
                    0 && data.buttonsProperty !== 0) {
                    return end(event, data);
                }
                var handles = data.handles || scope_Handles,
                    positions, state = false,
                    proposal = ((event.calcPoint - data.start) * 100) / data.baseSize,
                    handleNumber = handles[0] === scope_Handles[0] ? 0 : 1,
                    i;
                // Calculate relative positions for the handles.
                positions = getPositions(proposal, data.positions, handles.length >
                    1);
                state = setHandle(handles[0], positions[handleNumber], handles.length ===
                    1);
                if (handles.length > 1) {
                    state = setHandle(handles[1], positions[handleNumber ? 0 : 1],
                        false) || state;
                    if (state) {
                        // fire for both handles
                        for (i = 0; i < data.handles.length; i++) {
                            fireEvent('slide', i);
                        }
                    }
                } else if (state) {
                    // Fire for a single handle
                    fireEvent('slide', handleNumber);
                }
            }

            // Unbind move events on document, call callbacks.

            function end(event, data) {
                // The handle is no longer active, so remove the class.
                var active = scope_Base.querySelector('.' + cssClasses[15]),
                    handleNumber = data.handles[0] === scope_Handles[0] ? 0 : 1;
                if (active !== null) {
                    removeClass(active, cssClasses[15]);
                }
                // Remove cursor styles and text-selection events bound to the body.
                if (event.cursor) {
                    document.body.style.cursor = '';
                    document.body.removeEventListener('selectstart', document.body.noUiListener);
                }
                var d = document.documentElement;
                // Unbind the move and end events, which are added on 'start'.
                d.noUiListeners.forEach(function (c) {
                    d.removeEventListener(c[0], c[1]);
                });
                // Remove dragging class.
                removeClass(scope_Target, cssClasses[12]);
                // Fire the change and set events.
                fireEvent('set', handleNumber);
                fireEvent('change', handleNumber);
                // If this is a standard handle movement, fire the end event.
                if (data.handleNumber !== undefined) {
                    fireEvent('end', data.handleNumber);
                }
            }

            // Fire 'end' when a mouse or pen leaves the document.

            function documentLeave(event, data) {
                if (event.type === "mouseout" && event.target.nodeName === "HTML" &&
                    event.relatedTarget === null) {
                    end(event, data);
                }
            }

            // Bind move events on document.

            function start(event, data) {
                var d = document.documentElement;
                // Mark the handle as 'active' so it can be styled.
                if (data.handles.length === 1) {
                    addClass(data.handles[0].children[0], cssClasses[15]);
                    // Support 'disabled' handles
                    if (data.handles[0].hasAttribute('disabled')) {
                        return false;
                    }
                }
                // Fix #551, where a handle gets selected instead of dragged.
                event.preventDefault();
                // A drag should never propagate up to the 'tap' event.
                event.stopPropagation();
                // Attach the move and end events.
                var moveEvent = attach(actions.move, d, move, {
                        start: event.calcPoint,
                        baseSize: baseSize(),
                        pageOffset: event.pageOffset,
                        handles: data.handles,
                        handleNumber: data.handleNumber,
                        buttonsProperty: event.buttons,
                        positions: [
                            scope_Locations[0],
                            scope_Locations[scope_Handles.length - 1]
                        ]
                    }),
                    endEvent = attach(actions.end, d, end, {
                        handles: data.handles,
                        handleNumber: data.handleNumber
                    });
                var outEvent = attach("mouseout", d, documentLeave, {
                    handles: data.handles,
                    handleNumber: data.handleNumber
                });
                d.noUiListeners = moveEvent.concat(endEvent, outEvent);
                // Text selection isn't an issue on touch devices,
                // so adding cursor styles can be skipped.
                if (event.cursor) {
                    // Prevent the 'I' cursor and extend the range-drag cursor.
                    document.body.style.cursor = getComputedStyle(event.target).cursor;
                    // Mark the target with a dragging state.
                    if (scope_Handles.length > 1) {
                        addClass(scope_Target, cssClasses[12]);
                    }
                    var f = function () {
                        return false;
                    };
                    document.body.noUiListener = f;
                    // Prevent text selection when dragging the handles.
                    document.body.addEventListener('selectstart', f, false);
                }
                if (data.handleNumber !== undefined) {
                    fireEvent('start', data.handleNumber);
                }
            }

            // Move closest handle to tapped location.

            function tap(event) {
                var location = event.calcPoint,
                    total = 0,
                    handleNumber, to;
                // The tap event shouldn't propagate up and cause 'edge' to run.
                event.stopPropagation();
                // Add up the handle offsets.
                scope_Handles.forEach(function (a) {
                    total += offset(a)[options.style];
                });
                // Find the handle closest to the tapped position.
                handleNumber = (location < total / 2 || scope_Handles.length ===
                    1) ? 0 : 1;
                // Check if handler is not disablet if yes set number to the next handler
                if (scope_Handles[handleNumber].hasAttribute('disabled')) {
                    handleNumber = handleNumber ? 0 : 1;
                }
                location -= offset(scope_Base)[options.style];
                // Calculate the new position.
                to = (location * 100) / baseSize();
                if (!options.events.snap) {
                    // Flag the slider as it is now in a transitional state.
                    // Transition takes 300 ms, so re-enable the slider afterwards.
                    addClassFor(scope_Target, cssClasses[14], 300);
                }
                // Support 'disabled' handles
                if (scope_Handles[handleNumber].hasAttribute('disabled')) {
                    return false;
                }
                // Find the closest handle and calculate the tapped point.
                // The set handle to the new position.
                setHandle(scope_Handles[handleNumber], to);
                fireEvent('slide', handleNumber, true);
                fireEvent('set', handleNumber, true);
                fireEvent('change', handleNumber, true);
                if (options.events.snap) {
                    start(event, {
                        handles: [scope_Handles[handleNumber]]
                    });
                }
            }

            // Fires a 'hover' event for a hovered mouse/pen position.

            function hover(event) {
                var location = event.calcPoint - offset(scope_Base)[options.style],
                    to = scope_Spectrum.getStep((location * 100) / baseSize()),
                    value = scope_Spectrum.fromStepping(to);
                Object.keys(scope_Events).forEach(function (targetEvent) {
                    if ('hover' === targetEvent.split('.')[0]) {
                        scope_Events[targetEvent].forEach(function (callback) {
                            callback.call(scope_Self, value);
                        });
                    }
                });
            }

            // Attach events to several slider parts.

            function events(behaviour) {
                var i, drag;
                // Attach the standard drag event to the handles.
                if (!behaviour.fixed) {
                    for (i = 0; i < scope_Handles.length; i += 1) {
                        // These events are only bound to the visual handle
                        // element, not the 'real' origin element.
                        attach(actions.start, scope_Handles[i].children[0], start, {
                            handles: [scope_Handles[i]],
                            handleNumber: i
                        });
                    }
                }
                // Attach the tap event to the slider base.
                if (behaviour.tap) {
                    attach(actions.start, scope_Base, tap, {
                        handles: scope_Handles
                    });
                }
                // Fire hover events
                if (behaviour.hover) {
                    attach(actions.move, scope_Base, hover, {
                        hover: true
                    });
                    for (i = 0; i < scope_Handles.length; i += 1) {
                        ['mousemove MSPointerMove pointermove'].forEach(function (
                            eventName) {
                            scope_Handles[i].children[0].addEventListener(eventName,
                                stopPropagation, false);
                        });
                    }
                }
                // Make the range draggable.
                if (behaviour.drag) {
                    drag = [scope_Base.querySelector('.' + cssClasses[7])];
                    addClass(drag[0], cssClasses[10]);
                    // When the range is fixed, the entire range can
                    // be dragged by the handles. The handle in the first
                    // origin will propagate the start event upward,
                    // but it needs to be bound manually on the other.
                    if (behaviour.fixed) {
                        drag.push(scope_Handles[(drag[0] === scope_Handles[0] ? 1 : 0)]
                            .children[0]);
                    }
                    drag.forEach(function (element) {
                        attach(actions.start, element, start, {
                            handles: scope_Handles
                        });
                    });
                }
            }

            // Test suggested values and apply margin, step.

            function setHandle(handle, to, noLimitOption) {
                var trigger = handle !== scope_Handles[0] ? 1 : 0,
                    lowerMargin = scope_Locations[0] + options.margin,
                    upperMargin = scope_Locations[1] - options.margin,
                    lowerLimit = scope_Locations[0] + options.limit,
                    upperLimit = scope_Locations[1] - options.limit;
                // For sliders with multiple handles,
                // limit movement to the other handle.
                // Apply the margin option by adding it to the handle positions.
                if (scope_Handles.length > 1) {
                    to = trigger ? Math.max(to, lowerMargin) : Math.min(to,
                        upperMargin);
                }
                // The limit option has the opposite effect, limiting handles to a
                // maximum distance from another. Limit must be > 0, as otherwise
                // handles would be unmoveable. 'noLimitOption' is set to 'false'
                // for the .val() method, except for pass 4/4.
                if (noLimitOption !== false && options.limit && scope_Handles.length >
                    1) {
                    to = trigger ? Math.min(to, lowerLimit) : Math.max(to,
                        upperLimit);
                }
                // Handle the step option.
                to = scope_Spectrum.getStep(to);
                // Limit to 0/100 for .val input, trim anything beyond 7 digits, as
                // JavaScript has some issues in its floating point implementation.
                to = limit(parseFloat(to.toFixed(7)));
                // Return false if handle can't move
                if (to === scope_Locations[trigger]) {
                    return false;
                }
                // Set the handle to the new position.
                // Use requestAnimationFrame for efficient painting.
                // No significant effect in Chrome, Edge sees dramatic
                // performace improvements.
                if (window.requestAnimationFrame) {
                    window.requestAnimationFrame(function () {
                        handle.style[options.style] = to + '%';
                    });
                } else {
                    handle.style[options.style] = to + '%';
                }
                // Force proper handle stacking
                if (!handle.previousSibling) {
                    removeClass(handle, cssClasses[17]);
                    if (to > 50) {
                        addClass(handle, cssClasses[17]);
                    }
                }
                // Update locations.
                scope_Locations[trigger] = to;
                // Convert the value to the slider stepping/range.
                scope_Values[trigger] = scope_Spectrum.fromStepping(to);
                fireEvent('update', trigger);
                return true;
            }

            // Loop values from value method and apply them.

            function setValues(count, values) {
                var i, trigger, to;
                // With the limit option, we'll need another limiting pass.
                if (options.limit) {
                    count += 1;
                }
                // If there are multiple handles to be set run the setting
                // mechanism twice for the first handle, to make sure it
                // can be bounced of the second one properly.
                for (i = 0; i < count; i += 1) {
                    trigger = i % 2;
                    // Get the current argument from the array.
                    to = values[trigger];
                    // Setting with null indicates an 'ignore'.
                    // Inputting 'false' is invalid.
                    if (to !== null && to !== false) {
                        // If a formatted number was passed, attemt to decode it.
                        if (typeof to === 'number') {
                            to = String(to);
                        }
                        to = options.format.from(to);
                        // Request an update for all links if the value was invalid.
                        // Do so too if setting the handle fails.
                        if (to === false || isNaN(to) || setHandle(scope_Handles[
                            trigger], scope_Spectrum.toStepping(to), i === (3 -
                            options.dir)) === false) {
                            fireEvent('update', trigger);
                        }
                    }
                }
            }

            // Set the slider value.

            function valueSet(input) {
                var count, values = asArray(input),
                    i;
                // The RTL settings is implemented by reversing the front-end,
                // internal mechanisms are the same.
                if (options.dir && options.handles > 1) {
                    values.reverse();
                }
                // Animation is optional.
                // Make sure the initial values where set before using animated placement.
                if (options.animate && scope_Locations[0] !== -1) {
                    addClassFor(scope_Target, cssClasses[14], 300);
                }
                // Determine how often to set the handles.
                count = scope_Handles.length > 1 ? 3 : 1;
                if (values.length === 1) {
                    count = 1;
                }
                setValues(count, values);
                // Fire the 'set' event for both handles.
                for (i = 0; i < scope_Handles.length; i++) {
                    // Fire the event only for handles that received a new value, as per #579
                    if (values[i] !== null) {
                        fireEvent('set', i);
                    }
                }
            }

            // Get the slider value.

            function valueGet() {
                var i, retour = [];
                // Get the value from all handles.
                for (i = 0; i < options.handles; i += 1) {
                    retour[i] = options.format.to(scope_Values[i]);
                }
                return inSliderOrder(retour);
            }

            // Removes classes from the root and empties it.

            function destroy() {
                cssClasses.forEach(function (cls) {
                    if (!cls) {
                        return;
                    } // Ignore empty classes
                    removeClass(scope_Target, cls);
                });
                while (scope_Target.firstChild) {
                    scope_Target.removeChild(scope_Target.firstChild);
                }
                delete scope_Target.noUiSlider;
            }

            // Get the current step size for the slider.

            function getCurrentStep() {
                // Check all locations, map them to their stepping point.
                // Get the step point, then find it in the input list.
                var retour = scope_Locations.map(function (location, index) {
                    var step = scope_Spectrum.getApplicableStep(location),
                        // As per #391, the comparison for the decrement step can have some rounding issues.
                        // Round the value to the precision used in the step.
                        stepDecimals = countDecimals(String(step[2])),
                        // Get the current numeric value
                        value = scope_Values[index],
                        // To move the slider 'one step up', the current step value needs to be added.
                        // Use null if we are at the maximum slider value.
                        increment = location === 100 ? null : step[2],
                        // Going 'one step down' might put the slider in a different sub-range, so we
                        // need to switch between the current or the previous step.
                        prev = Number((value - step[2]).toFixed(stepDecimals)),
                        // If the value fits the step, return the current step value. Otherwise, use the
                        // previous step. Return null if the slider is at its minimum value.
                        decrement = location === 0 ? null : (prev >= step[1]) ?
                            step[2] : (step[0] || false);
                    return [decrement, increment];
                });
                // Return values in the proper order.
                return inSliderOrder(retour);
            }

            // Attach an event to this slider, possibly including a namespace

            function bindEvent(namespacedEvent, callback) {
                scope_Events[namespacedEvent] = scope_Events[namespacedEvent] || [];
                scope_Events[namespacedEvent].push(callback);
                // If the event bound is 'update,' fire it immediately for all handles.
                if (namespacedEvent.split('.')[0] === 'update') {
                    scope_Handles.forEach(function (a, index) {
                        fireEvent('update', index);
                    });
                }
            }

            // Undo attachment of event

            function removeEvent(namespacedEvent) {
                var event = namespacedEvent.split('.')[0],
                    namespace = namespacedEvent.substring(event.length);
                Object.keys(scope_Events).forEach(function (bind) {
                    var tEvent = bind.split('.')[0],
                        tNamespace = bind.substring(tEvent.length);
                    if ((!event || event === tEvent) && (!namespace ||
                        namespace === tNamespace)) {
                        delete scope_Events[bind];
                    }
                });
            }

            // Updateable: margin, limit, step, range, animate, snap

            function updateOptions(optionsToUpdate) {
                var v = valueGet(),
                    i, newOptions = testOptions({
                        start: [0, 0],
                        margin: optionsToUpdate.margin,
                        limit: optionsToUpdate.limit,
                        step: optionsToUpdate.step,
                        range: optionsToUpdate.range,
                        animate: optionsToUpdate.animate,
                        snap: optionsToUpdate.snap === undefined ? options.snap : optionsToUpdate
                            .snap
                    });
                ['margin', 'limit', 'step', 'range', 'animate'].forEach(function (
                    name) {
                    if (optionsToUpdate[name] !== undefined) {
                        options[name] = optionsToUpdate[name];
                    }
                });
                // Save current spectrum direction as testOptions in testRange call
                // doesn't rely on current direction
                newOptions.spectrum.direction = scope_Spectrum.direction;
                scope_Spectrum = newOptions.spectrum;
                // Invalidate the current positioning so valueSet forces an update.
                scope_Locations = [-1, -1];
                valueSet(v);
                for (i = 0; i < scope_Handles.length; i++) {
                    fireEvent('update', i);
                }
            }

            // Throw an error if the slider was already initialized.
            if (scope_Target.noUiSlider) {
                throw new Error('Slider was already initialized.');
            }
            // Create the base element, initialise HTML and set classes.
            // Add handles and links.
            scope_Base = addSlider(options.dir, options.ort, scope_Target);
            scope_Handles = addHandles(options.handles, options.dir, scope_Base);
            // Set the connect classes.
            addConnection(options.connect, scope_Target, scope_Handles);
            if (options.pips) {
                pips(options.pips);
            }
            if (options.tooltips) {
                tooltips();
            }
            scope_Self = {
                destroy: destroy,
                steps: getCurrentStep,
                on: bindEvent,
                off: removeEvent,
                get: valueGet,
                set: valueSet,
                updateOptions: updateOptions,
                options: options, // Issue #600
                target: scope_Target, // Issue #597
                pips: pips // Issue #594
            };
            // Attach user events.
            events(options.events);
            return scope_Self;
        }

        // Run the standard initializer

        function initialize(target, originalOptions) {
            if (!target.nodeName) {
                throw new Error('noUiSlider.create requires a single element.');
            }
            // Test the options and create the slider environment;
            var options = testOptions(originalOptions, target),
                slider = closure(target, options);
            // Use the public value method to set the start values.
            slider.set(options.start);
            target.noUiSlider = slider;
            return slider;
        }

        // Use an object instead of a function for future expansibility;
        return {
            create: initialize
        };
    }));
// wNumb number formatter: https://refreshless.com/wnumb/
    (function () {
        'use strict';
        var
            /** @const */
            FormatOptions = ['decimals', 'thousand', 'mark', 'prefix', 'postfix',
                'encoder', 'decoder', 'negativeBefore', 'negative', 'edit', 'undo'
            ];
        // General
        // Reverse a string
        function strReverse(a) {
            return a.split('').reverse().join('');
        }

        // Check if a string starts with a specified prefix.

        function strStartsWith(input, match) {
            return input.substring(0, match.length) === match;
        }

        // Check is a string ends in a specified postfix.

        function strEndsWith(input, match) {
            return input.slice(-1 * match.length) === match;
        }

        // Throw an error if formatting options are incompatible.

        function throwEqualError(F, a, b) {
            if ((F[a] || F[b]) && (F[a] === F[b])) {
                throw new Error(a);
            }
        }

        // Check if a number is finite and not NaN

        function isValidNumber(input) {
            return typeof input === 'number' && isFinite(input);
        }

        // Provide rounding-accurate toFixed method.

        function toFixed(value, decimals) {
            var scale = Math.pow(10, decimals);
            return (Math.round(value * scale) / scale).toFixed(decimals);
        }

        // Formatting
        // Accept a number as input, output formatted string.

        function formatTo(decimals, thousand, mark, prefix, postfix, encoder,
                          decoder, negativeBefore, negative, edit, undo, input) {
            var originalInput = input,
                inputIsNegative, inputPieces, inputBase, inputDecimals = '',
                output = '';
            // Apply user encoder to the input.
            // Expected outcome: number.
            if (encoder) {
                input = encoder(input);
            }
            // Stop if no valid number was provided, the number is infinite or NaN.
            if (!isValidNumber(input)) {
                return false;
            }
            // Rounding away decimals might cause a value of -0
            // when using very small ranges. Remove those cases.
            if (decimals !== false && parseFloat(input.toFixed(decimals)) === 0) {
                input = 0;
            }
            // Formatting is done on absolute numbers,
            // decorated by an optional negative symbol.
            if (input < 0) {
                inputIsNegative = true;
                input = Math.abs(input);
            }
            // Reduce the number of decimals to the specified option.
            if (decimals !== false) {
                input = toFixed(input, decimals);
            }
            // Transform the number into a string, so it can be split.
            input = input.toString();
            // Break the number on the decimal separator.
            if (input.indexOf('.') !== -1) {
                inputPieces = input.split('.');
                inputBase = inputPieces[0];
                if (mark) {
                    inputDecimals = mark + inputPieces[1];
                }
            } else {
                // If it isn't split, the entire number will do.
                inputBase = input;
            }
            // Group numbers in sets of three.
            if (thousand) {
                inputBase = strReverse(inputBase).match(/.{1,3}/g);
                inputBase = strReverse(inputBase.join(strReverse(thousand)));
            }
            // If the number is negative, prefix with negation symbol.
            if (inputIsNegative && negativeBefore) {
                output += negativeBefore;
            }
            // Prefix the number
            if (prefix) {
                output += prefix;
            }
            // Normal negative option comes after the prefix. Defaults to '-'.
            if (inputIsNegative && negative) {
                output += negative;
            }
            // Append the actual number.
            output += inputBase;
            output += inputDecimals;
            // Apply the postfix.
            if (postfix) {
                output += postfix;
            }
            // Run the output through a user-specified post-formatter.
            if (edit) {
                output = edit(output, originalInput);
            }
            // All done.
            return output;
        }

        // Accept a sting as input, output decoded number.

        function formatFrom(decimals, thousand, mark, prefix, postfix, encoder,
                            decoder, negativeBefore, negative, edit, undo, input) {
            var originalInput = input,
                inputIsNegative, output = '';
            // User defined pre-decoder. Result must be a non empty string.
            if (undo) {
                input = undo(input);
            }
            // Test the input. Can't be empty.
            if (!input || typeof input !== 'string') {
                return false;
            }
            // If the string starts with the negativeBefore value: remove it.
            // Remember is was there, the number is negative.
            if (negativeBefore && strStartsWith(input, negativeBefore)) {
                input = input.replace(negativeBefore, '');
                inputIsNegative = true;
            }
            // Repeat the same procedure for the prefix.
            if (prefix && strStartsWith(input, prefix)) {
                input = input.replace(prefix, '');
            }
            // And again for negative.
            if (negative && strStartsWith(input, negative)) {
                input = input.replace(negative, '');
                inputIsNegative = true;
            }
            // Remove the postfix.
            // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/slice
            if (postfix && strEndsWith(input, postfix)) {
                input = input.slice(0, -1 * postfix.length);
            }
            // Remove the thousand grouping.
            if (thousand) {
                input = input.split(thousand).join('');
            }
            // Set the decimal separator back to period.
            if (mark) {
                input = input.replace(mark, '.');
            }
            // Prepend the negative symbol.
            if (inputIsNegative) {
                output += '-';
            }
            // Add the number
            output += input;
            // Trim all non-numeric characters (allow '.' and '-');
            output = output.replace(/[^0-9\.\-.]/g, '');
            // The value contains no parse-able number.
            if (output === '') {
                return false;
            }
            // Covert to number.
            output = Number(output);
            // Run the user-specified post-decoder.
            if (decoder) {
                output = decoder(output);
            }
            // Check is the output is valid, otherwise: return false.
            if (!isValidNumber(output)) {
                return false;
            }
            return output;
        }

        // Framework
        // Validate formatting options

        function validate(inputOptions) {
            var i, optionName, optionValue,
                filteredOptions = {};
            for (i = 0; i < FormatOptions.length; i += 1) {
                optionName = FormatOptions[i];
                optionValue = inputOptions[optionName];
                if (optionValue === undefined) {
                    // Only default if negativeBefore isn't set.
                    if (optionName === 'negative' && !filteredOptions.negativeBefore) {
                        filteredOptions[optionName] = '-';
                        // Don't set a default for mark when 'thousand' is set.
                    } else if (optionName === 'mark' && filteredOptions.thousand !==
                        '.') {
                        filteredOptions[optionName] = '.';
                    } else {
                        filteredOptions[optionName] = false;
                    }
                    // Floating points in JS are stable up to 7 decimals.
                } else if (optionName === 'decimals') {
                    if (optionValue >= 0 && optionValue < 8) {
                        filteredOptions[optionName] = optionValue;
                    } else {
                        throw new Error(optionName);
                    }
                    // These options, when provided, must be functions.
                } else if (optionName === 'encoder' || optionName === 'decoder' ||
                    optionName === 'edit' || optionName === 'undo') {
                    if (typeof optionValue === 'function') {
                        filteredOptions[optionName] = optionValue;
                    } else {
                        throw new Error(optionName);
                    }
                    // Other options are strings.
                } else {
                    if (typeof optionValue === 'string') {
                        filteredOptions[optionName] = optionValue;
                    } else {
                        throw new Error(optionName);
                    }
                }
            }
            // Some values can't be extracted from a
            // string if certain combinations are present.
            throwEqualError(filteredOptions, 'mark', 'thousand');
            throwEqualError(filteredOptions, 'prefix', 'negative');
            throwEqualError(filteredOptions, 'prefix', 'negativeBefore');
            return filteredOptions;
        }

        // Pass all options as function arguments

        function passAll(options, method, input) {
            var i, args = [];
            // Add all options in order of FormatOptions
            for (i = 0; i < FormatOptions.length; i += 1) {
                args.push(options[FormatOptions[i]]);
            }
            // Append the input, then call the method, presenting all
            // options as arguments.
            args.push(input);
            return method.apply('', args);
        }

        /** @constructor */

        function wNumb(options) {
            if (!(this instanceof wNumb)) {
                return new wNumb(options);
            }
            if (typeof options !== "object") {
                return;
            }
            options = validate(options);
            // Call 'formatTo' with proper arguments.
            this.to = function (input) {
                return passAll(options, formatTo, input);
            };
            // Call 'formatFrom' with proper arguments.
            this.from = function (input) {
                return passAll(options, formatFrom, input);
            };
        }

        /** @export */
        window.wNumb = wNumb;
    }());
});


// $(document).ready(function () {
//     $(".chat-menu a").click(function () {
//         console.log("working")
//         $("#chat_menu").removeClass("show");
//     });
// });


