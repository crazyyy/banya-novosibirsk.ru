$(function(){$(".drop-list-item").hover(function(){var i=$(this).attr("data-img");i&&($(this).parents(".drop_submenu").find("img.dropdown-pimary-img").hide(),$(this).parents(".drop_submenu").find("img.dropdown-img").attr("src",i),$(this).parents(".drop_submenu").find("img.dropdown-img").show())},function(){$(".main-block").css({background:"",position:"",opacity:""});var i=$(this).attr("data-img");i&&($(this).parents(".drop_submenu").find("img.dropdown-pimary-img").show(),$(this).parents(".drop_submenu").find("img.dropdown-img").hide(),$(this).parents(".drop_submenu").find("img.dropdown-img").removeAttr("src"))})});
//# sourceMappingURL=maps/dropdown_img.js.map