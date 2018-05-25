<?php
// function used on "page-about.php" page.

    function displayPost ($postPP){
        $query = "orderby=rand&posts_per_page=$postPP";

        $newsPosts = new WP_Query($query);
			 if ( $newsPosts->have_posts() ) : 

				 if ( $newsPosts->is_home() && ! $newsPosts->is_front_page() ) : 
					echo '<header>';
					echo	'<h1 class="page-title screen-reader-text"> single_post_title(); </h1>';
					echo '</header>';
				 endif; 

				 /* Start the Loop */ 
				 while ( $newsPosts->have_posts() ) : $newsPosts->the_post(); 

					echo "<h2>" . "<a>" . get_the_title() . "</a>" . "</h2>";
					echo "<p>" . the_content( 'template-parts' ) . "</p>";

				 endwhile; 

				 the_posts_navigation(); 

			 else : 

				 get_template_part( 'template-parts/content', 'none' ); 

			 endif; 
    }
?>
