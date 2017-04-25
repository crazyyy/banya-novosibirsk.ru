/**
 * Created by saintramzes on 6/2/16.
 */

$(function() {
  $('.drop-list-item').hover(
    function() {
      var img = $(this).attr('data-img');
      if (img) {
        $(this).parents('.drop_submenu').find('img.dropdown-pimary-img').hide();
        $(this).parents('.drop_submenu').find('img.dropdown-img').attr('src', img);
        $(this).parents('.drop_submenu').find('img.dropdown-img').show();
      }
    },
    function() {
      $('.main-block').css({
        'background': '',
        'position': '',
        'opacity': ''
      });
      var img = $(this).attr('data-img');
      if (img) {
        $(this).parents('.drop_submenu').find('img.dropdown-pimary-img').show();
        $(this).parents('.drop_submenu').find('img.dropdown-img').hide();
        $(this).parents('.drop_submenu').find('img.dropdown-img').removeAttr('src');
      }
    }

  );
});
