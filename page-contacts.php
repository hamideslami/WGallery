<?php get_header(); ?>


     <div class="black-box-contacts">

         <div class="contact-form">

             <span>Contact Form</span>
             <input type="text" name="name"  id="name" placeholder="Enter Your Name :">
             <input type="text" name="email" id="email" placeholder="Enter Your E-Mail :">
             <textarea type="text" name="message" id="message" rows="16" placeholder="Enter Your Message :"></textarea>

             <div class="button">
                <a href="">RESET</a>
                <a href="">SUBMIT</a>
             </div>
             


            <span class="errors">Email - is not a valid email address</span>

         </div>

         <div class="stay-in-touch">

            <span>Stay in Touch</span>
            <div class="map">

                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/map.png" alt="">
                        
            </div>
            <div class="contact-inf">
            
                

                <div class="addrress-box">

                    <span>8901 Marmora Road,</span>
                    <span>Glasgow, D04 89GR.</span>           
                    <span>Freephone: +1 800 559 6580</span>
                    <span>Telephone: +1 959 603 6035</span>
                    <span>FAX:       +1 504 889 9898</span>
                    <span>E-Mail: Eslami.hamidpp@gmail.org</span>


                </div>

                <div class="social">
                    <a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/img/social.png" alt=""></a>
                </div>
            
            </div>


         </div>

     </div>       

                
<?php get_footer(); ?>