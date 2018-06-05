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
	<div class="col push-s1 s10 push-m1 m10 push-l2 l8">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class='card-sopki'>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				sopki_posted_on();
				sopki_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
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

	<footer class="entry-footer">
		<?php sopki_entry_footer(); ?>
	</footer><!-- .entry-footer -->
		</div>
</article><!-- #post-<?php the_ID(); ?> -->
		</div>
		</div>
