<?php
include('include/connection.php');
include("include/language.php");

if ((!isset($_SESSION['uid']) && $_SESSION['uid'] == "") && (!isset($_SESSION['id']) && $_SESSION['id'] == "" && !isset($_SESSION['uid']) && $_SESSION['uid'] == "")) {
     header("location:index.php");
}

$id = $_GET['id'];

$sql = "SELECT * FROM invoice_mst where `iId` = '".$id."' ";
$invoice = mysql_query($sql);
$row = mysql_fetch_assoc($invoice);

$customer_id = $row['iCustomerId'];
$invoice_date = $row['dInvoiceDate'];
$payment_term = $row['iTermOfPayment'];
$payment_type = $row['iPayment'];
$shipping = $row['vShipping'];
$tax_id = $row['iTex'];
$comment = $row['tComment'];
$addedby = $row['iAddedBy'];
$date = $row['dAddedDate'];

$comment.= " Gutschrift zu Rechnung Nr.: ".$row['vInvoiceNumber'];

////////////////////////////

	$sql = "SELECT * FROM number_range WHERE iId = '3'";
	$number_range = mysql_query($sql);
	$row = mysql_fetch_assoc($number_range);
	$prefix = $row['vPrefix'];
	$sufix = $row['vSufix'];
	
	$sql = "SELECT * FROM invoice_mst ORDER BY iId DESC LIMIT 1";
	$invoice = mysql_query($sql);
	$row = mysql_fetch_assoc($invoice);
	$nextid = $row['iId'] + 1;
	$invoice_number = $prefix.$nextid.$sufix;
	
	$invoice_add = "INSERT INTO invoice_mst (`iId`, `iCustomerId`, `vInvoiceNumber`, `dInvoiceDate`, `iTermOfPayment`, `iPayment`, `vShipping`, `iTex`, `tComment`, `iAddedBy`, `dAddedDate`) VALUES ('".$nextid."', '".$customer_id."', '".$invoice_number."', '".$invoice_date."', '".$payment_term."', '".$payment_type."', '".$shipping."', '".$tax_id."', '".$comment."', '".$addedby."', '".$date."')";
	 mysql_query($invoice_add);
	///////////////////////
	$invoice_rs = mysql_query("SELECT * FROM `invoice_template` WHERE `templatename`='Rechnungsvorlage' ");
	$invoice_row = mysql_fetch_assoc($invoice_rs);
	$tem_html = $invoice_row['html'];
	$tem_dynamic = $invoice_row['dynamic'];
		  
		  ////////////////////////////////////////////////////////
		  $invoice_dynamic_text = '';
		  $body='';
		  $sub_tot = 0;

$sql = "SELECT * FROM invoice_items where `iInvoiceId` = '".$id."' ";
$invoice = mysql_query($sql);
while($row = mysql_fetch_assoc($invoice))
{ 
 $key = $row['iItemOrder'];
 $qty = $row['vQTY'];
 $description = $row['tDescription'];
 $price = ($row['vPrice'])*(-1);
 $addedby = $row['iAddedBy'];
 $date = $row['dAddedDate'];
 
  $item_sql = "INSERT INTO invoice_items (`iInvoiceId`, `iItemOrder`, `vQTY`, `tDescription`, `vPrice`, `iAddedBy`, `dAddedDate`) VALUES ('".$nextid."', '".$key."', '".$qty."', '".$description."', '".$price."', '".$addedby."', '".$date."')";

 mysql_query($item_sql);

$price_total =  $price*$qty;
 		   
$price_temp = str_replace('.', ',', $price);
$price_temp = number_format($price_temp, 2, ',', ' ');

$p_total = str_replace('.', ',', $price_total);
$p_total = number_format($p_total, 2, ',', ' ');

$body = str_replace(array(
	'{position}',
	'{description}',
	'{unitprice}', 
	'{qty}',
	'{total}'), array(
	$key,
	$description,
	$price_temp,
	$qty,
	$p_total), $tem_dynamic);
	
	$invoice_dynamic_text.= $body;
	$sub_tot += $price_total;  
}




$user_rs = mysql_query("SELECT * FROM user_mst WHERE iId='".$customer_id."' ");
          $user_row = mysql_fetch_assoc($user_rs);
			
			$firstname = $user_row['vFname'];
			$surname = $user_row['vLname'];
			$street = $user_row['vRoad'];
			$nr = $user_row['vHouseNumber'];
			$zipcode = $user_row['vZip'];
			$city = $user_row['vPlace'];
			$country = $user_row['vCountry'];
			$useremail = $user_row['vEmail'];

$invoice_rs = mysql_query("SELECT * FROM `payment_term_mst` WHERE `iId` = '".$payment_term."' ");
$invoice_row = mysql_fetch_assoc($invoice_rs);
$payment_term_html = $invoice_row['vName'];


$invoice_rs = mysql_query("SELECT * FROM `payment_mst` WHERE `iId` =  '".$payment_type."' ");
$invoice_row = mysql_fetch_assoc($invoice_rs);
$payment_type_html = $invoice_row['vPayment'];

$invoice_rs = mysql_query("SELECT * FROM `country_mst` WHERE `iId` = '".$country."' ");
$invoice_row = mysql_fetch_assoc($invoice_rs);
$country_html = $invoice_row['vCountry'];


$shipping_temp = str_replace('.', ',', $shipping);
$grand_total = $sub_tot+$shipping;

$sub_tot = str_replace('.', ',', $sub_tot);
$sub_tot = number_format($sub_tot, 2, ',', ' ');

$grand_total = str_replace('.', ',', $grand_total);
$grand_total = number_format($grand_total, 2, ',', ' ');

$invoice_date_temp = substr($invoice_date,0,11);
$invoice_date = explode("-", $invoice_date_temp);
$invoice_date_temp = $invoice_date[2].".".$invoice_date[1].".".$invoice_date[0];


$invoicehtml = str_replace(array(
	'{firstname}',
	'{surname}',
	'{street}', 
	'{nr}',
	'{zipcode}',
	'{city}',
	'{country}',
	'{useremail}',
	'{invoicenumber}',
	'{invoicedate}',
	'{paymentterms}',
	'{paymentgateway}',
	'{dynamicarea}',
	'{subtotal}',
	'{shiping}',
	'{grandtotal}',
	'{notice}'), array(
	  $firstname,
	  $surname,
	  $street,
	  $nr,
	  $zipcode,
	  $city,
	  $country_html,
	  $useremail,
	  $invoice_number,
	  $invoice_date_temp,
	  $payment_term_html,
	  $payment_type_html,
	  $invoice_dynamic_text,
	  $sub_tot,
	  $shipping_temp,
	  $grand_total,
	  $comment), $tem_html);
	  
	  mysql_query("update `invoice_mst` set `invoicehtml` = '".$invoicehtml."'  WHERE `iId` = '".$nextid."' ");
		  
     header('location:rechnungen.php');