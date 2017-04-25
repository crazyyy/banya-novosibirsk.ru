 $(window).ready(function() {
   var blen = 141;
   while (blen > 130) {
     blen = 0;
     $('ul.breadcrumb > li > a').each(function(i) {
       blen += $(this).text().length;
     });
     $('ul.breadcrumb > li > span').each(function(i) {
       blen += $(this).text().length;
     });
     if (blen > 130) {
       $('ul.breadcrumb li:nth-child(2)').remove();
     }
   }
 }).scroll(function() {
   var miniheader = $("#navbar-miniheader");
   var navbar = $("#navbar-header");
   var top = 200;
   if ($(window).scrollTop() >= top) {
     miniheader.css("display", "block");
     navbar.css("display", "none");
   } else {
     miniheader.css("display", "none");
     navbar.css("display", "block");
   }
 }).ready(function() {
   $('select').select2();
   $('b[role="presentation"]').hide();
   $('.select2-selection__arrow').append('<i class="presentation"></i>');
 });
 $("#toggle-icons").click(function() {
   $(this).find('img').toggle();
 });
 var main_nav = $('#main_nav');
 main_nav.on('show.bs.collapse', '.collapse', function() {
   main_nav.find('.collapse.in').collapse('hide');
 });
 $('#navbar-mid-collapse').on('shown.bs.collapse', function() {
   $('#navbar-hamburger').addClass('hidden');
   $('#navbar-hamburger').parent('button').addClass('navbar-close');
   $('#navbar-close').removeClass('hidden');
 }).on('hidden.bs.collapse', function() {
   $('#navbar-hamburger').removeClass('hidden');
   $('#navbar-hamburger').parent('button').removeClass('navbar-close');
   $('#navbar-close').addClass('hidden');
 });
 $('.disabled_link').on('click', function(event) {
   event.preventDefault();
   return false;
 })
