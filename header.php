<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Lora|Roboto|Poppins" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script data-ad-client="ca-pub-9760762192179362" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url');?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url');?>/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url');?>/favicon-16x16.png">





    <link rel="icon" href="<?php bloginfo('template_url');?>/favicon.ico" > 




    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">

	<link rel="shortcut icon" href="<?php echo get_site_url(); ?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_site_url(); ?>/favicon.ico" type="image/x-icon">

    <script src="<?php bloginfo('template_url');?>/js/engine.js"></script>

	<?php
		wp_head();
	?>

</head>
<body <?php body_class(); ?> >
    <div class="container">
        <header class="main">
            <div class="menu-container">
                <div class="logo">
                    <a href="<?php echo get_site_url(); ?>">
                    <img src="<?php bloginfo('template_url');?>/img/logo-gray2-64.png" alt="logo">
                    </a>
                </div>
                <div class="btn-menu-wraper">
                    <a href="#" class="btn-menu" onclick="displayMenu()"><i class="fa fa-bars"></i></a>
                </div>
                <div class="blog-title">
                    <span>
                    <?php bloginfo( 'name' ); ?>  <br>
                    <small>
                        <?php bloginfo( 'description' ); ?>
                    </small>
                    </span>
                </div>
                <div class="social-icons">
                     <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?> 
                </div>
                <div id="menu-wraper">
                    <div class="seach-top-box">
						<form method="get" action="<?php echo get_site_url(); ?>/">
                            <input type="text" value="<?php echo get_search_query(); ?>" placeholder="Search" name="s">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                <?php
				wp_nav_menu(
					array(
					'theme_location' => 'top',
					'container' => 'nav',
					'container_class' => 'menu',
					)
				);
			     ?>
                </div>
                <div class="clear"></div>
            </div>
        </header>

        <!-- /header -->
