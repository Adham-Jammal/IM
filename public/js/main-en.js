let preloader = document.getElementById("preloader");
if (preloader) {
  window.addEventListener("load", () => {
    preloader.remove();
  });
}


window.addEventListener("load", () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  });

  var swiper = new Swiper('.swiper-container', {
    grabCursor: true,
    centeredSlides: true,
    // freeMode: true,
    loop: true,
    slidesPerView: 'auto',
    effect: 'coverflow',
    coverflowEffect: {
        rotate: 0,
        stretch: 240,
        depth: 100,
        modifier: 1,
        slideShadows : true
    },
    autoplay: {
      delay: 2000,
    },
    breakpoints: {
        0: {
            direction: 'vertical',
            coverflowEffect: {
                rotate: 0,
                stretch: 280,
                depth: 40,
                modifier: 1,
                slideShadows : true
            },
         },
         991: {
            direction: 'horizontal',
         },
      },


  });

  $(".part-of-work .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    margin: 40,
    center: true,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: true,
    navText: [
      '<i class="fa fa-caret-left"></i>',
      '<i class="fa fa-caret-right"></i>',
    ],
    responsive: {
      0: {
        items: 2.5,
        margin: 10,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });


  $(".advantage-carousel").owlCarousel({
    items: 1.4,
    loop: true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    margin: 50,
    center: true,
    dots: true,
    smartSpeed: 1000,
    lazyLoad: true,
    responsive: {
        0: {
          items: 1.4,
        },
        768: {
            items: 2.2,
          },

      },
  });

  $(".testimonials-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    margin: 50,
    center: true,
    dots: true,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: true,
    navText: [
        '<i class="fa fa-caret-left arrow-nav"></i>',
        '<i class="fa fa-caret-right arrow-nav"></i>',
      ],


  });
