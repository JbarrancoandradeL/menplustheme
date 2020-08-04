<?php
/*
* carar estilos y script
* 
* @package menplus
* @subpackage menplus barber shop
* @since 1.0
*
*/

/**
 * cargando stilos
 */

 function menplus_theme_styles(){

    //register 

  /*  @import "assets/css/bootstrap.min.css";
@import "assets/css/all.min.css"; /* Fontawesome css  */
/*@import "assets/css/slick.css"; /* Plugins css */
/*@import "assets/css/nice-select.css"; /* lugins css */
/*@import "assets/css/magnific-popup.css"; /* lugins */


/*@import "assets/css/Util.css"; /* Utilities */
/*@import "assets/css/main.css"; /* Main css */
/*@import "assets/css/responsive.css"; /* responsive */

    
  
  /*  wp_register_style('all.min', THEMEPATH . 'assets/css/all.min.css', '', '5.5.0', 'all');
    wp_register_style('slick',   THEMEPATH . 'assets/css/slick.css', '', '1.0.0', 'all');
    wp_register_style('nice-select', THEMEPATH . 'assets/css/nice-select.css', '', '1.0.0', 'all');
    wp_register_style('magnific-popup', THEMEPATH . 'assets/css/magnific-popup.css', '', '1.0.0', 'all');
    wp_register_style('Util', THEMEPATH . 'assets/css/magnific-popup.css', '', '1.0.0', 'all');

    wp_register_style('main', get_stylesheet_uri(), array('all.min'), '1.0', 'all');
    wp_register_style('responsive', get_stylesheet_uri(), array('all.min'), '1.0', 'all');*/

    wp_register_style(
        'bootstrap', // nombre
        get_theme_file_uri( 'assets/css/bootstrap.min.css' ), // URL
        array(), // array de dependencias
        '4.3.1', // versión
        'all', // CSS media type
    );

    wp_register_style(
        'all.min', // nombre
        get_theme_file_uri('assets/css/all.min.css' ), // URL
        array(), // array de dependencias
        '1.0.0', // versión
        'all', // CSS media type
    );


    wp_register_style(
        'slick', // nombre
        get_theme_file_uri('assets/css/slick.css' ), // URL
        array(), // array de dependencias
        '1.0.0', // versión
        'all', // CSS media type
    );

    wp_register_style(
        'nice-select', // nombre
        get_theme_file_uri('assets/css/nice-select.css' ), // URL
        array(), // array de dependencias
        '1.0.0', // versión
        'all', // CSS media type
    );


    
    wp_register_style(
        'magnific-popup', // nombre
        get_theme_file_uri('assets/css/magnific-popup.css' ), // URL
        array(), // array de dependencias
        '1.0.0', // versión
        'all', // CSS media type
    );

        
    wp_register_style(
        'Util', // nombre
        get_theme_file_uri('assets/css/Util.css' ), // URL
        array(), // array de dependencias
        '1.0.0', // versión
        'all', // CSS media type
    );

    

    wp_register_style('main', get_stylesheet_uri(), '', '1.0', 'all');
    wp_register_style('responsive', get_stylesheet_uri(), '', '1.0', 'all');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('all.min');
    wp_enqueue_style('slick');
    wp_enqueue_style('nice-select');
    wp_enqueue_style('magnific-popup');
    wp_enqueue_style('Util');

    wp_enqueue_style('main');
    wp_enqueue_style('responsive');





 }

 add_action('wp_enqueue_scripts','menplus_theme_styles');


 
/*
* Registrando y cargando scripts
*/

function menplus_theme_scripts(){

	// Registrar scripts
    wp_register_script('jquery', JAVASCRIPT . '/vendor/jquery-1.12.4.min.js', array('jquery'), '1.12.4', true);
    wp_register_script('modernizr', JAVASCRIPT . '/vendor/modernizr-3.6.0.min.js', array('jquery'), '3.6.0', true);
    wp_register_script('bootstrap.min',JAVASCRIPT .'/bootstrap.min.js',array('jquery'),'4.3.1',true);

    wp_register_script('slick.min',JAVASCRIPT  . '/slick.min.js',array('jquery'),'1.0.0',true);
    wp_register_script('jquery.nice-select.min',JAVASCRIPT . '/jquery.nice-select.min.js',array('jquery'),'1.0',true);
    wp_register_script('jquery.magnific-popup.min',JAVASCRIPT . '/jquery.magnific-popup.min.js',array('jquery'),'1.1.0',true);
   
    
   

    wp_register_script('main',JAVASCRIPT .'/main.js',array('jquery'),'1.0.0',true);
    


    // Cargar scripts
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('modernizr');
    wp_enqueue_script('bootstrap.min');
    wp_enqueue_script('slick.min');
    wp_enqueue_script('jquery.nice-select.min');
    wp_enqueue_script('jquery.magnific-popup.min');
    wp_enqueue_script('main');
    


}
add_action('wp_enqueue_scripts', 'menplus_theme_scripts');

