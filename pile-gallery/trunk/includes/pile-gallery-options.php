<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_pile-gallery-settings',
		'title' => __( 'Pile Gallery Settings', $this->Pile_Gallery ),
		'fields' => array (
			array (
				'key' => 'field_5408b8170c40a',
				'label' => __( 'Gallery Source', $this->Pile_Gallery ),
				'name' => 'pg_gallery_source',
				'type' => 'select',
				'instructions' => __( 'Select the source of your gallery images', $this->Pile_Gallery ),
				'choices' => array (
					'post' => __( 'Featured Images From Posts', $this->Pile_Gallery ),
					'gallery' => __( 'Images From Uploaded Media', $this->Pile_Gallery ),
					'custom' => __( 'Custom Built Gallery', $this->Pile_Gallery ),
				),
				'default_value' => 'post',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5408ba88c6cee',
				'label' => __( 'Taxonomy Used', $this->Pile_Gallery ),
				'name' => 'pg_taxonomy',
				'type' => 'advanced_taxonomy_selector',
				'instructions' => __( 'Set a taxonomy based on which your pile gallery will be categorized. ', $this->Pile_Gallery ),
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5408b8170c40a',
							'operator' => '==',
							'value' => 'post',
						),
					),
					'allorany' => 'all',
				),
				'data_type' => 'taxonomy',
				'taxonomies' => array (
					0 => 'all',
				),
				'field_type' => 'select',
				'allow_null' => 0,
				'return_value' => 'term_id',
			),
			array (
				'key' => 'field_5408c8d6ca86c',
				'label' => __( 'Taxonomy Used', $this->Pile_Gallery ),
				'name' => 'pg_gallery_taxonomy',
				'type' => 'advanced_taxonomy_selector',
				'instructions' => sprintf( __( 'Set a taxonomy based on which your pile gallery will be categorized. Note that taxonomies must be enabled for media items. Currently this can only be done with a plugin, we recommend %s', $this->Pile_Gallery), '<a href="https://wordpress.org/plugins/media-categories-2/">Media Categories</a>' ),
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5408b8170c40a',
							'operator' => '==',
							'value' => 'gallery',
						),
					),
					'allorany' => 'all',
				),
				'data_type' => 'taxonomy',
                'post_type' => 'attachment',
				'taxonomies' => array (
					0 => 'all',
				),
				'field_type' => 'select',
				'allow_null' => 0,
				'return_value' => 'term_id',
			),
			array (
				'key' => 'field_5408bec25d18a',
				'label' => __( 'Update Now', $this->Pile_Gallery ),
				'name' => '',
				'type' => 'message',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5408b8170c40a',
							'operator' => '==',
							'value' => 'custom',
						),
					),
					'allorany' => 'any',
				),
				'message' =>
				'<div id="custom-gallery-promo">' .
				'<a class="promo-button" href="gum.co/pilegallery"><span class="amount">$6</span> Buy Now</a>' .
				'<p>' .
				__('We really wanted to give you the custom built gallery for free but unfortunately the licence of ACF (a module used in the plugin) does not allow us to distribute some fields in free plugins. We decided we\'d give you as much as possible for free and only the custom gallery will require an upgrade.', $this->Pile_Gallery ) .
				'</p>' .
				'<p>' .
				__('The pro version lets you assemble a pile gallery out of arbitrary images. Just create a pile, add the images you need - rinse and repeat for as many piles as you need.', $this->Pile_Gallery ) .
				'</p>' .
				'<p>' .
				'<img src="' .plugins_url( '../admin' , __FILE__ ) . '/img/custom-promo.jpg">' .
				'</p>' .
				'<a class="promo-button" href=""><span class="amount">$6</span> Buy Now</a>' .
				'</div>'
				,

			),

		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'pile_gallery',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>
