<?php 
session_start();
include("connect/connect.php"); 
include("function.php"); 

if (!Checklogin())
{
	header("location: login_err.php"); //ทำหน้าเพื่อให้เข้าหน้า Login
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta charset="UTF-8" />
<title> Manage Customer </title>
</head>

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

<!-- breadcrumb -->
 <link rel="stylesheet" href="css/style_breadcrumb.css" media="screen" type="text/css" />


<!--validation-->
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<script src="js/jquery.js" type="text/javascript"></script>
<!-- FRENCH LOCALISATION	<script src="js/jquery.validationEngine-fr.js" type="text/javascript"></script>  -->
<script src="js/jquery.validationEngine.js" type="text/javascript"></script>

<style type="text/css">

body {
text-align: left; 
}

</style>
<body bgcolor="#c0e1da" link="BLUE" vlink="BLUE" alink="BLUE">
	<br>
	<ul id="breadcrumb" style="font-size: small;">
  <li><a href="index.php"  target="iframe"><i class="fa fa-home fa-lg"></i>&nbsp;</a></li>
  <li><a href="#"><i class="fa fa-list-alt fa-lg"></i>&nbsp; ข้อมูลพื้นฐาน</a></li>
  <li><a href="manage_Employee.php" target="iframe"><i class="fa fa-users fa-lg"></i>&nbsp; ข้อมูลพนักงาน</a></li>
</ul>

<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("connect/connect.php"); ?>
<center>

<table border="0">
	<tr><br>
		<td colspan="9" align="center" style="font-size: 40px;">
		<b><font face ="TH Sarabun New"> การจัดการข้อมูลพนักงาน</style> </b></td></font>
	</tr>
<tr>
	<form id="form1" name="form1" method="post" action="manage_Employee.php">
 
 <!--รหัสลูกค้า --> 
		<td align="right"> 
		<input type="text" value placeholder="รหัสพนักงาน" name="s_Cus_id" id="s_Cus_id" class="form-control" style="width: 54%;">
	</td>
	<td>
&nbsp;
	</td>

		<!--ชื่อลูค้า-->
		<td> 
			<input type="text"  value placeholder="ชื่อพนักงาน" name="s_Cus_name" id="s_Cus_name" class="form-control validate[required,custom[onlyLetter],length[0,100]] text-input"> 
		</td>
		<td>
&nbsp;
	</td>
			<td> 
				<button type="submit" name="btnsearch" id="btnsearch"  class="btn btn-block btn-lg btn-primary" style="font-size: inherit;"> <i class="fa fa-search"></i> ค้นหา</button>
			</td> 
			<td>
				&nbsp;
			</td>
			<td>
			 <button type="reset" name="btnreset" id="btnreset" class="btn btn-block btn-lg btn-primary" action="manage_Employee.php" target="iframe" style="font-size: inherit;" onClick="javascript:location.reload();"><i class="fa fa-refresh"></i>&nbsp;ล้าง</button></td>
		</form>
	<form id="form2" name="form2" method="post" action="accept_data_Employee.php">
		<td>
				&nbsp;
		</td>
		<td>
			<button type="submit" name="btnAdd" id="btnAdd"  class="btn btn-block btn-lg btn-primary" style="font-size: inherit;"><i class="fa fa-plus"></i> เพิ่มข้อมูล</button></td>
		</td>
	</form>

</tr>
</table>
<br>

<?php 

$q_Cus_id=$_REQUEST['s_Cus_id'];
$q_Cus_name=$_REQUEST['s_Cus_name'];
if($q_Cus_id=="") $q_Cus_id="%" ;
if($q_Cus_name=="") $q_Cus_name="%" ;

$sql="select * ";
$sql=$sql."from employee ";
$sql=$sql."where Emp_ID like '%$q_Cus_id%'" ;
$sql=$sql."and CONCAT(Emp_Pre,Emp_Name,Emp_lname) like '%$q_Cus_name%'";
$sql=$sql."order by Emp_ID ";

//echo "<br>" .$sql."<br>";
?>

<!-- DC Table Styles I:12 Start -->
<table class="dc_table_s12" summary="Sample Table" style="width:80%;" >
	<thead>
		<tr style="height: 50px;">
			<td scope="col"><div align="center"><FONT COLOR=#fff> &nbsp;รหัสลูกค้า&nbsp;</FONT></div></td>
			<td scope="col"><div align="center"><FONT COLOR=#fff> &nbsp;ชื่อ&nbsp;-&nbsp;นามสกุล&nbsp;</FONT></div></td>
			<td scope="col"><div align="center"><FONT COLOR=#fff> &nbsp;เบอร์โทรศัพท์&nbsp;</FONT></div></td>
			<td scope="col"><div align="center"><FONT COLOR=#fff> &nbsp;สถานะ&nbsp;</FONT></div></td>
			<td scope="col"><div align="center"><FONT COLOR=#fff> &nbsp;แก้ไข&nbsp;</FONT></div></td>
		</tr>
	</thead>
	

<?php $record = mysql_query($sql);
while($data=mysql_fetch_assoc($record)){ ?>


<tbody>
	<tr> 
		<td><div align="center"><a href="./show_emp_work.php?Emp_ID=<?php echo $data['Emp_ID']; ?>"><?php echo $data['Emp_ID']; ?>  </div></a></td>
		<td><div align="center">&nbsp; <?php echo $data['Emp_Pre']; echo $data['Emp_Name']; ?> &nbsp;<?php echo $data['Emp_lname'];?></div></td>
		<td><div align="center">&nbsp; <?php echo $data['Emp_Tel'];?>&nbsp;</div></td>
		<td><a href="./del_Cus_recv.php?Emp_ID=<?php echo $data['Emp_ID'];?>">
		<FONT COLOR=#16A085><h6>Active</h4></FONT></a></div></td>
		<td><div align="center"><a href="./edit_emp_recv.php?Emp_ID=<?php echo $data['Emp_ID'];?>">
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