<?php  

/**
 * Podcast Global URLs
 * - subscribe url: URL for subscribing to the podcast on iTunes or wherever the link points
 * - rss feed url: URL for RSS feed of podcast (provided by CDN)
 *
 * 
 */

$subscribe_url = get_field( 'podcast_subscribe_url', 'option' );
$rss_url = get_field( 'podcast_rss_feed_url', 'option' );
$social_urls = get_field( 'podcast_social_media','option' );

?>

    <footer class="footer">
    	<div class="footer__group">
        	<p><a href="<?php echo home_url();?>"><?php echo get_field( 'podcast_name','option' ); ?></a> &copy; <?php echo date( "Y" ); ?></p>
    	</div>

    	<div class="footer__group">
			
			<?php if ( has_nav_menu( 'site-menu' ) ) : ?>
				<div class="site-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'site-menu' ) ); ?>
				</div>
			<?php endif; ?>

			<div class="podcast-links">

				<?php if ( !empty( $subscribe_url ) ) : ?>
	        		<a class="podcast-links__link" href="<?php echo $subscribe_url; ?>" target="_blank">Subscribe</a> 
				<?php endif; ?>

				<?php if (!empty( $rss_url ) ) : ?>
					<a class="podcast-links__link social-list__item" href="<?php echo $rss_url; ?>" target="_blank">Rss</a> 
				<?php endif; ?>

			</div>

			<?php if ( !empty( $social_urls ) ) : ?>

				<div class="social-list">
					<?php foreach ( $social_urls as $url ) : ?>
						<a class="social-list__item" href="<?php echo $url['link_url']; ?>">
							<svg class="social-list__icon social-list__icon--<?php echo strtolower( $url['link_type'] );?>" viewBox="<?php echo getSocialIconViewbox( strtolower( $url['link_type'] ) ); ?>">
								<use xlink:href="<?php BPAssetHelper::the_image('icons.svg'); ?>#<?php echo strtolower($url['link_type']);?>"></use>
							</svg>
						</a>
					<?php endforeach ?>
				</div>
				
			<?php endif; ?>
			
    	</div>
    </footer>
	<?php wp_footer(); ?>
	</div>
</body>
</html>