<?php

function embanor_load_scripts()
{
  wp_enqueue_style('embanor-style', get_template_directory_uri() . '/assets/styles/css/style.css', array(), '1.0', 'all');
  wp_enqueue_style('embanor-bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css', array(), ' v5.3.0-alpha3');
  wp_enqueue_style('embanor-slick', get_template_directory_uri() . '/assets/lib/slick/css/slick.css', array(), ' 1.8.0');
  wp_enqueue_style('embanor-slick-theme', get_template_directory_uri() . '/assets/lib/slick/css/slick-theme.css', array(), ' 1.8.0');
  wp_enqueue_script('jquery-lib', 'https://code.jquery.com/jquery-3.7.0.js', array(), '3.7.0', true);
  wp_enqueue_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.4.1.js', array(), '3.4.1', true);
  wp_enqueue_script('embanor-bootstrap-lib', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.bundle.min.js', array('jquery-lib'), 'v5.3.0-alpha3', true);
  wp_enqueue_script('embanor-slick-lib', get_template_directory_uri() . '/assets/lib/slick/js/slick.min.js', array('jquery'), '1.8.0', true);
  wp_enqueue_script('embanor-slick', get_template_directory_uri() . '/assets/scripts/slick.js', array('jquery'), '1.0', true);
  wp_enqueue_script('embanor-script', get_template_directory_uri() . '/assets/scripts/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'embanor_load_scripts');
