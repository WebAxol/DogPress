<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger position-sticky" style="top: 0;z-index:2">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php  get_template_directory_uri() ?>"><b><i class="fa fa-solid fa-paw"></i> Salva-G</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <?php

            $args = array(
                'theme_location' => 'Top Navigation Menu',
                'menu'          => 'Top menu',
                'container'     => '',
                'menu_class'    => 'navbar-nav ',
                'depth'         => 1,
                'add_a_class'   => 'nav-link',
                'add_li_class'  => 'nav-item'
                );
            wp_nav_menu($args);
                            
        ?>
        </div>
    </div>
    </nav>

    <header class="bg-secondary p-5">

        <!-- Dynamically set title -->

        <h1 class="text-white"> 
            <?php
            if(is_post_type_archive()) : 
                post_type_archive_title();
            else : 
                $page_id = get_queried_object_id(); 
                echo get_the_title($page_id);
            endif;
            ?>
        </h1>
        <p  class="text-white"> 
            <?php 
            if(is_front_page()){
                echo get_bloginfo('description'); 
            }?>
        </p>
    </header>
