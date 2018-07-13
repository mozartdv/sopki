<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sopki
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
        <div class="row">
		<div class="col s12 push-m1 m10 push-l1 l10">
        <h2 class="header-category center-align"><?php single_tag_title(); ?></h2>
        </div>
        </div>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
				//comments_template();
			//endif;

		endwhile; // End of the loop.
		?>
		<div class="row">
		<div class="col s12 push-m1 m10 push-l1 l10">
		<h2 class="now-read">Сейчас читают:</h2>
		
		<?php $postslist = get_posts('posts_per_page=10&order=post_date'); ?>
		<ul class="main-news-list">
							<?php foreach ($postslist as $post) : setup_postdata($post); ?>
							<li class"more-news">
								<div class="more-news-category">
								<?php 
								$categories = get_the_category(); 
								if($categories[0]){
									echo '<a  class="" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
								}; 
								?></div>
								<div class="more-news-link"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
							</li>
							<?php endforeach; 
							wp_reset_postdata(); ?>
		</ul>
		</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
