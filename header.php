<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="<?php the_author(); ?>">
    <link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri() . '/assets/favicon.png'; ?>">
    <?php wp_head(); ?>
  </head>

  <body>
    <nav class="navbar container" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="<?php echo get_bloginfo( 'wpurl'); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/portal.png" height="128px">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="<?php echo get_bloginfo( 'wpurl' ); ?>">
                   Home
                </a>
                <?php
                    $pages = get_pages( array( '' ));
                    foreach ($pages as $page) :
                ?>
                <a class="navbar-item" href="<?php echo get_page_link($page->ID); ?>">
                    <?php echo $page->post_title;?>
                </a>
                <?php endforeach ?>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-blue" href="<?php echo get_dashboard_url();  ?>">
                        <?php if(is_user_logged_in()) {
                            echo 'Dashboard';
                        } else {
                            echo 'Log in';
                        } ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
