<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
  <title>แก้ไขข้อมูลลูกค้า</title>

  <!-- Start font-->
  <link rel="stylesheet" type="text/css" href="font-awesome\css\font-awesome.min.css">

  <!--Bootstrap-->
  <link href="bootstrap_ 2/css/bootstrap.css" rel="stylesheet">
  <link href="css/flat-ui.css" rel="stylesheet">
  <link href="css/demo.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/bin.ico">
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
<body bgcolor="#FFFF66" text="BLUE" link="BLUE" vlink="BLUE" alink="BLUE" ><center>
  <form id="form01" name="form01" method="post" action="update_data_Customer.php">
    <br> <br>

    <?php
    include("connect/connect.php");
    $find_Cus_ID = $_REQUEST['Cus_ID'];
    $sql = " SELECT * " ;
    $sql = $sql." FROM customer where Cus_ID = \"".$find_Cus_ID."\" "  ;
    $record=mysql_query($sql) or die(mysql_error());
    $data = mysql_fetch_assoc($record) ;

    ?>

    <table border="0" >
      <tr  align="center" bgcolor="#2ECC71"> 
       <td colspan="2" style="padding: 10px;"><FONT COLOR=#FFFFFF> แก้ไขข้อมูลลูกค้า </font></td> 
     </tr>
     <tr>
      <td>
        <br>
      </td>
    </tr>
    <tr>
      <td align="right">รหัสลูกค้า  &nbsp; </td>
      <td><input type="text" name="txt_Cus_id" id="txt_Cus_id"  value="<?php echo ($data['Cus_ID']); ?>" size="3" 
        readonly class="form-control"  style="width: 17%;   height: 85%;"></td>  </td>
      </tr>
      <tr>
        <td align="right"> &nbsp; ชื่อ  &nbsp; </td>
        <td align="left">
          <label for="txt_Cus_name"></label>
          <input type="text" name="txt_Cus_name" id="txt_Cus_name"   value="<?php echo ($data['Cus_Name']); ?>"   size="30" 
          class="form-control" style="width: 80%;   height: 85%;"></td>
        </tr>

        <tr>
          <td align="right"> &nbsp; สกุล  &nbsp; </td>
          <td align="left">
            <label for="txt_Cus_lname"></label>
            <input type="text" name="txt_Cus_lname" id="txt_Cus_lname"  value="<?php echo ($data['Cus_lname']) ; ?>" size="30" 
            class="form-control" style="width: 80%;   height: 85%;">
          </td>
        </tr>


        <tr>

          <td align="right"> &nbsp; เบอร์โทรศัพท์  &nbsp; </td>
          <td align="left">
           <label for="txt_Cus_Tel"></label>
           <input type="text" name="txt_Cus_Tel" id="txt_Cus_Tel"  value="<?php echo ($data['Cus_Tel']) ; ?>" size="30" 
           class="form-control" style="width: 80%;   height: 85%;">
         </td>
       </tr>
       <tr>
        <td align="right"> &nbsp; ที่อยู่  &nbsp; </td>
        <td align="left">
         <label for="txt_Cus_Add"></label>
          <textarea class="form-control" name="txt_Cus_Add" style="margin-top: 0px; margin-bottom: 16px; height: 60px; width: 80%;"> <?php echo ($data['Cus_Add']);?> </textarea>
        </td>
      </tr>

      <td colspan="2" align="center"> 
        <button type="submit" name="btnsummit" id="btnsummit" class="btn btn-primary btn-large btn-block" style="width: 30%;"> 
          &nbsp; บันทึก &nbsp;</button >
        </form>
      </td>
    </tr>
    <tr>
      <td>
        <br>
      </td>
    </tr>

    <tr>
      <td colspan="2" align="center"> 
       <form id="formend" name="formend" method="post" action="./manage_Customer.php">
        <button type="submit" name="btnSearch" id="btnSearch"  class="btn btn-block btn-lg btn-info" style="width: 50%;">
          กลับสู่หน้าลูกค้า</button> 
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

</center>
</body>
</html>