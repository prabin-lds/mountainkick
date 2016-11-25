<?php if( get_field('equipments_content') ): ?>
   <div class=tab-equipments id=tab-equipments>
      <h2 class=tab-heading><?php the_field('equipments_title'); ?></h2>
      <?php the_field('equipments_content'); ?>   
      <?php if( get_field('equipments_note') ): ?>
         <p class="note m-t-3 m-b-3">Note: <?php echo str_ireplace( '<p>','',get_field('equipments_note') ); ?></p>
      <?php endif; ?>
      <a href=# class="btn btn--arrow btn--bg-border--black m-r-3">view all equipment list</a> <a href=# class="btn btn--arrow btn--bg-border--black hidden-xs-down">download equipment list</a>
   </div>
   <!--/.tab-equipments-->
<?php endif; ?>