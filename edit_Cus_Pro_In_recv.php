<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>เพิ่มข้อมูลสินค้า</title>

	<!-- Start font-->
	<link rel="stylesheet" type="text/css" href="font-awesome\css\font-awesome.min.css">

	<!--Bootstrap
	<link href="bootstrap_ 2/css/bootstrap.css" rel="stylesheet">-->
	<link href="css/flat-ui.css" rel="stylesheet">
	<link href="css/demo.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/bin.ico">
	<!--validation-->
	<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
	<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" title="no title" charset="utf-8" />
	<script src="js/jquery.js" type="text/javascript"></script>
	<!-- FRENCH LOCALISATION	<script src="js/jquery.validationEngine-fr.js" type="text/javascript"></script>  -->
	<script src="js/jquery.validationEngine.js" type="text/javascript"></script>

	<style type="text/css">

	table {

		background: white;
		border: 1px solid #1abc9c;
		border-radius: 6px;
		height: 100px;
		margin-bottom: 18px;
		padding: 6px 1px 1px 6px;
		overflow-y: auto;
		text-align: left;
		line-height: 1.471;
	}

	td{

		font-size: 17px;
		line-height: 1.471;
		border-radius: 6px;
		padding: 0px 10px;
	}
	</style>


</head>

<body bgcolor="#c0e1da" link="BLUE" vlink="BLUE" alink="BLUE" >


	<center>
		<form id="form01" name="form01" method="post" action="update_data_Customer_Product_in.php">
			<table border="0" >

				<?php
				include("connect/connect.php");

				$find_Pro_ID = $_REQUEST['Pro_ID'];

				$sql = " SELECT * " ;
				$sql = $sql." FROM product_in where Pro_ID = \"".$find_Pro_ID."\" "  ;
				$record=mysql_query($sql) or die(mysql_error());
				$data = mysql_fetch_assoc($record) ;
				?>
				<br>
				<br>
				<tr  align="center" bgcolor="#2ECC71"> 
					<td colspan="2" style="padding: 10px;"><FONT COLOR=#FFFFFF> เพิ่มสินค้าที่รับเข้า </font></td> 
				</tr>
				<tr>
					<td>
						<br>
					</td>
				</tr>
				<tr>
					<td align="right"> &nbsp; รหัสชิ้นงาน  &nbsp; </td>
					<td align="left">
						<label for="Pro_ID"></label>
						<input type="text" READONLY name="Pro_ID" id="Pro_ID" value="<?php echo ($data['Pro_ID']); ?>"   size="30" 
						class="form-control " style="width: 15%; height: 85%;  "></td>
					</tr>
					<tr>
						<td align="right"> &nbsp; ชื่อชิ้นงาน  &nbsp; </td>
						<td align="left">
							<label for="Pro_name"></label>
							<input type="text" name="Pro_name" id="Pro_name" value ="<?php echo ($data['Pro_Name']); ?>"   size="30" 
							class="validate[required] text-input form-control " style="width: 46%; height: 85%;  "></td>
						</tr>

						<tr>
							<td align="right"> &nbsp; ประเภทชิ้นงาน  &nbsp; </td>
							<td align="left">

								<div class="col-sm-2">
									<select id="title" name="Pro_type" class="form-control" value="<?php echo ($data['Pro_type']); ?>">
										<option value="วัสดุไม่ติดเหล็ก"  <?php echo ($data['Pro_type'] == "วัสดุไม่ติดเหล็ก"?"selected":"");?>>วัสดุไม่ติดเหล็ก</option>
										<option value="  วัสดุติดเหล็ก"  <?php echo ($data['Pro_type'] == "วัสดุติดเหล็ก"?"selected":"");?>>  วัสดุติดเหล็ก</option>
									</select>
								</div>
							</td>
						</tr>


						<tr>

							<td align="right"> &nbsp; ชนิดพลาสติก &nbsp; </td>
							<td align="left">
								<select class=" validate[required] form-control" name="Prot_ID" value="Prot_ID" style="width: 52%;">
									
									<?php $sql_type="select Prot_ID,Prot_Name,Prot_Detail  from protype  order by  Prot_ID ";
									$que1=mysql_query($sql_type);
									while($output1=mysql_fetch_array($que1)){
										?>
										<span class="dropdown-arrow"></span>

										<option align="right" class="caret"  value="<?php echo $output1['Prot_ID'];?>"
											selected="selected" > <?php echo "$output1[Prot_Name]" ?> &nbsp; &nbsp; <?php echo "$output1[Prot_Detail]";?> 
										</option>
										<?php }?>
									</select>
								</td>
							</tr>
							<tr>
								<td align="right"> &nbsp; ราคา &nbsp; : &nbsp; กิโลกรัม </td>
								<td align="left">
									<label for="Pro_Price"></label>
									<input type="text" name="Pro_Price" id="Pro_Price" value ="<?php echo ($data['Pro_Price']); ?>"   size="30" class="validate[required] text-input form-control " style="width: 20%; height: 85%;  ">&nbsp; บาท </td>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center" > 
									<input type="submit" name="btnsummit" id="btnsummit"value=" บันทึกข้อมูล" class="btn btn-primary btn-large btn-block" style="width: 20%;">  
									<form id="formend" name="formend" method="post" action="./manage_Customer.php">
										<input type="reset" name="btnreset" id="btnreset" value="ยกเลิกการบันทึกข้อมูล"  class="btn btn-default btn-large btn-block" style="width: 28%;"> 
										&nbsp;  &nbsp; 
									</form>
								</form>


							</td>	


						</tr>

						<tr>
							<td>
								<br>
							</td>
						</tr>
					</table>
				</center>
			</body>
			</html>