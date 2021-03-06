<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include('include/connection.php');
include("include/language.php");

//if ((!isset($_SESSION['uid']) && $_SESSION['uid'] == "") && (!isset($_SESSION['id']) && $_SESSION['id'] == "" && !isset($_SESSION['uid']) && $_SESSION['uid'] == "")) {
 //    header("location:index.php");
//}

$id = $_GET['id'];

$sql = "SELECT * FROM invoice_mst where `iId` = '".$id."' ";
$invoice = mysql_query($sql);
$row = mysql_fetch_assoc($invoice);
$html = '<html>
<head>
   <meta charset="utf-8">
<title>Rechnungsvorlage Smooth Arrangement</title>
<link rel="stylesheet" href="style.css" media="all">
<style type="text/css">
@font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
}
@page { margin-top: 0px; }
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #0087C3;
  text-decoration: none;
}

body {
  position: relative;
  width: 20cm;  
  height: 26.4cm; 
  margin: 0px; 
  color: #555555;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  font-family: SourceSansPro;
}

header {
  
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 120px;
}

#company {
  float: right;
  text-align: right;
}


#details {
  margin-bottom: 30px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #73BE0A;
  float: left;
 margin-left:35px;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  float: right;
  text-align: right;
}

#invoice h1 {
  color: #0087C3;
  font-size: 1.7em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.1em;
  color: #777777;
}

table.applyCss {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 10px;
}

table.applyFooterCss {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
}

 table.applyCss th,
 table.applyCss td {
  padding: 5px;
  background: #EEEEEE;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

 table.applyCss th {
  white-space: nowrap;        
  font-weight: normal;
}

 table.applyCss td {
  text-align: right;
}

 table.applyCss td h3{
  color: #57B223;
  font-size: 1.2em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

 table.applyCss .no {
  color: #FFFFFF;
  font-size: 1.6em;
  background: #57B223;
}

 table.applyCss .desc {
  text-align: left;
}

 table.applyCss .unit {
  background: #DDDDDD;
}

 table.applyCss .qty {
}

 table.applyCss .total {
  background: #57B223;
  color: #FFFFFF;
}

 table.applyCss td.unit,
 table.applyCss td.qty,
 table.applyCss td.total {
  font-size: 1.2em;
}

 table.applyCss tbody tr:last-child td {
  border: none;
}

 table.applyCss tfoot td {
  padding: 5px 5px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1em;
  white-space: nowrap; 
  border-top: 1px solid #AAAAAA; 
}

 table.applyCss tfoot tr:first-child td {
  border-top: none; 
}

 table.applyCss tfoot tr:last-child td {
  color: #57B223;
  font-size: 1.4em;
  border-top: 1px solid #57B223; 

}

 table.applyCss tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 1.2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #73BE0A;
  position:absolute;
  bottom:150px;  
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 50px;
  position: absolute;
  bottom: 50;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}

footer table td {
background-color:white;
}

.bank td {
padding:0;
}

.left {
float:left;
margin-left:10px;
}
</style>	
  </head>
  <body>
    <header class="clearfix">
<table width="100%">
        <tbody><tr>
          <td width="50%">
      <div id="logo">
        <img src="./img/SmoothArrangement.png">
      </div>
</td>
        <td>
      <div id="company">
        <h2 class="name">Smooth Arrangement<br><small>Cordula Wulfert</small></h2>
        <div>Zum Jägerplatz 93</div>
        <div>32549 Bad Oeynhausen</div>
		<div>&nbsp;</div>
        <div><a href="http://smootharrangement.de">http://smootharrangement.de</a></div>
        <div><a href="mailto:info@smootharrangement.de">info@smootharrangement.de</a></div>
      </div>
      </td>
     </tr>
     </tbody></table>
    </header>
    <main>
      <div id="details" class="clearfix">
        <table width="100%">
          <tr>
            <td colspan="2">
                <div style="margin-left:35px;">
                  <p style="font-size:12px;">
                    <u>Smooth Arrangement · Zum Jägerplatz 93 · 32549 Bad Oeynhausen</u>
                  </p>
                </div>
            </td>
          </tr>

          <tr>
            <td width="50%">
              <div id="client">
                <div class="to">Rechnung an:</div>
                <h2 class="name">Max Mustermann</h2>
                <div class="address">Musterstr. 1</div>
                <div class="address">123451 Musterstadt<br>Deutschland</div>
                <div> &nbsp; </div>
                <div class="email">
                  <a href="mailto:info@smootharrangement.de">info@smootharrangement.de</a>
                </div>
              </div>
            </td>
            <td>
              <div id="invoice">
                <h1>Rechnung Nr.: SMA-R4980-1</h1>
                <div class="date">Rechnungsdatum: 11.07.2015</div>
                <div>&nbsp; </div>
                <div class="date">Zahlungsziel: 5 Werktage ohne Abzug<br></div>
                <div class="date">Zahlungsart: Barverkauf</div>
              </div>
            </td>
          </tr>
          </table>        
      </div>
      

         <table class="applyCss" border="0" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">Beschreibung</th>
            <th class="unit">Einzelpreis</th>
            <th class="qty">Stückzahl</th>
            <th class="total">Gesamt</th>
          </tr>
        </thead>
        <tbody>                <tr>
            <td class="no">1</td>
            <td class="desc">Artikel Nummer 1</td>
            <td class="unit">5,99€</td>
            <td class="qty">1</td>
            <td class="total">5,99€</td>
          </tr>                      
          <tr>
            <td class="no">2</td>
            <td class="desc">Artikel Nummer 2</td>
            <td class="unit">9,95€</td>
            <td class="qty">1</td>
            <td class="total">9,95€</td>
          </tr> 
           <tr>
            <td class="no">3</td>
            <td class="desc">Artikel Nummer 2</td>
            <td class="unit">9,95€</td>
            <td class="qty">1</td>
            <td class="total">9,95€</td>
          </tr>
           <tr>
            <td class="no">4</td>
            <td class="desc">Artikel Nummer 2</td>
            <td class="unit">9,95€</td>
            <td class="qty">1</td>
            <td class="total">9,95€</td>
          </tr>
           <tr>
            <td class="no">5</td>
            <td class="desc">Artikel Nummer 2</td>
            <td class="unit">9,95€</td>
            <td class="qty">1</td>
            <td class="total">9,95€</td>
          </tr>
           <tr>
            <td class="no">6</td>
            <td class="desc">Artikel Nummer 2</td>
            <td class="unit">9,95€</td>
            <td class="qty">1</td>
            <td class="total">9,95€</td>
          </tr>
           <tr>
            <td class="no">7</td>
            <td class="desc">Artikel Nummer 2</td>
            <td class="unit">9,95€</td>
            <td class="qty">1</td>
            <td class="total">9,95€</td>
          </tr>
                </tbody>
        <tfoot>
          <tr>
            <td colspan="2"><br></td>
            <td colspan="2">Zwischensumme</td>
            <td>15,94€</td>
          </tr>
          <tr>
            <td colspan="2"><br></td>
            <td colspan="2">Versandkosten</td>
            <td>0,00€</td>
          </tr>
          <tr>
            <td colspan="2"><br></td>
            <td colspan="2">Gesamtsumme</td>
            <td>15,94€</td>
          </tr>
        </tfoot>
      </table>
          <div id="thanks">Vielen Dank für Ihren Auftrag. Wir sind gem. § 19 Abs. 1 UStG. nicht Umsatzsteuerpflichtig</div>
	        <div id="notices">
        <div>Bemerkung:</div>
        <div class="notice">Test</div>
      </div>

    </main>
     <footer>

      <table class="applyFooterCss" >
	  <tbody><tr>
	  <td style="text-align:left;">Smooth Arrangement | Cordula Wulfert<br>Zum Jägerplatz 93<br>32549 Bad Oeynhausen<br><br>Tel.:+49 (0) 5734 - 51993 - 20<br>Fax:+49 (0) 5734 - 51993 - 19</td>
	  <td style="width:150px;">&nbsp;</td>
	  <td><table style="left: 393px; width: 358px;" class="bank">
	  <tbody><tr>
<td><b>Kontoinhaber</b></td><td>:</td><td class="left">Cordula Wulfert</td>
</tr>
<tr>
<td><b>IBAN</b></td><td>:</td><td class="left">DE60 4905 1285 0000 8874 89</td>
</tr>
<tr>
<td><b>BIC</b></td><td>:</td><td class="left">WELADED1OEH</td>
</tr>
<tr>
<td><b>Institut</b></td><td>:</td><td class="left">Sparkasse Bad Oeynhausen</td>
</tr>
<tr>
<td><b>Verwendungszweck</b></td><td>:</td><td class="left">SMA-R4980-1</td>
</tr>
</tbody></table></td>
	  </tr>
	  </tbody></table>
	  <p>Seite {page} von {pagetotal}</p>
    </footer>
</body>
</html>  ';
//echo $html;die;
//echo $row['invoicehtml'];
require "dompdf/dompdf_config.inc.php";
$dompdf = new DOMPDF();
$dompdf->load_html($html);  //$row['invoicehtml']
$dompdf->render();
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));