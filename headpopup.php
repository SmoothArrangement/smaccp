<?php
if (isset($_REQUEST['reply_ticket']) && $_REQUEST['reply_ticket'] != "") {
    $tid = $_REQUEST['tid'];
    $ans = $_REQUEST['antwort'];
    $status = $_REQUEST['status'];
    if ($ans != "") {
        $file = "";
        if (isset($_FILES["f6_file"]["name"]) && $_FILES["f6_file"]["name"] != "") {
            $datep = new DateTime();
            $file = $datep->getTimestamp();
            $arr = explode(".", $_FILES["f6_file"]["name"]);
            $file = $file . "_" . $arr[0] . "." . end($arr);
            move_uploaded_file($_FILES["f6_file"]["tmp_name"], "tickuploadfile/" . $file);
        }
        $date = date("Y-m-d H:i:s");
        $tinfo = "SELECT * FROM ticket_mst WHERE iId='" . $tid . "'";
        $tinforesult = mysql_query($tinfo);
        $tinforow = mysql_fetch_assoc($tinforesult);
        $to = $tinforow['iReceiverId'];
        $subject = $tinforow['vSubject'];
        $description = $_REQUEST['anliegen'];
        $description = $_SESSION['uname'] . " schrieb am " . date("d.m.Y") . " um " . date("H:i") . " Uhr : " . $ans . "<hr>" . $description;
        $description = str_replace("_____________________________________________________________", "<hr>", $description);
        $etickstatus = $tinforow['vStatus'];

        if ($to == $_SESSION['uid']) {
            $to = $tinforow['iSenderId'];
        }
        $ruser = "SELECT * FROM user_mst WHERE iId='" . $to . "'";
        $rresult = mysql_query($ruser);
        $rrow = mysql_fetch_assoc($rresult);
        $email = $rrow['vEmail'];
        $fname = $rrow['vFname'];
        $lname = $rrow['vLname'];
        $_SESSION['sucess'] = "Deine Antwort wurde erfolgreich an " . $fname . " " . $lname . " gesendet";

        if ($status != $etickstatus) {
            $seltamplate = "SELECT * FROM email_template WHERE iId='4'";
            $temresult = mysql_query($seltamplate);
            $template = mysql_fetch_assoc($temresult);
            $msg = $template['tMessage'];
            $msg = str_replace("{benutzername}", $fname . " " . $lname, $msg);
            $msg = str_replace("{absender}", $_SESSION['uname'], $msg);
            $msg = str_replace("{tickettext}", $description, $msg);
            if ($etickstatus == "Open") {
                $_SESSION['sucess'] = "Das Ticket wurde geschlossen";
                $msg = str_replace("{ticketstatus}", "Close", $msg);
            } else {
                $msg = str_replace("{ticketstatus}", "Open", $msg);
            }
            $msg = str_replace("{zeitstempel}", date('d.m.Y H.i.s'), $msg);
            $msg = str_replace("{ticketlogin}", '<a href="http://ccp.smootharrangement.de/">http://ccp.smootharrangement.de</a>', $msg);
            $html = '<html lang="en" dir="ltr" style="border: 0 none;font: inherit;margin: 0;padding: 0;vertical-align: baseline;">
                                 <head>
                                      <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
                                      <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
                                      <meta content="width=device-width" name="viewport">
                                      
                                 </head>
                                 <body style="background: #FFFFFF;color: #333333;font-family: Helvetica,Arial,sans-serif;font-size: 14px;line-height: 1.5em;margin: 0;padding: 40px 0;">
                                        ' . $msg . '    
                                 </body>
                            </html>';
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            // Additional headers

            $headers .= 'From: '.$template['vname'].' <' . $template['vSender'] . '>' . "\r\n";

            $sub = $template['vSubject'];
            $sub = str_replace("{absender}", $_SESSION['uname'], $sub);
            $sub = str_replace("{ticketbeschreibung}", $subject, $sub);
            
            $sub = str_replace("{zeitstempel}", date('d.m.Y').' um '.date('H.i').' Uhr ', $sub);
            mail($email, $sub, $html, $headers);
        }
        $status = mysql_real_escape_string($status);
        $date = mysql_real_escape_string($date);
        $tid = mysql_real_escape_string($tid);
        $tickupdate = "UPDATE ticket_mst SET vStatus='" . $status . "',dEditDate='" . $date . "' WHERE iId='" . $tid . "'";
        mysql_query($tickupdate);
        $ans = mysql_real_escape_string($ans);
        $file = mysql_real_escape_string($file);
        $insquery = "INSERT INTO tick_ans (iTickId,vAnswer,iUserId,vFile) VALUES ('" . $tid . "','" . $ans . "','" . $_SESSION['uid'] . "','" . $file . "')";
        mysql_query($insquery);

        $seltamplate = "SELECT * FROM email_template WHERE iId='3'";
        $temresult = mysql_query($seltamplate);
        $template = mysql_fetch_assoc($temresult);
        $msg = $template['tMessage'];
        $msg = str_replace("{benutzername}", $fname . " " . $lname, $msg);
        $msg = str_replace("{absender}", $_SESSION['uname'], $msg);
        $msg = str_replace("{tickettext}", $description, $msg);
        $msg = str_replace("{zeitstempel}", date('d.m.Y H.i.s'), $msg);
        $msg = str_replace("{ticketlogin}", '<a href="http://ccp.smootharrangement.de/">http://ccp.smootharrangement.de</a>', $msg);
        $html = '<html lang="en" dir="ltr" style="border: 0 none;font: inherit;margin: 0;padding: 0;vertical-align: baseline;">
                             <head>
                                  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
                                  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
                                  <meta content="width=device-width" name="viewport">
                                  
                             </head>
                             <body style="background: #FFFFFF;color: #333333;font-family: Helvetica,Arial,sans-serif;font-size: 14px;line-height: 1.5em;margin: 0;padding: 40px 0;">
                                    ' . $msg . '    
                             </body>
                        </html>';
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        // Additional headers

        $headers .= 'From: '.$template['vname'].' <' . $template['vSender'] . '>' . "\r\n";

        $sub = $template['vSubject'];
        $sub = str_replace("{absender}", $_SESSION['uname'], $sub);
        $sub = str_replace("{ticketbeschreibung}", $subject, $sub);
        $sub = str_replace("{zeitstempel}", date('d.m.Y').' um '.date('H.i').' Uhr ', $sub);
        mail($email, $sub, $html, $headers);
    }
    echo "<script type='text/javascript'>window.top.location='alletickets.php';</script>";
}
?>
<div class="content mail">
     <ul>

         <?php
         $select = "SELECT tm.*,um1.vFname as sendfname,um1.vLname as sendlname,um2.vFname as recfname,um2.vLname as reclname,um1.vImage as sendimg,um2.vImage as recvimg,um1.iId as sendid,um2.iId as recvid FROM ticket_mst tm
                        LEFT JOIN user_mst um1 ON tm.iSenderId=um1.iId
                        LEFT JOIN user_mst um2 ON tm.iReceiverId=um2.iId WHERE (tm.iReceiverId='" . $_SESSION['uid'] . "' OR tm.iSenderId='" . $_SESSION['uid'] . "') AND tm.vStatus = 'Open' ORDER BY tCreateDate DESC";
         $result = mysql_query($select);
         while($row = mysql_fetch_assoc($result)){
              $description = "";
              $selectthread = "SELECT * FROM tick_ans ta LEFT JOIN user_mst um ON um.iId=ta.iUserId WHERE ta.iTickId='" . $row['iId'] . "' ORDER BY ta.tCreateOn DESC";
              $threadresult = mysql_query($selectthread);
              while ($threadrow = mysql_fetch_assoc($threadresult)) {
                  $description .= $threadrow['vFname'] . " " . $threadrow['vLname'] . " schrieb am " . date("d.m.Y", strtotime($threadrow['tCreateOn'])) . " um " . date("H:i", strtotime($threadrow['tCreateOn'])) . " Uhr :&#13;&#10;&#13;&#10;";
                  $description .= $threadrow['vAnswer'];
                  $description .= "&#13;&#10;_________________________________________&#13;&#10;&#13;&#10;";
              }
              $description .= $row['sendfname'] . " " . $row['sendlname'] . " schrieb am " . date("d.m.Y", strtotime($row['tCreateDate'])) . " um " . date("H:i", strtotime($row['tCreateDate'])) . " Uhr:&#13;&#10;&#13;&#10;";
              $description .= $row['tMatterConcern'];
              $priority = "Undefine";
              if ($row['vPriority'] == "Low") {
                  $priority = "Niedrig";
              } else if ($row['vPriority'] == "Normal") {
                  $priority = "Normal";
              } else if ($row['vPriority'] == "High") {
                  $priority = "Hoch";
              } else if ($row['vPriority'] == "Emeregncy") {
                  $priority = "Notfall";
              }
              ?>
                 <li>
                     <div class="avatar">
                         <?php
                              if($_SESSION['uid'] == $row['sendid']){
                          ?>
                                   <img src="img/elements/profile/<?=$row['recvimg']?>" height=40 width=40/>
                          <?php
                              } else {
                          ?>
                                   <img src="img/elements/profile/<?=$row['sendimg']?>" height=40 width=40/>
                          <?php         
                              }
                          ?>
                     </div>
                     <div class="info">
                          <?php
                              if($_SESSION['uid'] == $row['sendid']){
                          ?>
                                   <strong><?= $row['recfname'] . " " . $row['reclname'] ?></strong>
                          <?php
                              } else {
                          ?>
                                   <strong><?= $row['sendfname'] . " " . $row['sendlname'] ?></strong>
                          <?php         
                              }
                          ?>
                         
                         <span><?= $priority ?></span>
                         <small><?= date("d.m.Y", strtotime($row['dEditDate'])).' um '.date("H:i", strtotime($row['dEditDate'])).' Uhr' ?></small>
                     </div>
                     <div class="text">
                         <p><?= $description ?></p>
                         <div class="actions">
                             <a href="javascript:void(0);" class="left open-message-dialog treply" id="<?= $row['iId'] ?>">Antworten</a>
                         </div>
                     </div>
                 </li>
         <?php
         }
         ?>
     </ul>
 </div>