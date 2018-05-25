<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php include 'inc/function-loop.php'; 
                displayPost('1');?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
