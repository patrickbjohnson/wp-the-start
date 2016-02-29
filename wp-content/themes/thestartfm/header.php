<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <?php if (is_single()): 
      
      $default_og_title = single_post_title('', false);
    ?>
    <meta property="og:title" content="<?php echo apply_filters( 'og_title', $default_og_title, $post ); ?>" />
    <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
    <?php else: ?>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:type" content="website" />
    <?php endif; ?>
    
    <?php $default_og_image = wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ); ?>
    <meta property="og:image" content="<?php echo apply_filters( 'og_image', $default_og_image, $post ); ?>">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
      