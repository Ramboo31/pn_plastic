<?php 
session_start();
include("connect/connect.php"); 
include("function.php"); 

if (!Checklogin())
{
	header("location: login_err.php"); //ทำหน้าเพื่อให้เข้าหน้า Login
}
?>
<html>
<head> 
	<meta charset="UTF-8" />
	<title> Manage Customer </title>

	<!-- DC Table Styles I CSS -->
	<link type="text/css" rel="stylesheet" href="css/dc_tables1.css" />
	<link type="text/css" rel="stylesheet" href="css/button.css" />

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
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<!--typeahead-->
	<script src="js/typeahead.bundle.js"></script>
	<!-- FRENCH LOCALISATION	<script src="js/jquery.validationEngine-fr.js" type="text/javascript"></script>  -->
	<!-- // <script src="js/jquery.validationEngine.js" type="text/javascript"></script> -->

	<link rel="shortcut icon" href="images/bin.ico">


	<style type="text/css">

	.table {

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

	.td{

		font-size: 17px;
		line-height: 1.471;
		border-radius: 6px;
		padding: 0px 10px;
	}
	</style>


	<!-- breadcrumb -->
	<link rel="stylesheet" href="css/style_breadcrumb.css" media="screen" type="text/css" />
</head>
<body bgcolor="#ececec" link="BLUE" vlink="BLUE" alink="BLUE">

	<br>
	<ul id="breadcrumb" style="font-size: small;">
		<li><a href="home.php"  target="iframe"><i class="fa fa-home fa-lg"></i>&nbsp;</a></li>
		<li><a href="#">ค่าใช้จ่าย</a></li>

	</ul>

	<?php 

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	include("connect/connect.php"); 	
	include "function.php";

	$day = date("Y-m-d");
	$today=strtotime($day);

	?>

	<center>
		<form id="form01" name="form01" method="post" action="add_data_Costs.php">
			<div colspan="9" align="center" style="font-size: 40px;">
				<b><font face ="TH Sarabun New"> ค่าใช้จ่าย</style></b>
			</font>

			<table class="table"border="0" style="font-size: 40px;">
				<tbody>
					<tr>
						<td>
							<br>
						</td>
					</tr>
					<tr>
						<td align="right" style="font-size: 30px;"> <b>&nbsp; ค่าใช้จ่าย  &nbsp; </b></td>
						<td align="left">
							<select class="btn btn-default dropdown-toggle" name="costs" value="costs" style="width: 58%; color: black;"  > <span class="caret"></span>
								<option value="">เลือกค่าใช้จ่าย</option>
								<option value="ค่าน้ำประปา">น้ำประปา</option>
								<option value="ค่าไฟฟ้า">ไฟฟ้า</option>
								<option value="ค่าโทรศัพท์">โทรศัพท์</option>
								<option value="ค่าเช่าสถานที่">เช่าสถานที่</option>

							</select>
							
						</td></tr>
						<tr>
							<td align="right"> &nbsp; เลขที่ใบแจ้ง &nbsp; </td>
							<td align="left">
								<label for=""></label>
								<input type="text" name="inv"  value="" placeholder="เลขที่ใบแจ้งค่าใช้จ่าย" size="30" class="validate[required] text-input form-control " style="width: 58%;"></td>
								
							</tr>

							<tr>
								<td align="right"> &nbsp; วันที่แจ้ง &nbsp; </td>
								<td align="left">
									<input type="date" id="dp1" name="date_in" value="date_in"  size="30" class="form-control input-sm">
								</td>
								
							</tr>
							

							<tr>

								<td align="right"> &nbsp; มูลค่า &nbsp; </td>
								<td align="left">
									<input type="text" name="pay" id="" value="" placeholder="บาท" size="30" class="validate[required] text-input form-control " style="width: 58%;"></td>
									
								</td>
							</tr>
							<tr>
								<td align="right"> &nbsp; วันที่จ่ายจริง</td>
								<td align="left">
									<label for="Pro_Price"></label>
									<input type="date" id="dp1" name="act" value=""  size="30" class="form-control input-sm">
								</tr>
								<tr>
									<td colspan="4" align="center"> 
										<input type="submit" name="btnsummit" id="btnsummit" value=" บันทึกค่าใช้จ่าย" class="btn btn-primary btn-large btn-block" style="width: 26%;">  

										<input type="reset" name="btnreset" id="btnreset" value="ยกเลิกการบันทึกข้อมูล" class="btn btn-default btn-large btn-block" style="width: 28%;" onclick="javascript:location.reload();"> 
										&nbsp;  &nbsp; 
										<br>
									</td>	
								</tr>
								<tr>
									<td>
										<br>
									</td>
								</tr>	
							</tbody>
						</form>
						
					</table>

					
					<table border="0">
						
						<tr>
							<form id="form1" name="form1" method="post" action="accept_data_Costs.php">
								
								<!--รหัสลูกค้า --> 
								<td> 
									<div id="remote"> 
										<input type="text" value placeholder="ประเภทค่าใช้จ่าย" name="s_COST" id="s_COST" class="typeahead form-control">
									</div>
								</td>

<script>
$(function() {
var costDB = new Bloodhound({
	datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
	queryTokenizer: Bloodhound.tokenizers.whitespace,
//prefetch: 'data.json',
remote: 'typeahead_accept_data_costs.php?c=%QUERY'
});

costDB.initialize();

$('#remote .typeahead').typeahead(null, {
	name: 's_COST',
	displayKey: 'value',
	source: costDB.ttAdapter()
});

$('#s_COST').on('typeahead:selected', function(e) {
var args;//, type, text;
args = [].slice.call(arguments, 1);
args = args[0];
//type = e.type;
//text = window.JSON ? JSON.stringify(args) : '';

//$('#name').text(args['Cid'] + ' ' + args['value']);
});
});
</script>
								<td>
									&nbsp;
								</td>

								<!--ชื่อลูค้า-->
								<td> 
									<?php 
									$options['name'] = "s_month";
									echo dropdownMonth($options);?>
								</td>
								<td>
									&nbsp;
								</td>
								<td> 
									<button type="submit" name="btnsearch" id="btnsearch"  class="btn btn-block  btn-primary"> <i class="fa fa-search"></i> ค้นหา</button>
								</td> 
								<td>
									&nbsp;
								</td>
								
							</form>

						</tr>
						<tr>
							<td>
								<br>
							</td>
						</tr>
					</table>

					<?php
					$q_COST=$_REQUEST['s_COST'];
					$q_month=$_REQUEST['s_month'];

					if($q_COST=="") $q_COST="%" ;
					if($q_month=="") $q_month="%" ;


					$sql="select * ";
					$sql=$sql."from costs ";
					$sql=$sql."where CS_ACT like '%$q_month%'" ;
					$sql=$sql."and CS_COST like '%$q_COST%'";
					$sql=$sql."order by CS_ID ";


//echo "<br>" .$sql."<br>";
					?>



					<!-- DC Table Styles I:12 Start -->

					<table class="dc_table_s12" summary="Sample Table" style="width:80%;" >
						<thead>
							<tr style="height: 50px;">
								<td><div align="center"><FONT COLOR=#fff> <b>&nbsp;ประเภทค่าใช้จ่าย&nbsp;</b></FONT></div></td>
								<td><div align="center"><FONT COLOR=#fff> <b>&nbsp;วันที่แจ้ง&nbsp;</b></FONT></div></td>
								<td><div align="center"><FONT COLOR=#fff> <b>&nbsp;วันที่จ่าย&nbsp;</b></FONT></div></td>
								<td><div align="center"><FONT COLOR=#fff> <b>&nbsp;มูลค่า&nbsp;</b></div></td>

								<form id="form1" name="form1" method="post" action="manage_Customer_Product_in.php">

									
								</form>
							</td>

						</tr>
					</thead>


					<?php 
					$record = mysql_query($sql) or die(mysql_error());
					while($data=mysql_fetch_assoc($record)){ 
						$str=$data['CS_DATE_IN'];
						$date=strtotime($str); 

						$str2=$data['CS_ACT'];
						$date2=strtotime($str2); 



						$CS_PAY=$data['CS_PAY'];

						?>

						<tbody>
							<tr> 
								<td><div align="center">&nbsp;<?php echo $data['CS_COST'];?>&nbsp;</div></td>
								<td><div align="center"><?php echo thai_date4($date);?>  </div></td>
								<td><div align="center"><?php echo thai_date4($date2);?>  </div></td>
								<td><div align="center">&nbsp; <?php echo number_format("$CS_PAY",2);?>&nbsp;</div></td>

								
								<td><img src="images/icons/png/Edit-128.png"></a></div></td>

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

			</div>

		</body>
		</html>