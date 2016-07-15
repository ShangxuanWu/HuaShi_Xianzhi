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
        <strong>闲置信息提交</strong>
        <em align = "right">提交结果</em>
    </div>
</div>
<div class="header-clear"></div>

<div class="content">
      
      
      
      <div class="container">
          <div class="blog-post">
                 
                  <p>


<?php
$file_size=$_FILES["file"]['size'];
if($file_size==0)
{
    // echo "<script>alert('$file_size)</script>";
    //echo '<br>您的闲置大小太大了，为：';
    //echo $file_size;
    echo "<script>alert('客官的闲置图片太大了~请返回闲置提交页面，压缩图片后重新上传。')</script>";
    echo '<br>您的闲置图片大小太大了，闲置君这里放不下~';
    return;

    //  echo '<script>window.close();</script>'; 
}
?>
                      您的闲置信息，我们已经收到啦~<br><br>

                      <font color='blue'>闲置信息如下，请一定要记得闲置编号哦！</font><br><br>

【闲置名称】 <?php echo $_POST["name"]; ?><br>
【闲置价格】 <?php echo $_POST["price"]; ?><br>
【联系方式】 <?php echo $_POST["phone"]; ?><br>
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



$sql = "SELECT * 
FROM `原始数据` 
WHERE H LIKE '%$name%' or A LIKE '%$name%'";
$sql1= "insert into search_record (search_text,search_time) values ('$name',now())";
$sql3="select MAX(id) FROM test";
$query=mysql_query($sql3);
$rs=mysql_fetch_array($query);
$count=$rs[0]+1;
$count1='.png';
$filename=$count."".$count1;

    
$sql2= "insert into test (time,name,price,description,contact,location,type,photo) values (now(),'$name','$price','$description','$phone','$location','$type','$filename')";
mysql_query($sql2) or die(mysql_error());
echo "<font color='red'>【闲置编号】 ";
echo $count;
echo "</font>";
mysql_close($con);

###############################################################

/**
* $Id$
*
* SCS class usage
*/

//you can ignore it
@include_once('config.php');

if (!class_exists('SCS')) require_once './class/SCS.php';

date_default_timezone_set('UTC');

// SCS access info
if (!defined('AccessKey')) define('AccessKey', '1gyrzihJMT7dcjFWEgRm');
if (!defined('SecretKey')) define('SecretKey', '58316601a56779fcaac0b35a5a625320706f7f68');

$originalName = $_FILES["file"]["name"]  ;
$uploadFile = $_FILES["file"]["tmp_name"]  ; // File to upload, we'll use the SCS class since it exists
$file_type = explode('.',$uploadFile);
$file_type = $file_type[1];

$bucketName = 'selling-photos-huashi'; // Storage-bucket

// If you want to use PECL Fileinfo for MIME types:
//if (!extension_loaded('fileinfo') && @dl('fileinfo.so')) $_ENV['MAGIC'] = '/usr/share/file/magic';


// Check if our upload file exists
if (!file_exists($uploadFile) || !is_file($uploadFile))
	exit("\nERROR: No such file: $uploadFile\n\n");

// Check for CURL
if (!extension_loaded('curl') && !@dl(PHP_SHLIB_SUFFIX == 'so' ? 'curl.so' : 'php_curl.dll'))
	exit("\nERROR: CURL extension not loaded\n\n");

// Pointless without your keys!
if (AccessKey == 'change-this' || SecretKey == 'change-this')
	exit("\nERROR: access information required\n\nPlease edit the following lines in this file:\n\n".
	"define('AccessKey', 'change-me');\ndefine('SecretKey', 'change-me');\n\n");

// Instantiate the class
$scs = new SCS(AccessKey, SecretKey);

//echo "SCS::getAuthenticatedURL(): " . SCS::getAuthenticatedURL('sdk', 'snapshot/snapshot.png', 86400000) . "\n";

// List your buckets:
//echo "SCS::listBuckets(): ".print_r($scs->listBuckets(), 1) . "\n";



$new_name = $count.".png";
    
if ($scs->putObjectFile($uploadFile, $bucketName, $new_name, SCS::ACL_PUBLIC_READ, array(), array('Content-Type' => 'image/jpeg'))) {
	
    echo "<script>alert('闲置信息上传成功！闲置君这两天就帮你把闲置推送给大家哦~');</script>";
}

//$s->putObject($s->inputFile($file), $bucketName, $uploadName)

?>
                      <div class="decoration"></div>   
<div class="footer">
    <div class="small-navigation-icons">

        <div class="clear"></div>
    </div>
    <p class="copyright">COPYRIGHT 2016. @华师闲置 ALL RIGHTS RESERVED</p>
</div>