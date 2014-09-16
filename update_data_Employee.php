<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title> แก้ไขข้อมูลพนักงาน </title>  
</head>

<body>
<?php 
include("connect/connect.php");
$Emp_Pre=$_REQUEST['Emp_Pre'];
$Emp_Name=$_REQUEST['Emp_Name'];
$Emp_lname=$_REQUEST['Emp_lname'];
$Emp_Tel=$_REQUEST['Emp_Tel'];
$Emp_No=$_REQUEST['Emp_No'];
$Emp_Nat=$_REQUEST['Emp_Nationationality'];
$chg_hour=$_REQUEST['chg_hour'];

$sql = "update  Employee set " ;
$sql = $sql." Emp_Pre ="."\"".$Emp_Pre."\" ,";
$sql = $sql." Emp_Name  = "." \"".$Emp_Name."\"  , " ;
$sql = $sql." Emp_lname  = "." \"".$Emp_lname."\"  , " ; 
$sql = $sql." Emp_Tel  = "." \"".$Emp_Tel."\"  , " ; 
$sql = $sql." Emp_No  = "." \"".$Emp_No."\"  , " ;
$sql = $sql." Emp_Nationationality  = "." \"".$Emp_Nationationality."\"  , " ;
$sql = $sql." chg_hour  = "."\"".$chg_hour."\"   " ; 
$sql = $sql."  where Emp_ID = "." \"".$Emp_ID."\" ;  " ; 

echo  " <BR> ".$sql." <BR> " ;

$result = mysql_query($sql); 
 if($result)
 {  echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');window.location='manage_Employee.php';</script>";   }
 else
 {  echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');history.back();</script>";   }
?>
</body>
</html>