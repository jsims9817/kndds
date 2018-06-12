/* Author: Agile Pixel */
/* on READY */
jQuery(document).ready(function ($) {
  'use strict';
  //define variables for all objects for re-use throughout scripts
  var $header = $('.header--js');
  var $burgerButton = $('.burger--js');
  var $slideCover = $('.slide__cover--js');
  /**
   *
   * Burger button actions
   *
   */

  function animateHeader() {
    $('.slide').toggleClass('active');
    $('.slide__menu').toggleClass('active');
    $('.slide__content').toggleClass('active');
    $burgerButton.toggleClass('active');
    var $headerPosition = $header.position();
    if ($burgerButton.hasClass('active')) {
      $headerPosition = Math.abs($headerPosition.top);
      $header.css({
        'top': $headerPosition + 'px',
        'position': 'absolute',
      });
    } else {
      $('.slide__content').one("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function () {
        $header.removeAttr('style');
      });
    }
  }
  if ($burgerButton.length) {

    $burgerButton.on('click', function () {
      animateHeader();
    });
    $slideCover.on('click', function () {
      animateHeader();
    });
  }
});
