<?php include("connect/connect.php");

$CusOr_ID=$_REQUEST['CusOr_ID'];
$Cus_ID=$_REQUEST['Cus_ID'];
$CusOr_Date=$_REQUEST['CusOr_Date'];
$Pro_ID=$_REQUEST['Pro_ID'];
$CusOr_amount=$_REQUEST['CusOr_amount'];
$CusOr_Status=$_REQUEST['CusOr_Status'];

			$prefix = 'CR';
			$sq0="SELECT RIGHT(CusOr_ID, 3) AS CusOr_ID from customer_order WHERE LEFT(CusOr_ID, 2) = '$prefix' ORDER BY CusOr_ID DESC LIMIT 1";
			$query = mysql_query($sq0) or exit( mysql_error() ); 
			$data=mysql_fetch_assoc($query);
			$last_id = $data['CusOr_ID'];
			if( $last_id ){
				
				$new_id = $prefix.(substr('00000000'.++$last_id, -3) );
			}else{
				$new_id = $prefix.'001';
			}
		

$sql = "INSERT INTO customer_order " ;
$sql = $sql." (CusOr_ID,Cus_ID,CusOr_Date,Pro_ID,CusOr_amount,CusOr_Status) " ;
$sql = $sql."  VALUES  " ;
$sql = $sql." ( '$new_id','$Cus_ID','$CusOr_Date','$Pro_ID','$CusOr_amount','$CusOr_Status') ";

//echo  " <BR> ".$sql." <BR> " ;

$result = mysql_query($sql); 
 if($result)
 {  echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location='manage_Process.php';</script>";   }
 else
 {  echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ');history.back();</script>";   }
?>
