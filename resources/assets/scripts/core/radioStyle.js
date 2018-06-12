/* Author: Agile Pixel */
/* on READY */
jQuery(document).ready(function ($) {
  'use strict';
  //define variables for all objects for re-use throughout scripts
  var $radio = $('.input__radio--js');
  /**
   *
   * Radio Button class naming switch for styling
   *
   */
  if ($radio.length) {
    $radio.on('click', function () {
      $(this).addClass('active').find('input').prop('checked', true);
      $radio.find('input').not(':checked').parent('.input__radio--js').removeClass('active');
    });
    $radio.each(function () {
      if ($(this).find('input').is(':checked')) {
        $(this).addClass('active');
      } else {
        $(this).removeClass('active');
      }
    });
  }
});
