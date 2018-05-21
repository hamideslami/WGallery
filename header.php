<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php bloginfo( 'name' ); ?></title>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/lightgallery.css" /> 
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/lg-transitions.min.css" /> 


    <?php wp_head(); ?>
</head>
<body>

    <nav class="nav">

        <div class="logo">


            <span class="name-logo"><a href="<?php echo home_url(); ?>">Kevin Clark</a></span>


            <span class="description-logo">photographer</span>
        </div>
        <div class="nav-list">


            <?php 
            
                $args = array(
                    'theme_location' => 'primary'
                );
            
            ?>   

            <?php echo wp_nav_menu( $args );
            
            
            ?>




        </div>

        <?php 

        global $wp_query;
        $pagename = $wp_query->queried_object->post_name;
        
        
        
        if(strpos($pagename , 'gallery-') !== false ) {  ?>

            <div class="backtogallery">

                <a href="<?php echo home_url(); ?>">Back To Gallery</a>
                

            </div>

             

        <?php } ?>

        
    </nav>

    <div class="body">

        <div class="container">