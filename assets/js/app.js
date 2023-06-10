"use strict";

/*
* Kohost v9.0.0 - Modern Web Hosting & WHMCS Template
* Copyright 2022 Themetags
* Licensed under ThemeForest License
* Author: https://themeforest.net/user/themetags
*/

// TABLE OF CONTENTS

//  1. preloader
//  2. page scrolling feature - requires jQuery Easing plugin
//  3. fixed navbar
//  4. back to top
//  6. tooltip
//  7. our clients logo carousel
//  8. magnify popup video
// 9. client-testimonial one item carousel
// 10. client-testimonial two
// 11. monthly and yearly pricing switch
// 12. coming soon count
// 13. contact form
// 14. custom vps hosting plan js

(function ($) {
  "use strict";

  // 1. preloader
  $(window).ready(function () {
    $("#preloader").delay(200).fadeOut("fade");
  });

  // 2. mega menu js
  $(".js-mega-menu").HSMegaMenu({
    event: "hover",
    pageContainer: $(".container"),
    breakpoint: 767.98,
    hideTimeOut: 0
  });

  // Off Canvas Menu Open & Close
  $("#offCanvas").on("click", function () {
    $(".nav-offcanvas").addClass("open");
    $(".offcanvas-overlay").addClass("on");
  });
  $("#offCanvasClose, .offcanvas-overlay").on("click", function () {
    $(".nav-offcanvas").removeClass("open");
    $(".offcanvas-overlay").removeClass("on");
  });

  // 3. fixed navbar
  $(window).on("scroll", function () {
    // checks if window is scrolled more than 500px, adds/removes solid class
    if ($(this).scrollTop() > 0) {
      $(".main-header-menu-wrap").addClass("affix");
      $(".scroll-to-target").addClass("open");
    } else {
      $(".main-header-menu-wrap").removeClass("affix");
      $(".scroll-to-target").removeClass("open");
    }
    // checks if window is scrolled more than 500px, adds/removes top to target class
    if ($(this).scrollTop() > 500) {
      $(".scroll-to-target").addClass("open");
    } else {
      $(".scroll-to-target").removeClass("open");
    }
  });

  // 4. back to top
  if ($(".scroll-to-target").length) {
    $(".scroll-to-target").on("click", function () {
      var target = $(this).attr("data-target");
      // animate
      $("html, body").animate({
        scrollTop: $(target).offset().top
      }, 500);
    });
  }

  // 6. tooltip

  $(function () {
    $('[data-bs-toggle="tooltip"]').tooltip();
    $('.custom-map-location li span').tooltip('show');
  });

  // 7. our clients logo carousel
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    loop: true,
    margin: 15,
    dots: false,
    slideTransition: "linear",
    autoplayTimeout: 4500,
    autoplayHoverPause: true,
    autoplaySpeed: 4500,
    responsive: {
      0: {
        items: 2
      },
      500: {
        items: 3
      },
      600: {
        items: 4
      },
      800: {
        items: 5
      },
      1200: {
        items: 6
      }
    }
  });

  //hero gaming slider
  $(".custom-indicator-slider").owlCarousel({
    items: 1,
    nav: false,
    dots: true,
    smartSpeed: 1000,
    dotsContainer: "#carousel-custom-indicator"
  });

  // 8. magnify popup video
  $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
    disableOn: 700,
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  // 9. client-testimonial one item carousel
  $(".client-testimonial-1").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    responsiveClass: true,
    autoplay: true,
    autoplayHoverPause: true,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1
      },
      500: {
        items: 2
      },
      600: {
        items: 2
      },
      800: {
        items: 3
      },
      1200: {
        items: 3
      }
    }
  });
  // 10. client-testimonial one item carousel
  $(".client-testimonial-2").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    responsiveClass: true,
    autoplay: true,
    autoplayHoverPause: true,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1
      },
      500: {
        items: 1
      },
      600: {
        items: 1
      },
      800: {
        items: 2
      },
      1200: {
        items: 2
      }
    }
  });
  // 11. monthly and yearly pricing switch
  $("#js-contcheckbox").change(function () {
    if (this.checked) {
      $(".monthly-price").css("display", "none");
      $(".yearly-price").css("display", "block");
      $(".afterinput").addClass("text-success");
      $(".beforeinput").removeClass("text-success");
    } else {
      $(".monthly-price").css("display", "block");
      $(".yearly-price").css("display", "none");
      $(".afterinput").removeClass("text-success");
      $(".beforeinput").addClass("text-success");
    }
  });

  // 12. coming soon count
  function countDown() {
    var countDay = $(".counter-days");
    var countHour = $(".counter-hours");
    var countMinutes = $(".counter-minutes");
    var countSeconds = $(".counter-seconds");
    var date = new Date("Jan 1, 2024 12:00:00");
    var interval = setInterval(function () {
      var today = new Date().getTime();
      var distance = date - today;
      countDay.html(Math.floor(distance / (1000 * 60 * 60 * 24)) + 'D');
      countHour.html(Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60)) + 'H');
      countMinutes.html(Math.floor(distance % (1000 * 60 * 60) / (1000 * 60)) + 'M');
      countSeconds.html(Math.floor(distance % (1000 * 60) / 1000) + 'S');
      if (distance < 0) {
        clearInterval(interval);
        $(".counter-days").html("00");
        $(".counter-hours").html("00");
        $(".counter-minutes").html("00");
        $(".counter-seconds").html("00");
      }
    }, 1000);
  }
  countDown();

  // 13. contact form
  if ($("#contactForm").length) {
    setCsrf();
    $("#contactForm").validator().on("submit", function (event) {
      if (event.isDefaultPrevented()) {
        // handle the invalid form...
        submitMSG(false);
      } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
      }
    });
  }
  function submitForm() {
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
    var csrfToken = $("#csrfToken").val();
    if (csrfToken) {
      if (name && email && message) {
        $.ajax({
          type: "POST",
          url: "libs/contact-form-process.php",
          data: "name=" + name + "&email=" + email + "&message=" + message + "&csrfToken=" + csrfToken,
          success: function success(text) {
            if (text == "success") {
              formSuccess();
            } else {
              submitMSG(false, text);
            }
          }
        });
      } else {
        submitMSG(false, "Please enter the right information.");
      }
    } else {
      submitMSG(false, "Invalid Token");
    }
  }
  function formSuccess() {
    $("#contactForm")[0].reset();
    submitMSG(true);
  }
  function submitMSG(valid, msg) {
    if (valid) {
      $(".message-box").removeClass("d-none").addClass("d-block ");
      $(".message-box div").removeClass("alert-danger").addClass("alert-success").text("Form submitted successfully");
    } else {
      $(".message-box").removeClass("d-none").addClass("d-block ");
      $(".message-box div").removeClass("alert-success").addClass("alert-danger").text("Found error in the form. Please check again.");
    }
  }
  function setCsrf() {
    $.ajax({
      url: "libs/csrf.php",
      type: "GET",
      dataType: "json",
      success: function success(data) {
        if (data) {
          document.getElementById("csrfToken").value = data.csrfToken;
        }
      },
      error: function error(_error) {
        console.log("Error " + _error);
      }
    });
  }

  // 14. custom vps hosting plan js
  //**************************** Need to change ********************
  // Change according to your plans
  //****************************************************************
  // vpsPlan      = VPS plan or package number
  // vpsCore      = VPS Core value from your plan
  // vpsMemory    = VPS Memory from your plan
  // vpsStorage   = VPS Storage value from your plan
  // vpsBandwidth = VPS bandwidth value from your plan
  // vpsPrice     = VPS price from your plan
  // vpsWHmcsUrl  = VPS plan url. Check from your WHMCS panel
  //****************************************************************
  var vpsPriceInfo = [{
    vpsPlan: 1,
    vpsCore: 1,
    vpsMemory: 2,
    vpsStorage: 10,
    vpsBandwidth: 1000,
    vpsPrice: 20,
    vpsWHmcsUrl: "https://whmcs.themetags.com/cart.php?a=add&pid=30"
  }, {
    vpsPlan: 2,
    vpsCore: 2,
    vpsMemory: 4,
    vpsStorage: 20,
    vpsBandwidth: 2000,
    vpsPrice: 40,
    vpsWHmcsUrl: "https://whmcs.themetags.com/cart.php?a=add&pid=31"
  }, {
    vpsPlan: 3,
    vpsCore: 3,
    vpsMemory: 6,
    vpsStorage: 30,
    vpsBandwidth: 3000,
    vpsPrice: 60,
    vpsWHmcsUrl: "https://whmcs.themetags.com/cart.php?a=add&pid=32"
  }, {
    vpsPlan: 4,
    vpsCore: 4,
    vpsMemory: 8,
    vpsStorage: 40,
    vpsBandwidth: 4000,
    vpsPrice: 80,
    vpsWHmcsUrl: "https://whmcs.themetags.com/cart.php?a=add&pid=30"
  }, {
    vpsPlan: 5,
    vpsCore: 5,
    vpsMemory: 10,
    vpsStorage: 50,
    vpsBandwidth: 5000,
    vpsPrice: 100,
    vpsWHmcsUrl: "https://whmcs.themetags.com/cart.php?a=add&pid=31"
  }, {
    vpsPlan: 6,
    vpsCore: 6,
    vpsMemory: 12,
    vpsStorage: 60,
    vpsBandwidth: 6000,
    vpsPrice: 120,
    vpsWHmcsUrl: "https://whmcs.themetags.com/cart.php?a=add&pid=32"
  }, {
    vpsPlan: 7,
    vpsCore: 7,
    vpsMemory: 14,
    vpsStorage: 70,
    vpsBandwidth: 7000,
    vpsPrice: 140,
    vpsWHmcsUrl: "https://whmcs.themetags.com/cart.php?a=add&pid=30"
  }, {
    vpsPlan: 8,
    vpsCore: 8,
    vpsMemory: 16,
    vpsStorage: 80,
    vpsBandwidth: 8000,
    vpsPrice: 160,
    vpsWHmcsUrl: "https://whmcs.themetags.com/cart.php?a=add&pid=31"
  }, {
    vpsPlan: 9,
    vpsCore: 9,
    vpsMemory: 18,
    vpsStorage: 90,
    vpsBandwidth: 9000,
    vpsPrice: 180,
    vpsWHmcsUrl: "https://whmcs.themetags.com/cart.php?a=add&pid=32"
  }, {
    vpsPlan: 10,
    vpsCore: 10,
    vpsMemory: 20,
    vpsStorage: 100,
    vpsBandwidth: 10000,
    vpsPrice: 200,
    vpsWHmcsUrl: "https://whmcs.themetags.com/cart.php?a=add&pid=30"
  }, {
    vpsPlan: 11,
    vpsCore: 11,
    vpsMemory: 22,
    vpsStorage: 110,
    vpsBandwidth: 11000,
    vpsPrice: 220,
    vpsWHmcsUrl: "https://whmcs.themetags.com/cart.php?a=add&pid=31"
  }, {
    vpsPlan: 12,
    vpsCore: 12,
    vpsMemory: 24,
    vpsStorage: 120,
    vpsBandwidth: 12000,
    vpsPrice: 240,
    vpsWHmcsUrl: "https://whmcs.themetags.com/cart.php?a=add&pid=32"
  }];
  var cPlan = $("#c-plan");
  if (cPlan.length) {
    cPlan.slider({
      tooltip: "always"
    });
    cPlan.on("change", function (e) {
      $.each(vpsPriceInfo, function (index, vpsObj) {
        if (vpsObj.vpsPlan == e.value.newValue) {
          setVpsValue(vpsObj);
        }
      });
    });
    initSlider();
  }
  function initSlider() {
    cPlan.value = cPlan.data("slider-value");
    var defaultVpsCore = parseInt(cPlan.value);
    $.each(vpsPriceInfo, function (index, vpsObj) {
      // defaultVpsCore is default value to show. For my demo, I have set 6 from HTML.
      // vps-hosting.html: <input id="c-plan" type="text" data-slider-min="1" data-slider-max="12" data-slider-step="1" data-slider-value="6" data-currency="$" data-unit="GB">.
      // You need to change according to your need.
      if (vpsObj.vpsPlan == defaultVpsCore) {
        $(".slider .tooltip", "#custom-plan").append('<div class="tooltip-up"></div>');
        $(".slider .tooltip-inner", "#custom-plan").attr("data-unit", cPlan.data("unit"));
        $(".slider .tooltip-up", "#custom-plan").attr("data-currency", cPlan.data("currency"));
        setVpsValue(vpsObj);
      }
    });
  }
  function setVpsValue(vpsObj) {
    $(".slider .tooltip-up", "#custom-plan").text(vpsObj.vpsPrice);
    $(".vpsPrice", "#custom-plan").text(cPlan.data("currency") + vpsObj.vpsPrice);
    $(".vpsCore span", "#custom-plan").text(vpsObj.vpsCore);
    $(".vpsMemory span", "#custom-plan").text(vpsObj.vpsMemory);
    $(".vpsStorage span", "#custom-plan").text(vpsObj.vpsStorage);
    $(".vpsBandwidth span", "#custom-plan").text(vpsObj.vpsBandwidth);
    $(".vpsWHmcsUrl", "#custom-plan").attr("href", vpsObj.vpsWHmcsUrl);
  }

  // 16. hero slider one
  $(".hero-slider-one").owlCarousel({
    loop: true,
    autoplay: true,
    dots: true,
    margin: 0,
    autoplayHoverPause: true,
    items: 1,
    smartSpeed: 1000,
    animateOut: "slideOutLeft",
    animateIn: "slideInRight"
  });
})(jQuery); // JQuery end