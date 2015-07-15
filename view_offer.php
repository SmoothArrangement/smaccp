<?php
include('include/connection.php');
include("include/language.php");

if ((!isset($_SESSION['uid']) && $_SESSION['uid'] == "") && (!isset($_SESSION['id']) && $_SESSION['id'] == "" && !isset($_SESSION['uid']) && $_SESSION['uid'] == "")) {
     header("location:index.php");
}

$id = $_GET['id'];

$sql = "SELECT * FROM offer_mst where `iId` = '".$id."' ";
$invoice = mysql_query($sql);
$row = mysql_fetch_assoc($invoice);

echo $row['invoicehtml'];