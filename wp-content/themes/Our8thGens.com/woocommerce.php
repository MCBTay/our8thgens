<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="left-column">
		<div id="content" role="main">
			<?php woocommerce_content(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<aside id="right-column">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-2') ) ?>
	</aside>
<?php get_footer(); ?>