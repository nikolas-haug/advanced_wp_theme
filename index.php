<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head> 
    <body <?php body_class(); ?>>

        <header>
            <div class="container">
                <h1>
                    <a href="index.html">
                        <?php bloginfo('name'); ?>
                    </a>
                    <small><?php bloginfo('description'); ?></small>
                </h1>
                <div class="h_right">
                    <form method="GET" action="<?php esc_url(site_url( )); ?>">
                        <input type="text" name="s" placeholder="Search...">
                    </form>
                </div>
            </div>
        </header>

        <nav class="nav main-nav">
            <div class="container">
                <?php 
                    $args = array(
                        'theme_location' => 'primary'
                    )
                ?>

                <?php wp_nav_menu($args); ?>
            </div>
        </nav>

        <div class="container content">
            <div class="main block">
                <article class="post">
                    <h2>Blog Post 1</h2>
                    <p class="meta">Posted at 11:00 ON May 9 by admin</p>
                    <p>
                        One morning, when Gregor Samsa woke from troubled
                        dreams, he found himself transformed in his bed into a
                        horrible vermin. He lay on his armour-like back, and if
                        he lifted his head a little he could see his brown
                        belly, slightly domed and divided by arches into stiff
                        sections. The bedding was hardly able to cover it and
                        seemed ready to slide off any moment. His many legs,
                        pitifully thin compared with the size of the rest of
                        him, waved about helplessly as he looked. "What's
                        happened to me?" he thought.
                    </p>
                    <p>
                        fur muff that covered the whole of her lower arm towards
                        the viewer. Gregor then turned to look out the window at
                        the dull weather. Drops of rain could be heard hitting
                        the pane, which made him feel quite sad. "How about if I
                        sleep a little bit longer and forget all this nonsense",
                        he thought, but that was something he was unable to do
                        because he was used to sleeping on his right, and in his
                        present state couldn't get into that position. However
                        hard he threw himself onto his right, he always rolled
                        back to where he was. He must have tried it a hundred
                        times, shut his eyes so that he wouldn't have to look at
                        the floundering legs, and only stopped when
                    </p>
                    <a href="#" class="button">Read More</a>
                </article>
                <article class="post">
                    <h2>Blog Post 1</h2>
                    <p class="meta">Posted at 11:00 ON May 9 by admin</p>
                    <p>
                        One morning, when Gregor Samsa woke from troubled
                        dreams, he found himself transformed in his bed into a
                        horrible vermin. He lay on his armour-like back, and if
                        he lifted his head a little he could see his brown
                        belly, slightly domed and divided by arches into stiff
                        sections. The bedding was hardly able to cover it and
                        seemed ready to slide off any moment. His many legs,
                        pitifully thin compared with the size of the rest of
                        him, waved about helplessly as he looked. "What's
                        happened to me?" he thought.
                    </p>
                    <p>
                        fur muff that covered the whole of her lower arm towards
                        the viewer. Gregor then turned to look out the window at
                        the dull weather. Drops of rain could be heard hitting
                        the pane, which made him feel quite sad. "How about if I
                        sleep a little bit longer and forget all this nonsense",
                        he thought, but that was something he was unable to do
                        because he was used to sleeping on his right, and in his
                        present state couldn't get into that position. However
                        hard he threw himself onto his right, he always rolled
                        back to where he was. He must have tried it a hundred
                        times, shut his eyes so that he wouldn't have to look at
                        the floundering legs, and only stopped when
                    </p>
                    <a href="#" class="button">Read More</a>
                </article>
                <article class="post">
                    <h2>Blog Post 1</h2>
                    <p class="meta">Posted at 11:00 ON May 9 by admin</p>
                    <p>
                        One morning, when Gregor Samsa woke from troubled
                        dreams, he found himself transformed in his bed into a
                        horrible vermin. He lay on his armour-like back, and if
                        he lifted his head a little he could see his brown
                        belly, slightly domed and divided by arches into stiff
                        sections. The bedding was hardly able to cover it and
                        seemed ready to slide off any moment. His many legs,
                        pitifully thin compared with the size of the rest of
                        him, waved about helplessly as he looked. "What's
                        happened to me?" he thought.
                    </p>
                    <p>
                        fur muff that covered the whole of her lower arm towards
                        the viewer. Gregor then turned to look out the window at
                        the dull weather. Drops of rain could be heard hitting
                        the pane, which made him feel quite sad. "How about if I
                        sleep a little bit longer and forget all this nonsense",
                        he thought, but that was something he was unable to do
                        because he was used to sleeping on his right, and in his
                        present state couldn't get into that position. However
                        hard he threw himself onto his right, he always rolled
                        back to where he was. He must have tried it a hundred
                        times, shut his eyes so that he wouldn't have to look at
                        the floundering legs, and only stopped when
                    </p>
                    <a href="#" class="button">Read More</a>
                </article>
            </div>

            <div class="side">
                <div class="block">
                    <h3>Sidebar Head</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decid</p>
                    <a href="#" class="button">More</a>
                </div>
            </div>
        </div>

        <footer class="main-footer">
            <div class="container">
                <div class="f_left">
                    <p>&copy; 2020 - Advanced WP Theme</p>
                </div>
                <div class="f_right">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>