/* Author: Agile Pixel */
/* on READY */
jQuery(document).ready(function ($) {
  'use strict';
  //define variables for all objects for re-use throughout scripts
  var $checkbox = $('.input__checkbox--js');

  /**
   *
   * Checkbox class naming switch for styling
   *
   */
  if ($checkbox.length) {
    $checkbox.on('click', function () {
      $(this).toggleClass('active').find('input').prop('checked', !$checkbox[0].checked);
    });
    $checkbox.each(function () {
      if ($(this).find('input').is(':checked')) {
        $(this).addClass('active');
      } else {
        $(this).removeClass('active');
      }
    });
  }
});
