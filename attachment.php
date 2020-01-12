<?php get_header(  ); ?>
<div class="container">
    <article class="post">
        <div class="attachment-container">
        <?php $image_size = apply_filters( 'wporg_attachment_size', 'large' ); 
                 echo wp_get_attachment_image( get_the_ID(), $image_size ); ?>
        </div>
    </article>
</div>
<?php get_footer(); ?>