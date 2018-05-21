<?php get_header(); ?>




<div class="single-post" id="light-gallery">

    <?php

        $galleries = get_post_gallery_images( $post ); 
        

        foreach($galleries as $gallery) { ?>

                    <a class="scale" href="<?php echo str_replace("-150x150", "",$gallery); ?>"><img   src="<?php echo $gallery; ?>" alt=""></a>
            
            <?php 
    
        }

    ?>

</div>


<?php

get_footer();

?>

    


