<?php
function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/all.css' );
  }
  add_action( 'wp_enqueue_scripts', 'theme_styles');
  
function theme_js() {
    global $wp_scripts;
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js');
    wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/js/scripts.js');
  }
  add_action( 'wp_enqueue_scripts', 'theme_js');

?>