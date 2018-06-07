/**
 * скрипт пагинации
 */

jQuery(function($){
    $(window).scroll(function(){
        var bottomOffset = 2000; 
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page' : current_page
        };
        if( $(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loading')){
            $.ajax({
                url:ajaxurl,
                data:data,
                type:'POST',
                beforeSend: function( xhr){
                    $('body').addClass('loading');
                },
                success:function(data){
                    if( data ) { 
                        $('#load_more_gs').before(data);
                        $('body').removeClass('loading');
                        current_page++;
                    }
                    else {
                    $('#load_more_gs').remove();
                }
                }
            });
        }
    });
});