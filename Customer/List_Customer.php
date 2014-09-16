<html>
<head>
<meta http-equiv="Conten-type" content="text/html; charset=utf-8" />
<title> List Employee </title>
</head>

<body bgcolor="#CFFEF0" text="BLUE" link="BLUE" vlink="BLUE" alink="BLUE">
<?php
include("connect_db.php");
$sql="SELECT * FROM employee order by emp_id" ;

$record=mysql_query($sql)or die(mysql_error());
?>

<CENTER>
<BR>
<B> รายงาน รายชื่อพนักงาน</B><BR>
เรียงตามรหัสพนักงาน <BR>
<BR>
</CENTER>

<table border="1" align="center">
<tr bgcolor="5495cf">
	<td><div align="center"><FONT COLOR=#FFFFFF>&nbsp;รหัสพนักงาน&nbsp;</div></td></FONT>
	<td><div align="center"><FONT COLOR=#FFFFFF> ชื่อพนักงาน </div></td></FONT>
	<td><div align="center"><FONT COLOR=#FFFFFF> หน้าที่ </div></td></FONT>
	<td><div align="center"><FONT COLOR=#FFFFFF>&nbsp; ค่าตอบแทนรายชั่วโมง &nbsp;</div></td></FONT>
</tr>
	
  <?php while($data = mysql_fetch_assoc($record)){ ?>
  <tr>
    <td><div align="center"><? echo $data[emp_id]; ?></div></td>
	<td><div align="center">&nbsp;<? echo $data[emp_name]; ?>&nbsp;<? echo $data[emp_lname]; ?></div></td>
	<td><div align="center">&nbsp;<? echo $data[job]; ?>&nbsp;</div></td>
	<td><div align="center"> <? echo $data[chg_hour]; ?></div></td>
	</tr>
	<? } ?>
	</table>
	<br>
	</body>
	</html>
