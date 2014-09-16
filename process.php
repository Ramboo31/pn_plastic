<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
	<meta charset="UTF-8" />
	<title> Process </title>
</head>

<!-- DC Table Styles I CSS -->
<link type="text/css" rel="stylesheet" href="css/dc_tables1.css" />
<link type="text/css" rel="stylesheet" href="css/button.css" />

<!-- Start font-->
<link rel="stylesheet" type="text/css" href="font-awesome\css\font-awesome.min.css">


<!--Bootstrap-->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="css/flat-ui.css" rel="stylesheet">
<link href="css/demo.css" rel="stylesheet">
<link rel="shortcut icon" href="images/bin.ico">
<style type="text/css">
td{
	padding: 2px;
}
</style>
<body bgcolor="#c0e1da" link="BLUE" vlink="BLUE" alink="BLUE">

	<?php include("connect/connect.php"); ?>
	<form id="form01" name="form01" method="post" action="add_data_Customer_Order.php">
		<center>

			<table border="0">
				<tr><br>
					<td colspan="9" style="font-size: 40px;">
						<!--Palnel-->
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="panel-title" style="font-size: x-large;"><b><font face ="TH Sarabun New">สั่งบดพลาสติก</b></font></div>
							</div>
							<div class="panel-body">
								<table border="0" >
									<tr>
										<td align="right" >&nbsp; ผู้สั่งผลิต &nbsp; </td>
										<td align="left"> 
											<select class="form-control" name="Cus_ID" style="width: 80%;">
												<?php $sql_Cus="select Cus_ID,Cus_Name,Cus_lname  from customer order by Cus_ID ";
												$que1=mysql_query($sql_Cus);
												while($output1=mysql_fetch_array($que1)){
													?>
													<span class="dropdown-arrow"></span>
													<option class="caret"  value="<?php echo $output1['Cus_ID'];?>"
														selected="selected"> <?php echo "$output1[Cus_Name] $output1[Cus_lname]";?> 
													</option>
													<?php }?>
												</select>

											</td>

										</td>
									</tr>

									<tr>
										<td align="right"> &nbsp;วันที่สั่งผลิต  &nbsp; </td>
										<td align="left">
											<label for="CusOr_Date"></label>
											<input type="date" id="dp1" name="CusOr_Date" value="12-10-2014" style="width: 80%;" size="30" class="form-control input-sm" >
										</td>
									</tr>
									<tr>
										<td align="right" >&nbsp; ชิ้นงาน &nbsp; </td>
										<td align="left"> 
											<select class="form-control" name="Pro_ID" >
												<?php $sql_Cus="select p.Pro_ID,Pro_Name from  product_in p";
												$que1=mysql_query($sql_Cus);
												while($output1=mysql_fetch_array($que1)){
													?>
													<span class="dropdown-arrow"></span>
													<option class="caret" value="<?php echo $output1['Pro_ID'];?>"
														selected="selected"> <?php echo "$output1[Pro_Name]";?> 
													</option>
													<?php }?>
												</select>

											</td>
										</tr>
										<tr>
											<td align="right"> &nbsp; น้ำหนักในการผลิต  &nbsp; </td>
											<td align="left">

												<!-- Append -->
												<div class="form-group">
													<div class="input-group" name="CusOr_amount">
														<input type="text" class="form-control " placeholder="จำนวนเป็นกิโลกรัม"  name="CusOr_amount"/>
														<span class="input-group-addon " style="font-size: 20px;">Kg.</span>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td align="right" >&nbsp; สถานะ &nbsp; </td>
											<td align="left"> 
												<select class="form-control" name="CusOr_Status" tyle="width: 80%;">
													<option value>เลือกสถานะ</option>
													<option value="รอการบด">รอการบด</option>
													<option value="กำลังทำการบด">กำลังทำการบด</option>
												</select>

											</td>
										</tr>

										<tr>
											<td colspan="2" align="center"> 
												<button type="submit" name="btnsummit" id="btnsummit" class="btn btn-primary btn-large btn-block" style="width: 30%; font-size: inherit;"> 
													&nbsp; บันทึก &nbsp;</button >
												</form>
											</td>
										</tr>


										<tr>
											<td colspan="2" align="center"> 
												<form id="formend" name="formend" method="post" action="./manage_Customer.php">
													<button type="submit" name="btnSearch" id="btnSearch"  class="btn btn-block btn-lg btn-info" style="width: 50%; font-size: inherit;">
														กลับสู่หน้าลูกค้า</button> 
													</form>
												</td>
											</tr>
											
										</table>
									</div>
								</div>
							</tr>
						</form>
						<tr>




						</body>
						</html>