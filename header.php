<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Lora|Roboto|Poppins" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">




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
                    <img src="<?php bloginfo('template_url');?>/img/logo-64.png" alt="logo">
                    </a>
                </div>
                <a href="#" class="btn-menu" onclick="displayMenu()"><i class="fa fa-bars"></i></a>
                <?php
				wp_nav_menu(
					array(
					'theme_location' => 'top',
					'container' => 'nav',
					'container_class' => 'menu',
					)
				);
			?>
                <div class="clear"></div>
            </div>
        </header>

        <div class="band">
            <div class="wrap">
                    <img src="<?php bloginfo('template_url');?>/img/logo-100.png" alt="Logo">
                    <h1>Bi-level Optimization</h1>
            </div>
        </div>
        <!-- /header -->
