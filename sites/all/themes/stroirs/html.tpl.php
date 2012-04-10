<!DOCTYPE html>
<html lang="<?php print $language->language ?>">
    <head>
        <title><?php print $head_title; ?></title>
        <?php print $head; ?>
        <?php print $styles; ?>
        <?php print $scripts; ?>
        
        <link rel="stylesheet" href="<?php print path_to_theme(); ?>/css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php print path_to_theme(); ?>/css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php print path_to_theme(); ?>/css/grid.css" type="text/css" media="screen"> 
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="<?php print path_to_theme(); ?>/css/prettyPhoto.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php print path_to_theme(); ?>/css/ui.totop.css">
        <link rel="shortcut icon" href="<?php print path_to_theme(); ?>/images/favicon.ico" type="image/x-icon" />  
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