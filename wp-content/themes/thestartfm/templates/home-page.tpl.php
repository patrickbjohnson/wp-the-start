<?php
/**
 * Template Name: Home Page
 *
 */
include_once( get_template_directory() . '/functions/lib/data/class-episode-view-model.php' );


get_header();


$args = array(
	'post_type' => 'episode'
);

// The Query
$the_query = new WP_Query( $args );

?>
<main class="main">

	<?php if ( $the_query->have_posts() ) : ?>
		<div class="grid episode-grid">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $episode = new Episode_View_Model( $post ); ?>
				<?php the_partial('episode-grid-item', array(
					'episode' => $episode
					// 'url' => $episode->the_permalink(),
					// 'image' => $episode->show_tile_image['sizes']['medium'],
					// 'title' => $episode->get_title(),
					// 'guest' => 'Daniel Mall',
					// 'runtime' => '70 minutes'
				)); ?>
				
			<?php endwhile; ?>
		</div>
	<?php endif; wp_reset_postdata();?>

</main>






<?php get_footer(); ?>