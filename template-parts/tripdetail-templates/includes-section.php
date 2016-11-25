<div class=tab-includes-excludes id=tab-includes-excludes>
   <div class=includes>
      <h2 class=tab-heading><?php the_field('included_title'); ?></h2>
      <?php the_field('included_content'); ?>      
   </div>
   <div class=excludes>
      <h2 class=tab-heading><?php the_field('not_included_title'); ?></h2>
      <?php the_field('not_included_content'); ?>
   </div>
</div>
<!--/.tab-includes-excludes-->