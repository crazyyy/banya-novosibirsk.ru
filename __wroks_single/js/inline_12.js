 $(document).on('submit', 'form[name="compare_form"]', function (e) { e.preventDefault(); var frm = $(this); $.ajax({ url: frm.attr('action'), data: frm.serialize(), success: function (json) { if (json['status'] == 'ok') { if (json['cpl']) { $('#compare_link').removeClass('disabled_link'); $('#compare_count').html(json['cpl']); } $('#success_message_compare').modal('show'); setTimeout(function () { $('#success_message_compare').modal('hide'); }, 3000); } } }); return false; });