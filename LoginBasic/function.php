<?php

/*
 * Function สำหรับการ Login
 */
function doLogin($user,$pass)
{
	# เรียกใช้งานตัวเชื่อมต่อ DB
	require_once('dbconnection.php');
	# สร้าง  SQL สำหรับเลือกข้อมูลจาก DB 
	$sql = "Select * From users Where username='$user' and password='$pass';";
	//echo $sql;
	$result = mysql_query($sql) or die(mysql_error());
	if (mysql_num_rows($result)>0) 
	{
		# เมื่อพบข้อมูล user pass ที่ต้องการ
		$data = mysql_fetch_assoc($result);
		/* นำข้อมูลจาก DB เข้าไปเก็บใน SESSION
		 * $data['...']  ... คือชื่อ Field ใน Table ที่เรียกข้อมูล
		 * เช่น  จะนำชื่อ user มา เก็บใน session โดย Table ในฐานข้อมูลมี Field ชื่อว่า username
		 * ให้เข้าถึงโดยใช้ $data['username']
		 */
		$_SESSION['user'] = $data['username']; # ชื่อ username
		$_SESSION['fname'] = $data['fname']; # ชื่อจริง
		$_SESSION['lname'] = $data['lname']; # นามสุล

		return true;
	}
	else return false;
}

/*
 * Function สำหรับตรวจสอบการ Login
 */
function Checklogin()
{
	# ตรวจสอบว่ามีการสร้าง Session ชื่อว่า  user นี้ไว้
	# หากพบแล้วหมายความว่า Login แล้ว
	# * $_SESSION['user'] จะถูกกำหนดไว้ใน Function doLogin เรียบร้อยแล้ว
	if(isset($_SESSION['user']))
	{
		return true;
	}
	else return false;
}

