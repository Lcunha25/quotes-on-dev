<?php
/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php get_header(); ?>

		<section class="wrapping-text">
			<div class="left-quotation">
				<i class="fas fa-quote-left"></i>
			</div>
			<div class="front-page-quotes">
			<?php include 'inc/function-loop.php'; 
			displayPost('1');?>

			<div class="buttom-align">
				<button type="button" id="refresh-quotes">Show me Another!</button>
			</div>
			</div>
			<div class="right-quotation">
				<i class="fas fa-quote-right"></i>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
