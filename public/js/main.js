!(function ($) {
    "use strict";
    setTimeout(function () {
        $("#spinner").length > 0 && $("#spinner").removeClass("show");
    }, 1),
        new WOW().init(),
        $(window).on("scroll load resize", function () {
            if (window.innerWidth > 991.92) {
                if ($(this).scrollTop() > 45) {
                    $(".navbar").addClass("sticky-top shadow-sm");
                } else $(".navbar").removeClass("sticky-top shadow-sm");
            }
        });
        document.body.style.zoom = "85%"; // Adjust the zoom level as needed
        $('footer').css('visibility','visible');
    // });
    let s = $(".dropdown"),
        e = $(".dropdown-toggle"),
        a = $(".dropdown-menu"),
        t = "show";
    $(window).on("load resize", function () {
        this.matchMedia("(min-width: 992px)").matches
            ? s.hover(
                  function () {
                      let s = $(this);
                      s.addClass(t),
                          s.find(e).attr("aria-expanded", "true"),
                          s.find(a).addClass(t);

                  },
                  function () {
                      let s = $(this);
                      s.removeClass(t),
                          s.find(e).attr("aria-expanded", "false"),
                          s.find(a).removeClass(t);
                  }
              )
            : s.off("mouseenter mouseleave");
    }),
        $('[data-toggle="counter-up"]').counterUp({
            delay: 10,
            time: 3e3,
        }),
        $(window).scroll(function () {
            $(this).scrollTop() > 100
                ? $(".back-to-top").fadeIn("slow")
                : $(".back-to-top").fadeOut("slow");
        }),
        $(".back-to-top").click(function () {
            return (
                $("html, body").animate(
                    {
                        scrollTop: 0,
                    },
                    1500,
                    "easeInOutExpo"
                ),
                !1
            );
        }),
        $(".testimonial-carousel").owlCarousel({
            autoplay: !1,
            smartSpeed: 1500,
            dots: !0,
            loop: !1,
            center: !0,
            responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 4,
                },
            },
        }),
        $(".vendor-carousel").owlCarousel({
            loop: !0,
            margin: 50,
            dots: !0,
            loop: !0,
            autoplay: true,
            // navigation:true,
            // center:true,
            smartSpeed: 100,
            responsive: {
                0: {
                    items: 3,
                },
                576: {
                    items: 4,
                },
                768: {
                    items: 5,
                },
            },
        }),
        $(".plateforms-carousel").owlCarousel({
            loop: !0,
            margin: 10,
            dots: true,
            loop: true,
            autoplay: !0,
            smartSpeed: 400,
            responsive: {
                0: {
                    items: 3,
                },
                576: {
                    items: 3,
                },
                900: {
                    items: 3,
                },
            },
        }),
        $(".owl-carousel").owlCarousel({
            loop: false,
            margin: 10,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 3,
                },
                900: {
                    items: 4,
                },
            },
        }),
        $(document).on("click", ".owl-next", function () {
            $(".owl-carousel").trigger("next.owl.carousel");
        }),
        $(document).on("click", ".owl-prev", function () {
            $(".owl-carousel").trigger("prev.owl.carousel");
        });
})(jQuery);
