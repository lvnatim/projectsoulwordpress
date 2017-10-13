<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package projectsoul
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

        <?php if ( have_posts() ) : ?>

            <? while ( have_posts() ) : the_post(); ?>

                <section class="theme-dark">
                    <div class="l-container">
                        <article>
                            <h1><?php the_excerpt(); ?></h1>
                            <?php the_content(); ?>
                        </article>
                    </div>
                </section>

                <section class="theme-light">
                    <div class="l-container">
                        <?php $about_page = get_page_by_title('about'); ?>
                        <?php echo get_the_post_thumbnail($about_page); ?>
                        <h1><?php echo get_the_excerpt($about_page); ?></h1>
                        <?php echo get_the_content($about_page); ?>
                    </div>
                </section>

                <section class="theme-dark">
                    <div class="l-container">
                        <h1><?php the_field('sponsor_text'); ?></h1>
                        <div class="slider">
                            <?php foreach(range(1,8) as $count): ?>
                                <?php if(get_field('sponsor_logo_' . $count)): ?>
                                    <div><img src="<?php the_field('sponsor_logo_' . $count); ?>"/></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
                    <section class="theme-light m-overlay">
                        <div class="l-container">
                            <h2>Upcoming Events</h2>
                            <div class="slider">
                                <?php 
                                    $events = tribe_get_events( array(
                                     'posts_per_page' => 5,
                                    ) );

                                 ?>
                                 <?php foreach($events as $event):?>
                                    <div>
                                        <div class="eventtext-top">
                                            <?php echo tribe_get_start_date($event->ID, false, 'F j, Y'); ?>
                                        </div>

                                        <?php echo get_the_post_thumbnail($event->ID); ?>
                                        <article>
                                            <p><?php echo get_the_title($event->ID); ?></p>
                                            <p><?php echo tribe_get_address($event->ID) ;?> <?php echo tribe_get_city($event->ID) ;?></p>
                                        </article>
                                    </div>
                                 <?php endforeach;?>
                            </div>
                        </div>
                    </section>

                <section class="theme-light">
                    <div class="l-container">
                        <div>
                            <?php the_field('booknow_text'); ?>
                        </div>
                    </div>
                </section>

            <?php endwhile; ?>

            
        <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
