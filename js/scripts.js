$ = jQuery.noConflict();

jQuery(document).ready(function () {
  $('.mobile-menu').on('click', function () {
    $('.site-nav').toggle('slow');
  });
  var breakpoint = 768;
  $(window).resize(function () {
    if ($(document).width() >= breakpoint) {
      $('.site-nav').show('slow');
    } else {
      $('.site-nav').hide();
    }
  });

  // jQuery('.wp-block-gallery figure').each(function () {
  //   jQuery(this).attr({ 'data-fluidbox': '' });
  // });
  // if (jQuery('[data-fluidbox]').length > 0) {
  //   jQuery('[data-fluidbox]').fluidbox();
  // }
});
