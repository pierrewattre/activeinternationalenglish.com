<?php
/**
 * Template Name: Home Page
 * Description: A Page Template for the home page with Flash content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header('home'); ?>

		<div id="primary">
			<section id="content" role="main">
        
				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>
				  
			</section><!-- #content -->
		</div><!-- #primary -->


<?php get_footer(); ?>