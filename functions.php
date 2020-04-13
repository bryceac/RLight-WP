<?php

  // try to get menus registers
  add_action( 'after_setup_theme', 'register_my_menus');

  function register_my_menus()
  {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main' ),
        'extras-menu' => __( 'Misc.' )  
      )
    );
  }

  add_theme_support( 'automatic-feed-links' );

  // add action, which is necessary for some reason to load stylesheets
  add_action('wp_enqueue_scripts', 'rlight_enqueue_style');

  // create function necessary to load styles
  function rlight_enqueue_style() {
	wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('custom', get_template_directory_uri() . '/common.css');
  wp_enqueue_style('dark', get_template_directory_uri() . '/dark.css')
  }
?>
