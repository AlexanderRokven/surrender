<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Mini_Studio
 * @since Ministudio 1.0.5
 */

get_header('home'); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php ministudio_fun_slider(); ?>

<?php endwhile; ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php ministudio_fun_wie_zijn_we(); ?>

<?php endwhile; ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php ministudio_fun_wat_doen_we(); ?>

<?php endwhile; ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php ministudio_fun_waarom_doen_we_dit(); ?>

<?php endwhile; ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php ministudio_fun_waar_spelen_we(); ?>

<?php endwhile; ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php ministudio_fun_winkel(); ?>

<?php endwhile; ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php ministudio_fun_latest_product(); ?>

<?php endwhile; ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php ministudio_fun_contact(); ?>

<?php endwhile; ?>

<?php
get_footer('home');
