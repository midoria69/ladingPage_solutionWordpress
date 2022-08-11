<?php

function add_css()

{

   wp_register_style('first', get_template_directory_uri() . '/assets/css/font-awesome.css', false,'1.1','all');

   wp_enqueue_style( 'first');

   wp_register_style('second', get_template_directory_uri() . '/assets/owl-carousel/assets/owl.carousel.min.css', false,'1.1','all');

   wp_enqueue_style( 'second');


   wp_register_style('third', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false,'1.1','all');

   wp_enqueue_style( 'third');


   wp_register_style('fourth', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');

   wp_enqueue_style( 'fourth');


}

add_action('wp_enqueue_scripts', 'add_css');



function add_script()

{

   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery-3.3.1.slim.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'js-script');

   wp_register_script('change', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'change');

   wp_register_script('popup', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'popup');

   wp_register_script('carousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'carousel');

   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'bootstrap');

}

add_action('wp_enqueue_scripts', 'add_script');

add_theme_support ( 'menus' ) ;
?>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- owl carousel js-->
<script src="owl-carousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>