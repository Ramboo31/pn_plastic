<?php

/*
 * Function สำหรับการ Login
 */
function doLogin($user,$pass)
{
	# เรียกใช้งานตัวเชื่อมต่อ DB
	require_once('connect/connect.php');
	# สร้าง  SQL สำหรับเลือกข้อมูลจาก DB 
	$sql = "Select * From user Where user_name='$user' and user_pass='$pass';";
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
		$_SESSION['user'] = $data['user_name']; # ชื่อ username


		return true;
	}
	else return false;
}
function logout()
{
	session_destroy();
	header("location:login.php");
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



$thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");

$thai_month_arr_full=array(
"0"=>"",
"1"=>"มกราคม",
"2"=>"กุมภาพันธ์",
"3"=>"มีนาคม",
"4"=>"เมษายน",
"5"=>"พฤษภาคม",
"6"=>"มิถุนายน",
"7"=>"กรกฎาคม",
"8"=>"สิงหาคม",
"9"=>"กันยายน",
"10"=>"ตุลาคม",
"11"=>"พฤศจิกายน",
"12"=>"ธันวาคม");

$thai_month_arr=array(
"0"=>"",
"1"=>"ม.ค.",
"2"=>"ก.พ.",
"3"=>"มี.ค.",
"4"=>"เม.ย.",
"5"=>"พ.ค.",
"6"=>"มิ.ย.",
"7"=>"ก.ค.",
"8"=>"ส.ค.",
"9"=>"ก.ย.",
"10"=>"ต.ค.",
"11"=>"พ.ย.",
"12"=>"ธ.ค."
);
function thai_date($time){
global $thai_day_arr,$thai_month_arr;
$thai_date_return = date("j",$time);
$thai_date_return.= " ".$thai_month_arr[date("n",$time)];
$thai_date_return.= " ".(date("Y",$time)+543);
$thai_date_return.= " ".date("H:i",$time)." น.";
return $thai_date_return;
}
 
function thai_date2($time){
global $thai_day_arr,$thai_month_arr;
$thai_date_return = date("j",$time);
$thai_date_return.= " ".$thai_month_arr[date("n",$time)];
$thai_date_return.= " ".(date("Y",$time)+543);
return $thai_date_return;
}
 
function thai_date3($time){
global $thai_month_arr_full;
$thai_date_return = " ".$thai_month_arr_full[date("n",$time)];
$thai_date_return.= " ".(date("Y",$time)+543);
return $thai_date_return;
}
 
function thai_date4($time){
global $thai_day_arr,$thai_month_arr_full;
$thai_date_return = date("j",$time);
$thai_date_return.= " ".$thai_month_arr_full[date("n",$time)];
$thai_date_return.= " ".(date("Y",$time)+543);
return $thai_date_return;
}

function thai_date5($time){
global $thai_month_arr_full;
$thai_date_return = " ".$thai_month_arr_full[date("n",$time)];
return $thai_date_return;
}

function dropdownMonth($options)
{
	global $thai_month_arr_full;
	$html = '<select class="btn btn-default dropdown-toggle" name="'.$options['name'].'" style=" color: black;"  > <span class="caret"></span>';
	$html .= '<option>เลือกเดือน</option>';
	foreach ($thai_month_arr_full as $key => $value) {
		if($key != "0") $html .= '<option value="'.$key.'">'.$value.'</option>';
	}
	$html .= "</select>";
	return $html;
}

function Checktel($tel)
{
	if(strlen($tel) == 10)
	{
		$group1 = substr($tel, 0 , 3);
		$group2 = substr($tel, 3 , 3);
		$group3 = substr($tel, 6 , 4);

		return $group1."-".$group2."-".$group3;
	}
	elseif(strlen($tel) == 9) 
	{
		$group1 = substr($tel, 0 , 2);
		$group2 = substr($tel, 2 , 3);
		$group3 = substr($tel, 5 , 4);

		return $group1."-".$group2."-".$group3;
	}
}