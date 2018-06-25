<?php
/**
 * Template Name: front page
 * The template for displaying all pages.
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
			<!-- first time this page imports the function it comes from PHP, secont time from JavaScript. Each time there are two functions involved. One to sort most of the info and the second to sort name from name+link -->
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