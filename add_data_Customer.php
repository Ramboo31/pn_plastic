<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title> เพิ่มข้อมูล </title>  
</head>

<body>
<?php 
include("connect/connect.php");

$Cus_Name=$_REQUEST['Cus_name'];
$Cus_lname=$_REQUEST['Cus_lname'];
$Cus_Tel=$_REQUEST['Cus_Tel'];
$Cus_Add=$_REQUEST['Cus_Add'];

			$prefix = 'C';
			$sq0="SELECT RIGHT(Cus_ID, 3) AS Cus_ID from customer WHERE LEFT(Cus_ID, 2) = '$prefix' ORDER BY Cus_ID DESC LIMIT 1";
			$query = mysql_query($sq0) or exit( mysql_error() ); 
			$data=mysql_fetch_assoc($query);
			$last_id = $data['Cus_ID'];
			if( $last_id ){
				$new_id = $prefix.(substr('00000000'.++$last_id, -4) );
			}else{
				$new_id = $prefix.'0001';
			}

$sql = "INSERT INTO customer " ;
$sql = $sql." (Cus_ID,Cus_Name,Cus_lname,Cus_Tel,Cus_Add) " ;
$sql = $sql."  VALUES  " ;
$sql = $sql." ( \"".$new_id."\", \"".$Cus_Name."\",\"".$Cus_lname."\" ,\"".$Cus_Tel."\" ,\"".$Cus_Add."\") ";
//echo  " <BR> ".$sql." <BR> " ;

$result = mysql_query($sql); 
 if($result)
 {   echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location='accept_data_Customer.php';</script>";   }
 else
 {  echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ');history.back();</script>";   }
?>
</body>
</html>