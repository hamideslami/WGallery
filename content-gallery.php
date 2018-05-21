<div class="post">


        


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