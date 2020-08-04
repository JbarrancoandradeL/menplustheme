<?php
/*
* Registrando zonas de menu
*
*
*
*
* @package menplus
* @subpackage menplus
* @since 1.0
*/

function menplus_menus(){

	register_nav_menus(array(

        'main-menu_left' => __('Menu principal en encabezado izquierda', 'menplus'),
        'main-menu_right' => __('Menu principal en encabezado derecha', 'menplus'),
        'footer-menu' => __('Menu principal en footer', 'menplus')

	));

}
add_action('init', 'menplus_menus');