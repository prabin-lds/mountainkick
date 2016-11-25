<div class=tab-departure-dates id=tab-departure-dates>
   <ul class=clearfix>
      <li><a href=#fixed-dates>DEPATURE DATES</a></li>
      <li><a href=#private-dates>private dates</a></li>
      <li><a href=#tailor-made>customize your trip</a></li>
   </ul>
   <div id=fixed-dates>
      <table class=rwd-table>
         <tr>
            <th>DEPARTING</th>
            <th>DAYS</th>
            <th>STATUS</th>
            <th>COST</th>
            <th></th>
         </tr>]
         <?php if( have_rows('departures') ): ?>
            <?php while( have_rows('departures') ): the_row(); ?>
               <tr>
                  <td data-th=DEPARTING><?php the_sub_field('departing'); ?></td>
                  <td data-th=DAYS><?php the_sub_field('departing_days'); ?></td>
                  <td data-th=STATUS class="<?php echo strtolower( get_sub_field('departing_status') ); ?>"><?php the_sub_field('departing_status'); ?></td>
                  <td data-th=COST><?php the_sub_field('departing_cost'); ?></td>
                  <td><a href=# class="btn btn--border-black btn--small">VIEW TRIP DETAIL</a></td>
               </tr>
            <?php endwhile; ?>
         <?php endif; ?>
         
      </table>
   </div>
   <!--/#fixed-dates-->
   <div id=private-dates></div>
   <!--/#private-dates-->
   <div id=tailor-made></div>
   <!--/#tailor-made-->
</div>
<!--/.tab-departure-dates-->
