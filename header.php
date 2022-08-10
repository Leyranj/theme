<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
   <title><?php bloginfo('Jocel Leyran'); ?> &raquo; <?php is_front_page() ? bloginfo('Technical Exam') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
   <header class="my-logo">
   <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
 </header>
 <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>