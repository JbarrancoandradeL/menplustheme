<!doctype html>
<html <?php  language_attributes(); ?> >

<head>
    <!-- Required meta tags -->
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="<?php echo IMAGES ?>/favicon.ico" type="image/png">

    <!-- import styles css -->
   
    <?php wp_head(); ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

</head>