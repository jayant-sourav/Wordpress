<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8">

//Setting General in wp-admin Dashboard

      <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

      <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0" />

//Image in Site title bar (small image)
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon/favicon.ico"/>

<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />


// it is used to include css and javascript (eg. form validation will not work, css will change).


</head>

// To include class in body tag used for CSS.

<body <?php body_class(); ?>>

  <header class="header">
  	<a href="<?php echo get_settings('home'); ?>" class="porcaro-stolarek-mete">

      <img src="<?php echo get_field('header_logo','option'); ?>" alt="<?php bloginfo('name'); ?>" />
    </a>

<nav class="wsmenu clearfix">
  <?php wp_nav_menu( array( 'theme_location' => 'menu', 'menu_class' => 'mobile-sub wsmenu-list' ) ); ?>
</nav>

/* function.php  same should be in Appreance menus in WP-admin

function register_my_menu() {
  register_nav_menu('menu',__( 'Primary Navigation' ));
  register_nav_menu('footer-menu',__( 'Footer Menu 1' ));
   register_nav_menu('footer-menu-2',__( 'Footer Menu 2' ));
}

*/
