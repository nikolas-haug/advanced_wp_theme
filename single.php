<?php get_header(); ?>
    <div class="container content">
        <div class="main block">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <article class="post">
                        <h2><?php the_title(); ?></h2>
                        <p class="meta">Posted on
                            <?php the_time('F j, Y g:i a'); ?>
                        by
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <?php the_author(); ?>
                        </a>
                        Posted in
                        <?php 
                            $categories = get_the_category();
                            $separator = ', ';
                            $output = '';

                            if($categories) {
                                foreach($categories as $category) {
                                    $output .= '<a href="'.get_category_link( $category->term_id ).'">'.$category->cat_name.'</a>'.$separator;
                                }
                            }
                            echo trim($output, $separator);
                        ?>
                        <?php if(has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        </p>
                        <p><?php the_content(); ?></p>
                    </article>
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