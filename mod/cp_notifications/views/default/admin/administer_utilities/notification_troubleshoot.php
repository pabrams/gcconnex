<?php

echo elgg_view('cp_notifications/admin_nav');
$title = elgg_echo('Troubleshoot Tool');





?>

<input type='text' name='username'></input>



<script>
	
$(document).keypress(function(e) {
    if(e.which == 13) {
        // get the username from text box
        user_name = 'christine.yu';
    	elgg.action('cp_notify/retrieve_user_info', {
    		data: {
    			username: user_name
    		},
    		success: function () {
    			alert("SUCCESS!");
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
			
$body .= "sup";
	




$body .= "</div>";
$body .= '</fieldset>';



echo elgg_view_module('main', $title, $body);
