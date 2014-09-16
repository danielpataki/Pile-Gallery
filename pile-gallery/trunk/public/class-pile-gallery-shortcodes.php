<?php

/**
 * Shortcodes created by the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Pile_Gallery
 * @subpackage Pile_Gallery/shortcodes
 */

/**
 * Shortcodes created by the plugin.
 *
 * Defines the shortcodes and their codes. Where relevant, HTML output is
 * defined as partials.
 *
 * @package    Pile_Gallery
 * @subpackage Pile_Gallery/shortcodes
 * @author     Your Name <email@example.com>
 */
class Pile_Gallery_Shortcodes {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

        add_shortcode( 'pile_gallery', array( $this, 'pile_gallery' ) );

	}

	/**
	 * The main pile gallery shortcode. This is split into multiple functions depending
     * on the type of gallery used.
	 *
	 * @since    1.0.0
	 */
    public function pile_gallery( $atts = array() ) {
		global $pile;

        $atts = shortcode_atts( array(
			'id' => null,
			'gutter' => 30,
			'columns' => 3,
			'pile_angles' => 2,
			'delay' => 0,
			'random_angle' => 'false'
		), $atts, 'pile_gallery' );
        extract( $atts );

        $type = get_field( 'pg_gallery_source', $id );

        if( empty( $type ) ) {
            return false;
        }

        $pile = call_user_func( array( $this, 'pile_gallery_' . $type ), $id, $atts );
		$pile = apply_filters( 'pile_gallery/pile_content', $pile );
		$pile = apply_filters( 'pile_gallery/pile_content_' . $type, $pile );

	 	$output = include( plugin_dir_path( __FILE__ ) . '/partials/shortcodes/pile-display.php' );

        return $output;




    }

	public function pile_gallery_custom( $id, $atts ) {
		$pile = array();
		if( have_rows('piles', $id ) ) {
    		while ( have_rows('piles', $id) ) {
				the_row();
				$pile_name = get_sub_field( 'pile_name' );
				$images = get_sub_field( 'pile_images' );
				foreach( $images as $image )
				$pile[] = array(
					'pile' => $pile_name,
					'title' => $image['title'],
					'img' => $image['url']
				);
			}
		}

		return $pile;
	}

	/**
	 * Assembles Pile Array From Posts.
     *
     * @todo: figure out image size
	 *
	 * @since    1.0.0
	 */
    public function pile_gallery_post( $id, $atts ) {
        extract( $atts );

		$pile = array();

        $taxonomy = get_field( 'pg_taxonomy', $id );
        $taxonomy = ( is_array( $taxonomy ) ) ? $taxonomy[0] : $taxonomy;
        $terms = get_terms( $taxonomy );

        if( empty( $terms ) || is_wp_error( $terms ) ) {
            return false;
        }

        while( $term = current( $terms ) ) {
			$args = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy,
                        'field'    => 'term_id',
                        'terms'    => $term->term_id
                    ),
                ),
            );

			$args = apply_filters( 'pile_gallery/post_query_args', $args );

            $term_posts = new WP_Query( $args );

            while( $term_posts->have_posts() ) {
                $term_posts->the_post();

                $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                $attachment = wp_get_attachment_image_src( $thumbnail_id, 'full' );

				$pile[] = array(
					'pile'  => $term->name,
					'title' => the_title( '', '', false ),
					'img'   => $attachment[0]
				);

	        }

            next( $terms );

        }

		return $pile;

    }

	/**
	 * Assembles Pile Array From Gallery.
     *
     * @todo: figure out image size
	 *
	 * @since    1.0.0
	 */
    public function pile_gallery_gallery( $id, $atts ) {
        extract( $atts );

		return array();

    }


	public function data_attributes( $atts = array() ) {
		$data = array();
		if( !empty( $atts ) ) {
			foreach( $atts as $name => $value ) {
				$data[] = 'data-' . $name . '=' . $value;
			}

			return implode( ' ', $data );
		}
	}

}
