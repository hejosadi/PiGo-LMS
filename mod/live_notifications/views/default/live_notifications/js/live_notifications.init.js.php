
//**<script type="text/javascript">**//
$(document).ready(function () {
    
    $('#live_notifications_loader').show();	    

    $("#live_notifications_link").click(function(){ 
        var num = parseInt($("#count_unread_notifications").html());
        if(num>0){
            elgg.action('live_notifications/read_all', function(response) {

            });
            $('.elgg-icon-live_notifications').removeClass("elgg-icon-live_notifications-selected");            
        }

        $("#count_unread_notifications").html(0);
        $("#count_unread_notifications").hide();         
    });

    if(elgg.is_logged_in()){
        $("#live_notifications_result").load("<?php echo $vars['url']; ?>live_notifications/ajax",function(){
            $('#live_notifications_loader').hide(); // remove the loading gif
        }); 
       
       setInterval(function() {
            
            elgg.action('live_notifications/refresh_count', function(response) {

                var num = parseInt($("#count_unread_notifications").html());
                var new_count = parseInt(response.output);
                if(new_count>num){
                    $("#count_unread_notifications").html(new_count);
                    $("#count_unread_notifications").show();
                    $('#live_notifications_loader').show(); 
                    $("#live_notifications_result").load("<?php echo $vars['url']; ?>live_notifications/ajax",function(){
                        $('#live_notifications_loader').hide(); // remove the loading gif
                        elgg.system_message('<?php echo elgg_echo('live_notifications:new_notification'); ?>');
                    });  
                    $('.elgg-icon-live_notifications').addClass("elgg-icon-live_notifications-selected");
                }
                else if(new_count==0){
                    $("#count_unread_notifications").hide();
                    $('.notifications_content_item').removeClass("new_notification");                
                }
            });
        }, 10000);
    }
   	

});

