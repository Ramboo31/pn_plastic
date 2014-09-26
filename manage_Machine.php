<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta charset="UTF-8" />
<title> Manage Customer </title>
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

<?php 
		include("connect/connect.php");
		include("function.php");

		 ?>

<body bgcolor="#c0e1da" link="BLUE" vlink="BLUE" alink="BLUE">


	<br>
	<ul id="breadcrumb" style="font-size: small;">
  <li><a href="index.php"  target="iframe"><i class="fa fa-home fa-lg"></i>&nbsp;</a></li>
  <li><a href="#"><i class="fa fa-list-alt fa-lg"></i>&nbsp; ข้อมูลพื้นฐาน</a></li>
  <li><a href='manage_Machine.php'target="iframe"><i class="fa fa-cog fa-lg"></i>&nbsp;ข้อมูลเครื่องจักร</a></li>

</ul>

<center>

<table border="0">
	<tr><br>
		<td colspan="9" align="center" style="font-size: 40px;">
		<b><font face ="TH Sarabun New"> การจัดการข้อมูลเครื่องบดพลาสติก </b></td></font>
	</tr>
<tr>
	
<br>

<?php

$sql="SELECT  `Mac_ID` ,  `Capacity` , Emp_Pre, Emp_Name, Emp_lname ";
$sql=$sql."FROM  `machine` m ";
$sql=$sql."LEFT JOIN employee e ON ( m.`Emp_ID` = e.`Emp_ID` ) "; 


//echo "<br>" .$sql."<br>";
?>

<!-- DC Table Styles I:12 Start -->
<table class="dc_table_s12" summary="Sample Table" style="width:80%;" >
	<thead>
		<tr style="height: 50px;">
			<td><div align="center"><FONT COLOR=#fff> &nbsp;หมายเลขเครื่องบด&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;ศักยภาพในการทำงาน<br>(กิโลกรัม)&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;พนักงานประจำเครื่อง&nbsp;</FONT></div></td>
			<td><div align="center"><FONT COLOR=#fff> &nbsp;แก้ไข&nbsp;</FONT></div></td>

		</tr>
	</thead>


<?php $record = mysql_query($sql);
while($data=mysql_fetch_assoc($record)){ ?>
<tbody>
	<tr> 
		<td><div align="center"><?php echo $data['Mac_ID']; ?>  </div></td>
		<td><div align="center">&nbsp; <?php echo $data['Capacity'];?>&nbsp;</div></td>
		<td><div align="center">&nbsp; <?php echo $data['Emp_Pre']; ?><?php echo $data['Emp_Name']; ?> &nbsp;<?php echo $data['Emp_lname'];?></div></td>
		<td><div align="center"><a href="./edit_Mac_recv.php?Mac_ID=<?php echo $data['Mac_ID'];?>">
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