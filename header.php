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
                    <a href="<?php echo site_url( '/' ) ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                    <small><?php bloginfo('description'); ?></small>
                </h1>
                <div class="h_right">
                    <form method="GET" action="<?php echo esc_url(site_url( '/' )); ?>">
                        <input type="text" name="s" placeholder="Search...">
                    </form>
                </div>
            </div>
        </header>

        <nav class="nav main-nav">
            <div class="container">
                <?php 
                    $args = array(
                        'theme_location' => 'primary',
                        'menu_id' => 'primary-nav'
                    )
                ?>

                <?php wp_nav_menu($args); ?>
            </div>
        </nav>