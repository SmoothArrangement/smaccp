<?php
include('include/connection.php');
include("include/language.php");

if ((!isset($_SESSION['uid']) && $_SESSION['uid'] == "") && (!isset($_SESSION['id']) && $_SESSION['id'] == "" && !isset($_SESSION['uid']) && $_SESSION['uid'] == "")) {
     header("location:index.php");
}

$id = $_GET['id'];

$sql = "DELETE FROM `offer_mst` where `iId` = '".$id."' ";
mysql_query($sql);

mysql_query("DELETE FROM offer_items where `iInvoiceId` = '".$id."' ");

header('location:angebote.php');