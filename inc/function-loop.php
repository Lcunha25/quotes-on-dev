<?php
// test if twitter exists or not
function testTT(){
	if (get_post_meta(get_the_ID(), '_qod_quote_source_url', true) == true) {
		echo "<h2>" . "<a href=" . get_post_meta(get_the_ID(), '_qod_quote_source_url', true) . ">, " . get_post_meta(get_the_ID(), '_qod_quote_source', true) . "</a>" . "</h2>";

	} elseif (get_post_meta(get_the_ID(), '_qod_quote_source_url', true) == false && get_post_meta(get_the_ID(), '_qod_quote_source', true) == true) {
		echo "<h2>, " . get_post_meta(get_the_ID(), '_qod_quote_source', true) . "</h2>"; 
	
	} else {
		return;
	}
}

// function used on "page-about.php" page with web function.
function displayPost ($postPP){
	$query = "orderby=rand&posts_per_page=$postPP";

	$newsPosts = new WP_Query($query);
		if ( $newsPosts->have_posts() ) : 

			if ( $newsPosts->is_home() && ! $newsPosts->is_front_page() ) : 
			endif; 

			/* Start the Loop */ 
			while ( $newsPosts->have_posts() ) : $newsPosts->the_post(); 
				echo "<div class='refresh'>";
				echo "<p>" . the_content( 'template-parts' ) . "</p>";
				echo "<div class='author-wrapper'>";
				echo "<h2>" . get_the_title() . "</h2>";
				echo testTT();
				echo "</div>";
				echo "</div>";
			endwhile; 

				the_posts_navigation(); 

		else : 

			get_template_part( 'template-parts/content', 'none' ); 

		endif; 
}
?>

<?php
// function for "archive" page. Importing product picture with price and name.
    function productLoop(){
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'orderby'=> 'random',
		'order' => 'ASC',
	);
	$products = new WP_Query( $args );
?>
	<?php if ( $products->have_posts() ) : ?>
		<?php while ( $products->have_posts() ) : $products->the_post(); ?>
			<?php $url = get_permalink();
			echo "<li class='archive-list'><a href=$url>" . get_the_title() . "</a></li>"; ?>
		<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<h2>Nothing found!</h2>
		<?php endif; ?>
	<?php } ?>

<?php
// function used on "page-about.php" page.

function displayDescription (){

	$newsPosts = new WP_Query();
		if ( $newsPosts->have_posts() ) : 

			if ( $newsPosts->is_home() && ! $newsPosts->is_front_page() ) : 
			endif; 

				/* Start the Loop */ 
			while ( $newsPosts->have_posts() ) : $newsPosts->the_post(); 
				echo "<div class='refresh'>";
				echo "<h2>" . "<a> " . get_the_title() . "</a>" . "</h2>";
				echo "<p>" . the_excerpt() . "</p>";
				echo "</div>";
			endwhile; 

				the_posts_navigation(); 

		else : 

			get_template_part( 'template-parts/content', 'none' ); 

		endif; 
}
?>

<?php 
// "submit.php" Check if the person is logged in to submit new quote
function logedIn() {
	if (is_user_logged_in()) {
		echo "<div class='submit-quote'>";
		echo "<form class='submit-quote-form'>";
		echo "<div class='wrapping-text-submit'>";
		echo "<p>Author name:<p> <input type='text' name='author'><br>";
		echo "</div>";
		echo "<div class='wrapping-text-submit-quote'>";
		echo "<p>Quote:<p> <textarea type='text' name='quote'></textarea><br>";
		echo "</div>";
		echo "<div class='wrapping-text-submit'>";
		echo "<p>Quote Source:<p> <input type='text' name='quoteSource'><br>";
		echo "</div>";
		echo "<div class='wrapping-text-submit'>";
		echo "<p>URL:<p> <input type='text' name='quoteURL'><br>";
		echo "</div>";
		echo "</form>";
		echo "<button id='button-submit-quote'>Submit</button>";
		echo "</div>";
	} else {
		echo "<a class='login' href=" . wp_login_url( $redirect ) . ">Click here to login.</a>";
	}
}
?>

<?php
// test if twitter exists or not
function testTT2(){
	if (get_post_meta(get_the_ID(), '_qod_quote_source_url', true) == true) {
		echo "<h2>" . "<a href=" . get_post_meta(get_the_ID(), '_qod_quote_source_url', true) . ">, " . get_post_meta(get_the_ID(), '_qod_quote_source', true) . "</a>" . "</h2>";

	} elseif (get_post_meta(get_the_ID(), '_qod_quote_source_url', true) == false && get_post_meta(get_the_ID(), '_qod_quote_source', true) == true) {
		echo "<h2>, " . get_post_meta(get_the_ID(), '_qod_quote_source', true) . "</h2>"; 
	
	} else {
		return;
	}
}
// function used on "category.php" page with web function and pagination.
function archivePP ($postPP){
	$query = "&orderby=rand&posts_per_page=$postPP";

	$newsPosts = new WP_Query($query);
		if ( $newsPosts->have_posts() ) : 

			if ( $newsPosts->is_home() && ! $newsPosts->is_front_page() ) : 
			endif; 

			/* Start the Loop */ 
			while ( $newsPosts->have_posts() ) : $newsPosts->the_post(); 
				echo "<div class='refresh'>";
				echo "<p>" . the_content( 'template-parts' ) . "</p>";
				echo "<div class='author-wrapper'>";
				echo "<h2>" . get_the_title() . "</h2>";
				echo testTT2();
				echo "</div>";
				echo "</div>";
			
			endwhile; 
			
			qod_numbered_pagination();

		else : 

			get_template_part( 'template-parts/content', 'none' ); 

		endif; 
}

?>