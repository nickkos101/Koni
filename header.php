<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Koni TV</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bbpress.css" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/function.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="left">
            <a href="<?php echo get_bloginfo('url'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" class="logo">
                </a>
                <h2>Inspire &#183; Educate &#183; Entertain</h2>
            </div>
            <div class="right">
                <ul class="socialmedia">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/blogger.png"></li>
                </ul>
                <p class="metainfo">Info@KoniTV.tv - <span>619-804-3137</span></p>
            </div>
            <div class="nav">
                <?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
            </div>
        </div>
        <div class="white-wrap">