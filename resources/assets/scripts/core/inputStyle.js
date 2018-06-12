/* Author: Agile Pixel */
/* on READY */
jQuery(document).ready(function ($) {
  'use strict';
  //define variables for all objects for re-use throughout scripts
  var $input = $('.input__text--js, .input__textarea--js');
  /**
   *
   * Input box class naming switch for styling
   *
   */

  if ($input.length) {
    $input.on('focus, click, focusin', 'input, textarea', function () {
      $(this).closest('.input__text--js, .input__textarea--js').addClass('active');
    }).on('blur', 'input, textarea', function () {
      if ($(this).val() === "") {
        $(this).closest('.input__text--js, .input__textarea--js').removeClass('active');
      }
    });
    $input.each(function () {
      if ($(this).find('input, textarea').val() === "") {
        $(this).removeClass('active');
      } else {
        $(this).addClass('active');
      }
    });
  }
});
