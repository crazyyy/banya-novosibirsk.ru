/**
 * Created by saintramzes on 7/6/16.
 */
$('.variation_grid_item').click(function() {
  $('#variation_grid').find('a.active').removeClass('active');
  $(this).addClass('active');

  // if ($(this).parent().hasClass('active')){
  // $($(this).attr("href")).toggleClass('active');
  // }
})
