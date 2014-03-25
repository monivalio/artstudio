<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
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
                                <li><a href="contacts.html">Контакти</a></li>
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
                                                    <?php 
                                                    $name = $_POST['name'];
                                                    $email = $_POST['email'];
                                                    $phone = $_POST['phone'];
                                                    $comment = $_POST['comment'];
                                                      require_once('recaptchalib.php');
                                                      $privatekey = "6Lc9m_ASAAAAAFcPvOkGg-BXA9QDiR1jkIe2-s1N";
                                                      $resp = recaptcha_check_answer ($privatekey,
                                                                                      $_SERVER["REMOTE_ADDR"],
                                                                                      $_POST["recaptcha_challenge_field"],
                                                                                      $_POST["recaptcha_response_field"]);
                                                      
                                                      if (!$resp->is_valid) {
                                                          // What happens when the CAPTCHA was entered incorrectly
                                                          die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
                                                              "(reCAPTCHA said: " . $resp->error . ")");
                                                      } else {
                                                             $name = $_POST['name'];
                                                             $email = $_POST['email'];
                                                             $phone = $_POST['phone'];
                                                             $comment = $_POST['comment'];
                                                             echo "Здравейте " . $name . ". Благодарим ви за вашето запитване. В най-скоро време 
                                                             очаквайте да се свържем с вас на телефон " . $phone . " или на email " . $email;
                                                             $to      = 'simo_real@abv.bg'; //n_sadonkov@yahoo.com
                                                             $subject = 'Test webmail server';
                                                             $message =  $name . " изпрати следното съобщение:\r\n" . $comment . "\r\n" . "Телефон: " . $phone;
                                                             $headers = 'From: ' . $email . "\r\n" .
                                                             'Reply-To: ' . $email . "\r\n" .
                                                             'Cc: simopopov@gmail.com' . "\r\n" .
                                                             'X-Mailer: PHP/' . phpversion();
                                                             
                                                             mail($to, $subject, $message, $headers);
                                                             }?>

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
