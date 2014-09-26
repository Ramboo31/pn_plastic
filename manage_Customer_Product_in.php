<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta charset="UTF-8" />
<title> Manage Customer </title>
</head>

<!-- DC Table Styles I CSS -->
<link type="text/css" rel="stylesheet" href="css/dc_tables1.css" />
<link type="text/css" rel="stylesheet" href="css/button.css" />

    <!-- Start font-->
 <link rel="stylesheet" type="text/css" href="font-awesome\css\font-awesome.min.css">

 <!--Bootstrap-->
 <link href="bootstrap_ 2/css/bootstrap.css" rel="stylesheet">
<link href="css/flat-ui.css" rel="stylesheet">
<link href="css/demo.css" rel="stylesheet">
<link rel="shortcut icon" href="images/bin.ico">

	<!-- breadcrumb -->
 <link rel="stylesheet" href="css/style_breadcrumb.css" media="screen" type="text/css" />


<body bgcolor="#c0e1da" link="BLUE" vlink="BLUE" alink="BLUE">

	<br>
	<ul id="breadcrumb" style="font-size: small;">
  <li><a href="index.php"  target="iframe"><i class="fa fa-home fa-lg"></i>&nbsp;</a></li>
  <li><a href="#">บดพลาสติก</a></li>
  <li><a href='manage_Customer_Product_in.php'  target="iframe"><i class="fa fa-dropbox"></i>&nbsp;รับคำสั่งบดผลิต</a>

</ul>

<?php include("connect/connect.php"); ?>
<center>

<table border="0">
	<tr><br>
		<td colspan="9" align="center" style="font-size: 40px;">
		<b><font face ="TH Sarabun New"> รับคำสั่งบดผลิต</style> </b></td></font>
	</tr>
</table>

<?php


/*$q_Cus_id=$_REQUEST['s_Cus_id'];
$q_Cus_name=$_REQUEST['s_Cus_name'];

if($q_Cus_id=="") $q_Cus_id="%" ;
if($q_Cus_name=="") $q_Cus_name="%" ;*/

$sql="select p.Pro_ID,Pro_Name,Pro_Type,pt.Prot_Name,p.Pro_Price ";
$sql=$sql."from product_in as p,protype as pt ";
$sql=$sql."where p.Prot_ID = pt.Prot_ID " ;
$sql=$sql."order by Pro_ID ";


//echo "<br>" .$sql."<br>";
?>

<table border="0" >

<tr>
	<form id="form1" name="form1" method="post" action="manage_Customer_Product_in.php">
 
 <!--รหัสลูกค้า --> 
		<td style="width: 80%;"> 
		<input type="text" value placeholder="ค้นหา" name="s_Cus_id" id="s_Cus_id" class="form-control ">
	</td>
	<td>
&nbsp;
	</td>
			<td>
				&nbsp;
			</td>
			
		</form>
	<form id="form2" name="form2" method="post" action="accept_data_Customer_Pro_In.php">
		<td>
				&nbsp;
		</td>
		<td>
			<button type="submit" name="btnAdd" id="btnAdd"  class="btn btn-block btn-lg btn-primary" style="font-size: inherit;"><i class="fa fa-plus"></i> เพิ่มข้อมูล</button></td>
		</td>
	</form>

</tr>
</table>
<br>
<!-- DC Table Styles I:12 Start -->

<table class="dc_table_s12" summary="Sample Table" style="width:80%;" >
	<thead>
		<tr style="height: 50px;">
			<td><div align="center"><FONT COLOR=#fff> &nbsp;ชื่อชิ้นงาน&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;ประเภทชิ้นงาน&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;ชนิดพลาสติก&nbsp;</div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;ราคา&nbsp;:&nbsp;กก.&nbsp; (บาท)</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;แก้ไข&nbsp;</FONT></div></td>

		</tr>
	</thead>


<?php $record = mysql_query($sql) or die(mysql_error());
while($data=mysql_fetch_assoc($record)){ ?>
<tbody>
	<tr> 
		<td><div align="center"><?php echo $data['Pro_Name']; ?>  </div></td>
		<td><div align="center">&nbsp; <?php echo $data['Pro_Type']; ?> </div></td>
		<td><div align="center">&nbsp; <?php echo $data['Prot_Name'];?>&nbsp;</div></td>
		<td><div align="center">&nbsp;<?php echo $data['Pro_Price'];?>&nbsp;</div></td>
		<td><div align="center"><a href="./edit_Cus_Pro_In_recv.php?Pro_ID=<?echo $data['Pro_ID'];?>">
		<img src="images/icons/png/Edit-128.png"></a></div></td>

	</tr>
</tbody>

	<?php } ?> 

	<tfoot>
      <tr>
        <th scope="row"></th>
        	<td colspan="7"></td>
      </tr>
    </tfoot>
    
</table>
</center>

<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
<script src="js/index_breadcrumb.js"></script>
</div>

</body>
</html>