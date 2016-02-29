<?php 

require_once( dirname( __FILE__ ) . '/class-post-view-model.php' );

class Episode_View_Model extends Post_View_Model {

    public function get_shownotes() {
        $shownotes = array();

        while ( have_rows('shownotes') ) {
            the_row();

            $shownotes[] = array(
                'text' => get_sub_field( 'shownotes_text' ),
                'url' => get_sub_field( 'shownotes_link' )
            );
        }

        return $shownotes;
    }

    public function get_guestlinks() {
        $guest_links = array();

        while ( have_rows('guest_links') ) {
            the_row();

            $guest_links[] = array(
                'url_type' => get_sub_field( 'url_type' ),
                'url' => get_sub_field( 'link_url' )
            );
        }

        return $guest_links;
    }

    // public function get_availability() {
    //     $availability = get_field( 'beer_availability', $this->post );

    //     if ( ! $availability ) {
    //         // if no availability was set, default to the beer type
    //         $availability = $this->get_beer_type();
    //     }
        
    //     return $availability;
    // }

    // public function get_beer_type() {
    //     $beer_type = get_the_terms( $this->post->ID, 'beer_type' );

    //     return empty( $beer_type ) ? '' : $beer_type[0]->name;
    // }

    // public function get_awards() {
    //     return explode( "\n", $this->awards );
    // }
    
}