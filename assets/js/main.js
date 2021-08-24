(function($) {
    'use strict';

    function lazyloadingImg() {
        var lazyloadImages;    
      
        if ("IntersectionObserver" in window) {
          lazyloadImages = document.querySelectorAll(".lazy");
          var imageObserver = new IntersectionObserver(function(entries, observer) {
            console.log(observer);
            entries.forEach(function(entry) {
              if (entry.isIntersecting) {
                var image = entry.target;
                image.src = image.dataset.src;
                image.classList.remove("lazy");
                imageObserver.unobserve(image);
              }
            });
          }, {
            root: document.querySelector("#container"),
            rootMargin: "0px 0px 500px 0px"
          });
      
          lazyloadImages.forEach(function(image) {
            imageObserver.observe(image);
          });
        } else {  
          var lazyloadThrottleTimeout;
          lazyloadImages = $(".lazy");
          
          function lazyload () {
            if(lazyloadThrottleTimeout) {
              clearTimeout(lazyloadThrottleTimeout);
            }    
      
            lazyloadThrottleTimeout = setTimeout(function() {
                var scrollTop = $(window).scrollTop();
                lazyloadImages.each(function() {
                    var el = $(this);
                    if(el.offset().top < window.innerHeight + scrollTop + 500) {
                      var url = el.attr("data-src");
                      el.attr("src", url);
                      el.removeClass("lazy");
                      lazyloadImages = $(".lazy");
                    }
                });
                if(lazyloadImages.length == 0) { 
                  $(document).off("scroll");
                  $(window).off("resize");
                }
            }, 20);
          }
      
          $(document).on("scroll", lazyload);
          $(window).on("resize", lazyload);
        }
      }

      function services_fn() {
        $(document.body).on('click','.services .services-info',function(e){
          $('.services .services-details').slideUp();
          $(this).find('.services-details').toggle();
          $(this).parent().addClass('v-details');
         });
      }

      

    $(function() {
        AOS.init();
        lazyloadingImg();
        services_fn();

        //Main Menu
        $('#menu-toggle').click(function () {
            $('#sidebar-wrapper').toggleClass('active');
            $('.logo').toggleClass('active');
            $('.nav-icon').toggleClass('active');
        });

        $('#country-nav-toggler').click(function (e) {
            e.preventDefault();
            $('.country-nav').toggleClass('d-none');
            /*
            if ($('.country-nav').hasClass('d-none')){
                $('.country-nav').removeClass('d-none');
            }else {
                $('.country-nav').addClass('d-none');
            }*/
        });

        $('[data-toggle="tooltip"]').tooltip();

        $(".slider-1").owlCarousel({
          items:4,
          itemsDesktop:[1000,4],
          itemsDesktopSmall:[979,4],
          itemsTablet:[768,3],
          itemsMobile:[650,2],
          pagination: false,
          navigation : false,
          autoPlay:true
      });

      $(".slider-2").owlCarousel({
          items:1,
          itemsDesktop:[1000,1],
          itemsDesktopSmall:[979,1],
          itemsTablet:[768,1],
          itemsMobile:[650,1],
          pagination: false,
          navigation : false,
          autoPlay:true
      });
      

    });
})(jQuery);

