<?php
    include('include/connection.php');
    include("include/language.php");
    if((!isset($_SESSION['uid']) && $_SESSION['uid'] == "") && (!isset($_SESSION['id']) && $_SESSION['id'] == "" && !isset($_SESSION['uid']) && $_SESSION['uid'] == "")){
		header("location:index.php");
	}
	$id = $_SESSION['uid'];
	$query = "SELECT * FROM user_mst WHERE iId='".$id."'" ;
	$userData = mysql_query($query);
	$userData = mysql_fetch_assoc($userData);
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
</style>
</head>

<body>

    <!-- ----------------- -->
    <!-- Some dialogs etc. -->

    <!-- The loading box -->
    <div id="loading-overlay"></div>
    <div id="loading">
        <span>lade...</span>
    </div>
    <!-- End of loading box -->

    <!-- The lock screen -->
    <div id="lock-screen" title="Bildschrim gesperrt">

        <a href="logout.php" class="header right button grey flat">Logout</a>

        <p>Du wurdest sicherheitshalber wegen Inaktivität ausgelogt.</p>
        <p>1. Bitte schieb den Regler nach rechts<br>2. Bitte gib Dein Passwort ein</p>

        <div class="actions">
            <div id="slide_to_unlock">
                <img src="img/elements/slide-unlock/lock-slider.png" alt="slide me">
                <span>entsperren</span>
            </div>
            <form action="#" method="GET">
                
               
                <input type="password" name="pwd" id="pwd" placeholder="<?php echo $langArray['LBL_PASSWORDHINT']; ?>" autocorrect="off" autocapitalize="off"> <input type="submit" name=send value="<?php echo $langArray['LBL_PASSWORDOK']; ?>" disabled> <input type="reset" value="<?php echo $langArray['LBL_PASSWORDCANCEL']; ?>">
            </form>
        </div><!-- End of .actions -->

    </div><!-- End of lock screen -->

    <!-- The settings dialog -->
    <div id="settings" class="settings-content" data-width=450>

        <ul class="tabs center-elements">
            <li><a href="#settings-1"><img src="img/icons/packs/fugue/24x24/user-business.png" alt="" /><span>Account Settings</span></a></li>
            <li><a href="#settings-2"><img src="img/icons/packs/fugue/24x24/balloon.png" alt="" /><span>Notifications</span></a></li>
            <li><a href="#settings-3"><img src="img/icons/packs/fugue/24x24/credit-card.png" alt="" /><span>Invoicing</span></a></li>
        </ul>

        <div class="change_password">
            <form action="#" method="GET" class="validate" id="settings_password">
                <p>
                    <label for="settings-password">New Password:</label> <input type="password" id="settings-password" class="required strongpw small password meter" />
                </p>
            </form>
            <div class="actions">
                <div class="right">
                    <input form="settings_password" type="reset" value="Cancel" class="grey" />
                    <input form="settings_password" type="submit" value="OK" />
                </div>
            </div>
        </div><!-- End of .change_password -->

        <div class="content">

            <div id="settings-1">
                <form action="#" method="GET">
                    <p>
                        <label for="settings-name">Name:</label> <input type="text" id="settings-name" class="medium" />
                    </p>
                    <p>
                        <label for="settings-descr">Descripton:</label> <input type="text" id="settings-descr" class="medium" />
                    </p>
                    <p class="divider"></p>
                    <p>
                        <label for="settings-pw">Password: </label> <input class="grey change_password_button" type="button" id="settings-pw" value="Change Password..." data-lang-changed="Password changed" />
                    </p>
                </for>
            </div><!-- End of #settings-1 -->

            <div id="settings-2">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                <form action="#" method="GET">
                    <div class="spacer"></div>
                    <p class="divider"></p>
                    <div class="spacer"></div>
                    <p>
                        <label for="settings-email">Email Address:</label> <input type="text" id="settings-email" class="medium" />
                    </p>
                    <p>
                        <label for="settings-interval">Interval: </label>
                        <select name="settings-interval" id="settings-interval" data-placeholder="Choose an Interval">
                            <option value=""></option>
                            <option value="Never">Never</option>
                            <option value="Daily">Daily</option>
                            <option value="Weekly">Weekly</option>
                            <option value="Monthly">Monthly</option>
                            <option value="Yearly">Yearly</option>
                        </select>
                    </p>
                </form>
            </div><!-- End of #settings-2 -->

            <div id="settings-3">
                <form action="#" method="GET">
                    <p>
                        <label for="settings-card-number">Card number:</label> <input type="text" id="settings-card-number" class="medium" />
                    </p>
                    <p>
                        <label for="settings-cvv">CVV:</label> <input type="text" id="settings-cvv" class="medium" />
                    </p>
                    <p>
                        <label for="settings-expiration">Expiration: </label>
                        <select sname="settings-expiration" id="settings-expiration" data-placeholder="Choose an Expiration">
                            <option value=""></option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                        </select>
                    </p>
                </form>
            </div><!-- End of #settings-3 -->

        </div><!-- End of .content -->

        <div class="actions">
            <div class="left">
                <button class="grey cancel">Cancel</button>
            </div>
            <div class="right">
                <button class="save">Save</button>
                <button class="hide saving" disabled >Saving...</button>
            </div>
        </div><!-- End of .actions -->

    </div><!-- End of settings dialog -->

    <!-- Add Client Example Dialog -->
    <div style="display: none;" id="dialog_add_client" title="Add Client Example Dialog">
        <form action="" class="full validate">
            <div class="row">
                <label for="d2_username">
                    <strong>Username</strong>
                </label>
                <div>
                    <input class="required" type=text name=d2_username id=d2_username />
                </div>
            </div>
            <div class="row">
                <label for="d2_email">
                    <strong>Email Address</strong>
                </label>
                <div>
                    <input class="required" type=text name=d2_email id=d2_email />
                </div>
            </div>
            <div class="row">
                <label for="d2_role">
                    <strong>Role</strong>
                </label>
                <div>
                    <select name=d2_role id=d2_role class="search required" data-placeholder="Choose a Role">
                        <option value=""></option>
                        <option value="Applicant">Applicant</option>
                        <option value="Member">Member</option>
                        <option value="Moderator">Moderator</option>
                        <option value="Administrator">Administrator</option>
                    </select>
                </div>
            </div>
        </form>
        <div class="actions">
            <div class="left">
                <button class="grey cancel">Cancel</button>
            </div>
            <div class="right">
                <button class="submit">Add User</button>
            </div>
        </div>
    </div><!-- End if #dialog_add_client -->

    <script>
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
    });
    </script>
    <!--  End of Add Client Example Dialog -->

    <!-- Message Dialog -->
    <div style="display: none;" id="dialog_message" title="Conversation: John Doe">
        <div class="spacer"></div>
        <div class="messages full chat">

            <div class="msg reply">
                <img src="img/icons/packs/iconsweets2/25x25/user-2.png"/>
                <div class="content">
                    <h3><a href="pages_profile.php">John Doe</a> <span>says:</span><small>3 hours ago</small></h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                    et dolore magna aliquyam erat, sed diam voluptua.</p>
                </div>
            </div>

            <div class="msg">
                <img src="img/icons/packs/iconsweets2/25x25/user-2.png"/>
                <div class="content">
                    <h3><a href="pages_profile.php">Peter Doe</a> <span>says:</span><small>5 hours ago</small></h3>
                    <p>At vero eos et accusam et justo duo dolores et ea rebum.
                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
            </div>

        </div><!-- End of .messages -->

        <div class="actions">
            <div class="left">
                <input style="width: 320px;" type="text" name=d3_message id=d3_message placeholder="Type your message..."/>
            </div>
            <div class="right">
                <button>Send</button>
                <button class="grey">Cancel</button>
            </div>
        </div><!-- End of .actions -->

    </div><!-- End of #dialog_message -->

    <script>
    $$.ready(function() {
        $( "#dialog_message" ).dialog({
            autoOpen: false,
            width: 500,
            modal: true
        }).find('button').click(function(){
            $(this).parents('.ui-dialog-content').dialog('close');
        });

        $( ".open-message-dialog" ).click(function() {
            $( "#dialog_message" ).dialog( "open" );
            return false;
        });
    });
    </script>
    <!-- End of Message Dialog -->

    <!--------------------------------->
    <!-- Now, the page itself begins -->
    <!--------------------------------->

    <!-- The toolbar at the top -->
    <section id="toolbar">
        <div class="container_12">

            <!-- Left side -->
            <div class="left">
                <ul class="breadcrumb">

<!--                     <li><a href="dashboard.php">Mango</a></li>
					<li><a href="javascript:void(0);">Dashboard</a></li> -->

                </ul>
            </div>
            <!-- End of .left -->

            <!-- Right side -->
            <div class="right">
                <ul>

                    <li><a href="kundendaten.php"><span class="icon i14_admin-user-2"></span><?php echo $userData['vFname'].' '.$userData['vLname'];?></a></li>

                    <li>
                        <a href="#"><span>1</span>Tickets</a>

                        <!-- Mail popup -->
                        <div class="popup">
                            <h3>Support</h3>

                            <!-- Button bar -->
                            <a class="button flat left grey" onclick="$(this).parent().fadeToggle($$.config.fxSpeed)">X</a>
                            <a class="button flat right" href="tables_dynamic.php">Neues Ticket</a>

                            <!-- The mail content -->
                            <div class="content mail">
                                <ul>

                                    <li>
                                        <div class="avatar">
                                            <img src="img/elements/mail/avatar.png" height=40 width=40/>
                                        </div>
                                        <div class="info">
                                            <strong>Manuela Raab</strong>
                                            <span>dringend</span>
                                            <small>01.07.2015 09:32</small>
                                        </div>
                                        <div class="text">
                                            <p>Hallo Smooth Arrangement</p>
                                            <p>Ich habe ein Problem mit meiner Homepage</p>
                                            <p>M.Raab</p>
                                            <div class="actions">
                                                <a href="javascript:void(0);" class="left open-message-dialog">Antworten</a>
                                                <a onclick="$(this).parent().parent().parent().slideToggle($$.config.fxSpeed)" class="red right" href="javascript:void(0);">schließen</a>
                                            </div>
                                        </div>
                                    </li>

 



                                </ul>
                            </div><!-- End of .contents -->

                        </div><!-- End of .popup -->
                    </li><!-- End of li -->

                    <li class="space"></li>

                    <li><a href="javascript:void(0);" id="btn-lock"><span>--:--</span>Bildschrim sperren</a></li>

                    <li class="red"><a href="logout.php">Ausloggen</a></li>

                </ul>
            </div><!-- End of .right -->

            <!-- Phone only items -->
            <div class="phone">

                <!-- User Link -->
                <li><a href="pages_profile.php"><span class="icon icon-user"></span></a></li>
                <!-- Navigation -->
                <li><a class="navigation" href="#"><span class="icon icon-list"></span></a></li>

            </div><!-- End of phone items -->

        </div><!-- End of .container_12 -->
    </section><!-- End of #toolbar -->

    <!-- The header containing the logo -->
    <header class="container_12">

        <!-- Your logos -->
        <a href="ccp.php"><img src="img/SmoothArrangement.png" alt="Smooth Arrangement" width="300" height="120"></a>
        <a class="phone-title" href="dashboard.php"><img src="img/logo-mobile.png" alt="Smooth Arrangement" height="22" width="140" /></a>

        <div class="buttons">
            <a href="statistics.php">
                <span class="icon icon-envelope-alt"></span>
                Web Mail
            </a>
            <a href="forms.php">
                <span class="icon icon-list-alt"></span>
                Rechnungen
            </a>
            <a href="tables_dynamic.php">
                <span class="icon icon-comment"></span>
                Support
            </a>
        </div><!-- End of .buttons -->
    </header><!-- End of header -->

    <!-- The container of the sidebar and content box -->
    <div role="main" id="main" class="container_12 clearfix">

        <!-- The blue toolbar stripe -->
        <section class="toolbar">
            <div class="user">
                <div class="avatar">
                    <img src="img/layout/content/toolbar/user/avatar.png">
<!--                     <span>1</span> -->
                </div>
                <span><?php echo $userData['vFname'].' '.$userData['vLname'];?></span>
                <ul>
                    <li><a href="javascript:$$.settings();">Kundendaten</a></li>
                    <li class="line"></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </div>
            
        </section><!-- End of .toolbar-->

        <!-- The sidebar -->
        <?php if($userData['vUserType']==1){ ?>
        <aside>
            <div class="top">

                
    <!-- Navigation -->
                    <nav><ul class="collapsible accordion">

                        <li class="current"><a href="ccp.php"><img src="img/icons/packs/fugue/16x16/dashboard.png" alt="" height=16 width=16>Übersicht</a></li>

                        <li>
                            <a href="javascript:void(0);"><img src="img/icons/packs/fugue/16x16/users.png" alt="" height=16 width=16>Kunden<span class="badge">25</span></a>
                            <ul>
                                <li><a href="kunden.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/user-share.png" alt="" height=16 width=16></span>Kundenübersicht</a></li>
                                <li><a href="neuerkunde.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/user--plus.png" alt="" height=16 width=16></span>Neuer Kunde</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);"><img src="img/icons/packs/fugue/16x16/document-invoice.png" alt="" height=16 width=16>Rechnungen<span class="badge">46</span></a>
                            <ul>
                                <li><a href="rechnungen.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/document-search-result.png" alt="" height=16 width=16></span>Alle Rechnungen</a></li>
                                <li><a href="neuerechnung.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/document--plus.png" alt="" height=16 width=16></span>Neue Rechnung</a></li>
                            </ul>
                        </li>
						
                        <li>
                            <a href="javascript:void(0);"><img src="img/icons/packs/fugue/16x16/calculator.png" alt="" height=16 width=16>Angebote<span class="badge">15</span></a>
                            <ul>
                                <li><a href="angebote.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/calculator--pencil.png" alt="" height=16 width=16></span>Alle Angebote</a></li>
                                <li><a href="neuesangebot.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/calculator--plus.png" alt="" height=16 width=16></span>Neues Angebot</a></li>
                            </ul>
                        </li>						

                        <li>
                            <a href="javascript:void(0);"><img src="img/icons/packs/fugue/16x16/gear.png" alt="" height=16 width=16>Einstellungen</span></a>
                            <ul>
                                <li><a href="formate.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/table-draw.png" alt="" height=16 width=16></span>Formate</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);"><img src="img/icons/packs/fugue/16x16/blue-document-office-text.png" alt="" height=16 width=16>Vorlagen</a>
                            <ul>
								<li><a href="rechnungsvorlagen.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/blue-document-pdf-text.png" alt="" height=16 width=16></span>Rechnungsvorlage</a></li>
								<li><a href="angebotsvorlagen.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/blue-document-excel-table.png" alt="" height=16 width=16></span>Angebotsvorlage</a></li>
								<li><a href="emailvorlagen.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/mail-send-receive.png" alt="" height=16 width=16></span>E-Mail Vorlagen</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);"><img src="img/icons/packs/fugue/16x16/question.png" alt="" height=16 width=16>Ticketsystem</a>
                            <ul>
                                <li><a href="alletickets.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/mails-stack.png" alt="" height=16 width=16></span>Alle Tickets</a></li>
                                <li><a href="neuesticket.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/mail--plus.png" alt="" height=16 width=16></span>Neues Ticket</a></li>
                                <li><a href="offenetickets.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/mail-open.png" alt="" height=16 width=16></span>Offene Tickets</a></li>
                                <li><a href="geschlossenetickets.php"><span class="icon"><img src="img/icons/packs/fugue/16x16/mail.png" alt="" height=16 width=16></span>Geschlossene Tickets</a></li>
                            </ul>
                        </li>

                    </ul></nav><!-- End of nav -->

            </div><!-- End of .top -->

             <div class="bottom sticky">
                <div class="divider"></div>
                <div class="buttons">
                    <a href="/neuerkunde.php" class="button grey">Neuer Kunde</a>
                    <a href="/neuerechnung.php" class="button grey">Neue Rechnung</a>
                    <a href="/neuesangebot.php" class="button grey">Neues Angebot</a>
                    <a href="/neuesticket.php" class="button grey">Neues Ticket</a>
                </div>
                <div class="divider"></div>				
                <div class="progress">
                    <div class="bar" data-title="Space" data-value="1285" data-max="5120" data-format="0,0 MB"></div>
                    <div class="bar" data-title="Traffic" data-value="8.61" data-max="14" data-format="0.00 GB"></div>
                    <div class="bar" data-title="Budget" data-value="20000" data-max="20000" data-format="$0,0"></div>
                </div>				
            </div><!-- End of .bottom -->

        </aside><!-- End of sidebar -->
<?php } ?>
        <!-- Here goes the content. -->
        <section id="content" class="container_12 clearfix" data-sort=true>
<!-- 			<ul class="stats not-on-phone">
				<li>
					<strong>61263</strong>
					<small>Total Visits</small>
					<span class=green>+26%</span>
				</li>
				<li>
					<strong>23</strong>
					<small>Orders</small>
					<span class=green>+16%</span>
				</li>
				<li>
					<strong>$2165.57</strong>
					<small>Total Volume</small>
					<span class=red>-8%</span>
				</li>
				<li>
					<strong>0</strong>
					<small>Overdue Tickets</small>
					<span>0%</span>
				</li>
				<li>
					<strong>7</strong>
					<small>Reported Bugs</small>
					<span class=red>+17%</span>
				</li>
			</ul> <!-- End of ul.stats -->


			
			
			
			
			
	
			
        </section><!-- End of #content -->

    </div><!-- End of #main -->

    <!-- The footer -->
    <footer class="container_12">
        <ul class="grid_6">
            <li><a href="#">Kontakt</a></li>
            <li><a href="#">Impressum</a></li>
            <li><a href="#">Datenschutz</a></li>
        </ul>

        <span class="grid_6">
            Copyright &copy; 2015 Smooth Arrangement
        </span>
    </footer><!-- End of footer -->

    <!-- Spawn $$.loaded -->
    <script>
        $$.loaded();
          <?php
               if(isset($_SESSION['id']) && $_SESSION['id'] != "" && !isset($_SESSION['uid']) && $_SESSION['uid'] == ""){
          ?>
                    $$.ready(function() {
                         setTimeout(function(){
                              $('#btn-lock').trigger('click');
                         },2000);
                    });
          <?php
               }
          ?>
    </script>

    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 7 ]>
    <script defer src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->

</body>
</html>
