<html manifest="cache.manifest">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
	<title>PN Plastic </title> 
	<link rel="stylesheet" href="CSS/main.css" media="screen">

	<link href="bootstrap_ 2/css/bootstrap.css" rel="stylesheet">
	<link href="css/flat-ui.css" rel="stylesheet">
	<link href="css/demo.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/bin.ico">

	<!-- Start Menu-->
	<link rel='stylesheet' type='text/css' href='css/style_menu.css' />
	<script type='text/javascript' src='js/menu_jquery.js'></script>

	<!--iconmoon-->
	<link rel="stylesheet" href="demo-files/demo.css">
	<link rel="stylesheet" href="demo-files/style.css"></head>
	<!-- Start font-->
	<link rel="stylesheet" type="text/css" href="font-awesome\css\font-awesome.min.css">

<style type="text/css">
	label{font-size: 18px;}	
</style>




</head>
<body >
	<br>
	<center>

		<?php
		include("connect/connect.php");
		$find_Emp_ID = $_REQUEST['Emp_ID'];
		$sql = " SELECT * " ;
		$sql = $sql." FROM employee where Emp_ID = \"".$find_Emp_ID."\" "  ;
		$record=mysql_query($sql) or die(mysql_error());
		$data = mysql_fetch_assoc($record) ;

		?>

		<br>
		<!--Palnel-->
		<div class="panel panel-success" style="width: 50%;">
			<div class="panel-heading">
				<h3 class="panel-title">รายละเอียดพนักงาน</h3>
			</div>
			<div class="panel-body">
				<table border="0" >

					<tr>
						<td align="right"><B>รหัสพนักงาน  &nbsp; : &nbsp;</B></td>
						<td>
							<label>&nbsp;<?php echo ($data['Emp_ID']); ?>&nbsp;</label>
						</td>
						</tr>
						<tr>
							<td align="right"> <b>&nbsp; ชื่อ &nbsp;-&nbsp;นามสกุล &nbsp;: &nbsp;</b> </td>
							<td align="left">
								<label for="txt_Cus_name"><?php echo ($data['Emp_Pre'])?><?php echo ($data['Emp_Name']); ?>&nbsp;&nbsp;&nbsp;<?php echo ($data['Emp_lname']); ?></label>
							</td>
							</tr>

							<tr>
								<td align="right"> <b>&nbsp; เบอร์โทรศัพท์ &nbsp;: &nbsp; </b></td>
								<td align="left">
									<label for="txt_Cus_lname"><?php echo ($data['Emp_Tel']) ; ?></label>
								</td>
							</tr>


							<tr>

								<td align="right"> <b>&nbsp; สัญชาติ &nbsp;: &nbsp; </b></td>
								<td align="left">
									<label for="txt_Cus_Tel"><?php echo ($data['Emp_Nationationality']) ; ?></label>
								</td>
							</tr>
							<tr>
								<td align="right"> <b>&nbsp; เลขที่บัตรประชาชน &nbsp;: &nbsp;  </b> </td>
								<td align="left">
									<label for="txt_Cus_Add">  <?php echo ($data['Emp_no']);?></label>

								</td>
							</tr>

						<tr>
							<td>
								<br>
							</td>
						</tr>

						
						</table>
					</div>
				</div>

				<form id="formend" name="formend" method="post" action="./manage_Employee.php">
									<button type="submit" name="btnSearch" id="btnSearch"  class="btn btn-block btn-lg btn-info" style="width: 30%;">
										กลับสู่หน้าจัดการข้อมุลพนักงาน</button> 
									</form>
			</center>


		</body>
		</html>