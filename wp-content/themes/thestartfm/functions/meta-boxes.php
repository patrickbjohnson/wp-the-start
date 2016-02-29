<?php
/* ------------------------------------------------------------
 *
 * 	META BOX REGISTRATION
 * 
 * Register all meta boxes required by the theme below.
 * 
 * ------------------------------------------------------------ */
 

 // Wonder if it's worth just not having seasons 
 // at all if a user does not select them?
 // 
 function custom_meta_box_markup( $object ) {
 	$season_loop_counter = 1;

 	$season_count = get_field( 'season_count', 'option' ) ? get_field( 'season_count', 'option' ) : 5;

 	$season_value = get_post_meta( $object->ID, "tsfm_season_select", true );

 	?>
		<div>
			<p>Select the season this show is apart of</p>
			<strong style="display: inline-block; margin-right: 5px; vertical-align: middle;">Season</strong>

			<select name="tsfm_season_select" id="tsfm_season_select">
				<option value="">No Season Selected</option>

				<?php for( $i = $season_loop_counter; $i <= $season_count; $i++ ) :?>
					<option value="<?php echo $i; ?>" <?php selected( $season_value, $i ); ?>><?php echo $i; ?></option>
				<?php endfor; ?>
			</select>
		</div>
 	<?php
     
 }

 function save_custom_meta_box( $post_id, $post, $update ) {

 	// check if value is set
 	if ( !isset( $_POST['tsfm_season_select'] ) ) {
 		return $post_id;
 	}

 	// check if user has admin rights
 	if ( !current_user_can( 'edit_post', $post_id ) ) {
 		return $post_id;
 	}

 	// do nothing if post is autosaving
 	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;	
 	}

 	// make sure post is correct post type
 	if ( 'episode' != $post->post_type ) {
 		return $post_id;
 	}

 	$meta_episode_season = '';

 	if ( isset( $_POST['tsfm_season_select'] ) ) {
 		$meta_episode_season = $_POST['tsfm_season_select'];
 	}

 	update_post_meta($post_id, "tsfm_season_select", $meta_episode_season);

 	
 }

 function add_season_meta_box() {
     add_meta_box("tsfm_season_meta_box", "Season", "custom_meta_box_markup", "episode", "side", null, null);
 }

 add_action("add_meta_boxes", "add_season_meta_box");
 add_action("save_post", "save_custom_meta_box", 10, 3);