<html manifest="cache.manifest">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
<title>PN Plastic </title> 
<link rel="stylesheet" href="CSS/main.css" media="screen">
 
<link href="bootstrap_ 2/css/bootstrap.css" rel="stylesheet">
<link href="css/flat-ui.css" rel="stylesheet">
<link href="css/demo.css" rel="stylesheet">
<link rel="shortcut icon" href="images/bin.ico">

    <!-- Start Menu-->
  <link rel='stylesheet' type='text/css' href='css/style_menu.css' />
  <script type='text/javascript' src='js/menu_jquery.js'></script>

  <!--iconmoon-->
        <link rel="stylesheet" href="icomoon/demo-files/demo.css">
        <link rel="stylesheet" href="icomoon/style.css">

    <!-- Start font-->
 <link rel="stylesheet" type="text/css" href="font-awesome\css\font-awesome.min.css">


</head>
<body id="body" >
	 <div class="container">
      <img src="img/PN.png"> 
                     <img src="img/banner.png" style="width: 70%;">

    <div id='cssmenu'>
<ul>
   <li class='active'><a href='home.php'target="iframe" > <i class="fa fa-home fa-lg"></i>&nbsp;<span>หน้าแรก</span></a></li>
   <li class='has-sub'><a href='#'><i class="fa fa-list-alt fa-lg"></i>&nbsp;<span>ข้อมูลพื้นฐาน</span></a>
      <ul>
         <li class='has-sub'><a href='#'><i class="fa fa-user fa-lg"></i>&nbsp;<span>ข้อมูลลูกค้า</span></a>
            <ul>
               <li><a href="./manage_Customer.php" target="iframe"><span class="fui-user"></span><span class="mls">ลูกค้าทั่วไป</span></a></li>
               <li><a href='./manage_factory.php' target="iframe"><i class="fa fa-building"></i>&nbsp;<span>โรงงานฉีดพลาสติก</span></a></li>
            </ul>
         </li>
         <li><a href="manage_Employee.php" target="iframe"><i class="fa fa-users fa-lg"></i>&nbsp;<span>ข้อมูลพนักงาน</span></a></li>
         <li><a href='manage_recycle.php'  target="iframe"><i class="fa fa-recycle fa-lg"></i>&nbsp;<span>ข้อมูลพลาสติก</span></a></li>
         <li><a href='manage_Machine.php'target="iframe"><i class="fa fa-cog fa-lg"></i>&nbsp;<span>ข้อมูลเครื่องจักร</span></a></li>
         <li class='last'><a href='manage_Car.php'  target="iframe"><i class="fa fa-car fa-lg"></i>&nbsp;<span>ข้อมูลรถยนต์</span></a></li>
      </ul>
   </li>

   <li class='has-sub' ><a href=""><span>การทำงาน</span></a>
         <ul>
                    <li><a href='process.php' target="iframe"><span class="fui-user"></span><span class="mls">ขายสินค้า</span></a></li>
           <li><a href='manage_Process.php' target="iframe"><span class="fui-user"></span><span class="mls">รับซื้อวัตถุดิบ</span></a></li>
         <li class='has-sub' ><a href='manage_Customer_Product_in.php'  target="iframe"><i class="fa fa-dropbox"></i>&nbsp;<span>รับคำสั่งบดผลิต</span></a>

            </li>
         <li class='has-sub' ><a href=''><i class="fa fa-cog fa-spin"></i>&nbsp;<span>สั่งบดพลาสติก</span></a>
          <ul>
                <li><a href="accept_data_Customer_pro_In.php" target="iframe"><span class="fui-user"></span><span class="mls">ภายนอก</span></a></li>
               <li><a href='process.php' target="iframe"><span class="fui-user"></span><span class="mls">ภายใน</span></a></li>
            </ul>
         </li>

      </ul>
   </li>
   <li  class='' ><a href='accept_data_Costs.PHP' target="iframe"><span>ค่าใช้จ่าย</span></a> 
   </li>
   
   <li class='has-sub'><a href='#'><i class="fa fa-file-text  fa-lg"></i>&nbsp;<span>รายงาน</span></a>
        
        <ul>
         <li><a href='' target="iframe"><span>สินค้าคงเหลือ</span></a></li>
         <li><a href=''><span>วัตถุดิบคงเหลือ</span></a></li>
         <li><a href=''><span>รายงานกำไรขาดทุน</span></a></li>
           <li class='has-sub'><a href='#'><span>ประวัติการทำงาน</span></a>
            <ul>
          <li><a href=''><span>ประวัติการสั่งซื้อวัตถุดิบ</span></a></li>
         <li><a href=''><span>ประวัติการขายสินค้า</span></a></li>
         <li><a href=''><span>ประวัติการรับคำสั่งผลิต</span></a></li>
         <li><a href=''><span>ประวัติการผลิต</span></a></li>
          </ul>
         <li><a href=""><span>วิเคราะห์ค่าใช้จ่าย ต่อ 1 การผลิต</span></a></li>
      </ul>
   </li>


   
   <li style="float: right; ">
    <a href="login.php" style="background: #BDC3C7;"><i class="fa fa-sign-out fa-lg"></i>&nbsp;Logout</li></a>

   
</ul>
</div>
                   
      <!--iFrame-->
<iframe src="home.php" name="iframe" align="middle" width="100%" height="100%" frameborder="0" style="border: none;" seamless ></iframe>



<!--Footer-->
 <footer>
      <div class="container">
        <div class="row">
          <div class="col-xs-7">
            <h3 class="footer-title">P.N. Plastic</h3>
            <p>ที่ตั้ง 64/10 หมู่ 1 ต.นาดี อ.เมือง จ.สมุทรสาคร 74000 <br>
              โทรศัพท์ 086-3099097 <br>
              Go to: <a href="http://designmodo.com/flat-free" target="_blank">designmodo.com/flat-free</a>
            </p>

            <p class="pvl">
              <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="https://platform.twitter.com/widgets/tweet_button.1401325387.html#_=1401599261954&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=file%3A%2F%2F%2FC%3A%2FAppServ%2Fwww%2FFlat-UI-master%2FFlat-UI-master%2Findex.html&amp;size=m&amp;text=Flat%20UI%20Free%20-%20PSD%26amp%3BHTML%20User%20Interface%20Kit&amp;url=http%3A%2F%2Fdesignmodo.com%2Fflat-free%2F&amp;via=designmodo" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 110px; height: 20px;"></iframe>
              <script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
              <iframe src="http://ghbtns.com/github-btn.html?user=designmodo&amp;repo=Flat-UI&amp;type=watch&amp;count=true" height="20" width="107" frameborder="0" scrolling="0" style="width:105px; height: 20px;" allowtransparency="true"></iframe>
              <iframe src="http://ghbtns.com/github-btn.html?user=designmodo&amp;repo=Flat-UI&amp;type=fork&amp;count=true" height="20" width="107" frameborder="0" scrolling="0" style="width:105px; height: 20px;" allowtransparency="true"></iframe>
              <iframe src="http://ghbtns.com/github-btn.html?user=designmodo&amp;type=follow&amp;count=true" height="20" width="195" frameborder="0" scrolling="0" style="width:195px; height: 20px;" allowtransparency="true"></iframe>
            </p>

            <a class="footer-brand" href="menu.php" target="_blank">
              <img src="img/logo-3-1.png" alt="menu.php">
            </a>
          </div>  
        </div>
      </div>
    </footer> 
</div><!--End Container-->
                
      <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.stacktable.js"></script>
    <script src="http://vjs.zencdn.net/4.3/video.js"></script>
    <script src="js/application.js"></script>
    <!--iconmoon-->
      <script src="demo-files/demo.js"></script>




</body>
</html>