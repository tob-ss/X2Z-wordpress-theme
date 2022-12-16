<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php
        wp_head();
        ?>

    </head>
    
    <body>
        <header class="header">
            <div class="navbar__toggle" id="mobile-menu">
                
                <span class="bar"></span> <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <span class="header-title"> <?php echo get_bloginfo('name'); ?> </span>
            <div class="lazy-div"></div>
        </header>

        


        <ul class="sidebar">
        <li class="sidebar__title">
            <?php echo get_bloginfo('name'); ?>
        </li>
        <li class="sidebar__title" src="<?php echo $logo[0] ?>" alt="logo">
        <?php
        if (function_exists('the_custom_logo')){

                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);


              the_custom_logo();  
        }
        ?></li>

        
        <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="sidebar.active">%3$s</ul>'
                )
            );


        ?>
            <?php
                dynamic_sidebar('sidebar-1');
            ?>

        </ul>
        <section class="main">
            <div class="main-wrapper">
                <div class="main-header"><?php the_title(); ?></div>
                
                </div>
           