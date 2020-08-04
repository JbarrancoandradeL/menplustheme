<?php
/*
* Archivo de sidebar del sitio
*
*
*
*
* @package Slan
* @subpackage Slan Hotel
* @since 1.0
*/
?>

<aside class="sidebar">
    
    <?php 

        if( is_active_sidebar('main-sidebar') ){

            dynamic_sidebar('main-sidebar');

        } 

     ?>

</aside>