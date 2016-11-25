<section class=inner-banner>
 <picture>
    <!--[if IE 9]>
    <video style="display: none;">
       <![endif]-->
       <source srcset=<?php echo get_template_directory_uri().'/images/uploads/slider-mobile.png'; ?> media="(max-width: 480px)">
       <source srcset=<?php echo get_template_directory_uri().'/images/uploads/ipad-home.png'; ?> media="(max-width: 768px)">
       <!--[if IE 9]>
    </video>
    <![endif]-->
    <?php $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
    <img src=<?php echo $featuredImage[0]; ?> >
 </picture>
</section>
<!--/.inner-banner-->