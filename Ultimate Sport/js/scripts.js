//jQuery code
jQuery(function($) {
	"use strict";



    if($(".homeslider").length){
        $('.homeslider').slick({

        });

        $('.homeslider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            $('.ale_date').removeClass('animated fadeInRightBig');
            $('.ale_matchnames').removeClass('animated fadeInLeftBig');
            $('.ale_place').removeClass('animated fadeInRightBig');
            $('.ale_timer').removeClass('animated fadeInLeftBig');

            $('.slick-active').next().find('.ale_date').addClass('animated fadeInRightBig');
            $('.slick-active').next().find('.ale_matchnames').addClass('animated fadeInLeftBig');
            $('.slick-active').next().find('.ale_place').addClass('animated fadeInRightBig');
            $('.slick-active').next().find('.ale_timer').addClass('animated fadeInLeftBig');
        });

    }


    if($('.news_slider').length){
        $('.news_slider').slick({
            prevArrow: '.prev_news_title',
            nextArrow: '.next_news_title'
        })
    }

    if($('.players_slider').length){
        $('.players_slider').slick({
            fade: true,
            prevArrow: '.prev_player',
            nextArrow: '.next_player'
        })
    }

    if($('.shop_slider').length){
        $('.shop_slider').slick({
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '.prev_shop_item',
            nextArrow: '.next_shop_item',
            responsive: [
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 550,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        })
    }

    $('.future_matches').on('click', function() {
        $('#last_matches').hide();
        $('#future_matches').show();

        $('.last_matches').removeClass('disabled').css('background', '#1e2022');
        $(this).addClass('disabled').parent().css('background', '#ff5d6e');
    })

    $('.last_matches').on('click', function() {
        $('#future_matches').hide();
        $('#last_matches').show();

        $('.future_matches').removeClass('disabled').parent().css('background', '#1e2022');
        $(this).addClass('disabled').css('background', '#ff5d6e');
    })

    $('.preloader').fadeOut();

});
