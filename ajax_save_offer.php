<?php
     include('include/connection.php');
     include("include/language.php");
     if ((!isset($_SESSION['uid']) && $_SESSION['uid'] == "")) {
          echo "Invalid Access"; exit;
     }
     if(!isset($_REQUEST['type']) || $_REQUEST['type'] == ''){
          echo "Invalid Access"; exit;
     }
     function rand_string($length) {
          $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
          return substr(str_shuffle($chars), 0, $length);
     }
     $type = mysql_real_escape_string($_REQUEST['type']);
     if( $type == 'save_nr' ){
          $uid = $_SESSION['uid'];
          $date = date('Y-m-d H:i:s');
          $prefix = mysql_real_escape_string($_REQUEST['prefix']);
          $sufix = mysql_real_escape_string($_REQUEST['sufix']);
          $nextnumber = mysql_real_escape_string($_REQUEST['nextnumber']);
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $update = "UPDATE number_range SET vPrefix='".$prefix."', vSufix='".$sufix."', vNextNumber='".$nextnumber."', iUpdatedBy='".$uid."', dUpdatedDate='".$date."' WHERE iId='".$id."'";
               mysql_query($update);
               echo "Nummernkreise updated"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'new_solution' ){
          $uid = $_SESSION['uid'];
          $date = date('Y-m-d H:i:s');
          $sql = "INSERT INTO salutation (vSalutation, iAddedBy, dAddedDate) VALUES ('', '".$uid."', '".$date."');";
          mysql_query($sql);
          $id = mysql_insert_id();
          echo $id; exit;
     } else if( $type == 'save_solution' ){
          $uid = $_SESSION['uid'];
          $date = date('Y-m-d H:i:s');
          $text = mysql_real_escape_string($_REQUEST['text']);
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $sql = "UPDATE salutation SET vSalutation='".$text."', iUpdatedBy='".$uid."', dUpdatedDate='".$date."' WHERE iId='".$id."'";
               mysql_query($sql);
               echo "Anrede updated"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'delete_solution' ){
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $sql = "DELETE FROM salutation WHERE iId='".$id."'";
               mysql_query($sql);
               echo "1"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'new_tax' ){
          $uid = $_SESSION['uid'];
          $date = date('Y-m-d H:i:s');
          $sql = "INSERT INTO tax_rate (vVat, iAddedBy, dAddedDate) VALUES ('', '".$uid."', '".$date."');";
          mysql_query($sql);
          $id = mysql_insert_id();
          echo $id; exit;
     } else if( $type == 'save_tax' ){
          $uid = $_SESSION['uid'];
          $date = date('Y-m-d H:i:s');
          $text = mysql_real_escape_string($_REQUEST['text']);
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $sql = "UPDATE tax_rate SET vVat='".$text."', iUpdatedBy='".$uid."', dUpdatedDate='".$date."' WHERE iId='".$id."'";
               mysql_query($sql);
               echo "Steuersätze updated"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'delete_tax' ){
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $sql = "DELETE FROM tax_rate WHERE iId='".$id."'";
               mysql_query($sql);
               echo "1"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'new_country' ){
          $uid = $_SESSION['uid'];
          $date = date('Y-m-d H:i:s');
          $sql = "INSERT INTO country_mst (vCountry, iAddedBy, dAddedDate) VALUES ('', '".$uid."', '".$date."');";
          mysql_query($sql);
          $id = mysql_insert_id();
          echo $id; exit;
     } else if( $type == 'save_country' ){
          $uid = $_SESSION['uid'];
          $date = date('Y-m-d H:i:s');
          $text = mysql_real_escape_string($_REQUEST['text']);
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $sql = "UPDATE country_mst SET vCountry='".$text."', iUpdatedBy='".$uid."', dUpdatedDate='".$date."' WHERE iId='".$id."'";
               mysql_query($sql);
               echo "Länder updated"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'delete_country' ){
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $sql = "DELETE FROM country_mst WHERE iId='".$id."'";
               mysql_query($sql);
               echo "1"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'new_payment' ){
          $uid = $_SESSION['uid'];
          $date = date('Y-m-d H:i:s');
          $sql = "INSERT INTO payment_mst (vPayment, iAddedBy, dAddedDate) VALUES ('', '".$uid."', '".$date."');";
          mysql_query($sql);
          $id = mysql_insert_id();
          echo $id; exit;
     } else if( $type == 'save_payment' ){
          $uid = $_SESSION['uid'];
          $date = date('Y-m-d H:i:s');
          $text = mysql_real_escape_string($_REQUEST['text']);
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $sql = "UPDATE payment_mst SET vPayment='".$text."', iUpdatedBy='".$uid."', dUpdatedDate='".$date."' WHERE iId='".$id."'";
               mysql_query($sql);
               echo "Zahlungsarten updated"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'delete_payment' ){
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $sql = "DELETE FROM payment_mst WHERE iId='".$id."'";
               mysql_query($sql);
               echo "1"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'new_payment_term' ){
          $uid = $_SESSION['uid'];
          $date = date('Y-m-d H:i:s');
          $sql = "INSERT INTO payment_term_mst (vName, vTerm, iAddedBy, dAddedDate) VALUES ('', '', '".$uid."', '".$date."');";
          mysql_query($sql);
          $id = mysql_insert_id();
          echo $id; exit;
     } else if( $type == 'save_payment_term' ){
          $uid = $_SESSION['uid'];
          $date = date('Y-m-d H:i:s');
          $text = mysql_real_escape_string($_REQUEST['text']);
          $day = mysql_real_escape_string($_REQUEST['day']);
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $sql = "UPDATE payment_term_mst SET vName='".$text."', vTerm='".$day."', iUpdatedBy='".$uid."', dUpdatedDate='".$date."' WHERE iId='".$id."'";
               mysql_query($sql);
               echo "Zahlungsbedingungen updated"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'delete_payment_term' ){
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $sql = "DELETE FROM payment_term_mst WHERE iId='".$id."'";
               mysql_query($sql);
               echo "1"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'dialog_normal_btn' ){
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $sql = "SELECT * FROM user_mst WHERE iId='".$id."'";
               $users = mysql_query($sql);
               $users = mysql_fetch_assoc($users);
               if(!empty($users)){
                    if($users['vStatus'] == 1){
                         $status = "Aktiv";
                    } else {
                         $status = "Gesperrt";
                    }
                    if($users['vSolution'] != ""){
                         $sql = "SELECT vSalutation FROM salutation WHERE iId='".$users['vSolution']."'";
                         $salutation = mysql_query($sql);
                         $salutation = mysql_fetch_assoc($salutation);
                         if(!empty($salutation)){
                              $vSolution = $salutation['vSalutation'];
                         } else {
                              $vSolution = "-";
                         }
                    } else {
                         $vSolution = "-";
                    }
                    if($users['vCountry'] != ""){
                         $sql = "SELECT vCountry FROM country_mst WHERE iId='".$users['vCountry']."'";
                         $country_mst = mysql_query($sql);
                         $country_mst = mysql_fetch_assoc($country_mst);
                         if(!empty($country_mst)){
                              $vCountry = $country_mst['vCountry'];
                         } else {
                              $vCountry = "-";
                         }
                    } else {
                         $vCountry = "-";
                    }
                    echo '<div class="grid_12 profile">
                              <div class="header">
                                   <div class="title">
                                        <h2>'.$users['vFname'].' '.$users['vLname'].'</h2>
                                        <h3>'.$users['vCustomerNumber'].'</h3>
                                   </div>
                                   <div class="avatar">
                                        <img src="img/elements/profile/'.$users['vImage'].'" />
                                        <a href="javascript:void(0);">Ändern</a>
                                   </div>
                                   <ul class="info">
                                        <li>&nbsp;</li>
                                   </ul><!-- End of ul.info -->
                              </div><!-- End of .header -->
                              <div class="details grid_12">
                                   <h2>Kunden Daten</h2>
                                   <a href="kundendaten.php?id='.base64_encode($users['iId']).'"><span class="icon icon-pencil"></span>Bearbeiten</a>
                                   <section>
                                        <table style="width:100%;" border="0">
                                             <tr>
                                                  <td>
                                                       <table style="width:230px;">
                                                            <tr>
                                                                 <th style="text-align: right">Anrede:</th>
                                                                 <td>'.$vSolution.'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">Vorname:</th><td>'.$users['vFname'].'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">Name:</th>
                                                                 <td>'.$users['vLname'].'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">Firma:</th>
                                                                 <td>'.$users['vCompany'].'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">UStId:</th>
                                                                 <td>'.$users['vUstid'].'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">Sepa:</th>
                                                                 <td>'.$users['vSepa'].'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">IBAN:</th>
                                                                 <td>'.$users['vIBan'].'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">BIC: </th>
                                                                 <td>'.$users['vBic'].'</td>
                                                            </tr>
                                                       </table>    
                                                  </td>
                                                  <td style="border-right:1px lightgrey dotted;">&nbsp;</td>
                                                  <td>
                                                       <table style="width:230px;">
                                                            <tr>
                                                                 <th style="text-align: right">Straße:</th>
                                                                 <td>'.$users['vRoad'].'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">PLZ / Ort: </th><td>'.$users['vZip'].' / '.$users['vPlace'].'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">Land:</th>
                                                                 <td>'.$vCountry.'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                       </table>    
                                                  </td>
                                                  <td style="border-right:1px lightgrey dotted;">&nbsp;</td>
                                                  <td>
                                                       <table style="width:230px;">
                                                            <tr>
                                                                 <th style="text-align: right">Telefon:</th>
                                                                 <td>'.$users['vPhone'].'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">Fax:</th><td>'.$users['vFax'].'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">E-Mail:</th>
                                                                 <td>'.$users['vEmail'].'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">Internet:</th>
                                                                 <td>'.$users['vInternet'].'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">&nbsp;</th>
                                                                 <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right">Status:</th>
                                                                 <td>'.$status.'</td>
                                                            </tr>
                                                            <tr>
                                                                 <th style="text-align: right; vertical-align: top;">Bemerkungen:</th>
                                                                 <td>'.$users['tDescription'].'</td>
                                                            </tr>
                                                       </table>    
                                                  </td>
                                             </tr>
                                        </table>
                                   </section>
                              </div><!-- End of .details -->
                              <!-- Example Profile Dialog -->							
                         </div>								
                         <div class="actions">
                              <div class="left">
                              </div>
                              <div class="right">
                                   <button class="close-dialog">OK</button>
                              </div>
                         </div>';
               } else {
                    echo 'No';
               }
          } else {
               echo 'No';
          }
     } else if( $type == 'delete_customer' ){
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $sql = "DELETE FROM user_mst WHERE iId='".$id."'";
               mysql_query($sql);
               echo "1"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'send_password' ){
          $id = mysql_real_escape_string($_REQUEST['id']);
          if($id != ""){
               $password = base64_encode(rand_string(6));
               $up_query = "UPDATE `user_mst` SET vPassword='".$password."' WHERE iId='".$id."';";
               mysql_query($up_query);
               
               $cust_sql = "SELECT * FROM `user_mst` WHERE iId='".$id."';";
               $cust_info = mysql_fetch_assoc(mysql_query($cust_sql));
               
               $seltamplate = "SELECT * FROM email_template WHERE iId='7'";
               $temresult = mysql_query($seltamplate);
               $template = mysql_fetch_assoc($temresult);
               
               $msg = $template['tMessage'];
               $msg = str_replace("{benutzername}",$cust_info['vFname']." ".$cust_info['vLname'], $msg);
               $msg = str_replace("{ticketlogin}",'<a href="http://ccp.smootharrangement.de/">Click here to login.</a>',$msg);
               $msg = str_replace("{benutzeremail}", $cust_info['vEmail'], $msg);      
               $msg = str_replace("{passwort}", base64_decode($cust_info['vPassword']), $msg);
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
                $sub = str_replace("{zeitstempel}", date('d.m.Y').' um '.date('H.i').' Uhr ', $sub);
                mail($cust_info['vEmail'], $sub, $html, $headers);
                
               echo 'Ein neues Passwort wurde an die E-Mail Adresse gesendet.';
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'ord_status' ){
          $status = mysql_real_escape_string($_REQUEST['status']);
          $inv_id = mysql_real_escape_string($_REQUEST['inv_id']);
          if($status != "" && $inv_id != ""){
               $sql = "UPDATE offer_mst SET iStatus='".$status."' WHERE iId='".$inv_id."';";
               mysql_query($sql);
               echo "Status Updated"; exit;
          } else {
               echo "Invalid Access"; exit;
          }
     } else if( $type == 'email_template'){
          $iID = $_REQUEST['iId'];
          $vSender = $_REQUEST['absender_email_tag'];
          $vname = $_REQUEST['absender_name_tag'];
          $vSubject = $_REQUEST['betreff_tag'];
          $copy = $_REQUEST['kopie_tag'];
          $tMessage = $_REQUEST['textfield_tag'];
          if (!isset($iID) || !isset($vSender) || !isset($vname) || !isset($vSubject) || !isset($copy) || !isset($tMessage)){
               echo "NO"; exit;
          }else{
               $sql = "UPDATE email_template SET vSender='".$vSender."',vname='".$vname."',vSubject='".$vSubject."',copy='".$copy."',tMessage='".$tMessage."' WHERE iId='".$iID."';";
               mysql_query($sql);
               echo "YES"; exit;
          }
     }else if( $type == 'invoice_template_v'){
          $html = $_REQUEST['html_tag'];
          $dynamic = $_REQUEST['dynamic_tag'];
          $css = $_REQUEST['css_tag'];
          if (!isset($html) || !isset($dynamic) || !isset($css)){
               echo "NO"; exit;
          }else{
               $sql = "UPDATE invoice_template SET html='".$html."',dynamic='".$dynamic."',css='".$css."' WHERE iId='1';";
               mysql_query($sql);
               echo "YES"; exit;
          }
     }
     else if( $type == 'invoice_template_a'){
          $html = $_REQUEST['html_tag'];
          $dynamic = $_REQUEST['dynamic_tag'];
          $css = $_REQUEST['css_tag'];
          if (!isset($html) || !isset($dynamic) || !isset($css)){
               echo "NO"; exit;
          }else{
               $sql = "UPDATE invoice_template SET html='".$html."',dynamic='".$dynamic."',css='".$css."' WHERE iId='2';";
               mysql_query($sql);
               echo "YES"; exit;
          }
     }else {
          echo "Invalid Access"; exit;
     }
?>