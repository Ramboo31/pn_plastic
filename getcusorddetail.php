<?php
	include("connect/connect.php"); 
	include("function.php"); 

	$find_CusOr_ID = (isset($_REQUEST['id'])?$_REQUEST['id']:"");
	if ($find_CusOr_ID != "")
	{
		$sql="SELECT CusOr_ID, Cus_Name, Cus_lname, CusOr_Date, Pro_Name, CusOr_amount, CusOr_Status ";
		$sql=$sql."FROM customer_order co ";
		$sql=$sql."LEFT JOIN product_in p ON ( co.Pro_ID = p.Pro_ID ) "; 
		$sql=$sql."LEFT JOIN customer c ON ( co.Cus_ID = c.Cus_ID ) ";
		$sql=$sql."where CusOr_ID= '$find_CusOr_ID' ";
		//echo $sql;
		$record=mysql_query($sql) or die(mysql_error());
		$data = mysql_fetch_assoc($record) ;

		$data['CusOr_Date'] = thai_date4(strtotime($data['CusOr_Date']));
		echo json_encode($data);

	}
	else
	{
		echo json_encode(array("error" => "No ID."));
	}