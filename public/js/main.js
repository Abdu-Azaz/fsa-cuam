!(function (o) {
    "use strict";
    setTimeout(function () {
        o("#spinner").length > 0 && o("#spinner").removeClass("show");
    }, 1),
        new WOW().init(),
        o(window).on("load resize scroll", function () {
            // window.innerWidth > 600
            //     ? o(this).scrollTop() > 45
            //         ? (o(".navbar").addClass("sticky-top shadow-sm"),
            //           o(".navbar #brand-ligh").css("display", "block"),
            //           o(".navbar #brand-light").css("display", "none")
            //           )
            //         : (o(".navbar").removeClass("sticky-top shadow-sm"),
            //           o(".navbar #brand-dark").css("display", "none"),
            //           o(".navbar #brand-light").css("display", "block")
            //           )
            //     : (o(".navbar #brand-dark").css("display", "block"),
            //       o(".navbar #brand-light").css("display", "none"));
            window.innerWidth > 991.92 ? o(this).scrollTop() > 45 ? (o(".navbar").addClass("sticky-top shadow-sm"), o(".navbar #brand-dark").css("display", "block"), o(".navbar #brand-light").css("display", "none")) : (o(".navbar").removeClass("sticky-top shadow-sm"), o(".navbar #brand-dark").css("display", "none"), o(".navbar #brand-light").css("display", "block")) : (o(".navbar #brand-dark").css("display", "block"), o(".navbar #brand-light").css("display", "none"))
        });
    let s = o(".dropdown"),
        e = o(".dropdown-toggle"),
        a = o(".dropdown-menu"),
        t = "show";
    o(window).on("load resize", function () {
        this.matchMedia("(min-width: 992px)").matches
            ? s.hover(
                  function () {
                      let s = o(this);
                      s.addClass(t),
                          s.find(e).attr("aria-expanded", "true"),
                          s.find(a).addClass(t);
                  },
                  function () {
                      let s = o(this);
                      s.removeClass(t),
                          s.find(e).attr("aria-expanded", "false"),
                          s.find(a).removeClass(t);
                  }
              )
            : s.off("mouseenter mouseleave");
    }),
        o('[data-toggle="counter-up"]').counterUp({
            delay: 10,
            time: 3e3,
        }),
        o(window).scroll(function () {
            o(this).scrollTop() > 100
                ? o(".back-to-top").fadeIn("slow")
                : o(".back-to-top").fadeOut("slow");
        }),
        o(".back-to-top").click(function () {
            return (
                o("html, body").animate(
                    {
                        scrollTop: 0,
                    },
                    1500,
                    "easeInOutExpo"
                ),
                !1
            );
        }),
        o(".testimonial-carousel").owlCarousel({
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
        o(".vendor-carousel").owlCarousel({
            loop: !0,
            margin: 50,
            dots: !0,
            loop: !0,
            autoplay: !0,
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
        o(".plateforms-carousel").owlCarousel({
            loop: !0,
            margin: 10,
            dots: true,
            loop: true,
            autoplay: !0,
            smartSpeed: 400,
            responsive: {
                0: {
                    items: 2,
                },
                576: {
                    items: 3,
                },
                900: {
                    items: 3,
                },
            },
        }),
        o(".owl-carousel").owlCarousel({
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
        o(document).on("click", ".owl-next", function () {
            o(".owl-carousel").trigger("next.owl.carousel");
        }),
        o(document).on("click", ".owl-prev", function () {
            o(".owl-carousel").trigger("prev.owl.carousel");
        });
})(jQuery);
