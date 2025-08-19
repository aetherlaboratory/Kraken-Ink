<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Required Core Stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/preloader/preloader.css">
  <!-- jQuery CDN -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/smoothness_jquery-ui.css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>
	 
    <script src="<?php bloginfo('template_url'); ?>/preloader/preloader.js"></script>
  
	<?php wp_head(); ?>
</head>

<?php
    // You can add or change the conditions here depending on your needs
    if (is_front_page()) {
        // Code for the front page
        get_template_part( 'icons-tattoos' );
    } elseif (is_page('tattoos')) {
        // Code for the tattoos page
        
        get_template_part( 'icons-tattoos' );
        
    } elseif (is_page('flashes')) {
        // Code for the flashes page
        get_template_part( 'icons-tattoos' );
    } elseif (is_page('merch')) {
        // Code for the merch page
    } else {
        // Code for all other pages
    }
?>





<body <?php body_class(); ?>>




<div id="wrapper">
<?php get_template_part( 'menu' );?>