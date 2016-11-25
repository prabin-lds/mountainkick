<?php if( have_rows('faqs') ): ?>
	<div class=tab-faq id=tab-faq>
	 <h2 class=tab-heading>faqs</h2>
	 <div class=lds-accordion>
	    <ul>
	    	<?php while( have_rows('faqs') ): the_row(); ?>
		       <li>
		          <div><?php the_sub_field('faq_title'); ?></div>
		          <div class=accordion-content><?php the_sub_field('faq_content'); ?></div>
		       </li>
		    <?php endwhile; ?>	       
	    </ul>
	 </div>
	</div>
	<!--/.tab-faq-->
<?php endif; ?>