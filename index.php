<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
    <script src="js/jquery.galleriffic.js" type="text/javascript"></script>
    <script src="js/jquery.opacityrollover.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
        <!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
        <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        
        <style type="text/css" media="screen">
            * { margin: 0; padding: 0; }
            
            body {
                background: #282828;
                font: 62.5%/1.2 Arial, Verdana, Sans-Serif;
                padding: 0 20px;
            }
            
            h1 { font-family: Georgia; font-style: italic; margin-bottom: 10px; }
            
            h2 {
                font-family: Georgia;
                font-style: italic;
                margin: 25px 0 5px 0;
            }
            
            p { font-size: 1.2em; }
            
            ul li { display: inline; }
            
            .wide {
                border-bottom: 1px #000 solid;
                width: 4000px;
            }
            
            .fleft { float: left; margin: 0 20px 0 0; }
            
            .cboth { clear: both; }
            
            #main {
                background: #fff;
                margin: 0 auto;
                padding: 30px;
                width: 1000px;
            }
            .gallery_desc {
                font-size:20px;line-height:1.2em;color:#262626;cursor:pointer;letter-spacing:0px
            }
        </style>      
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
<body id="page1">
    <!--==============================header=================================-->
    <header>
        <div class="row-1">
            <div class="main">
                <div class="container_12">
                    <div class="grid_12">
                        <nav>
                            <ul class="menu">
                                <li><a class="active" href="index.php">About Us</a></li>
                                <li><a href="ceramics.php">Ceramics</a></li>
                                <li><a href="glass.php">Glass</a></li>
                                <li><a href="candles.php">Candles</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
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
            <h2>Gallery 2</h2>
            <ul class="gallery clearfix">
            <p class="gallery_desc">Тук можем да праснем всякакво и обширно инфо за ceramics</p>
                <?php
                    if ($handle = opendir('C:\xampp\htdocs\interio\images\fullscreen\ceramics')) {
                        $i = 0;
                        while (false !== ($entry = readdir($handle))) {
                            if ($entry != "." && $entry != "..") {
                                echo "<li><a href=\"images/fullscreen/ceramics/";
                                echo "$entry\n";
                                echo "\" rel=\"prettyPhoto[gal2]\"><img src=\"images/fullscreen/ceramics/";
                                echo "$entry\n";
                                echo  "\" width=\"100\" height=\"100\" alt=\"Snimka edno\" /></a></li> \n";
                                $i++;
                                if($i % 9==0)
                                {
                                    echo "<br><br>";
                                }
                                
                            }
                        }
                        closedir($handle);
                    }

                ?>
            </ul>

    
            <script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                $("area[rel^='prettyPhoto']").prettyPhoto();
                
                $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
                $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
        
                $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
                    custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
                    changepicturecallback: function(){ initialize(); }
                });

                $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
                    custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
                    changepicturecallback: function(){ _bsap.exec(); }
                });
            });
            </script>
                            
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
                            <h3 class="prev-indent-bot">Нещица</h3>
                            
                                <p class="prev-indent-bot">Инфо за моите неща. Инфо за моите неща. Инфо за моите неща. Инфо за моите неща. 
                                Инфо за моите неща. Инфо за моите неща. Инфо за моите неща. Инфо за моите неща. Инфо за моите неща. 
                                Инфо за моите неща. Инфо за моите неща. Инфо за моите неща. Инфо за моите неща. Инфо за моите неща. 
                                Инфо за моите неща. Инфо за моите неща. Инфо за моите неща. Инфо за моите неща. Инфо за моите неща. </p>
                           
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
    <script type="text/javascript">
            $(window).load(function() {
            // We only want these styles applied when javascript is enabled
            $('div.navigation').css({'width' : '320px', 'float' : 'right'});
            $('div.content').css('display', 'block');
    
            // Initially set opacity on thumbs and add
            // additional styling for hover effect on thumbs
            var onMouseOutOpacity = 0.5;
            $('#thumbs ul.thumbs li span').opacityrollover({
                mouseOutOpacity:   onMouseOutOpacity,
                mouseOverOpacity:  0.0,
                fadeSpeed:         'fast',
                exemptionSelector: '.selected'
            });
            
            // Initialize Advanced Galleriffic Gallery
            var gallery = $('#thumbs').galleriffic({
                delay:                     7000,
                numThumbs:                 12,
                preloadAhead:              6,
                enableTopPager:            false,
                enableBottomPager:         false,
                imageContainerSel:         '#slideshow',
                controlsContainerSel:      '',
                captionContainerSel:       '',
                loadingContainerSel:       '',
                renderSSControls:          true,
                renderNavControls:         true,
                playLinkText:              'Play Slideshow',
                pauseLinkText:             'Pause Slideshow',
                prevLinkText:              'Prev',
                nextLinkText:              'Next',
                nextPageLinkText:          'Next',
                prevPageLinkText:          'Prev',
                enableHistory:             true,
                autoStart:                 7000,
                syncTransitions:           true,
                defaultTransitionDuration: 900,
                onSlideChange:             function(prevIndex, nextIndex) {
                    // 'this' refers to the gallery, which is an extension of $('#thumbs')
                    this.find('ul.thumbs li span')
                        .css({opacity:0.5})
                },
                onPageTransitionOut:       function(callback) {
                    this.find('ul.thumbs li span').css({display:'block'});
                },
                onPageTransitionIn:        function() {
                    this.find('ul.thumbs li span').css({display:'none'});
                }
            });
        });
    </script>
</body>
</html>
