 $(document).on('click', '#13993callback-button', function (e) { e.preventDefault(); if ($('#13993callback-phone').val()){ $('#13993callback-button').attr('disabled', 'disabled'); $('#13993callback-phone').css('border-color', '#7b7b7b'); var message_type='one_click', comment = "13993"; $.ajax({ url: '/quick_message/', method: 'POST', data: { message_type: message_type, phone: $('#13993callback-phone').val(), email: $('#13993callback-email').val(), name: $('#13993callback-name').val(), url: "/", comment: comment, csrfmiddlewaretoken: 'OL8omJFw7h3WpVUb8Gv3YdnUthw8nVUK' }, success: function () { $('#13993callback-Modal').modal('hide'); $('#success_message_call_back').modal('show'); $('#13993callback-button').removeAttr('disabled'); fbq('track', 'Lead'); }, error: function () { $('#13993callback-button').removeAttr('disabled'); } }); } else { $('#13993callback-phone').css('border-color', 'red'); } return false; }) 