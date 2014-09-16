<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<?php include("connect/connect.php"); ?>
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
		<form id="form01" name="form01" method="post" action="add_data_Employee.php">
			<table border="0" >
				<br>
				<br>
				<tr  align="center" bgcolor="#2ECC71"> 
					<td colspan="2" style="padding: 10px;"><FONT COLOR=#FFFFFF> เพิ่มข้อมูลพนักงาน </font></td> 
				</tr>
				<tr>
					<td>
						<br>
					</td>
				</tr>
				<tr>
					<td align="right"> 
						<div class="col-sm-2">
							<select id="title" name="Emp_Pre" class="validate[required] form-control" value="Emp_Pre">
								<option value>คำนำหน้า</option>
								<option value="นาย">นาย</option>
								<option value="นาง">นาง</option>
								<option value="นางสาว">นางสาว</option>
							</select>
						</div> </td>
						<td align="left">
							<label for="Emp_name"></label>
							<input type="text" name="Emp_Name" id="Emp_Name" value placeholder="ชื่อ"   size="30" 
							class="validate[required] text-input form-control " style="width: 80%; height: 85%;  "></td>

						</tr>
						<tr>
							<td align="right"> &nbsp; นามสกุล  &nbsp; </td>
							<td align="left">
								<label for="Emp_lname"></label>
								<input type="text" name="Emp_lname" id="Emp_lname" value placeholder="นามสกุล" size="30" 
								class="validate[required] text-input form-control" style="width: 80%;   height: 85%;">
							</td>
						</tr>

						<tr>

							<td align="right"> &nbsp; เบอร์โทรศัพท์  &nbsp; </td>
							<td align="left">
								<label for="Emp_Tel"></label>
								<input type="text" name="Emp_Tel" id="Emp_Tel"  value placeholder="เบอร์โทรศัพท์ 08X-XXX-XXXX" size="30" 
								class="validate[Emptom[telephone]] text-input form-control" style="width: 80%; height: 85%;">
							</td>
						</tr>
						<tr>
							<td align="right"> &nbsp; สัญชาติ  &nbsp; </td>
							<td align="left">
								<label for="Emp_Nationationality"></label>
								<div class="col-sm-2">
									<select id="title" name="Emp_Nationationality" class="validate[required] form-control" value="Emp_Nationationality">
										<option value>เลือก</option>
										<option value="ไทย">ไทย</option>
										<option value="ชาวไทยภูเขา">ชาวไทยภูเขา</option>
										<option value="พม่า">พม่า</option>
										<option value="พม่า">ลาว</option>
									</select>
								</div>
							</td>
						</tr>
						<tr>

							<td align="right"> &nbsp; หนังสือเดินทาง / เลขบัตรประชาชน  &nbsp; </td>
							<td align="left">
								<label for="Emp_Tel"></label>
								<input type="text" name="Emp_No" id="Emp_No" size="30" 
								class="validate[Emptom[telephone]] text-input form-control" style="width: 80%; height: 85%;">
							</td>
						</tr>
						<tr>

							<td align="right"> &nbsp; ค่าแรงรายวัน  &nbsp; </td>
							<td align="left">
								<label for="chg_hour"></label>
								<input type="text" name="chg_hour" id="chg_hour" size="30" 
								class="validate[Emptom[telephone]] text-input form-control" style="width: 10%; height: 85%;"> &nbsp; บาท &nbsp;:&nbsp;วัน
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center" > 
								<input type="submit" name="btnsummit" id="btnsummit"value=" บันทึกข้อมูล" class="btn btn-primary btn-large btn-block" style="width: 30%;">  

								<input type="reset" name="btnreset" id="btnreset" value="ยกเลิกการบันทึกข้อมูล"  class="btn btn-default btn-large btn-block" style="width: 50%;"> 
								&nbsp;  &nbsp; 

							</form>


						</td>	


					</tr>

					<tr>
						<td colspan="2" align="center"> 
							<form id="formend" name="formend" method="post" action="./manage_Employee.php">
								<button type="submit" name="btnSearch" id="btnSearch"  class="btn btn-block btn-lg btn-info" style="width: 50%;">
									กลับสู่หน้าพนักงาน</button> 
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