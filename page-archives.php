<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <!-- funtion to get posts -->
        <section class="wrapping-text">
            <div class="left-quotation">
                <i class="fas fa-quote-left"></i>
            </div>
            <div class="front-page-quotes">
            <div class="category">
                <h1>Archives</h1>
                <h2>Quote Authors</h2>
                <ul>
           		<?php include 'inc/function-loop.php'; 
                   quotesLopp();?>
                </ul>
            </div>
            <!-- function to get category -->
        <div class="category">
            <h2>Category</h2>
            <ul>
        <?php
            $taxonomy = 'category';
            $product_types = get_terms($taxonomy); 
            foreach ($product_types as $product) {
                $url = get_site_url() . '/index.php/' . 'category' .'/' . $product->slug;
                echo "<li class='archive-list'><a href=$url>$product->name</a></li>";
            } 
        ?>
            </ul>
        </div>
        <!-- function to get tags -->
        <div class="category">
            <h2>Tags</h2>
            <ul>
            <?php
            $product_types = get_tags(); 
            foreach ($product_types as $product) {
                $url = get_site_url() . '/index.php/' . 'tag' .'/'.$product->slug;
                echo "<li class='archive-list'><a href=$url>$product->name</a></li>";
            } 
        ?>
            </ul>
        </div>
        </div>
		<div class="right-quotation">
			<i class="fas fa-quote-right"></i>
		</div>
	</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
