$(document).ready(),$("a.video_preview").click(function(){$("a.video_preview").find("img").show(),$("a.video_preview").find("div.arrow-play").show(),$("a.video_preview").find(".tube").empty();var e='<div class="video-container"><iframe src="//www.youtube.com/embed/'+$(this).attr("video-data")+'?wmode=opaque&autohide=1&autoplay=1&enablejsapi=1&fs=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe></div>';$(this).find("img").hide(),$(this).find("div.arrow-play").hide(),$(this).find(".tube").html(e)});
//# sourceMappingURL=maps/video_iframe.js.map
