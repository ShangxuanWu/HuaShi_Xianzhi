<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Declare page as mobile friendly --> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<!-- Declare page as iDevice WebApp friendly -->
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png"> 
<!-- iPhone 3, 3Gs -->
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" 			media="screen and (max-device-width: 320px)" /> 
<!-- iPhone 4 -->
<link rel="apple-touch-startup-image" href="images/splash/splash-screen_402x.png" 		media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<!-- iPhone 5 -->
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen_403x.png" />

<!-- Page Title -->
<title>@华师闲置</title>

<!-- Stylesheet Load -->
<link href="styles/style.css"				rel="stylesheet" type="text/css">
<link href="styles/framework-style.css" 	rel="stylesheet" type="text/css">
<link href="styles/framework.css" 			rel="stylesheet" type="text/css">
<link href="styles/bxslider.css"			rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"			rel="stylesheet" type="text/css">
<link href="styles/icons.css"				rel="stylesheet" type="text/css">
<link href="styles/retina.css" 				rel="stylesheet" type="text/css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" />


<!--Page Scripts Load -->
<script src="scripts/jquery.min.js"		type="text/javascript"></script>	
<script src="scripts/hammer.js"			type="text/javascript"></script>	
<script src="scripts/jquery-ui-min.js"  type="text/javascript"></script>
<script src="scripts/subscribe.js"		type="text/javascript"></script>
<script src="scripts/contact.js"		type="text/javascript"></script>
<script src="scripts/jquery.swipebox.js" type="text/javascript"></script>
<script src="scripts/bxslider.js"		type="text/javascript"></script>
<script src="scripts/colorbox.js"		type="text/javascript"></script>
<script src="scripts/retina.js"			type="text/javascript"></script>
<script src="scripts/custom.js"			type="text/javascript"></script>
<script src="scripts/framework.js"		type="text/javascript"></script>

</head>
<body>

<div id="preloader">
	<div id="status">
    	<p class="center-text">
			莫着急...
            <em>闲置君马上就来！</em>
        </p>
    </div>
</div>

<div class="header">
    <a class="logo-home" href="index.html"><img src="images/logob.png" alt="img" width="40"></a>
    <div class="header-text">
        <strong>求购信息提交</strong>
        <em align = "right">提交成功！</em>
    </div>
</div>
<div class="header-clear"></div>

<div class="content">
      
      
      
      <div class="container">
          <div class="blog-post">
                 
                  <p>


                      <font color='blue'>闲置君已经收到了您的信息~<br><br></font>
您的闲置信息如下：<br><br>

                     
【闲置名称】 <?php echo $_POST["name"]; ?><br>
【闲置价格】 <?php echo $_POST["price"]; ?><br>
【联系方式】<?php echo $_POST["phone"]; ?><br><br>
<?php    
    $con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if(!$con){ 
    die('could not connect:'.mysql_error());
}
mysql_select_db(SAE_MYSQL_DB,$con);
mysql_set_charset("utf8_general_ci");
$name=$_POST["name"];
$price=$_POST["price"];
$description=$_POST["description"];
$phone=$_POST["phone"];
$location=$_POST["location"];
$type=$_POST["type"];

$sql3="select MAX(id) FROM want";
$query=mysql_query($sql3);
$rs=mysql_fetch_array($query);
$count=$rs[0]+1;
    
$sql2= "insert into want (time,name,price,description,contact,location,type) values (now(),'$name','$price','$description','$phone','$location','$type')";
mysql_query($sql2) or die(mysql_error());
echo "<font color='red'>客官，请记住您的闲置ID：";
echo $count;
echo "</font>";
mysql_close($con);


?>
    <div class="decoration"></div>                   
                      
<div class="footer">
    <div class="small-navigation-icons">

        <div class="clear"></div>
    </div>
    <p class="copyright">COPYRIGHT 2016. @华师闲置 ALL RIGHTS RESERVED</p>
</div>