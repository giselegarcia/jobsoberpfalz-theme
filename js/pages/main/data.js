let logoCarouselConfig = {
    slidesToShow: 7,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    responsive: [
        {
            breakpoint: 2000,
            settings: {slidesToShow: 7}
        },
        {
            breakpoint: 1200,
            settings: {slidesToShow: 6}
        },
        {
            breakpoint: 768,
            settings: {slidesToShow: 4}
        },
        {
            breakpoint: 520,
            settings: {slidesToShow: 3}
        }
    ]
};