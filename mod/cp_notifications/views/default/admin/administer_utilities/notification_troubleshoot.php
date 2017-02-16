<?php

echo elgg_view('cp_notifications/admin_nav');
$title = elgg_echo('Troubleshoot Tool');





?>

<script>
	
$(document).keypress(function(e) {
    if(e.which == 13) {
        // get the username from text box
        user_name = 'christine.yu';
    	elgg.action('cp_notify/retrieve_user_info', {
    		data: {
    			username: user_name
    		},
    		success: function (user_information) {
    			//alert("SUCCESS!");
                $('.user_info').html(user_information.output.userinfo);
    		},
    		error: function () {
    			alert("ERROR!");
    		}
    	});
    }
});

</script>

<?php


$body = "<br/>";
$body .= '<fieldset class="elgg-fieldset" id="elgg-settings-advanced-system" style="padding-top:5px; padding-bottom:10px;">';
$body .= "<legend>Display User's personal notifications</legend>";
$body .= "<div style='padding-top:10px; padding-bottom:10px;'>";
			
$body .= "<input type='text' name='username'></input>";
$body .= "<div class='user_info'></div>";

$body .= "</div>";
$body .= '</fieldset>';



echo elgg_view_module('main', $title, $body);