<?php 

function load_stylesheets() {
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
  wp_enqueue_style('bootstrap');
  
  wp_register_style('cssMinified', get_template_directory_uri() . '/css/mdb.min.css', array(), 1, 'all');
  wp_enqueue_style('cssMinified');

  wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
  wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


// load scripts

function addJS() {
  wp_register_script('jquery', get_template_directory_uri() . 'js/jquery-3.4.1.min.js', array() , 1, 1, 1);
  wp_enqueue_script('jquery');
  
  wp_register_script('popper', get_template_directory_uri() . 'js/popper.min.js', array() , 1, 1, 1);
  wp_enqueue_script('popper');
  
  wp_register_script('bootstrap', get_template_directory_uri() . 'js/bootstrap.min.js', array() , 1, 1, 1);
  wp_enqueue_script('bootstrap');
  
  wp_register_script('mdb', get_template_directory_uri() . 'js/mdb.min.js', array() , 1, 1, 1);
  wp_enqueue_script('mdb');
  
  wp_register_script('custom', get_template_directory_uri() . 'js/custom.min.js', array() , 1, 1, 1);
  wp_enqueue_script('custom');
  
}