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




$('.cards').owlCarousel({
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    loop: true,
    navText: [" ", " "],
    dots: false,
    rtl: false,
    margin: 20,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        800:{
            loop:true,
            items:3,
            nav:false
        },
        700:{
            loop:true,
            items:2,
            nav:false
        },
        1000:{
            loop:true,
            items:5,
            nav:true,
        }
    }
})
$('#reviews').owlCarousel({
    center: true,
    loop: true,
    navText: [" ", " "],
    dots: false,
    rtl: false,
    margin: 20,
    responsive:{
        0:{
            autoplay:false,
            items:1,
        },
        768:{
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            loop:true,
            items:3,
            nav:false
        },
    }
})



$("#hero_carousel").owlCarousel({
    loop: true,
    nav: true,
    autoplay: false,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    margin: 0,
    center: true,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: false,
    mouseDrag: false,
    slideTransition: "",
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
    onInitialized: coverFlowEfx,
    onTranslate: coverFlowEfx,
  });

  function coverFlowEfx(e) {
    if ($(".owl-dots")) {
      $(".owl-dots").remove();
    }
    idx = e.item.index;
    $(".owl-item.big").removeClass("big");
    $(".owl-item.medium").removeClass("medium");
    $(".owl-item.mdright").removeClass("mdright");
    $(".owl-item.mdleft").removeClass("mdleft");
    $(".owl-item.smallRight").removeClass("smallRight");
    $(".owl-item.smallLeft").removeClass("smallLeft");
    $(".owl-item")
      .eq(idx - 1)
      .addClass("medium mdleft");
    $(".owl-item").eq(idx).addClass("big");
    $(".owl-item")
      .eq(idx + 1)
      .addClass("medium mdright");
    $(".owl-item")
      .eq(idx + 2)
      .addClass("smallRight");
    $(".owl-item")
      .eq(idx - 2)
      .addClass("smallLeft");
  }



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
    autoplay: false,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    margin: 50,
    center: true,
    dots: true,
    smartSpeed: 1000,
    lazyLoad: true,
  });
