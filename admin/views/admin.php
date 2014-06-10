<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   ReadyGraph
 * @author    dan@readygraph.com
 * @license   GPL-2.0+
 * @link      http://www.readygraph.com
 * @copyright 2014 Your Name or Company Name
 */	
function changeAccount(){
delete_option('readygraph_access_token');
delete_option('readygraph_application_id');
delete_option('readygraph_refresh_token');
delete_option('readygraph_email');
delete_option('readygraph_settings');
delete_option('readygraph_delay');
delete_option('readygraph_enable_sidebar');
delete_option('readygraph_auto_select_all');
delete_option('readygraph_enable_notification');
}
function setupReadyGraph(){
update_option('readygraph_access_token', mysql_real_escape_string($_GET["readygraph_access_token"]));
update_option('readygraph_application_id', mysql_real_escape_string($_GET["app_id"]));
update_option('readygraph_refresh_token', mysql_real_escape_string($_GET["readygraph_refresh_token"]));
update_option('readygraph_email', mysql_real_escape_string($_GET["email"]));
update_option('readygraph_delay', 10000);
update_option('readygraph_enable_sidebar', 'false');
update_option('readygraph_auto_select_all','true');
update_option('readygraph_enable_notification','true');
}
	if(isset($_GET["readygraph_access_token"]) && isset($_GET["app_id"]) && isset($_GET["email"])) setupReadyGraph();
	if(base64_decode($_GET["action"]) == "changeaccount")changeAccount();
	
	if (isset($_POST["readygraph_access_token"])) update_option('readygraph_access_token', $_POST["readygraph_access_token"]);
	if (isset($_POST["readygraph_refresh_token"])) update_option('readygraph_refresh_token', $_POST["readygraph_refresh_token"]);
	if (isset($_POST["readygraph_email"])) update_option('readygraph_email', $_POST["readygraph_email"]);
	if (isset($_POST["readygraph_application_id"])) update_option('readygraph_application_id', $_POST["readygraph_application_id"]);
	if (isset($_POST["readygraph_settings"])) update_option('readygraph_settings', $_POST["readygraph_settings"]);
	if (isset($_POST["readygraph_delay"])) update_option('readygraph_delay', $_POST["delay"]);
	if (isset($_POST["readygraph_enable_sidebar"])) update_option('readygraph_enable_sidebar', $_POST["sidebar"]);
	if (isset($_POST["readygraph_enable_notification"])) update_option('readygraph_enable_notification', $_POST["notification"]);
	if (isset($_POST["readygraph_auto_select_all"])) update_option('readygraph_auto_select_all', $_POST["selectAll"]);
?>

<?php if (!get_option('readygraph_access_token') || strlen(get_option('readygraph_access_token')) <= 0) {?>

<div class="authenticate" style="">
	    <div class="wrap1" style="min-height: 600px;">

      <div id="icon-plugins" class="icon32"></div>
      <h2>Grow your userbase with Readygraph </h2>
      <h3>Activate Readygraph features to maximize your website signups</h3>
      <p style="display:none;color:red;" id="error"></p>
      <div class="register-left">
	  <p style="float:right;padding: 5%;"><a onclick="showLogin()" href="javascript:void(0)" style="text-decoration:none;border-bottom:1px dotted blue;">
Already a member?</a></p>
      <div class="form-wrap alert">
          <h3>Free Signup </h3> 
          <p>
          <label for="tag-title">Site URL</label>
          <input type="text" id="register-url" name="eemail_on_homepage" size="35" placeholder="www.example.com">
          </p>

          <p>
          <label for="tag-title">Name</label>
          <input type="text" id="register-name" name="eemail_on_homepage" size="35" placeholder="Enter Name">
          </p>

          <p>
          <label for="tag-title">Email</label>
          <input type="text" id="register-email" name="eemail_on_homepage" size="35" placeholder="abc@example.com">
          </p>
          <p>
          <label for="tag-title">Password</label>
          <input type="password" id="register-password" name="eemail_on_homepage" size="35" placeholder="Enter Password">
          </p>
          <p>
          <label for="tag-title">Confirm Password</label>
          <input type="password" id="register-password1" name="eemail_on_homepage" size="35" placeholder="Enter Password">
          </p>
          
          <p style="max-width:180px;font-size: 10px;">By signing up, you agree to our <a href="http://www.readygraph.com/tos">Terms of Service</a> and <a href='http://readygraph.com/privacy/'>Privacy Policy</a>.</p>
          <p style="margin-top:10px;">
          <input type="submit" style="text-shadow:none;background:#36812E;width:193px;background-color:#36812E;color:white;" value="Continue to place widget" id="register-app-submit" class="button" name="Submit">
          </p>
      </div>
          
      </div>
      <div class="register-mid">
          <div class="form-wrap alert">
          <p style="float:right; padding: 2%;"><a onclick="showSignup()" href="javascript:void(0)" style="text-decoration:none;border-bottom:1px dotted blue;"> Not a member? Signup</a></p>
		  <p><h3>Already a member?</h3></p>
			<p><label for="tag-title">Email</label>
          <input type="text" id="signin-email" name="eemail_on_homepage" size="35" placeholder="abc@example.com">
          </p>
          <p>
          <label for="tag-title">Password</label>
          <input type="password" id="signin-password" name="eemail_on_homepage" size="35" placeholder="Enter Password">
          </p>
          <p style="padding-top:10px;">
          <input type="submit" style="width:193px;" value="Sign In" id="signin-submit" class="button add-new-h2" name="Submit">
          </p>
      </div>
      </div>
        <div class="register-right">
          <div class="form-wrap alert" style="font-size:12px;">
          <p><h3>Signup for these benefits:</h3></p>
<p>ReadyGraph is a tool to automate the growth of your site’s userbase. It is optimized to deliver audience growth and motivate users to consistently revisit your site.</p><br /><p><b>Optimized Signup Form –</b> ReadyGraph’s signup form with intelligent pop-up functionality and one-click login is designed to maximize signup	s to your email list.<br /><br />
<b>Viral Friend Invites –</b> ReadyGraph adds a friend invite process to your site’s signup flow.  We then power the entire viral loop by sending invitations that encourage your visitors’ friends to signup for your site.<br /><br /><b>Automated Re-engagement Emails –</b> ReadyGraph’s automated email system encourages visitors to return to your site.   Users receive optimized emails such as a welcome email, re-engagement email, regular digest with new content from your blog, and social emails.  All emails are configurable including the ability to turn on and off individual campaigns.<br /><br /><b>Analytics -</b> Track daily-new subscribers, daily invites, total traffic, and other key metrics that quantify growth and user engagement.  ReadyGraph safely stores user data in the cloud so you can access data from anywhere.  <br /><br />
Questions, feel free to email us at nick@readygraph.com</p>
          </div>
      </div>
	  </div><!--
	<div style="color: #ffffff; width: 350px; margin: 100px auto 0px; padding: 15px; border: solid 1px #2a388f; text-align: center; background-color: #1b75bb; -webkit-border-radius: 7px; -moz-border-radius: 7px; border-radius: 7px;">
		<h3 style="margin-top: 0px; font-weight: 300;">Connect Your ReadyGraph Account</h3>
		<p style="padding: 50px 0;"><a class="btn btn-default connect" href="javascript:void(0);" style="font-size: 15px; line-height: 40px; padding: 0 30px;">Connect ReadyGraph</a></p>
		<p>GROW LIKE THE PROS WITHOUT ALL THE EFFORT<br/>Reach and engage your site's social graph with our proven viral tools</p>
	</div> -->
</div><?php } else {?><style>a.help-tooltip {outline:none; }a.help-tooltip strong {line-height:30px;}a.help-tooltip:hover {text-decoration:none;} a.help-tooltip span {    z-index:10;display:none; padding:14px 20px;    margin-top:40px; margin-left:-150px;    width:300px; line-height:16px;}a.help-tooltip:hover span{    display:inline; position:absolute;     border:2px solid #FFF;    background:#fff;	text-align: justify;	z-index:1000000000;}.callout {z-index:1000000000;position:absolute;border:0;top:-14px;left:120px;}    /*CSS3 extras*/a.help-tooltip span{    border-radius:2px;    -moz-border-radius: 2px;    -webkit-border-radius: 2px;            -moz-box-shadow: 0px 0px 8px 4px #666;    -webkit-box-shadow: 0px 0px 8px 4px #666;    box-shadow: 0px 0px 8px 4px #666;}</style>

<form method="post" id="myForm">
<input type="hidden" name="readygraph_access_token" value="<?php echo get_option('readygraph_access_token', '') ?>">
<input type="hidden" name="readygraph_refresh_token" value="<?php echo get_option('readygraph_refresh_token', '') ?>">
<input type="hidden" name="readygraph_email" value="<?php echo get_option('readygraph_email', '') ?>">
<input type="hidden" name="readygraph_application_id" value="<?php echo get_option('readygraph_application_id', '') ?>">
<input type="hidden" name="readygraph_settings" value="<?php echo htmlentities(str_replace("\\\"", "\"", get_option('readygraph_settings', '{}'))) ?>">
<input type="hidden" name="readygraph_delay" value="<?php echo get_option('readygraph_delay', '') ?>">
<input type="hidden" name="readygraph_enable_sidebar" value="<?php echo get_option('readygraph_enable_sidebar', '') ?>">
<input type="hidden" name="readygraph_enable_notification" value="<?php echo get_option('readygraph_enable_notification', 'true') ?>">
<input type="hidden" name="readygraph_auto_select_all" value="<?php echo get_option('readygraph_auto_select_all', 'true') ?>">
  


<div class="authenticating" style="display: none;">
	<div style="color: #ffffff; width: 350px; margin: 100px auto 0px; padding: 15px; border: solid 1px #2a388f; text-align: center; background-color: #1b75bb; -webkit-border-radius: 7px; -moz-border-radius: 7px; border-radius: 7px;">
		<h3 style="margin-top: 0px; font-weight: 300;">Connect Your ReadyGraph Account</h3>
		<h4 style="padding: 50px 0; line-height: 42px;">Retrieving Your Account..</h4>
		<p>GROW LIKE THE PROS WITHOUT ALL THE EFFORT<br/>Reach and engage your site's social graph with our proven viral tools</p>
	</div>
</div>
<div class="authenticated" style="">
	<div style="background-color: #1b75bb; min-width: 90%; height: 50px;">
		<img src="../wp-content/plugins/readygraph/admin/assets/white-logo.png" style="width: 138px; height: 30px; margin: 10px 0 0 15px; float: left;">
		<div class="btn-group pull-right" style="margin: 8px 10px 0 0;">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="background: transparent; border-color: #ffffff; color: #ffffff; ">
				<span class="email-address" style="text-shadow: none;"></span> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a onclick="changeAccount()" href="<?php $current_url = explode("&", $_SERVER['REQUEST_URI']); echo $current_url[0];?>&action=<?php echo base64_encode("changeaccount");?>" >Change Account</a></li>
			</ul>
		</div>
		<div class="btn-group pull-right" style="margin: 8px 10px 0 0;">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="background: transparent; border-color: #ffffff; color: #ffffff; ">
				<span class="result" style="text-shadow: none;">...</span> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="http://readygraph.com/application/insights/" target="_blank">Insights</a></li>
			</ul>
		</div>
		<div style="clear: both;"></div>
	</div>
	<div><?php if(isset($_GET["readygraph_access_token"]) && isset($_GET["app_id"]) && isset($_GET["email"])) { echo '<h3 class="alert" style="margin-right: 1%;">Congratulations, ReadyGraph is now activated. Configure your ReadyGraph Settings below. (Optional)</h3>'; } else { echo '<h3 class="alert" style="margin-right: 1%;">Configure your ReadyGraph Settings. (Optional)</h3>';}?>
			<table cellspacing="0" cellpadding="0" border="0" style="width: 90%; margin: 0 auto;">
					<tr>
							<td class="rg-vertical-tab-body-container" style="width: 600px; text-align: center;">
									<div class="btn-group" data-toggle="buttons" style="padding: 20px 0;">
										<label class="btn btn-primary active rg-vertical-tab" tab="LOGIN_REQUIRE">
											<input type="radio" name="options" id="option1"> Facebook Connect
										</label>
										<label class="btn btn-primary rg-vertical-tab" tab="LOGIN_WITH_EMAIL">
											<input type="radio" name="options" id="option2"> Email Sign In
										</label>
										<label class="btn btn-primary rg-vertical-tab" tab="IMPORT_WITH_EMAIL">
											<input type="radio" name="options" id="option3"> Contact Importer
										</label>
										<label class="btn btn-primary rg-vertical-tab" tab="DEFAULT">
											<input type="radio" name="options" id="option4"> Invitation Page
										</label>										<a href="#" class="help-tooltip"><img src="../wp-content/plugins/readygraph/admin/assets/Help-icon.png" width="15px" style="margin-left:10px;"/><span><img class="callout" src="../wp-content/plugins/readygraph/admin/assets/callout_black.gif" /><strong>ReadyGraph Plugin Settings</strong><br />You can directly edit the text in the orange box below.<br /></span></a>
									</div>
									<div class="rg-preview-widget" style=""></div>
							</td>
							<td style="border-left: solid 1px #cccccc; text-align: justify;padding: 0 15px;">
								<div style="padding: 20px 0;">									<p>To configure Automated Email Settings, <a href="https://readygraph.com/application/customize/settings/advance/">Click here</a><a href="#" class="help-tooltip"><img src="../wp-content/plugins/readygraph/admin/assets/Help-icon.png" width="15px" style="margin-left:10px;"/><span><img class="callout" src="../wp-content/plugins/readygraph/admin/assets/callout_black.gif" /><strong>ReadyGraph Auto Email Settings</strong><br />ReadyGraph helps you maximize the engagement of your list by sending automated email campaigns on your behalf (welcome emails, weekly digests, social emails, etc.).  You can customize these emails and turn on and off campaigns depending on your goals.<br /></span></a></p>
									<br />

									<p> To mass e-mail all your subscribers, <a href="https://readygraph.com/application/insights/">Click here</a></p><br />

									<p>Signup Popup After: 
									<select class="delay" name="delay" class="form-control">
										<option value="0">0 second</option>
										<option value="5000">5 seconds</option>
										<option value="10000" selected>10 seconds</option>
										<option value="15000">15 seconds</option>
										<option value="20000">20 seconds</option>
										<option value="30000">30 seconds</option>
										<option value="60000">1 minute</option>
										<option value="120000">2 minute</option>
										<option value="180000">3 minute</option>
										<option value="240000">4 minute</option>
										<option value="300000">5 minute</option>
										<option value="600000">10 minute</option>
										<option value="900000">15 minute</option>
										<option value="1200000">20 minute</option>
									</select><a href="#" class="help-tooltip"><img src="../wp-content/plugins/readygraph/admin/assets/Help-icon.png" width="15px" style="margin-left:10px;"/><span><img class="callout" src="../wp-content/plugins/readygraph/admin/assets/callout_black.gif" /><strong>ReadyGraph Popup Settings</strong><br />ReadyGraph's intelligent registration popup maximizes signups to your list.  You can adjust it so that it displays to users after a preset time.  Shorter times will yield more signups. <br /></span></a></p><br />
									<p>Enable Sidebar: 
									<select class="sidebar" name="sidebar" class="form-control">
										<option value="true">YES</option>
										<option value="false" selected>NO</option>
									</select><a href="#" class="help-tooltip"><img src="../wp-content/plugins/readygraph/admin/assets/Help-icon.png" width="15px" style="margin-left:10px;"/><span><img class="callout" src="../wp-content/plugins/readygraph/admin/assets/callout_black.gif" /><strong>ReadyGraph Social Feed Settings</strong><br />You can add an optional social sidebar to your site that allows users the ability to share and discuss the best content on your site.  For an example, click here.<br /></span></a></p><br />
									<p>Enable Lower Right Notification: 
									<select class="notification" name="notification" class="form-control">
										<option value="true" selected>YES</option>
										<option value="false">NO</option>
									</select></p><br />
									<p>Pre-checked Invite Contact: 
									<select class="selectAll" name="selectAll" class="form-control">
										<option value="true" selected>YES</option>
										<option value="false">NO</option>
									</select></p><br />
									
								</div>
								<button type="button" class="btn btn-large btn-warning save" style="float: right;">Save Changes</button>
							</td>
					</tr>
			</table>
	</div>
</div>
</form> <?php } ?>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">

	jQuery('div.register-mid').hide();

function showLogin() {
	var $ = jQuery;
	$('div.register-left').hide();
	$('div.register-mid').show();	
}
function showSignup() {
	var $ = jQuery;
	$('div.register-mid').hide();
	$('div.register-left').show();	
}
function changeAccount() {
window.location = window.location.href + "&action=" + window.btoa("changeaccount");
}
$('#signin-submit').click(function(e){
  var email = $('#signin-email').val()
  var password = $('#signin-password').val()
  if(!email){
    alert('email is empty!')
    return
  }
  if(!password){
    alert('password is empty')
    return
  }
    $.ajax({
      type: 'GET',
      url: 'https://readygraph.com/api/v1/wordpress-login/',
      data: {
        'email' : email,
        'password' : password
      },
      dataType: 'json',

      success: function(response) {
        if(response.success)
        {
           
//		  var url: window.location.href;
//		  var myarr = mystr.split("&");
//        var pathname = myarr[0];
		var pathname = window.location.href.split("&")[0];
        window.location = pathname + "&app_id="+response.data.app_id + "&readygraph_access_token="+response.data.readygraph_access_token + "&readygraph_refresh_token="+response.data.readygraph_refresh_token + "&email="+response.data.email;
			
        }else{
          $('#error').text(response.error)
          $('#error').show();
        }
      }
  });


});

$('#register-app-submit').click(function(e){
  var email = $('#register-email').val()
  var site_url = $('#register-url').val()
  var first_name = $('#register-name').val()
  var password = $('#register-password').val()
  var password2 = $('#register-password1').val()
  if(!site_url){
    alert('Site Url is empty.')
    return;
  }
  if(!email){
    alert('Email is empty.')
    return;
  }
  if( !password || password != password2 ){
    alert('Password is not matching.')
    return;
  }

  $.ajax({
      type: 'POST',
      url: 'https://readygraph.com/api/v1/wordpress-signup/',
      data: {
        'email' : email,
        'site_url' : site_url,
        'first_name': first_name,
        'password' : password,
        'password2' : password2
      },
      dataType: 'json',
      success: function(response) {
        if(response.success)
        {
//		  var url: window.location.href;
//		  var myarr = mystr.split("&");
//        var pathname = myarr[0];
		var pathname = window.location.href.split("&")[0];
        window.location = pathname + "&app_id="+response.data.app_id + "&readygraph_access_token="+response.data.readygraph_access_token + "&readygraph_refresh_token="+response.data.readygraph_refresh_token + "&email="+response.data.email;
        }else{
          $('#error').text(response.error)
          $('#error').show();
        }
      }
  });

});

</script>
<script type="text/javascript" src="https://readygraph.com/scripts/readygraph.js"></script>
<!--
<script type="text/javascript" charset="utf-8">
function showLogin() {
	var $ = jQuery;
	$('div.register-left').hide();
	$('div.register-mid').show();	
}
function showSignup() {
	var $ = jQuery;
	$('div.register-mid').hide();
	$('div.register-left').show();	
}
	var $ = jQuery;
	$(function () {
		var settings =
			{
				'host':     "www.readygraph.com"
			, 'clientId': "9838eb84c6da2fc44ab9"
			};

		var authHost     = "https://" + settings.host;
		var resourceHost = "https://" + settings.host;
		
		// OAuth 2.0 Popup
		//
		var popupWindow=null;
		function openPopup(url)
		{
			if(popupWindow && !popupWindow.closed) popupWindow.focus();
			else popupWindow = window.open(url,"_blank","directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=515, height=330,top=" + (screen.height - 330)/2 + ",left=" + (screen.width - 515)/2);
		}
		function parent_disable() {
			if(popupWindow && !popupWindow.closed) popupWindow.focus();
		}
		
		$("a.connect").click(function() {
			var url = authHost + '/oauth/authenticate?client_id=' + settings.clientId + '&redirect_uri=' + encodeURIComponent(location.href.replace('#' + location.hash,"")) + '&response_type=token';
			openPopup(url);
			$(document.body).bind('focus', parent_disable);
			$(document.body).bind('click', parent_disable);
		});
		$(".change-account").click(function() {
			var url = authHost + '/oauth/authenticate?client_id=' + settings.clientId + '&redirect_uri=' + encodeURIComponent(location.href.replace('#' + location.hash,"")) + '&response_type=token';
			var logout = authHost + '/oauth/logout?redirect=' + encodeURIComponent(url);
			openPopup(logout);
			$(document.body).bind('focus', parent_disable);
			$(document.body).bind('click', parent_disable);
		});
		
		// User Interface
		//
		$('.template').click(function() {
			$('#preview').attr('src', $(this).find('img').attr('src'));
		});
		
		// Manage OAuth 2.0 Redirect
		//
		var extractCode = function(hash) {
			var match = hash.match(/code=(\w+)/);
			return !!match && match[1];
		};
		var extractToken = function(hash) {
			var match = hash.match(/access_token=(\w+)/);
			return !!match && match[1];
		};
		var extractError = function(hash) {
			var match = hash.match(/error=(\w+)/);
			return !!match && match[1];
		};
		
		var code = extractCode(window.location.href);
		if (extractError(window.location.href) == 'access_denied') {
			window.close();
		}
		else if(code) {
			try { window.opener.setCode(code); }
			catch(ex) { }
			window.close();
		}
		else {
			$('div.authenticate').show();
			
			if ($('[name="readygraph_access_token"]').val()) {
				$('div.authenticate').hide();
				$('div.authenticating').hide();
				$('div.authenticated').show();
				
				$('.email-address').text($('[name="readygraph_email"]').val());
				
				window.setup_readygraph($('[name="readygraph_application_id"]').val());
				$('.delay').val($('[name="readygraph_delay"]').val());
				$('.sidebar').val($('[name="readygraph_enable_sidebar"]').val());
				
				//$('[name="readygraph_ad_format"][value="' + $('[name="_readygraph_ad_format"]').val() + '"]').parent().click();
				//$('[name="readygraph_ad_timing"][value="' + $('[name="_readygraph_ad_timing"]').val() + '"]').parent().click();
				
				//$('[name="readygraph_ad_delay"]').val($('[name="_readygraph_ad_delay"]').val());
				//$('[name="readygraph_ad_scroll"]').val($('[name="_readygraph_ad_scroll"]').val());
				
				$('.result').text('...');
				if ($('[name="readygraph_access_token"]').val()) {
					$.ajax({
							url: resourceHost + '/api/v1/insight_info'
						, beforeSend: function (xhr) {
								xhr.setRequestHeader('Authorization', "Bearer " + $('[name="readygraph_access_token"]').val());
								xhr.setRequestHeader('Accept',        "application/json");
							}
						, method: 'POST'
						, success: function (response) {
								if (response.data) {
									$('.result').text(response.data.subscribers + ((response.data.subscribers == 0) ? ' Subscriber' : ' Subscribers'));
								} else {
									$('.result').text('Insight');
								}
							}
					});
				}
			}
		}
		
		// Manage OAuth 2.0 Results
		//
		window.setCode = function(code) {
      $('div.authenticate').hide();
			$('div.authenticating').show();
			$('div.authenticated').hide();
      
      $.ajax({
					url: resourceHost + '/oauth/access_token'
        , data: {
            grant_type: 'authorization_code',
            code: code,
            redirect_uri: encodeURIComponent(location.href.replace('#' + location.hash,"")),
            client_id: settings.clientId
        }
        , method: 'POST'
				, success: function (response) {
						$('div.authenticating').hide();
						if (response) {
							$('[name="readygraph_access_token"]').val(response.access_token);
							$('[name="readygraph_refresh_token"]').val(response.refresh_token);
              window.setAccessToken(response.access_token);
						} else {
							$('div.authenticate').show(response.access_token);
						}
					}
			});
    }
		window.setAccessToken = function(token) {
			$('div.authenticate').hide();
			$('div.authenticating').show();
			$('div.authenticated').hide();
			
			$.ajax({
					url: resourceHost + '/api/v1/account_info'
				, beforeSend: function (xhr) {
						xhr.setRequestHeader('Authorization', "Bearer " + token);
						xhr.setRequestHeader('Accept',        "application/json");
					}
        , method: 'POST'
				, success: function (response) {
						$('div.authenticating').hide();
						if (response.data) {
							$('[name="readygraph_access_token"]').val(token);
							$('[name="readygraph_email"]').val(response.data.email);
							$('[name="readygraph_application_id"]').val(response.data.application_id);
							$('#myForm')[0].submit();
						} else {
							$('div.authenticate').show();
						}
					}
			});
		}
	});
</script> -->
<script>
window.setup = false;
window.refresh_readygraph = function() {};
window.setup_readygraph = function(app_id) {
    if (window.setup) {
        window.refresh_readygraph();
        return;
    }
    window.setup = true;
    readygraph.setup({
      applicationId: app_id,
      isPreview: true,
      enableLoginWall: false,
      enableDistraction: false,
      enableAutoLogin: false,
      enableSidebar: false,
      enableNotification: false,
      enableInvite: false,
      enableOpenGraph: false,
      enableRgSeo: false
    });
    readygraph.ready(function() {
      readygraph.framework.require(['compact.sdk', 'facebook.sdk'], function() {
        var $ = readygraph.framework.jQuery;
        $.cookie('RGAuth', null);
        readygraph.framework.facebook.logout(function() {
          readygraph.framework.require(['invite'], function() {
            var VIEW_TYPE = {
              LOADING: 0,
              LOGIN_REQUIRE: 1,
              PERMISSION_REQUIRE: 2,
              DEFAULT: 3,
              LOGIN_WITH_EMAIL: 4,
              SIGNUP_WITH_EMAIL: 5,
              IMPORT_WITH_EMAIL: 6,
              FINISH: 10
            };
        
            var auth = new readygraph.framework.ui.AuthModel({
              dialog: true,
              'inviter_profile_picture': 'https://graph.facebook.com/4/picture?type=normal&width=400&height=400'
            });
            $('.rg-preview-widget').html('');
            $('.rg-preview-widget').append(auth.lightbox.view.$el);
            $('.rgw-content').attr('style', 'position: relative !important;');
            
            var view = VIEW_TYPE.LOGIN_REQUIRE;
            auth.on('switch', function() {
              if (auth.view.currentView != view) { auth.view.switchView(view); }
              else auth.view.render();
              if (view == VIEW_TYPE.DEFAULT) {
                auth.view.$el.find('.rgw-invite-view').showAndAnimate();
                auth.view.$el.find('.rgw-follow-view').hideAndAnimate();
                auth.view.$el.commitTransition();
              }
            });
            auth.view.switchView(view);
            
            $(window).scroll(function() {
              $(window).trigger('rgw-invalidate');
            });
            $('.rg-preview-widget, .content-warp').scroll(function() {
              $(window).trigger('rgw-invalidate');
            });
            $(window).trigger('rgw-invalidate');
            
            $('.rg-vertical-tab').click(function() {
                saveContent(auth, $('.rg-preview-widget-container'), true);
								
                $('.rg-vertical-tab').removeClass('active');
                $(this).addClass('active');
                view = VIEW_TYPE[$(this).attr('tab')];
                if (auth.view.currentView != view) { auth.view.switchView(view); }
                
                $('.rg-preview-widget, .content-warp').scrollTop(10000);
            });
            
            enableContentEditable(auth, $('.rg-preview-widget-container'));
            restoreContent(auth, $('.rg-preview-widget-container'));
            
            $('.save').click(function() {
                $('.save').css('opacity', 0.4);
                saveContent(auth, $('.rg-preview-widget-container'), false);
            });
            
            window.refresh_readygraph = function() {
                restoreContent(auth, $('.rg-preview-widget-container'));
            }
          });
        });
      });
    });
}
function enableContentEditable(model, container) {
    model.view.$el.find('[rgw-data-key]').each(function() {
        var element = $(this);
        if (element.attr('rgw-data-editable') == 'false') return;
        
          if (element.attr('editing') != null) return;
          container.find('.special-button-container button').attr('disabled', 'disabled');
          element.text(readygraph.getSettings().get(element.attr('rgw-data-key')));
          element.attr('editing', '1');
          element.css({
            'border': '2px dashed orange',
            'position': 'relative',
            'top': '-2px',
            'margin-bottom': '-4px',
            'background-color': '#FAFAC5'
          });
          element.attr('contenteditable', true);
          element.bind('paste', function(e) {
            e.preventDefault();
          });
          element.bind('keydown', function() { $('.save').css('opacity', '1.0'); });
      });
}
function saveContent(model, container, fake) {
    var settings = {};
    model.view.$el.find('[rgw-data-key]').each(function() {
        var element = $(this);
        if (element.attr('rgw-data-editable') == 'false') return;
        settings[element.attr('rgw-data-key')] = element.text();
        readygraph.getSettings().set(element.attr('rgw-data-key'), element.text());
    });
    if (!fake) {
				$('input[name="readygraph_settings"]').val(JSON.stringify(settings));
        $('#myForm')[0].submit();
    }
}
function restoreContent(model, container) {
    eval('window._TEMP='+$('input[name="readygraph_settings"]').val());
		var settings = window._TEMP;
    if (settings) {
        model.view.$el.find('[rgw-data-key]').each(function() {
            var element = $(this);
            if (element.attr('rgw-data-editable') == 'false') return;
            element.text(settings[element.attr('rgw-data-key')]);
            readygraph.getSettings().set(element.attr('rgw-data-key'), element.text());
        });
    }
}
</script>
<script type="text/javascript" charset="utf-8">
var app_id = $('[name="readygraph_application_id"]').val();
if (app_id) {
		
        window.setup_readygraph(app_id);
}


$(function () {

		var access_token = $('[name="readygraph_access_token"]').val();
		if (access_token) {
		$('.delay').val($('[name="readygraph_delay"]').val());

		$('.sidebar').val($('[name="readygraph_enable_sidebar"]').val());
		$('.notification').val($('[name="readygraph_enable_notification"]').val());
  		$('.selectAll').val($('[name="readygraph_auto_select_all"]').val());

		$('.email-address').text($('[name="readygraph_email"]').val());
		$.ajax({
			url: "https://readygraph.com/api/v1/insight_info", 
			beforeSend: function (xhr) {
			xhr.setRequestHeader("Authorization", "bearer " + access_token); //96a7a26ae8eb95c4db2115c49aa9cdd0c8b73d34
			xhr.setRequestHeader("Accept", "application/json");
			}, 
			type: 'POST',
			success: function (response) {
				$('.result').text(access_token);
				if (response.success) {
					$('.result').text(response.data.subscribers + ((response.data.subscribers == 0) ? ' Subscriber' : ' Subscribers'));
				} else {
					$('.result').text('Insight');
				}
			}
			});
}
else { $('.result').text('Insight-Readygraph-No-Token'); }});
</script>
<style>
/* FOR INLINE WIDGET */
.rgw-overlay {
    display: none !important;
}
.rgw-content-frame {
    left: 0 !important;
    top: 0 !important;
    position: relative !important;
    margin: 0 auto !important;
    border: solid 1px #cccccc;
}
.rgw-preview-warning {
    display: none !important;
}
.rgw-content {
    position: relative !important;
}
</style>