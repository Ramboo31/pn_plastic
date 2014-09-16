<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title> แก้ไขข้อมูลพนักงาน </title>  
</head>

<body>
<?php 
include("connect/connect.php");

$Pro_ID=$_REQUEST['Pro_ID'];
$Pro_name=$_REQUEST['Pro_name'];
$Pro_type=$_REQUEST['Pro_type'];
$Prot_ID=$_REQUEST['Prot_ID'];
$Pro_Price=$_REQUEST['Pro_Price'];

$sql = "update product_in set " ;
$sql = $sql."Pro_Name  = "." \"".$Pro_name."\"  , " ;
$sql = $sql." Pro_Type = "." \"".$Pro_type."\"  , " ; 
$sql = $sql." Prot_ID  = "." \"".$Prot_ID."\"  , " ; 
$sql = $sql." Pro_Price  = "."\"".$Pro_Price."\"   " ; 
$sql = $sql."  where Pro_ID = "." \"".$Pro_ID."\" ;  " ; 

echo  " <BR> ".$sql." <BR> " ;

$result = mysql_query($sql); 
 if($result)
 {  echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');window.location='manage_Customer_Product_in.php';</script>";   }
 else
 {  echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');history.back();</script>";   }
?>
</body>
</html>