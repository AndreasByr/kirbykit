"use strict";
var targetHash = window.location.hash,
  target = targetHash.replace("#", "");
var thisPfad = window.location.pathname;

(function ($) {
  const $window = $(window);
  const $html = $("html");
  const $header = $("header#header");
  const $footer = $("footer#footer");
  const tcContent = $("main#content");

  var windowHeight = $window.height();
  var windowWidth = $window.width();

  $window.on("resize", function () {
    windowHeight = $window.height();
    windowWidth = $window.width();
  });

  var viewMobil = false;
  var viewTablet = false;

  //INFO window - RESIZE
  if (windowWidth <= 767) {
    $html.addClass("viewMobil");
    viewMobil = true;
  } else {
    $html.removeClass("viewMobil");
    viewMobil = false;
  }
  if (windowWidth <= 1024) {
    viewTablet = true;
  } else {
    viewTablet = false;
  }


  //INFO Slider

//   if ($("slider .item").length > 1) {
//     $(slider).slick({
//     });
//   }
})(jQuery);
