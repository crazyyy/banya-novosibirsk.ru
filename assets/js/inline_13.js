 $(document).on('click', '#footer_callback_button', function (e) { e.preventDefault(); if ($('#footer_callback_phone').val()) { $('#footer_callback_button').attr('disabled', 'disabled'); ga('send', { hitType: 'event', eventCategory: 'buttomcallme', eventAction: 'call_press' }); $('#footer_callback_phone').css('border-color', '#7b7b7b'); $.ajax({ url: '/quick_message/', method: 'POST', data: { phone: $('#footer_callback_phone').val(), message_type: 'call_back', url: "/", csrfmiddlewaretoken: 'OL8omJFw7h3WpVUb8Gv3YdnUthw8nVUK' }, success: function () { $('#success_message_call_back').modal('show'); $('#footer_callback_button').removeAttr('disabled'); $('<iframe id="callbackFrame" name="callbackFrame" class="hidden" width="1px" height="1px">') .attr('src', '/success/conv/callback/') .appendTo('body'); fbq('track', 'Lead'); }, error: function () { $('#footer_callback_button').removeAttr('disabled'); } }); } else { $('#footer_callback_phone').css('border-color', 'red'); } return false; }) 