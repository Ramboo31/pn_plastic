<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>  
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title> ลบข้อมูลพนักงาน </title>  
</head>

<body>
	<?php
	include("connect/connect.php");
	$find_Cus_ID = $_REQUEST['Cus_ID'];
	$sql = " SELECT * " ;
	$sql = $sql." FROM customer where Cus_ID = \"".$find_Cus_ID."\" "  ;
	$record=mysql_query($sql) or die(mysql_error());
	$data = mysql_fetch_assoc($record) ;



	$sql = "Delete FROM customer " ;
	$sql = $sql."  where Cus_ID = "." \"".$Cus_ID."\" ;  " ; 

	echo  " <BR> ".$sql." <BR> " ;

	$result = mysql_query($sql); 
	if($result)
		{  echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');window.location='manage_Customer.php';</script>";   }
	else
		{  echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');history.back();</script>";   }
	?>
</body>
</html>