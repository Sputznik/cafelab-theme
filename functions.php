<?php

add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('pathway-style', get_stylesheet_directory_uri().'/style.css', array('sp-core-style'), time() ); //'1.0.0
});

// Include File
require_once('lib/custom-fields.php');
