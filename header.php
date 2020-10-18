<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42348731-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-42348731-1');
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(' | ', 'true', 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo site_url(); ?>/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo site_url(); ?>/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url(); ?>/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url(); ?>/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url(); ?>/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url(); ?>/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo site_url(); ?>/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url(); ?>/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url(); ?>/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo site_url(); ?>/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url(); ?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo site_url(); ?>/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url(); ?>/favicon-16x16.png">
<link rel="manifest" href="<?php echo site_url(); ?>/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo site_url(); ?>/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<div class="top px-3 px-md-5">
  <?php wp_nav_menu(array('theme_location' => 'top', 'container' => '')); ?>
</div>

<div class="header d-flex align-items-center justify-content-between px-3 py-4 px-md-5 pb-md-5">
  <a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/landair-logo.png" alt="<?php echo get_bloginfo('name'); ?>" class="logo"></a>

  <input type="checkbox" id="main-menu-toggle-checkbox" />
  <label for="main-menu-toggle-checkbox" class="main-menu-toggle">
  	<span></span>
  	<span></span>
  	<span></span>
  </label>

  <div class="main-menu-wrapper d-md-flex align-items-center justify-content-between">
    <?php wp_nav_menu(array('theme_location' => 'main', 'container' => '')); ?>
    <?php if ( is_active_sidebar('header')) : ?>
      <?php dynamic_sidebar('header'); ?>
    <?php endif; ?>
  </div>
</div>
