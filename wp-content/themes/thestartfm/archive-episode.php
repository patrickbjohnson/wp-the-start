<?php 
/**
 * Episodes Archive Page Template
 */

include_once( get_template_directory() . '/functions/lib/data/class-episode-view-model.php' );

get_header();

?>



 <main class="main">

 	<h1>episode Archives</h1>

 	<?php if ( have_posts() ) : ?>
 		<div class="grid episode-grid">
 			<?php while ( have_posts() ) : the_post(); $episode = new Episode_View_Model( $post ); ?>
 				
 				<?php the_partial('episode-grid-item', array(
 					'episode' => $episode
 				)); ?>
 				
 			<?php endwhile; ?>
 		</div>
 	<?php endif; wp_reset_postdata();?>

 </main>

 <?php wp_get_archives('type=yearly'); ?>

 <?php get_footer(); ?>