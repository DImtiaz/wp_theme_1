<?php 

    function restaurant_template_styles(){
    	wp_enqueue_style( 'restaurant1', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0' );
    	wp_enqueue_style( 'restaurant2', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0' );
    	wp_enqueue_style( 'restaurant3', get_template_directory_uri() . '/css/style.css', array(), '1.0' );


    	wp_enqueue_script( 'restaurant_script', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ), '20150330', true );
    	wp_enqueue_script( 'restaurant_script2', get_template_directory_uri() . '/js/jquery.easing.min.js', array( 'jquery' ), '20150331', true );
    	wp_enqueue_script( 'restaurant_script3', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '20150332', true );
    	wp_enqueue_script( 'restaurant_script4', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '20150333', true );
    	wp_enqueue_script( 'restaurant_script5', get_template_directory_uri() . '/contactform/contactform.js', array( 'jquery' ), '20150334', true );




    	/*wp_register_script( 'custom-script', get_template_directory_uri() . '/js/jquery.min.js' );
    	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/jquery.easing.min.js' );
    	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.min.js' );
    	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/custom.js' );
    	wp_register_script( 'custom-script', get_template_directory_uri() . '/contactform/contactform.js' );*/

    }


    add_action( 'wp_enqueue_scripts', 'restaurant_template_styles' );





















 ?>