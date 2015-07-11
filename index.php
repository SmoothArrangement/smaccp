<?php
     include("include/connection.php");
     include ("include/language.php");
     $emsg = "";
     $smsg = "";
     function rand_string( $length ) {
          $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
          return substr(str_shuffle($chars),0,$length);
     }
     if(isset($_REQUEST['forgote'])){
          $password = rand_string(6);
          $email = $_REQUEST['email'];
          $checkemail = "SELECT * FROM user_mst WHERE vEmail='".$email."'";
          $emailresult = mysql_query($checkemail);
          if(mysql_num_rows($emailresult) == 0){
               $emsg = "This e-mail address is unknown. Please join first.";   
          } else {
               $smsg = "Please check email and password.";
               $erow = mysql_fetch_assoc($emailresult);
               $password = base64_encode($password); 
               $upQuery = "UPDATE user_mst SET vPassword='".$password."' WHERE iId='".$erow['iId']."'";
               mysql_query($upQuery);
               $email = $erow['vEmail'];
               $fname = $erow['vFname'];
               $lname = $erow['vLname'];
               $password = base64_decode($password);
               
               $seltamplate = "SELECT * FROM email_template WHERE iId='5'";
               $temresult = mysql_query($seltamplate);
               $template = mysql_fetch_assoc($temresult);
               $msg = $template['tMessage'];
               $msg = str_replace("{benutzername}",$fname." ".$lname,$msg);
               $msg = str_replace("{ticketlogin}",'<a href="http://ccp.smootharrangement.de/">Click here to login.</a>',$msg);
               $msg = str_replace("{benutzeremail}",$email,$msg);      
               $msg = str_replace("{passwort}",$password,$msg);
               $html = '<html lang="en" dir="ltr" style="border: 0 none;font: inherit;margin: 0;padding: 0;vertical-align: baseline;">
                             <head>
                                  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
                                  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
                                  <meta content="width=device-width" name="viewport">
                                  
                             </head>
                             <body style="background: #FFFFFF;color: #333333;font-family: Helvetica,Arial,sans-serif;font-size: 14px;line-height: 1.5em;margin: 0;padding: 40px 0;">
                                    '.$msg.'    
                             </body>
                        </html>';
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                // Additional headers
                
                $headers .= 'From: CCP <'.$template['vSender'].'>' . "\r\n";
                $sub = $template['vSubject'];
                mail($email, $sub, $html, $headers);
          }
     }
     if(isset($_REQUEST['login_name']) && $_REQUEST['login_name'] != ""){
          $email = $_REQUEST['login_name'];
          $pass = $_REQUEST['login_pw'];
          $remeber = $_REQUEST['login_remember'];
          $year = time() + 31536000;
		setcookie("username",$email,time()-10);
		setcookie("password",$pass,time()-10);
		
		if(trim($remeber) == "on"){
               setcookie('username', $email, $year);        // Sets the cookie username
    			setcookie('password', $pass, $year);
		}
          $emsg = "";
          if($email != "" && $pass != ""){
          	$pass = base64_encode($pass);
               $checklogin = "SELECT * FROM user_mst WHERE vEmail='".$email."' AND vPassword='".$pass."'";
               $checkloginresult = mysql_query($checklogin);
               if(mysql_num_rows($checkloginresult) == 0){
                    $emsg = "Invalid credentials.";
               } else {
                    $row = mysql_fetch_assoc($checkloginresult);
                    $_SESSION['id'] = $row['iId'];
                    $_SESSION['uid'] = $row['iId'];
                    $_SESSION['uname'] = $row['vFname']." ".$row['vLname'];
                    $_SESSION['utype'] = $row['vUserType'];
                    $_SESSION['sucess'] = "You have been successfully logged in as ".$_SESSION['uname'];
                    $date = date("Y-m-d H:i:s");
                    $uplogin = "UPDATE user_mst SET dLastLogin='".$date."' WHERE iId='".$row['iId']."'";
                    mysql_query($uplogin);
                    echo "<script type='text/javascript'>window.top.location='ccp.php';</script>";
               }
          } else {
               $emsg = "Invalid credentials.";
          }
     }
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <link rel="dns-prefetch" href="http://fonts.googleapis.com" />
    <link rel="dns-prefetch" href="http://themes.googleusercontent.com" />
    <link rel="dns-prefetch" href="http://ajax.googleapis.com" />
    <link rel="dns-prefetch" href="http://cdnjs.cloudflare.com" />
    <link rel="dns-prefetch" href="http://agorbatchev.typepad.com" />

    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Login - Smooth Arrangement CCP</title>
    <meta name="description" content="Kundendaten verwalten, E-Mails, Datenbanken, Dateien und Optionen verwalten.">
    <meta name="author" content="Cordula Wulfert">

    <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    <!-- iPhone: Don't render numbers as call links -->
    <meta name="format-detection" content="telephone=no">

    <link rel="shortcut icon" href="favicon.ico" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
    <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->







    <!-- The Styles -->
    <!-- ---------- -->

    <!-- Layout Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/layout.css">

    <!-- Icon Styles -->
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/fonts/font-awesome.css">
    <!--[if IE 8]><link rel="stylesheet" href="css/fonts/font-awesome-ie7.css"><![endif]-->

    <!-- External Styles -->
    <link rel="stylesheet" href="css/external/jquery-ui-1.9.1.custom.css">
    <link rel="stylesheet" href="css/external/jquery.chosen.css">
    <link rel="stylesheet" href="css/external/jquery.cleditor.css">
    <link rel="stylesheet" href="css/external/jquery.colorpicker.css">
    <link rel="stylesheet" href="css/external/jquery.elfinder.css">
    <link rel="stylesheet" href="css/external/jquery.fancybox.css">
    <link rel="stylesheet" href="css/external/jquery.jgrowl.css">
    <link rel="stylesheet" href="css/external/jquery.plupload.queue.css">
    <link rel="stylesheet" href="css/external/syntaxhighlighter/shCore.css" />
    <link rel="stylesheet" href="css/external/syntaxhighlighter/shThemeDefault.css" />

    <!-- Elements -->
    <link rel="stylesheet" href="css/elements.css">
    <link rel="stylesheet" href="css/forms.css">

    <!-- OPTIONAL: Print Stylesheet for Invoice -->
    <link rel="stylesheet" href="css/print-invoice.css">

    <!-- Typographics -->
    <link rel="stylesheet" href="css/typographics.css">

    <!-- Responsive Design -->
    <link rel="stylesheet" href="css/media-queries.css">

    <!-- Bad IE Styles -->
    <link rel="stylesheet" href="css/ie-fixes.css">







    <!-- The Scripts -->
    <!-- ----------- -->

    <!-- JavaScript at the top (will be cached by browser) -->


    <!-- Grab frameworks from CDNs -->
        <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.2.js"><\/script>')</script>

        <!-- Do the same with jQuery UI -->
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    <script>window.jQuery.ui || document.write('<script src="js/libs/jquery-ui-1.9.1.js"><\/script>')</script>

        <!-- Do the same with Lo-Dash.js -->
    <!--[if gt IE 8]><!-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/0.8.2/lodash.js"></script>
    <script>window._ || document.write('<script src="js/libs/lo-dash.js"><\/script>')</script>
    <!--<![endif]-->
    <!-- IE8 doesn't like lodash -->
    <!--[if lt IE 9]><script src="http://documentcloud.github.com/underscore/underscore.js"></script><![endif]-->

    <!-- Do the same with require.js -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/require.js/2.0.6/require.js"></script>
    <script>window.require || document.write('<script src="js/libs/require-2.0.6.min.js"><\/script>')</script>


    <!-- Load Webfont loader -->
    <script type="text/javascript">
        window.WebFontConfig = {
            google: { families: [ 'PT Sans:400,700' ] },
            active: function(){ $(window).trigger('fontsloaded') }
        };
    </script>
    <script defer async src="https://ajax.googleapis.com/ajax/libs/webfont/1.0.28/webfont.js"></script>

    <!-- Essential polyfills -->
    <script src="js/mylibs/polyfills/modernizr-2.6.1.min.js"></script>
    <script src="js/mylibs/polyfills/respond.js"></script>
    <script src="js/mylibs/polyfills/matchmedia.js"></script>
    <!--[if lt IE 9]><script src="js/mylibs/polyfills/selectivizr.js"></script><![endif]-->
    <!--[if lt IE 10]><script src="js/mylibs/polyfills/excanvas.js"></script><![endif]-->
    <!--[if lt IE 10]><script src="js/mylibs/polyfills/classlist.js"></script><![endif]-->


    <!-- scripts concatenated and minified via build script -->

    <!-- Scripts required everywhere -->
    <script src="js/mylibs/jquery.hashchange.js"></script>
    <script src="js/mylibs/jquery.idle-timer.js"></script>
    <script src="js/mylibs/jquery.plusplus.js"></script>
    <script src="js/mylibs/jquery.scrollTo.js"></script>
    <script src="js/mylibs/jquery.ui.touch-punch.js"></script>
    <script src="js/mylibs/jquery.ui.multiaccordion.js"></script>
    <script src="js/mylibs/number-functions.js"></script>
    <script src="js/mylibs/fullstats/jquery.css-transform.js"></script>
    <script src="js/mylibs/fullstats/jquery.animate-css-rotate-scale.js"></script>
    <script src="js/mylibs/forms/jquery.validate.js"></script>

    <!-- Do not touch! -->
    <script src="js/mango.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>

    <!-- Your custom JS goes here -->
    <script src="js/app.js"></script>

    <!-- end scripts -->
<style>
    .ui-dialog {
        width: 505px !important;
    }
    .ui-dialog .actions{
        left:0px;
        position: static;
    }
</style>
</head>

<body class=login>

	<!-- Some dialogs etc. -->

	<!-- The loading box -->
	<div id="loading-overlay"></div>
	<div id="loading">
		<span><?php echo $langArray['LBL_LOADING']; ?></span>
	</div>
	<!-- End of loading box -->

	<!--------------------------------->
	<!-- Now, the page itself begins -->
	<!--------------------------------->

	<!-- The toolbar at the top -->
	<section id="toolbar">
		<div class="container_12">

			<!-- Left side -->
			<div class="left">
<!-- 				<ul class="breadcrumb">

					<li><a href="http://smootharrangement.de">Smooth Arrangement</a></li>
					<li><a href="javascript:void(0);">Login</a></li>

				</ul> -->
			</div>
			<!-- End of .left -->

			<!-- Right side -->
			<div class="right">
			</div><!-- End of .right -->

			<!-- Phone only items -->
			<div class="phone">

				<!-- User Link -->
				<li><a href="http://smootharrangement.de"><span style="color:#000;" class="icon icon-home"></span></a></li>
				<!-- Navigation -->

			</div><!-- End of .phone -->

		</div><!-- End of .container_12 -->
	</section><!-- End of #toolbar -->

	<!-- The header containing the logo -->
	<header class="container_12">

		<div class="container">

			<!-- Your logos -->
			<a href="index.php"><img src="img/SmoothArrangement.png" alt="Smooth Arrangement" width="300" height="120"></a>
			<a class="phone-title" href="index.php"><img src="img/logo-mobile.png" alt="Mango" height="22" width="140" /></a>

			<!-- Right link -->
			<div class="right">

			</div>

		</div><!-- End of .container -->

	</header><!-- End of header -->

	<!-- The container of the sidebar and content box -->
	<section id="login" class="container_12 clearfix">

		<form action="" method="post" class="box validate">

			<div class="header">
				<h2><span class="icon icon-lock"></span><?php echo $langArray['LBL_LOGIN']; ?></h2>
			</div>

			<div class="content">

				<!-- Login messages -->
				<div class="login-messages">
					<div class="message welcome" style="display:none;"><?php echo $langArray['LBL_WELCOME']; ?></div>
					<?php
                              if($emsg != ""){
                          ?>
					     <div class="message welcome" style="display:none;"><?php echo $langArray['LBL_WELCOME']; ?></div>
					<?php
                              } else {
                                   if($smsg != ""){
                         ?>
                                        <div class="message welcome" style="display:block;"><?=$smsg?></div>
                         <?php
                                   } else {
                         ?>
                                        <div class="message welcome" style="display:block;"><?php echo $langArray['LBL_WELCOME']; ?></div>
                         <?php
                                   }
                              }
                         ?>
                         <?php
                              if($emsg != ""){
                          ?>
					     <div class="message failure" style="display:block;"><?=$emsg?></div>
					<?php
                              } else {
                         ?>
                              <div class="message failure" style="display:none;">Bitte prüfen Sie Ihre Zugangsdaten</div>
                         <?php
                              }
                         ?>
				</div>

				<!-- The form -->
				<div class="form-box">

					<div class="row">
						<label for="login_name">
							<strong><?php echo $langArray['LBL_USERNAME']; ?></strong>
							<small>(<?php echo $langArray['LBL_EMAILADDRESS']; ?>)</small>
						</label>
						<div>
							<input tabindex=1 type="text" class="required" name=login_name id="login_name" value="<?php echo $_COOKIE['username']; ?>" />
						</div>
					</div>

					<div class="row">
						<label for="login_pw">
							<strong><?php echo $langArray['LBL_PASSWORD']; ?></strong>
                                                        <a style="border-bottom:1px dotted black;" href="javascript:void(0);" class="open-forget-password-dialog"><?php echo $langArray['LBL_FORPASSWORD']."?"; ?></a>
							<small><a href="javascript:void(0);" id=""></a></small>
                                                </label>
						<div>
							<input tabindex=2 type="password" class="required" name=login_pw id="login_pw" value="<?php echo $_COOKIE['password']; ?>" />
						</div>
					</div>

				</div><!-- End of .form-box -->

			</div><!-- End of .content -->

			<div class="actions">
				<div class="left">
					<div class="rememberme">
						<input tabindex=4 type="checkbox" name="login_remember" id="login_remember" <?php if(isset($_COOKIE['username']) && $_COOKIE['username'] != "") {
							echo 'checked="checked"';
						}
						else {
							echo '';
						}
						?> /><label for="login_remember"><?php echo $langArray['LBL_SAVELOGINDATA']."?"; ?></label>
					</div>
				</div>
				<div class="right">
					<input tabindex=3 type="submit" value="<?php echo $langArray['LBL_LOGIN']; ?>" name="login_btn" id="login_btn"/>
				</div>
			</div><!-- End of .actions -->
		</form><!-- End of form -->
	</section>
         <div style="display: none;" id="dialog_forget_password" title="Forgot Password">
        <form action="" class="full validate" method="post">
            <div class="row">
                <label for="email">
                    <strong>E-mail Address</strong>
                </label>
                <div>
                    <input class="required email" type=text name=email id=email />
                </div>
            </div>
            <div class="actions">
                <div class="left">
                    <button class="grey cancel">Abort</button>
                </div>
                <div class="right">
                    <button type="submit" name="forgote">Request</button>
                </div>
            </div>
          </form>
    </div><!-- E
	<!-- Spawn $$.loaded -->
	<script>
		$$.loaded();
          $$.ready(function() {
              $( "#dialog_add_client" ).dialog({
                  autoOpen: false,
                  modal: true,
                  width: 400,
                  open: function(){ $(this).parent().css('overflow', 'visible'); $$.utils.forms.resize() }
              }).find('button.submit').click(function(){
                  var $el = $(this).parents('.ui-dialog-content');
                  if ($el.validate().form()) {
                      $el.find('form')[0].reset();
                      $el.dialog('close');
                  }
              }).end().find('button.cancel').click(function(){
                  var $el = $(this).parents('.ui-dialog-content');
                  $el.find('form')[0].reset();
                  $el.dialog('close');;
              });

              $( ".open-add-client-dialog" ).click(function() {
                  $( "#dialog_add_client" ).dialog( "open" );
                  return false;
              });

              $( "#dialog_forget_password" ).dialog({
                  autoOpen: false,
                  modal: true,
                  width: 400,
                  open: function(){ $(this).parent().css('overflow', 'visible'); $$.utils.forms.resize() }
              }).find('button.submit').click(function(){
                  var $el = $(this).parents('.ui-dialog-content');
                  if ($el.validate().form()) {
                      $el.find('form')[0].reset();
                      $el.dialog('close');
                  }
              }).end().find('button.cancel').click(function(){
                  var $el = $(this).parents('.ui-dialog-content');
                  $el.find('form')[0].reset();
                  $el.dialog('close');;
              });

              $( ".open-forget-password-dialog" ).click(function() {
                  $( "#dialog_forget_password" ).dialog( "open" );
                  return false;
              });

               $("#d2_email1").keydown(function(event) {
                    if (event.ctrlKey==true && (event.which == '118' || event.which == '86')) {
                         event.preventDefault();
                    }
               });
			$(".geflag").live("click",function(){
			     document.cookie = "language=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
			     document.cookie="language=ge";
				window.location.reload();
			});

			$(".enflag").live("click",function(){
				document.cookie = "language=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
        			document.cookie="language=en";
			     window.location.reload();
			});
			$( "#login_pw" ).keypress(function( event ) {
                    if ( event.which == 13 ) {
                         $("#login_form").submit();
                    }
               });
			$("#login_btn").live("click",function(){
                             var formvalid = $("#login_form").valid();
                             if(formvalid){
					var check = $("#login_remember").is(":checked");
					if(check){
						//if(confirm("Sure you want to save login detail")){
	         					   $("#login_form").submit();
						/*} else {
						        $("#login_remember").trigger("click");
	                                 $("#login_form").submit();
						}*/
					} else {
	                        $("#login_form").submit();
					}
                                       
			    }
			});
                        
			$("#login_remember").change(function() {
                    if(this.checked) {
                         if(confirm("Möchten Sie Ihre Zugangsdaten wirklich speichern?")){
                         } else {
  				        var check = $("#login_remember").is(":checked");
  				        if(check){
                                   $("#login_remember").removeAttr("checked");
                                   $("#login_remember").parent("div").children("span").removeClass("checkbox-checked");  
                            }
  				    }
                    }
			});
          });
	</script>
    <script>
        $('#login').find('form').validationOptions({
            rules: {
                "login_pw": {
                    remote: {
                        url: "extras/login.php",  // ATTENTION: Credentials sent as plain text, if you're not using HTTPS!
                        type: "post",
                        data: {
                            login_name: function() {
                                return $('#login_name').val();
                            }
                        }
                    }
                }
            },
            messages: {
                "login_pw": {
                    remote: "Username/password are wrong."
                }
            }
        });
    </script>

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script defer src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

</body>
</html>
