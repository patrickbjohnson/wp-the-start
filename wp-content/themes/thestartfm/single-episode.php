<?php
/**
* Single Post Template: Episode Template
* 
* Description: This part is optional, but helpful for describing the Post Template
 */

include_once( get_template_directory() . '/functions/lib/data/class-episode-view-model.php' );

get_header();

the_post();

$episode = new Episode_View_Model($post);

$hero_image = $episode->show_hero_image['url'];

?>
<main class="main single-episode">
	<div class="single-episode__hero">
		<a class="site-logo" href="<?php echo home_url();?>">site logo</a>
		<img src="<?php echo $hero_image; ?>" alt="">
	</div>

	<article class="article container">
		<div class="single-episode__header">
			<h1 class="single-episode__title"><?php the_title(); ?></h1>
			<h2 class="single-episode__subtitle"><?php echo $episode->guest_name; ?></h2>
			
			<?php if (!empty( $episode->get_guestlinks() ) ) : ?>
				<ul class="single-episode__header-links">

				<?php foreach ($episode->get_guestlinks() as $guest_links => $guest_link) : ?>
					<li class="social-list single-episode__header-links-item">
						<a href="<?php echo $guest_link['url']; ?>" class="social-list__item single-episode__header-links-link">
							<svg class="social-list__icon social-list__icon--<?php echo strtolower( $guest_link['url_type'] );?> single-episode__header-links-icon" viewBox="<?php echo getSocialIconViewbox( strtolower( $guest_link['url_type'] ) ); ?>">
								<use xlink:href="<?php BPAssetHelper::the_image('icons.svg'); ?>#<?php echo strtolower($guest_link['url_type']);?>"></use>
							</svg>
						</a>
					</li>
				<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			
		</div>

		<?php if ( $episode->episode_embed ) : ?>

			<div class="single-episode__media">
				<iframe frameborder='0' height='36px' scrolling='no' seamless src='<?php echo esc_url( $episode->episode_embed ); ?>' width='100%'></iframe>
			</div>
			
		<?php endif; ?>
		
		<div class="single-episode__content <?php echo $episode->get_shownotes() ? 'two-col-layout' : ''; ?>">
			<div class="single-episode__content-main <?php echo $episode->get_shownotes() ? 'two-col-layout__col' : ''; ?>">
				<?php echo $episode->the_content(); ?>
			</div>
			<aside class="single-episode__shownotes single-episode__content-aside <?php echo $episode->get_shownotes() ? 'two-col-layout__col' : ''; ?>">
				<?php if ( !empty( $episode->get_shownotes() ) ) :  ?>
					<h2 class="single-episode__subtitle shownotes__title">Shownotes</h2>
					<ul class="list-unstyled shownotes">
					<?php foreach ($episode->get_shownotes() as $shownotes => $shownote) : ?>
						<li class="shownotes__item">
							<a href="<?php echo $shownote['url']; ?>" class="shownotes__item-link"><?php echo $shownote['text']; ?></a>
						</li>
					<?php endforeach; ?>						
					</ul>
				<?php endif; ?>
			</aside>


		</div>

		
		
		
	</article>
</main>







<?php get_footer(); ?>