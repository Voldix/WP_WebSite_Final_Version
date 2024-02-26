$(document).ready(function() {

    /* smooth scrolling */

    $('.header a[href^="#"]').click(function() {
        let target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        },500);
        $('.header a[href^="#"]').parent().removeClass('active');
        $(this).parent().addClass('active');
        $('.menu_mobile .menu').toggle(500);
        $('.menu_burger').toggleClass('close');
        return false;
    });

    /* mobile menu */

    $('.menu_burger').click(function() {
        $('.menu_mobile .menu').toggle(500);
        $(this).toggleClass('close');
    });

    /* swiper */
    let swiper = new Swiper(".mySwiper", {
        slidesPerView: 3, //displays the number of cards per slide time
        slidesPerGroup: 3, //scrolling the slide through three at once
        loop: true, //scrolling through the slide in a circle
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});