 $(document) .on('click', '.ajax_add_wishlist', function (e) { e.preventDefault(); options = { 'add_wishlist': 1, 'csrfmiddlewaretoken': 'Vnw6EQxdWWk4L9ZzrvLKDytXMVouuq4z', 'sku': $(this).data('id'), 'quantity': 1 }; var form_data = new FormData(); for (var i in options) { form_data.append(i, options[i]) } $.ajax({ 'url': $(this).data('url'), 'enctype': 'multipart/form-data', 'type': 'POST', 'processData': false, 'contentType': false, 'data': form_data, 'success': function () { $('#success_message_wishlist').modal('show'); fbq('track', 'AddToWishlist'); setTimeout(function () { $('#success_message_wishlist').modal('hide'); }, 3000); } }); return false; }) .ready(function () { $("#owl-services").owlCarousel({ items: 3, itemsDesktop: [1169, 3], itemsDesktopSmall: [979, 1], itemsTablet: false, itemsTabletSmall: false, itemsMobile: false, autoPlay: true, stopOnHover: true, navigation: true, navigationText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'], }); });