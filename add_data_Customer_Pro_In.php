 <?

 include("connect/connect.php");

$Pro_Name=$_REQUEST['Pro_name'];
$Pro_Type=$_REQUEST['Pro_type'];
$Cus_ID=$_REQUEST['Cus_ID'];
$Prot_ID=$_REQUEST['Prot_ID'];
$Pro_Price=$_REQUEST['Pro_Price'];


			$prefix = 'P';
			$sq0="SELECT RIGHT(Pro_ID, 4) AS Pro_ID from product_in WHERE LEFT(Pro_ID, 1) = '$prefix' ORDER BY Pro_ID DESC LIMIT 1";
			$query = mysql_query($sq0) or exit( mysql_error() ); 
			$data=mysql_fetch_assoc($query);
			$last_id = $data['Pro_ID'];
			if( $last_id ){
				$new_id = $prefix.(substr('00000000'.++$last_id, -4) );
			}else{
				$new_id = $prefix.'0001';
			}

$sql = "INSERT INTO product_in " ;
$sql = $sql." (Pro_ID,Pro_Name,Cus_ID,Pro_Type,Prot_ID,Pro_Price) " ;
$sql = $sql."  VALUES " ;
$sql = $sql." ('$new_id','$Pro_Name','$Cus_ID','$Pro_Type','$Prot_ID','$Pro_Price') ";

echo  " <BR> ".$sql." <BR> " ; 


$result = mysql_query($sql); 
if($result)
{  echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location='accept_data_Customer_pro_In.php';</script>";   }
else
{  echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ');history.back();</script>";   }
?>