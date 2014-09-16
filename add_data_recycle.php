 <?

 include("connect/connect.php");


$Prot_Name=$_REQUEST['Prot_Name'];
$Prot_Detail=$_REQUEST['Prot_Detail'];


			$prefix = 'PT';
			$sq0="SELECT RIGHT(Prot_ID, 3) AS Prot_ID from protype WHERE LEFT(Prot_ID, 2) = '$prefix' ORDER BY Prot_ID DESC LIMIT 1";
			$query = mysql_query($sq0) or exit( mysql_error() ); 
			$data=mysql_fetch_assoc($query);
			$last_id = $data['Prot_ID'];
			if( $last_id ){
				$new_id = $prefix.(substr('00000000'.++$last_id, -3) );
			}else{
				$new_id = $prefix.'001';
			}

$sql = "INSERT INTO protype " ;
$sql = $sql." (Prot_ID,Prot_Name,Prot_Detail) " ;
$sql = $sql."  VALUES  " ;
$sql = $sql." (  \"".$new_id."\",\"".$Prot_Name."\",\"".$Prot_Detail."\") ";
echo  " <BR> ".$sql." <BR> " ; 


$result = mysql_query($sql); 
if($result)
{  echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location='recycle.php';</script>";   }
else
{  echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ');history.back();</script>";   }
?>