<!DOCTYPE html>
<html lang="<?php print $language->language ?>">
    <head>
        <title><?php print $head_title; ?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen"> 
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/ui.totop.css">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />  
        <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script> 
        <script src="js/superfish.js" type="text/javascript"></script>
        <script src="js/jquery.hoverIntent.js" type="text/javascript"></script>
        <script src="js/FF-cash.js" type="text/javascript"></script> 
        <script src="js/script.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/easyTooltip.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/tabs.js"></script>
        <script type="text/javascript" src="js/jquery.roundabout.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/hover-image.js"></script>
        <script src="js/jquery.ui.totop.js"></script>  
        <script type="text/javascript">
            $(function(){
                $(".social a").easyTooltip();
            });
            $(document).ready(function() {
                $('.round').roundabout({
                    btnNext: '.round_next',
                    btnPrev: '.round_prev',
                    shape: "lazySusan",
                    minOpacity: 0,
                    maxOpacity: 1.0,
                    minScale: 0.65 // size
                });
                $(".img-hover").hover(
                function() {
                    $(this).stop().animate({"opacity": "0"}, "normal");
                },
                function() {
                    $(this).stop().animate({"opacity": "0.5"}, "normal");
                });				
                $(window).load(function(){
                    $().UItoTop({ easingType: 'easeOutQuart' });
                })
            });
            $(function(){			
                $("a[data-gal^='prettyPhoto']").prettyPhoto({theme:'facebook'});
            });
        </script>
        <!--[if lt IE 8]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
             <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
        </div>
        <![endif]-->
        <!--[if lt IE 9]>
                    <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
        <![endif]-->
        <?php print $head; ?>
        <?php print $styles; ?>
        <?php print $scripts; ?>
    </head>
    <body id="page1" class="<?php print $classes; ?>">
        <?php
        print $page_top;
        print $page;
        print $scripts;
        print $page_bottom;
        ?>
    </body>
</html>