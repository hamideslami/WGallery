<?php get_header(); ?>

<?php 

if(is_page( 'gallery-1' )){

    $args = 'category_name=gallery1';

}elseif(is_page( 'gallery-2' )){

    $args = 'category_name=gallery2';

}


$twoGallery = new WP_Query( $args ); 

if($twoGallery->have_posts()) :

    while($twoGallery->have_posts()) : $twoGallery->the_post(); ?>


    <div class="post-page">
    
    
            <?php

            $galleries = get_post_gallery_images( $post ); 
                    
            $i = 1;
            foreach($galleries as $gallery) {

                $degree = rand(-30,30);

                    
                if ($i<5) {  ?>

                        <a class= "rotate" href="<?php the_permalink(); ?>" style="transform:rotate(<?php echo $degree ?>deg)"><img   src="<?php echo $gallery; ?>" alt=""></a>
                
                <?php        $i++;

                
                }else{
                
                        break;
                }

            }


            ?>

    </div>

    <?php endwhile;

    else :

    echo '';

endif; ?>
    
    
    
    

        
    
    
   <?php get_footer(); ?>