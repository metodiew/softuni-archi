jQuery(document).ready(function($) {
    $('.like').on('click', function(e){
        e.preventDefault();

        let porftolio_id = jQuery(this).attr('data-id'); // we'll need this later

        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url,
            data: {
                action:'softuni_portfolio_upvote', // PHP function
                porftolio_id: porftolio_id,
            },
            success: function(msg){
                console.log(msg);
            }
        });
    });
});
