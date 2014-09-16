<html>
<head>
	<meta http-equiv="Conten-type" content="text/html; charset=utf-8" />
	<title> List Customer </title>
</head>

<!-- breadcrumb -->
<link rel="stylesheet" href="css/style_breadcrumb.css" media="screen" type="text/css" />

<!-- DC Table Styles I CSS -->
<link type="text/css" rel="stylesheet" href="css/dc_tables1_1.css" />

<!-- Start font-->
<link rel="stylesheet" type="text/css" href="font-awesome\css\font-awesome.min.css">

<body bgcolor="#ECF0F1" link="BLUE" vlink="BLUE" alink="BLUE">
	<?php
	include("connect/connect.php");
	$sql="SELECT * FROM customer order by Cus_ID" ;

	$record=mysql_query($sql)or die(mysql_error());
	?>
	<div id="divprint"> 
		<CENTER>
			<BR>
				<B> รายงาน รายชื่อลูกค้า</B><BR>
				เรียงตามรหัสลูกค้า <BR>
				<BR>


					<table class="dc_table_s2" summary="Overview of hosting plans" >
						<THEAD>
							<tr class="odd" >
								<td><div align="center"><FONT COLOR=#34495E>&nbsp;รหัสลูกค้า&nbsp;</div></td></FONT>
								<td><div align="center"><FONT COLOR=#34495E> ชื่อลูกค้า</div></td></FONT>
								<td><div align="center"><FONT COLOR=#34495E> เบอร์โทรศัพท์ </div></td></FONT>
								<td><div align="center"><FONT COLOR=#34495E>&nbsp; ที่อยู่ &nbsp;</div></td></FONT>
							</tr>
						</THEAD>
						<?php while($data = mysql_fetch_assoc($record)){ ?>
						<tbody bgcolor="#fff">
							<tr>
								<td><div align="center"><? echo $data[Cus_ID]; ?></div></td>
								<td><div align="left">คุณ<? echo $data[Cus_Name]; ?>&nbsp;<? echo $data[Cus_lname]; ?></div></td>
								<td><div align="center">&nbsp;<? echo $data[Cus_Tel]; ?>&nbsp;</div></td>
								<td><div align="center"> <? echo $data[Cus_Add]; ?></div></td>
							</tr>
						</tbody>
						<? } ?>

						<tfoot>
							<tr class="odd">
								<td class="column1"> </td>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
							</tr>
						</tfoot>
					</table>
					<br>
				</CENTER>
			</div>
			<input type="button" value="- พิมรายการสั่งสินค้า -" onclick="printDiv("divprint")">
			<a href="javascript:window.print()"> <img src="images\icons\png\icons.png" style="width: 8%;"> </a>
			<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
			<script src="js/index_breadcrumb.js"></script>

			<script type="text/javascript">  
function printDiv(divprint) {  
     var printContents = document.getElementById(divprint).innerHTML;  
     var originalContents = document.body.innerHTML;  
  
     document.body.innerHTML = printContents;  
     window.print();  
  
     document.body.innerHTML = originalContents;  
}  
</script>  

		</body>
		</html>
