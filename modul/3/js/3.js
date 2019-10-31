(function ($) {
    $(document).ready(function () {
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 50,
            slidesPerView: 6,
            slidesPerGroup: 2,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                720: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                1040: {
                    slidesPerView: 4,
                    spaceBetween: 40
                },
            }
        });
    });
})(jQuery);