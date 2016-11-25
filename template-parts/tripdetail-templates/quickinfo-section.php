<section class=trip-intro>
 <div class=container>
    <div class=row>
       <div class="col-lg-11 offset-lg-1">
          <h1 class=heading><?php the_title(); ?></h1>
          <div class=trip__technical-details>
             <ul class=clearfix>
             <?php if( !empty(get_field('duration')) ): ?>
             	<li class=detail__item>
                   <span class=detail__item-icon>
                      <svg>
                         <use xlink:href=#icon-duration></use>
                      </svg>
                   </span>
                   <div class=detail__item-desc><span class=title>duration</span> <?php the_field('duration'); ?> days</div>
                </li>
            <?php endif; ?>

            <?php if( !empty(get_field('price')) ): ?>
                <li class=detail__item>
                   <span class=detail__item-icon>
                      <svg>
                         <use xlink:href=#icon-price></use>
                      </svg>
                   </span>
                   <div class=detail__item-desc><span class=title>usd</span> <?php the_field('price'); ?></div>
                </li>
                <li class=detail__item>
            <?php endif; ?>

            <?php if( !empty(get_field('difficulty')) ): ?>
                   <span class=detail__item-icon>
                      <svg>
                         <use xlink:href=#icon-time></use>
                      </svg>
                   </span>
                   <div class=detail__item-desc><span class=title>difficulty</span> 17 days</div>
                </li>
            <?php endif; ?>

            <?php if( !empty(get_field('best_season')) ): ?>
                <li class=detail__item>
                   <span class=detail__item-icon>
                      <svg>
                         <use xlink:href=#icon-weather></use>
                      </svg>
                   </span>
                   <div class=detail__item-desc><span class=title>best season</span> <?php the_field('best_season'); ?> </div>
                </li>
            <?php endif; ?>

            <?php if( !empty(get_field('duration')) ): ?>
                <li class=detail__item>
                   <span class=detail__item-icon>
                      <svg>
                         <use xlink:href=#icon-altitude></use>
                      </svg>
                   </span>
                   <div class=detail__item-desc><span class=title>max altitude</span> From <?php the_field('departure_altitude'); ?> feet at <?php the_field('departure_location'); ?> to <?php the_field('max_altitude'); ?> feet at <?php the_field('destination'); ?></div>
                </li>
            <?php endif; ?>
             </ul>
          </div>
       </div>
    </div>
    <!--/.row-->
 </div>
 <!--/.container-->
</section>
<!--/.trip-intro-->