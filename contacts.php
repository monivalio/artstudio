<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>     
	<!--[if lt IE 7]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
        </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page5">
	<!--==============================header=================================-->
    <header>
    	<div class="row-1">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_12">
                    	<nav>
                            <ul class="menu">
                                <li><a href="index.php">За нас</a></li>
                                <li><a href="ceramics.php">Керамика</a></li>
                                <li><a href="glass.php">Стъкло</a></li>
                                <li><a href="candles.php">Свещи</a></li>
                                <li><a href="#">Оборудване</a></li>
                                <li><a href="#">Курсове</a></li>
                                <li><a class="active" href="contacts.php">Контакти</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row-2">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_9">
                    	<h1>
                            <a class="logo" href="index.php">Art <strong>Studio</strong></a>
                            <span>Glass <strong>&</strong> Ceramics</span>
                        </h1>
                    </div>
                    <div class="grid_3">
                    	
                     </div>
                     <div class="clear"></div>
                </div>
            </div>
        </div>    	
    </header>
    
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="box">
                                <div class="padding">
                                    <div class="container_12">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                            	<div class="indent-left">
                                                	<h3 class="p2">Contact Form</h3>
                                                    <form action="thanks.php" id="contact-form" method="post" enctype="multipart/form-data">   
                                                        
                                                        <fieldset>
                                                              <label><span class="text-form">Name:</span><input name="name" type="text" /></label>
                                                              <label><span class="text-form">Email:</span><input name="email" type="text" /></label>   
                                                              <label><span class="text-form">Phone:</span><input name="phone" type="text" /></label>                                    
                                                              <div class="wrapper"><div class="text-form">Message:</div><textarea name="comment"></textarea></div>
                                                              <div align="right">
                                                              <?php
                                                                require_once('recaptchalib.php');
                                                                $publickey = "6Lc9m_ASAAAAADETuGiC8l5pszAtDC1ygo6nx3en"; // you got this from the signup page
                                                                echo recaptcha_get_html($publickey);
                                                                ?>
                                                                </div>
                                                              <div class="buttons">
                                                                  <a class="button" href="#" onClick="document.getElementById('contact-form').reset()">Clear</a>
                                                                  <a class="button" href="#" onClick="document.getElementById('contact-form').submit()">Send</a>
                                                              </div>                             
                                                        </fieldset>						
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <div class="bg-bot">
        	<div class="main">
                <div class="container_12">
                    <div class="wrapper">
                        <article class="grid_4">
                            <h3 class="prev-indent-bot">За мен</h3>
                            <p class="prev-indent-bot">Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. 
                            Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. 
                            Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. 
                            Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. Инфо за мен. </p>
                        </article>
                        <article class="grid_4">
                            <h3 class="prev-indent-bot">Оборудване</h3>
                            
                                <p class="prev-indent-bot">Инфо за оборудване ... Инфо за оборудване ... Инфо за оборудване ... 
                                Инфо за оборудване ... Инфо за оборудване ... Инфо за оборудване ... Инфо за оборудване ... </p>
                           
                        </article>
                        <article class="grid_4">
                            <h3 class="prev-indent-bot">Друго</h3>
                            
                                <p class="prev-indent-bot">Други неща за които се сещаш, за да няма празни полета, че е глупаво малко.</p>
                           
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
            <div class="container_12">
                <div class="wrapper">
                    
                    <div class="grid_4">
                        <span class="phone-numb"><span>+359</span> 889990228</span>
                    </div>
                    <div class="grid_4">
                        <ul class="list-services">
                            <li><a href="https://www.facebook.com/pages/Art-Glass-Studio-Ceramics/588328351186854"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
