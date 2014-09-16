<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta charset="UTF-8" />
<title> Manage Customer </title>
</head>

<!-- breadcrumb -->
 <link rel="stylesheet" href="css/style_breadcrumb.css" media="screen" type="text/css" />

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


<body bgcolor="#c0e1da" link="BLUE" vlink="BLUE" alink="BLUE">


	<br>
	<ul id="breadcrumb" style="font-size: small;">
  <li><a href="index.php"  target="iframe"><i class="fa fa-home fa-lg"></i>&nbsp;</a></li>
  <li><a href="#"> บดพลาสติก</a></li>
  <li><a href='manage_Process.php' target="iframe"><i class="fa fa-cog fa-spin"></i>&nbsp;รายการบด</a>
</ul>



<?php 

include("connect/connect.php"); 
include("function.php"); 

?>
<center>

<table border="0">
	<tr><br>
		<td colspan="9" align="center" style="font-size: 40px;">
		<b><font face ="TH Sarabun New"> รายการสินค้าที่รับเข้า</style> </b></td></font>
	</tr>
</table>
<br>

<?php

$sql="SELECT CusOr_ID, Cus_Name, Cus_lname, CusOr_Date, Pro_Name, CusOr_amount, CusOr_Status ";
$sql=$sql."FROM customer_order co ";
$sql=$sql."LEFT JOIN product_in p ON ( co.Pro_ID = p.Pro_ID ) "; 
$sql=$sql."LEFT JOIN customer c ON ( co.Cus_ID = c.Cus_ID ) ";

?>

<table class="dc_table_s12" summary="Sample Table" style="width:80%;" >
	<thead>
		<tr style="height: 50px;">
			<td><div align="center"><FONT COLOR=#fff> &nbsp;รหัสการทำงาน&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;ชื่อลูกค้า&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;วันที่สั่งดำเนินงาน&nbsp;</div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;สินค้า&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;จำนวนในการบด&nbsp;(กก.)</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;สถานะ&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;แก้ไข&nbsp;</FONT></div></td>

		</tr>
	</thead>


<?php $record = mysql_query($sql) or die(mysql_error());
while($data=mysql_fetch_assoc($record)){ 

	$str=$data['CusOr_Date'];
$date=strtotime($str);

?>
<tbody>
	<tr> 
		<td><div align="center"><?php echo $data['CusOr_ID']; ?>  </div></td>
		<td><div align="center">&nbsp; <?php echo $data['Cus_Name']; ?>&nbsp;<?php  echo $data['Cus_lname']; ?> </div></td>
		<td><div align="center">&nbsp; <?php echo thai_date4($date);?>&nbsp;</div></td>
		<td><div align="center">&nbsp;<?php echo $data['Pro_Name'];?>&nbsp;</div></td>
		<td><div align="center">&nbsp;<?php echo $data['CusOr_amount'];?>&nbsp;</div></td>
		<td><div align="center">&nbsp;<?php echo $data['CusOr_Status'];?>&nbsp;</div></td>
		<td><div align="center"><a href="./edit_Cus_Pro_In_recv.php?Pro_ID=<?php echo $data[Pro_ID];?>">
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
</body>
</html>