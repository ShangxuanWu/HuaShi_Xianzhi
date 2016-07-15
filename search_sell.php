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
<title>闲置搜索助手</title>

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
    <a class="logo-home" ><img src="images/logob.png" alt="img" width="40"></a>
    <div class="header-text">
        <strong>@华师闲置</strong>
        <em align="right">sysu_xianzhi</em>
    </div>
</div>
<div class="header-clear"></div>

<div class="content">
      <div class="container no-bottom">
          <div class="heading">
              <div class="heading-left">
                  <em>我来帮你找闲置吧！<br>
                      如果闲置已经卖出或填写错误，记得到后台告诉我们相应【编号】哦！闲置君马上去帮你下架~</em>
          
                  <h3>客官想要找啥(●'v'●)？</h3>
              </div>
              <div class="heading-right">
              </div>
          </div>
      </div>
          
         

        
    	<div class="container no-bottom">
            <div class="contact-form no-bottom"> 
                <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                    <div class="notification-box green-box">
                        <h4>YOUR MESSAGE HAS BEEN SENT!</h4>
                        <a href="#" class="close-notification">x</a>
                        <div class="clear"></div>
                        <p>
                            You're message has been successfully sent. Please allow up to 48 hours for us to reply!  
                        </p>  
                    </div> 
                </div>
            
                <form action="search_sell_do.php" method="post" class="contactForm" id="contactForm">
                    <fieldset>
                        <div class="formValidationError" id="contactNameFieldError">
                            <div class="small-notification red-notification no-bottom">
                                <p>NAME IS REQUIRED</p>
                            </div>
                        </div>             
                        <div class="formValidationError" id="contactEmailFieldError">
                            <div class="small-notification red-notification no-bottom">
                                <p>EMAIL IS REQUIRED</p>
                            </div>
                        </div> 
                        <div class="formValidationError" id="contactEmailFieldError2">
                            <div class="small-notification red-notification no-bottom">
                                <p>ADDRESS MUST BE VALID</p>
                            </div>
                        </div> 
                        <div class="formValidationError" id="contactMessageTextareaError">
                            <div class="small-notification red-notification no-bottom">
                                <p>MESSAGE FIELD IS EMPTY</p>
                            </div>
                        </div>   
                        <div class="formFieldWrap">
                           
                            <input type="text" name="Text" value="" class="contactField requiredField" id="contactNameField"/>
                        </div>
                      
                        <div class="formSubmitButtonErrorsWrap">
                            <input type="submit" class="buttonWrap button-minimal grey-minimal contactSubmitButton" id="contactSubmitButton" onClick="submit()" method="post" value="快帮我找！" data-formId="contactForm"/>
                            
                        </div>
                    </fieldset>
                </form>       
            </div>
        </div>              
    <div class="decoration"></div>
</div>

<div class="footer">
    <div class="small-navigation-icons">
    	<a href="search_sell.php" class="small-nav-icon facebook-nav"></a>
        <a href="#" class="small-nav-icon go-up up-nav"></a>
        <a href="upload_sell.php" class="small-nav-icon upload-nav"></a>
        <div class="clear"></div>
    </div>
    <p class="copyright">COPYRIGHT 2016 @华师闲置 ALL RIGHTS RESERVED</p>
</div>

</body>
























