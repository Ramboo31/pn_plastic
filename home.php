<html manifest="cache.manifest">
<head>
	<?php 

include("connect/connect.php"); 
include("function.php"); 

?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
	<title>PN Plastic : Login</title> 
	<link rel="stylesheet" href="CSS/main.css" media="screen">

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


	<!--Datepicket-->
	<link rel="stylesheet" type="text/css" href="css/datepicker.css">

	<style type="text/css">
	#container{
		width: 70% !important;
		padding-right: 15px;
		padding-left: 15px;
		margin-right: auto;
		margin-left: auto;
	}

	td {
font-size: 25px;
}
	</style>
</head>
<body>
	<div id="container">
		<b><p class="ptl" style="font-family: th sarabun new; font-size: 30px;">สถานะการทำงาน</p></b>
<center>

<?php

$sql="SELECT CusOr_ID, Cus_Name, Cus_lname, CusOr_Date, Pro_Name, CusOr_amount, CusOr_Status ";
$sql=$sql."FROM customer_order co ";
$sql=$sql."LEFT JOIN product_in p ON ( co.Pro_ID = p.Pro_ID ) "; 
$sql=$sql."LEFT JOIN customer c ON ( co.Cus_ID = c.Cus_ID ) ";

?>

<table class="dc_table_s12" summary="Sample Table" >
	<thead>
		<tr>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;รหัสการทำงาน&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;วันที่สั่งดำเนินงาน&nbsp;</div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;สินค้า&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;จำนวนในการบด&nbsp;(กก.)</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;สถานะ&nbsp;</FONT></div></td>

		</tr>
	</thead>


<?php $record = mysql_query($sql) or die(mysql_error());
while($data=mysql_fetch_assoc($record)){ 

	$str=$data['CusOr_Date'];
$date=strtotime($str);

?>
<tbody>
	<tr> 
		<td><div align="center"><a herf="" onClick="window.open('popup_home.php','','width=100,height=100'); return false;" data-toggle="modal" data-target=".bs-example-modal-sm"><?php echo $data['CusOr_ID']; ?> </a> </div></td>
		<td><div align="center">&nbsp; <?php echo thai_date4($date);?>&nbsp;</div></td>
		<td><div align="center">&nbsp;<?php echo $data['Pro_Name'];?>&nbsp;</div></td>
		<td><div align="center">&nbsp;<?php echo $data['CusOr_amount'];?>&nbsp;</div></td>
		<td><div align="center">&nbsp;<?php echo $data['CusOr_Status'];?>&nbsp;</div></td>

	</tr>

	<!-- Small modal 
		<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> 
		tabindex="-1" -->
		
</tbody>
<?php } ?> 
<tfoot>
      <tr>
        <th scope="row"></th>
        	<td colspan="7"></td>
      </tr>
    </tfoot>
	
</table>

<div class="modal fade bs-example-modal-sm"  role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">ข้อมูลการบด</h3>
						</div>
						<div class="panel-body">
							<?php  echo $data['Cus_Name']; ?>&nbsp;<?php  echo $data['Cus_lname']; ?>
						</div>
					</div>
				</div>

			</div>
		</div>

</center>

		<!-- Load JS here for greater good =============================-->

		<script src="js/jquery-1.8.3.min.js"></script>
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/jquery.ui.touch-punch.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-select.js"></script>
		<script src="js/bootstrap-switch.js"></script>
		<script src="js/flatui-checkbox.js"></script>
		<script src="js/flatui-radio.js"></script>
		<script src="js/jquery.tagsinput.js"></script>
		<script src="js/jquery.placeholder.js"></script>
		<script src="js/jquery.stacktable.js"></script>
		<script src="http://vjs.zencdn.net/4.3/video.js"></script>
		<script src="js/application.js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	</div>
</div>

</body>
</html>