 $(document).on('click', '#header-callback-button', function (e) { e.preventDefault(); if ($('#header-callback-phone').val()){ $('#header-callback-button').attr('disabled', 'disabled'); ga('send', { hitType: 'event', eventCategory: 'buttomcallme', eventAction: 'call_press' }); $('#header-callback-phone').css('border-color', '#7b7b7b'); $.ajax({ url: '/quick_message/', method: 'POST', data: { message_type: 'call_back', phone: $('#header-callback-phone').val(), email: $('#header-callback-email').val(), name: $('#header-callback-name').val(), url: "/", csrfmiddlewaretoken: 'OL8omJFw7h3WpVUb8Gv3YdnUthw8nVUK' }, success: function () { $('#header-callback-Modal').modal('hide'); $('#success_message_call_back').modal('show'); $('#header-callback-button').removeAttr('disabled'); $('<iframe id="callbackFrame" name="callbackFrame" class="hidden" width="1px" height="1px">') .attr('src','/success/conv/callback/') .appendTo('body'); fbq('track', 'Lead'); }, error: function () { $('#header-callback-button').removeAttr('disabled'); } }); } else { $('#header-callback-phone').css('border-color', 'red'); } return false; }) 