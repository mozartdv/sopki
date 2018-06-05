<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sopki
 */

?>
<div class="row">
	<div class="col s12 push-m1 m10 push-l1 l10">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class='card-sopki'>
	<footer class="entry-footer category-data">
		
	</footer><!-- .entry-footer -->
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<p class="entry-meta data-meta">
				<?php
				the_time('j F Y');
				?>
			</p><!-- .entry-meta -->
		<?php endif;
		 
		$categories = get_the_category(); 
		if($categories[0]){
			echo '<a  class="category-data" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
		};
		


		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		 ?>
	</header><!-- .entry-header -->

	<?php sopki_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content('Узнать больше');

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sopki' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	
		</div>
</article><!-- #post-<?php the_ID(); ?> -->
		</div>
		</div>
