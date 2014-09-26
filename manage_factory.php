<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta charset="UTF-8" />
<title> Manage Factory </title>
</head>
<!-- breadcrumb -->
 <link rel="stylesheet" href="css/style_breadcrumb.css" media="screen" type="text/css" />
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


<!--validation-->
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<script src="js/jquery.js" type="text/javascript"></script>
<!-- FRENCH LOCALISATION	<script src="js/jquery.validationEngine-fr.js" type="text/javascript"></script>  -->
<script src="js/jquery.validationEngine.js" type="text/javascript"></script>


<body bgcolor="#c0e1da" link="BLUE" vlink="BLUE" alink="BLUE">

	<br>
	<ul id="breadcrumb" style="font-size: small;">
  <li><a href="index.php"  target="iframe"><i class="fa fa-home fa-lg"></i>&nbsp;</a></li>
  <li><a href="#"><i class="fa fa-list-alt fa-lg"></i>&nbsp; ข้อมูลพื้นฐาน</a></li>
  <li><a href=""><i class="fa fa-user fa-lg"></i>&nbsp; ข้อมูลลูกค้า</a></li>
 <li><a href="./manage_Customer.php" target="iframe"><span class="fui-user"></span> โรงงานฉีดพลาสติก </a></li>
</ul>


<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
		include("connect/connect.php");
		include("function.php");

		 ?>
<center>

<table border="0">
	<tr><br>
		<td colspan="9" align="center" style="font-size: 40px;">
		<b><font face ="TH Sarabun New"> การจัดการข้อมูลโรงงาน</style> </b></td></font>
	</tr>
<tr>
	<form id="form1" name="form1" method="post" action="manage_Customer.php">
 
 <!--รหัสลูกค้า --> 
		<td> 
		<input type="text" value placeholder="รหัสโรงงาน" name="s_Cus_id" id="s_Cus_id" class="form-control ">
	</td>
	<td>
&nbsp;
	</td>

		<!--ชื่อลูค้า-->
		<td> 
			<input type="text"  value placeholder="ชื่อบริษัท" name="s_Cus_name" id="s_Cus_name" class="form-control validate[required,custom[onlyLetter],length[0,100]] text-input"> 
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
			 <button type="reset" name="btnreset" id="btnreset" class="btn btn-block btn-lg btn-primary" action="manage_Customer.php" target="iframe" style="font-size: inherit;" onClick="javascript:location.reload();"><i class="fa fa-refresh"></i>&nbsp;ล้าง</button></td>
		</form>
	<form id="form2" name="form2" method="post" action="accept_data_Customer.php">
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

/*$q_Cus_id=$_REQUEST['s_Cus_id'];
$q_Cus_name=$_REQUEST['s_Cus_name'];

if($q_Cus_id=="") $q_Cus_id="%" ;
if($q_Cus_name=="") $q_Cus_name="%" ;*/

$sql="select * from factory ";



//echo "<br>" .$sql."<br>";
?>

<!-- DC Table Styles I:12 Start -->
<table class="dc_table_s12" summary="Sample Table" style="width:90%;" >
	<thead>
		<tr style="height: 40px;">
			<td><div align="center"><FONT COLOR=#fff> &nbsp;รหัสบริษัท&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;ชื่อบริษัท</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;เบอร์โทรศัพท์&nbsp;</FONT></div></td>
						<td><div align="center"><FONT COLOR=#fff> &nbsp;เบอร์โทรสาร&nbsp;</FONT></div></td>

			<td><div align="center"><FONT COLOR=#fff> &nbsp;แก้ไข&nbsp;</FONT></div></td>

		</tr>
	</thead>


<?php $record = mysql_query($sql);
while($data=mysql_fetch_assoc($record)){ ?>
<tbody>
	<tr> 
		<td><div align="center"><?PHP  echo $data['fac_id']; ?>  </div></td>
		<td><div align="left">&nbsp; <?PHP  echo $data['fac_name']; ?> </div></td>

		<td><div align="center">&nbsp; <?PHP  echo $data['fac_tel'];?>&nbsp;</div></td>
		<td><div align="center">&nbsp;<?PHP  echo $data['fac_fax'];?>&nbsp;</div></td>

		<td><div align="center"><a href="./edit_Cus_recv.php?fac_id=<?PHP echo $data['fac_id'];?>">
		<img src="images/icons/png/Edit-128.png"></a></div></td>
		
	</tr>
</tbody>

	<?PHP } ?> 
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