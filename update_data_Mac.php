<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title> แก้ไขข้อมูลพนักงาน </title>  
</head>

<body>
<?php 
include("connect/connect.php");
$Mac_ID=$_REQUEST['txt_Mac_id'];
$Emp_ID=$_REQUEST['Emp_ID'];


$sql = "update  machine set " ;
$sql = $sql." Emp_ID  = "." \"".$Emp_ID."\"  " ; 
$sql = $sql."  where Mac_ID = "." \"".$Mac_ID."\" ;  " ; 

//echo  " <BR> ".$sql." <BR> " ;

$result = mysql_query($sql); 
 if($result)
 {  echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');window.location='manage_Machine.php';</script>";   }
 else
 {  echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');history.back();</script>";   }
?>
</body>
</html>