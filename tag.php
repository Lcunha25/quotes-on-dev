<?php
/**
 * The main template file.
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
		<div class="category-page-quotes">
			<?php include 'inc/function-loop.php'; 
			getPost('5')?>
		</div>
		<div class="right-quotation">
			<i class="fas fa-quote-right"></i>
		</div>
	</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
