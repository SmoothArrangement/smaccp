<?php
	include('include/connection.php');
	if(isset($_POST['Deletecustomer']) && $_POST['Deletecustomer'] == "true"){
		$id = $_POST['Id'];
		$sql_cust = "delete from customer_mst where iId in($id)";
		echo $sql_cust;
		$sql_add = "delete from customer_address where iUserId in($id)";
		echo "<br>".$sql_add;
	}
?>