<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage WP_Theme
 * @since 1.0.2
 */

get_header(); ?>

<?php

global $themeOptions;

/* Start the Loop */
while (have_posts()):
    the_post();

    get_template_part('template-parts/content/content', 'page');

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
        comments_template();
    }

endwhile; // End of the loop.

?>

<?php get_footer(); ?>
