<?php
/**
 * Episode Grid Item 
 *
 * @param [type] $url Link to episode
 * @param [type] $image Image for episode tile
 * @param string $title Title for episode tile
 * @param string $guest Guest name for episode tile
 * @param string $runtime Runtime for episode
*/
?>



<article class="grid__item episode-grid__episode">

	<a class="episode-grid__episode-anchor" href="<?php echo $episode->get_permalink(); ?>">
		<div class="media-wrap">
			<img class="episode-grid__episode-tile" src="<?php echo $episode->show_tile_image['sizes']['medium']; ?>" alt="">
		</div>
		<div class="episode-grid__episode-cover">

			<h1 class="episode-grid__episode-title"><?php echo $episode->get_title(); ?></h1>
			
			<?php if ($episode->guest_name || $episode->runtime ) : ?>

				<div class="episode-grid__episode-meta">
					<?php if ($episode->guest_name) : ?>
						<h2 class="episode-grid__episode-subtitle"><?php echo $episode->guest_name; ?></h2>
					<?php endif; ?>

					<?php if ($episode->runtime) : ?>
						<span class="episode-grid__episode-runtime"><?php echo $episode->runtime ?></span>
					<?php endif; ?>
				</div>

			<?php endif; ?>
			
		</div>
	</a>
</article>