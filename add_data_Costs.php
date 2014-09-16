<html>
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head>

<body>
<?php 
include("connect/connect.php");

$costs=$_REQUEST['costs'];
$inv=$_REQUEST['inv'];
$date_in=$_REQUEST['date_in'];
$pay=$_REQUEST['pay'];
$act=$_REQUEST['act'];


			$prefix = 'CS';
			$sq0="SELECT RIGHT(CS_ID, 3) AS CS_ID from costs WHERE LEFT(CS_ID, 2) = '$prefix' ORDER BY CS_ID DESC LIMIT 1";
			$query = mysql_query($sq0) or exit( mysql_error() ); 
			$data=mysql_fetch_assoc($query);
			$last_id = $data['CS_ID'];
			if( $last_id ){
				$new_id = $prefix.(substr('00000000'.++$last_id, -3) );
			}else{
				$new_id = $prefix.'001';
			}

$sql = "INSERT INTO costs " ;
$sql = $sql." (CS_ID,CS_COST,CS_INV,CS_DATE_IN,CS_PAY,CS_ACT) " ;
$sql = $sql."  VALUES  " ;
$sql = $sql." ('$new_id','$costs','$inv','$date_in','$pay','$act') ";
//echo  " <BR> ".$sql." <BR> " ;

$result = mysql_query($sql); 
 if($result)
 {   echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location='accept_data_Costs.php';</script>";   }
 else
 {  echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ');history.back();</script>";   } 
?>
</body>
</html>