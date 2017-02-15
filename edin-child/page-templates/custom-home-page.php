<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Edin
 */

get_header(); ?>


		<div class="home search">

			<h1> WELCOME TO OUR PART </h1>

			<img src="http://placehold.it/1920x800">

			<!--ISOTOPE TEST BEGINS -->

<ul id="filters">
    <?php
        $terms = get_terms('portfolio-categories');
        $count = count($terms);
            echo '<li><a href="javascript:void(0)" title="" data-filter=".all" class="active">All</a></li>';
        if ( $count > 0 ){
 
            foreach ( $terms as $term ) {
 
                $termname = strtolower($term->name);
                $termname = str_replace(' ', '-', $termname);
                echo '<li><a href="javascript:void(0)" title="" data-filter=".'.$termname.'">'.$term->name.'</a></li>';
            }
        }
    ?>
</ul>

<div id="portfolio">
 
  <?php
  /* 
  Query the post 
  */
  $args = array( 'post_type' => 'portfolio', 'posts_per_page' => -1 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); 
 
     /* 
     Pull category for each unique post using the ID 
     */
     $terms = get_the_terms( $post->ID, 'portfolio-categories' ); 
     if ( $terms && ! is_wp_error( $terms ) ) : 
 
         $links = array();
 
         foreach ( $terms as $term ) {
             $links[] = $term->name;
         }
 
         $tax_links = join( " ", str_replace(' ', '-', $links));          
         $tax = strtolower($tax_links);
     else : 
   $tax = '';         
     endif; 
 
     /* Insert category name into portfolio-item class */ 
     echo '<div class="all portfolio-item '. $tax .'">';
     echo '<a href="'. get_permalink() .'" title="'. the_title_attribute() .'">';
     echo '<div class="thumbnail">'. the_post_thumbnail() .'</div>';
     echo '</a>'; 
     echo '<h2>'. the_title() .'</h2>';
     echo '<div>'. the_excerpt() .'</div>';
     echo '</div>'; 
  endwhile; ?>
 
</div>


<!--ISOTOPE TEST ENDS -->

			

		</div>

	<?php rewind_posts(); ?>
	

	<div class="content-wrapper clear">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) {
							comments_template();
						}
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .content-wrapper -->

<?php get_footer(); ?>