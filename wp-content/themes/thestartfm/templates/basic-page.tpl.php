<?php
/**
 * Template Name: Basic Page Template
 *
 */
include_once( get_template_directory() . '/functions/lib/data/class-episode-view-model.php' );


get_header();

the_post();

$hero_image = get_field('page_hero');

?>




<main class="main basic-page">
	<?php if ( $hero_image ) : ?>
		<div class="basic-page__hero">
			<img src="<?php echo $hero_image['url']; ?>" alt="">
		</div>
	<?php endif; ?>

	<article class="article">
		<h1 class="basic-page__title"><?php the_title(); ?></h1>
		<div class="basic-page__content">
			<?php the_content(); ?>
		</div>
	</article>
</main>






<?php get_footer(); ?>