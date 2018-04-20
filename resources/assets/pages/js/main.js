function subMenu() {
    var menu = $('.navigation__item');
        menu.click(function(e) {
            e.preventDefault();
            menu.removeClass('active');
            $(this).addClass('active');
            
            if ($(this).hasClass('active')) {
                $('.sub-menu').not(this).removeClass('visible');
                $(this).find('.sub-menu').toggleClass('visible');
                $('header').toggleClass('expand');
                close();
            }
        });
            $(this).click(function(e) {
               $(this).toggleClass('active'); 
                $(this).find('.sub-menu').toggleClass('visible');
                
            });
    
//    $('.navigation__item').click(function() {
//        $('.sub-menu', this).stop().toggleClass('visible');
//        $(document).on('click', function(e) {
//            if(!$(e.target).closest('.navigation__item').length) {
//                $('.sub-menu').removeClass('visible');
//            }
//            e.stopPropagation();
//        });
//        /*return false;*/
//        
////        $('.sub-menu', this).children().stop().slideToggle();
//        
//        
//        /*if ($('.sub-menu').css('display') == 'none') {
//            $(this).children('.sub-menu').css('display', 'flex');
//        } else {
//            $(this).children('.sub-menu').css('display', 'none');
//        }*/
//    });
}

function close() {
    $('.navigation__item').on('click', function(e) {
//        $(this).css('background-color', 'blue');
        $(this).toggleClass('active');
        if (!($(this).hasClass('active'))) {
            $(this).children('.sub-menu').addClass('visible');
        }
        else {
            $(this).children('.sub-menu').removeClass('visible');
        }
    })
}

function horizontalScroll() {
    $(".horizontal-scroll").mCustomScrollbar({
        axis : 'x',
        alwaysShowScrollbar: 1,
        theme:"green-3",
        contentTouchScroll: 25,
        scrollButtons:{ enable: true },
        keyboard:{ enable: true },
        documentTouchScroll: true,
        advanced:{ autoExpandHorizontalScroll: true }
    });
    var arrow_left = $('.mCSB_buttonLeft');
    var arrow_right = $('.mCSB_buttonRight');
    arrow_left.append('<span class="glyphicon glyphicon-menu-left"></span>');
    arrow_right.append('<span class="glyphicon glyphicon-menu-right"></span>');
}

function verticalScroll() {
    $(".vertical-scroll").mCustomScrollbar({
        axis : 'y',
        alwaysShowScrollbar: 1,
        theme:"green-3",
        contentTouchScroll: 25,
        scrollButtons:{ enable: true },
        keyboard:{ enable: true },
        documentTouchScroll: true,
        advanced:{ autoExpandHorizontalScroll:true }
    });
    var arrow_up = $('.mCSB_buttonUp');
    var arrow_down = $('.mCSB_buttonDown');
    arrow_up.append('<span class="glyphicon glyphicon-menu-up"></span>');
    arrow_down.append('<span class="glyphicon glyphicon-menu-down"></span>');
}

$('.horizontal-scroll__heading').children().jTruncate({
    length : 100,
    minTrail : 0,
    moreText : '',
    ellipsisText : '...'
});

$('.horizontal-scroll__description').children().jTruncate({
    length : 100,
    minTrail : 0,
    moreText : '',
    ellipsisText : '...'
});
$('.vertical-scroll__description').children().jTruncate({
    length : 270,
    minTrail : 0,
    moreText : '',
    ellipsisText : '...'
});

function slider() {
    $('.partners-slider').slick({
        mobileFirst : true,
        infinite : true,
        slidesToShow : 5,
        arrows : true,
        prevArrow : '<span class="glyphicon glyphicon-menu-left"></span>',
        nextArrow : '<span class="glyphicon glyphicon-menu-right"></span>'
    }); // Slider for partners images
    $('.alphabet-slider').slick({
        slidesToShow : 15,
        swipeToSlide : true,
        arrows : true,
        prevArrow : '<span class="glyphicon glyphicon-menu-left"></span>',
        nextArrow : '<span class="glyphicon glyphicon-menu-right"></span>'
    }); // Slider for alphabet
    $('.authors-slider').slick({
        slidesToShow : 3,
        slidesToScroll : 3,
        customPaging: function (slider, i) {
            return i + 1;
        },
        dots:true,
        arrows : true,
        prevArrow : '<span class="glyphicon glyphicon-menu-left"></span>',
        nextArrow : '<span class="glyphicon glyphicon-menu-right"></span>',
        appendArrows: $('.slider-pagination__item_authors'),
        appendDots: $('.slider-pagination__item_authors'),
    }); // Slider for authors names at wrighters.html
    $('.authors-slider__from-ukr').slick({
        slidesToShow : 3,
        slidesToScroll : 3,
        customPaging: function (slider, i) {
            return i + 1;
        },
        dots:true,
        arrows : true,
        prevArrow : '<span class="glyphicon glyphicon-menu-left"></span>',
        nextArrow : '<span class="glyphicon glyphicon-menu-right"></span>',
        appendArrows: $('.slider-pagination__item_from-ukr'),
        appendDots: $('.slider-pagination__item_from-ukr'),
    }), // Slider for pagination (interpreters FROM ukrainian) at translaters.html
        $('.slick-dots').wrap('<div class="slider-pagination__wrapper"></div>'); // Wrapping ul element from slick at translaters.html
        $('.slick-dots').addClass('clearfix'); // Adding .clearfix for ul element from slick at translaters.html
    
        /*var sliderPaginationElements = $('.slick-dots li');
        var prev_arrow = $('.slider-pagination .glyphicon-menu-left');*/
    
    $('.authors-slider__to-ukr').slick({
        slidesToShow : 3,
        slidesToScroll : 3,
        customPaging: function (slider, i) {
            return i + 1;
        },
        dots:true,
        arrows : true,
        prevArrow : '<span class="glyphicon glyphicon-menu-left"></span>',
        nextArrow : '<span class="glyphicon glyphicon-menu-right"></span>',
        appendArrows: $('.slider-pagination__item_to-ukr'),
        appendDots: $('.slider-pagination__item_to-ukr'),
    }), // Slider for pagination (interpreters TO ukrainian) at translaters.html
        $('.slick-dots').wrap('<div class="slider-pagination__wrapper"></div>');
        $('.slick-dots').addClass('clearfix');
    
        /*var sliderPaginationElements = $('.slick-dots li');
        var prev_arrow = $('.slider-pagination .glyphicon-menu-left');*/
}

function customFileSelect() {
    var inputTypeFile = $('input[type="file"]');
    var buttonAdd = $('.section-heading_section-button__all');
//    var fileNameText = $('.section-heading_section-button__file-name');
        $(buttonAdd).click(function() {
            $(inputTypeFile).click();
//            var file = $(inputTypeFile).prop('files');
//            var fileName = $(file).prop('name');
//            $(fileNameText).append(fileName);
//            console.log(fileName);
//            return false;
        });
}




$(document).ready(function() {
    subMenu();
    close();
    horizontalScroll();
    verticalScroll();
    slider();
    customFileSelect();
});