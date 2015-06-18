<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.1.1.12.min.js"></script>
        
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
        if (is_home()) {
            ?>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
            <script src="<?php bloginfo('template_url'); ?>/js/map_scripts.js"></script>
        <?php
            
        }else{
  
        }
        ?>
        <!-- first -->
        <?php wp_head(); ?>
        <!-- last -->
    </head>
    <body>
	<div id="main">
