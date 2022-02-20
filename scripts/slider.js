$('.slider').slick({
    infinite: true,
  slidesToShow: 3,
  lazyLoad: 'ondemand',
  dots: true,
  autoplaySpeed: 2000,
  swipeToSlide: true,
  responsive: [
    {
      breakpoint: 940,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 650,
      settings: {
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 500,
      settings: {
        arrows: false,
        slidesToShow: 1
      }
    }
  ]
});