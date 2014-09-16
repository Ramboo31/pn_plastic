<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title> แก้ไขข้อมูลพนักงาน </title>  
</head>

<body>
<?php 
include("connect/connect.php");
$Cus_ID=$_REQUEST['txt_Cus_id'];
$Cus_name=$_REQUEST['txt_Cus_name'];
$Cus_lname=$_REQUEST['txt_Cus_lname'];
$Cus_Tel=$_REQUEST['txt_Cus_Tel'];
$Cus_Add=$_REQUEST['txt_Cus_Add'];

$sql = "update  customer set " ;
$sql = $sql." Cus_Name  = "." \"".$Cus_name."\"  , " ;
$sql = $sql." Cus_lname  = "." \"".$Cus_lname."\"  , " ; 
$sql = $sql." Cus_Tel  = "." \"".$Cus_Tel."\"  , " ; 
$sql = $sql." Cus_Add  = "."\"".$Cus_Add."\"   " ; 
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