'use strict';

module.exports = function () {
    $('.quiz-container').slick({
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        accessibility: false,
        infinite: false,
        draggable: false,
        autoplay: true,
        speed: 400,
        autoplaySpeed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        swipe: false
      });

      $('.slick-jump').on('click', function(){
        $(".quiz-container").slick('slickNext')
      })

      $('.slick-next').on('click', function(){
        $(".quiz-container").slick('slickNext')
      })
}