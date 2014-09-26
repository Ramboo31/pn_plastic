<?php 
session_start();
include("connect/connect.php"); 
include("function.php"); 

if (!Checklogin())
{
	header("location: login_err.php"); //ทำหน้าเพื่อให้เข้าหน้า Login
}
?>
<html manifest="cache.manifest">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
	<title>PN Plastic : Login</title> 
	<link rel="stylesheet" href="CSS/main.css" media="screen">

	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="css/flat-ui.css" rel="stylesheet">
	<link href="css/demo.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/bin.ico">

	<!-- breadcrumb -->
 <link rel="stylesheet" href="css/style_breadcrumb.css" media="screen" type="text/css" />

	<!-- Start font-->
	<link rel="stylesheet" type="text/css" href="font-awesome\css\font-awesome.min.css">
	<!--Datepicket-->
	<link rel="stylesheet" type="text/css" href="css/datepicker.css">

	<!-- DC Table Styles I CSS -->
	<link type="text/css" rel="stylesheet" href="css/dc_tables1.css" />
	<link type="text/css" rel="stylesheet" href="css/button.css" />
	<style type="text/css">
	#container{
		width: 70% !important;
		padding-right: 15px;
		padding-left: 15px;
		margin-right: auto;
		margin-left: auto;
	}
	</style>
</head>
<body>

	<br>
	<ul id="breadcrumb" style="font-size: small;">
  <li><a href="index.php"  target="iframe"><i class="fa fa-home fa-lg"></i>&nbsp;</a></li>
  <li><a href="#"><i class="fa fa-list-alt fa-lg"></i>&nbsp; ข้อมูลพื้นฐาน</a></li>
  <li><a href='manage_recycle.php'  target="iframe"><i class="fa fa-recycle fa-lg"></i>&nbsp;ข้อมูลพลาสติก</a></li>

</ul>

		<?php include("connect/connect.php"); ?>
	<center>
	<div id="container">

		<br>

		<b><font face="TH Sarabun New" style="font-size: 40px;" ><i class="fa fa-recycle fa-lg"></i> ข้อมูลพลาสติก </font></b>

<form id="form01" name="form01" method="post" action="add_data_recycle.php">
<table border="0">
<tr>

 <!--รหัสลูกค้า --> 
		<td align="right" > 
		<input type="text" value placeholder="ชนิดพลาสติก" name="Prot_Name" id="s_Cus_id" class="form-control " style="width: 54%;">
	</td>
	<td>
&nbsp;
	</td>

		<!--ชื่อลูค้า-->
		<td> 
			<input type="text"  value placeholder="รายละเอียด" name="Prot_Detail" id="s_Cus_name" class="form-control "> 
		</td>
		<td>
&nbsp;
	</td>
			<td> 
				<button type="submit" name="btnsearch" id="btnsearch"  class="btn btn-block btn-embossed btn-primary" style="font-size: inherit; padding: 6px;"> <i class="fa fa-plus"></i>เพิ่มข้อมูล</button>
			</td> 

		</form>

</tr>
</table>
<br>
		<!-- DC Table Styles I:12 Start -->
		<table class="dc_table_s12" summary="Sample Table" style="width:80%;" >
			<thead>
				<tr style="height: 50px;">
					<td ><div align="center"><FONT COLOR=#fff> &nbsp;ชนิดพลาสติก&nbsp;</FONT></div></td>
					<td><div align="center"><FONT COLOR=#fff> &nbsp;รายละเอียด&nbsp;</FONT></div></td>

				</tr>
			</thead>

		<!--SQL-->
			<?php

			$sql="select p.Prot_Name,Prot_Detail ";
		$sql=$sql."from protype as p ";
		$sql=$sql."order by Prot_ID ";


		//echo "<br>" .$sql."<br>";


			$record = mysql_query($sql);
			while($data=mysql_fetch_assoc($record)){ ?>
			<tbody>
				<tr> 
					<td><div align="center"><?php echo $data['Prot_Name']; ?>  </div></td>
					<td><div align="left">&nbsp; <?php echo $data['Prot_Detail']; ?></div></td>

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
	</div>

</div>
</center>

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
<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
<script src="js/index_breadcrumb.js"></script>
</div>
</div>


</body>
</html>