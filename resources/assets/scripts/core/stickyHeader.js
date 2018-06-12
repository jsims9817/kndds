/* Author: Agile Pixel */
/* on READY */
jQuery(document).ready(function ($) {
  'use strict';
  //define variables for all objects for re-use throughout scripts
  var $header = $('.header--js');
  /**
   *
   * Fixed Header class swtich based on scroll direction
   *
   */
  if ($header.length) {
    var lastScrollTop = 0;
    var $window = $(window);
    $window.trigger('scroll');
    $(window).scroll(function () {
      var top = $(document).scrollTop();
      if (top > 200) {
        var currenScrollTop = $(this).scrollTop();
        if (currenScrollTop > lastScrollTop) {
          if (!$header.hasClass('slideOut')) {
            $header.removeClass('slideIn').addClass('slideOut');
          }
        } else {
          if (!$header.hasClass('slideIn')) {
            $header.removeClass('slideOut').addClass('slideIn');
          }
        }
        lastScrollTop = currenScrollTop;
      }
    });
  }

});
