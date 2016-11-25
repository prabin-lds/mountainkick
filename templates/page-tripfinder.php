<?php // Template Name: Trip Finder ?>
<?php get_header(); the_post(); ?>

<section class=trip-finder>
         <div class=top-pattern-triangle></div>
         <div class=finder-wrap>
            <div class=nav-finder-wrap>
               <div class=container>
                  <div class=row>                  
                     <div class=col-lg-12>
                     <?php echo do_shortcode('[searchandfilter id="228"]'); ?>
                        <nav class=nav-finder>
                           <select class=search-filter>
                              <option>ACTIVITY</option>
                              <option>test1</option>
                              <option>test2</option>
                           </select>
                           <select class=search-filter>
                              <option>ACTIVITY</option>
                              <option>test1</option>
                              <option>test2</option>
                           </select>
                           <select class=search-filter>
                              <option>ACTIVITY</option>
                              <option>test1</option>
                              <option>test2</option>
                           </select>
                           <select class=search-filter>
                              <option>ACTIVITY</option>
                              <option>test1</option>
                              <option>test2</option>
                           </select>
                           <button class="btn btn--arrow btn--bg-border--black">find trip</button>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.nav-finder-wrap-->

            <div class=packages>
            <?php echo do_shortcode( '[searchandfilter id="228" show="results"]' ); ?> 

               <div class=package>
                  <figure class=package__img><img src=images/uploads/culture.JPG></figure>
                  <div class="package__desc clearfix">
                     <span class=package__desc-price>from usd <span class=price>1,205</span></span>
                     <div class=package__desc-title>
                        <span>12 Days trekking to 18,519 Ft</span>
                        <h4><a>Jiri-Lukla Everest Three Passes Trek</a></h4>
                     </div>
                  </div>
               </div>
               <!--/.package-->
               
            </div>
            <!--/.packages-->
         </div>
         <!--/.finder-wrap-->


<?php get_footer(); ?>