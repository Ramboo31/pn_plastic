<html manifest="cache.manifest">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
<title>PN Plastic : Login</title> 
<link rel="stylesheet" href="CSS/main.css" media="screen">
 
 <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="css/flat-ui.css" rel="stylesheet">
<link href="css/demo.css" rel="stylesheet">
<link rel="shortcut icon" href="images/bin.ico">

<!-- popup-->
  <link rel="stylesheet" type="text/css" href="css/style_popup.css" />
  <script type="text/javascript" src="css/jquery.min.js"></script>
  <script type="text/javascript" src="js/popup.js"></script>

</head>
<body id="body" >
	 <div class="container">
	<center>

	        			<img src="img/logo-3.png">
	<div class="login">

    <div style="background: #E74C3C;"> <?php if(isset($_GET['err'])) echo "ข้อมูล Login ไม่ถูกต้อง : กรุณา Login ใหม่อีกครั้ง "; ?></div>


    <form  action="Checklogin.php" method="POST" id="login-form">
        <div class="login-screen">

          <div class="login-icon">
            <img src="images/icons/svg/clipboard.svg" alt="Clipboard">
            <h4>Welcome to <small>P.N. Plastic</small></h4>
          </div>

          <div class="login-form" >
            <div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="Enter your name" id="username" name="username" autofocus/>
              <label class="login-field-icon fui-user" for="username"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Password" id="password" name="password"/>
              <label class="login-field-icon fui-lock" for="password"></label>
            </div>

          <button  class="btn btn-primary btn-lg btn-block" data-effect="mfp-3d-unfold" >Log in </button>
           <!-- <a href="#">Log in</a> <a class="login-link" href="#">Lost your password?--></a>
          </div>

        </div>

  


       
   </div>

    </form>

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
</center>
</div>
</div>


</body>
</html>