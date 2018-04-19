function subMenu() {
    var menu = $('.navigation__item');
        menu.click(function(e) {
            e.preventDefault();
            menu.removeClass('active');
            $(this).addClass('active');
            
            if ($(this).hasClass('active')) {
                $('.sub-menu').not(this).removeClass('visible');
                $(this).find('.sub-menu').toggleClass('visible');
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

function dots() {
    var horizontal_headings = 100,
        item_description = $('.horizontal-scroll__heading :first-child'),
        description_text = item_description.text();
    if (description_text.length >  horizontal_headings) {
        item_description.text(description_text.slice(0,  horizontal_headings) + ' ...');
    }
    var horizontal_size = 170,
        item_description = $('.horizontal-scroll__description'),
        description_text = item_description.text();
    if (description_text.length > horizontal_size) {
        item_description.text(description_text.slice(0, horizontal_size) + ' ...');
    }
    var vertical_size = 270,
        item_description = $('.vertical-scroll__description p:first-child'),
        description_text = item_description.text();
    if (description_text.length > vertical_size) {
        item_description.text(description_text.slice(0, vertical_size) + ' ...');
    }
}

function slider() {
    $('.partners-slider').slick({
        mobileFirst : true,
        infinite : true,
        slidesToShow : 5,
        arrows : true,
        prevArrow : '<span class="glyphicon glyphicon-menu-left"></span>',
        nextArrow : '<span class="glyphicon glyphicon-menu-right"></span>'
    });
}



$(document).ready(function() {
    subMenu();
    close();
    horizontalScroll();
    verticalScroll();
    dots();
    slider();
});