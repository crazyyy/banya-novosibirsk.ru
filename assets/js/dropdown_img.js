/**
 * Created by saintramzes on 6/2/16.
 */

$(function(){
    $('.drop-list-item').hover(
        function(){
//             if($('.dropdown').hasClass('open'))
// {
// console.log('fffg')
// }
            // $('.main-block').css({'background':'#fff','position':'relative','opacity':'.33'});
            // $('.main-block').addClass('activate_now');
            var img = $(this).attr('data-img');
            if (img){
                // console.log($(this).parents('.drop_submenu').find('img.dropdown-pimary-img'));
                $(this).parents('.drop_submenu').find('img.dropdown-pimary-img').hide();
                $(this).parents('.drop_submenu').find('img.dropdown-img').attr('src', img);
                $(this).parents('.drop_submenu').find('img.dropdown-img').show();
            }
        },
        function(){
            $('.main-block').css({'background':'','position':'','opacity':''});
            var img = $(this).attr('data-img');
            if (img) {
                $(this).parents('.drop_submenu').find('img.dropdown-pimary-img').show();
                $(this).parents('.drop_submenu').find('img.dropdown-img').hide();
                $(this).parents('.drop_submenu').find('img.dropdown-img').removeAttr('src');
            }
        }

    );
    // $('.target_drop').on('show.bs.dropdown', function () {
    //     alert('Come on lets show the dropdown!!');
    // })
});

