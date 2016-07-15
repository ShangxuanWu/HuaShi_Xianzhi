<?php

/**
* $Id$
*
* SCS form upload example
*/

//you can ignore it


?>
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
<title>闲置搜索结果</title>

<!-- Stylesheet Load -->
<link href="styles/style.css"				rel="stylesheet" type="text/css">
<link href="styles/framework-style.css" 	rel="stylesheet" type="text/css">
<link href="styles/framework.css" 			rel="stylesheet" type="text/css">
<link href="styles/bxslider.css"			rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"			rel="stylesheet" type="text/css">
<link href="styles/icons.css"				rel="stylesheet" type="text/css">
<link href="styles/style2.css"				rel="stylesheet" type="text/css">
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
            <em>闲置君马上就来~</em>
        </p>
    </div>
</div>

<div class="header">
    <a class="logo-home" ><img src="images/logob.png" alt="img" width="40"></a>
    <div class="header-text">
        <strong>@华师闲置</strong>
        <em>huashi_xianzhi</em>
    </div>
</div>
<div class="header-clear"></div>

<div class="content">
      <div class="container no-bottom">
          <div class="heading">
              <div class="heading-left">
<em>由于流量费用巨大，闲置君暂提供有限的搜索图片功能= =请大家谅解！</em>
          
                  <h3>客官您好(●'v'●)</h3>
              </div>
              <div class="heading-right">
                  
              </div>
          </div>
      </div>
          
    
    
    
    
    <?php 

$name = isset($_POST['Text'])?trim($_POST['Text']):'';
    
/*******for search_record**********/





/*****************/
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if(!$con){ 
    die('could not connect:'.mysql_error());
}
mysql_select_db(SAE_MYSQL_DB,$con);
mysql_set_charset("utf8_general_ci");

$sql = "SELECT * 
FROM `test` 
WHERE id LIKE '%$name%' or name LIKE '%$name%'
ORDER BY id DESC
";
$sql1= "insert into search_record (search_text,search_time) values ('$name',now())";

$query = mysql_query($sql) or die(mysql_error());
mysql_query($sql1) or die(mysql_error());
$result = mysql_fetch_array($query);
mysql_close($con);
if(!$result)//开始判断是够为空  
    {  
     $url = "index2.html";
echo "<font color = 'red'>没有找到和 ";
echo $name;
    echo " 相关的闲置哟！</font><br><br>可能是最近童鞋们都没有在卖这些呢~<br><br>";
    } 
else
{
    echo "和  ";?>
    <?php echo $name;?><?php
	echo "  相关的闲置:<br>";
    ?>
    <br>
    <?php
 do{
?>
 
    <font color="blue">【闲置编号】<?php echo $result['id'];?></font><br>
    <font color="red"> 【闲置名称】<?php echo $result['name'];?></font><br>
     【闲置价格】<?php echo $result['price'];?><br>
     【发布时间】<?php echo $result['time'];?><br>
     【校区】<?php echo $result['location'];?><br>
     【联系方式】<?php echo $result['contact'];?><br>   
     【闲置描述】<?php echo $result['description'];?><br>
    <a href =
    
    
    <?php
    echo '"http://imgx.sinacloud.net/selling-photos-huashi/w_300,q_50/';
             echo $result['photo'];
             echo '"';
    ?>
        >【点我查看图片】</a>
    <br><br>
    <div class="decoration"></div>
    <br>
 
<?php
} while($result = mysql_fetch_array($query));
?>
</table>
<?php
}
?>
    
    
    
         
              
    <div class="decoration"></div>
</div>

<div class="footer">
    <div class="small-navigation-icons">

        <div class="clear"></div>
    </div>
    <p class="copyright">COPYRIGHT 2016 @华师闲置 ALL RIGHTS RESERVED</p>
</div>



</body>
</html>





