<?php get_header(); ?>
    <div class="container content">
        <div class="main block">
            <h1 class="page-header">
                <?php 
                    if(is_category()) {
                        single_cat_title( );
                    } else if(is_author(  )) {
                        the_post(  );
                        echo 'Archives by Author: ' . get_the_author(  );
                        rewind_posts(  );
                    } else if(is_tag(  )) {
                        single_tag_title( ); 
                    } else if(is_day(  )) {
                        echo 'Archives by Day: ' . get_the_date(  );
                    } else if(is_month(  )) {
                        echo 'Archives by Month ' . get_the_date( 'F Y' );
                    } else if(is_year(  )) {
                        echo 'Archives by Year ' . get_the_date( 'Y' );
                    } else {
                        echo 'Archives';
                    }
                ?>
            </h1>
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                   <?php get_template_part('content'); ?>
                <?php endwhile; ?>
            <?php else : ?>
                    <?php echo wpautop( 'Sorry, no posts were found.' ); ?>
            <?php endif; ?>
        </div>

        <div class="side">
            <div class="block">
                <h3>Sidebar Head</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decid</p>
                <a href="#" class="button">More</a>
            </div>
        </div>
    </div>
<?php get_footer(); ?>