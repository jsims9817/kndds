/* Author: Agile Pixel */
/* Scroll to destination, basd on a > href # value */
jQuery(document).ready(function ($) {
  'use strict';
  var $scrollSpeed = 300;
  var $smoothScroll = $('.smooth--js');

  if ($smoothScroll.length) {
    $smoothScroll.on('click', function (event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top,
        }, $scrollSpeed, function () {
          window.location.hash = hash;
        });
      }
    });
  }
});
