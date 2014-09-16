<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="texy/html; charset=utf-8" />
<title> Manage EMPLOYEE </title>
</head>

<!-- DC Table Styles I CSS -->
<link type="text/css" rel="stylesheet" href="css/dc_tables1.css" />
<link type="text/css" rel="stylesheet" href="css/button.css" />
<body bgcolor="#c0e1da" link="BLUE" vlink="BLUE" alink="BLUE">
<?php include("connect/connect.php"); ?>
<center>


<table border="0">
	<tr><br>
		<td colspan="7" align="center" style="font-size: 40px;">
		<font face ="TH Sarabun New"> การจัดการข้อมูลลูกค้า</style> </td></font>
	</tr>
<tr>
	<form id="form1" name="form1" method="post" action="manage_Customer.php">
		<td style="font-size: 20px;"> 
			<label> &nbsp; รหัสลูกค้า </label>
		</td>
		<td style="font-size: 20px;"> <input type="text" name="s_emp_id" id="s_emp_id" class="idtxt"> </td>
		<td style="font-size: 20px;"> <label> ชื่อลูกค้า &nbsp; </label> </td>
		<td style="font-size: 20px;"> <input type="text" name="s_emp_name" id="s_emp_name" class="txt"> </td>

		
			<td> <input type="submit" name="btnsearch" id="btnsearch" value="ค้นหา" class="btn"></td> 
			<td> <input type="reset" name="btnreset" id="btnreset" value="ล้าง" class="btn"></td>
			
		</form>
	<form id="form2" name="form2" method="post" action="accept_data_employee.php">
		<td>
			<input type="submit" name="btnAdd" id="btnAdd" value="เพิ่มข้อมูลลูกค้า" class="btn"></td>
		</td>
	</form>

</tr>
</table>
<br>
<br>
<? 
$q_emp_id=$_REQUEST['s_emp_id'];
$q_emp_name=$_REQUEST['s_emp_name'];
if($q_emp_id=="") $q_emp_id="%" ;
if($q_emp_name=="") $q_emp_name="%";
$sql="select * ";
$sql=$sql."from employee ";
$sql=$sql."where emp_id like "."\"".$q_emp_id."\" " ;
$sql=$sql."and emp_name like"."\"".$q_emp_name."\" ";
$sql=$sql."order by emp_id ";
#echo "<br>" .$sql."<br>";
?>

<!-- DC Table Styles I:12 Start -->
<table class="dc_table_s12" summary="Sample Table" style="width:50%;" >
	<thead>
		<tr style="height: 50px;">
			<td><div align="center"><FONT COLOR=#FFFFFF> &nbsp;รหัสลูกค้า&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#FFFFFF> &nbsp;ชื่อ-สกุล&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#FFFFFF> &nbsp;เบอร์โทรศัพท์&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#FFFFFF> &nbsp;ที่อยู่&nbsp;</div></td>
			<td><div align="center"><FONT COLOR=#FFFFFF> &nbsp;แก้ไข&nbsp;</FONT></div></td>
		</tr>
	</thead>


<? $record = mysql_query($sql);
while($data=mysql_fetch_assoc($record)){ ?>
<tbody>
	<tr> 
		<td><div align="center"><a href="./show_emp_work.php?emp_id=<?echo $data[emp_id]; ?>">
				<? echo $data[emp_id]; ?> </a> </div></td>
		<td><div align="left">&nbsp; <? echo $data[emp_name]; ?>&nbsp; 
				<? echo $data[emp_lname];?></div></td>
		<td><div align="center">&nbsp; <? echo $data[job];?>&nbsp;</div></td>
		<td><div align="center">&nbsp;<? echo $data[chg_hour];?>&nbsp;</div></td>
		<td><div align="center"><a href="./edit_emp_recv.php?emp_id=<?echo $data[emp_id];?>">
		<img src="img/edit.png"></a></div></td>
	</tr>
</tbody>

	<? } ?> 
</table>
</center>
</body>
</html>