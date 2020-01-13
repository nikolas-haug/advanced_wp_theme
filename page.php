<?php get_header(); ?>
    <div class="container content">
        <div class="main block">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                  <article class="page">
                    <?php if(page_is_parent() || $post->post_parent > 0) : ?>
                    <nav class="nav sub-nav">
                        <ul>
                            <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_parent()); ?>"><?php echo get_the_title(get_top_parent()); ?></a></span>
                            <?php $args = array(
                                'child_of' => get_top_parent(),
                                'title_li' => ''
                            ); 
                            ?>
                            <?php wp_list_pages($args); ?>
                        </ul>
                    </nav>
                    <div class="clr"></div>
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
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