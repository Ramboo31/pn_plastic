<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title> เพิ่มข้อมูล </title>  
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
$Emp_No=$_REQUEST['Emp_No'];
$chg_hour=$_REQUEST['chg_hour'];

			$prefix = 'E';
			$sq0="SELECT RIGHT(Emp_ID, 4) AS Emp_ID from employee WHERE LEFT(Emp_ID, 1) = '$prefix' ORDER BY Emp_ID DESC LIMIT 1";
			$query = mysql_query($sq0) or exit( mysql_error() ); 
			$data=mysql_fetch_assoc($query);
			$last_id = $data['Emp_ID'];
			if( $last_id ){
				$new_id = $prefix.(substr('00000000'.++$last_id, -4) );
			}else{
				$new_id = $prefix.'0001';
			}

$sql = "INSERT INTO employee " ;
$sql = $sql." (Emp_ID,Emp_Pre,Emp_Name,Emp_lname,Emp_Tel,Emp_Nationationality,Emp_No,chg_hour) " ;
$sql = $sql."  VALUES  " ;
$sql = $sql." ('$new_id','$Emp_Pre','$Emp_Name','$Emp_lname','$Emp_Tel','$Emp_Nat','$Emp_No','$chg_hour') ";
echo  " <BR> ".$sql." <BR> " ;

$result = mysql_query($sql); 
 if($result)
 {   echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location='accept_data_Customer.php';</script>";   }
 else
 {  echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ');history.back();</script>";   }
?>
</body>
</html>