/**
 * Created by saintramzes on 5/30/16.
 */
$(document).ready();

$('a.video_preview').click(function() {
  $('a.video_preview').find('img').show();
  $('a.video_preview').find('div.arrow-play').show();
  $('a.video_preview').find('.tube').empty();
  var video = '<div class="video-container"><iframe src="//www.youtube.com/embed/' + $(this).attr('video-data') + '?wmode=opaque&autohide=1&autoplay=1&enablejsapi=1&fs=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe></div>';
  $(this).find('img').hide();
  $(this).find('div.arrow-play').hide();
  $(this).find('.tube').html(video);
});
