<?php

class acf_field_advanced_taxonomy_selector extends acf_field {

	// vars
	var $settings, // will hold info such as dir / path
		$defaults; // will hold default field options


	/*
	*  __construct
	*
	*  Set name / label needed for actions / filters
	*
	*  @since	3.6
	*  @date	23/01/13
	*/

	function __construct()
	{
		// vars
		$this->name = 'advanced_taxonomy_selector';
		$this->label = __('Advanced Taxonomy Selector');
		$this->category = __("Relational",'acf'); // Basic, Content, Choice, etc
		$this->defaults = array(
			'taxonomies' => '',
			'data_type' => 'terms',
			'field_type' => 'multiselect',
			'allow_null' => true,
			'post_tyoe'  => false,
			'return_value' => 'term_id'
		);

	   	parent::__construct();

	}


	/*
	*  create_options()
	*
	*  Create extra options for your field. This is rendered when editing a field.
	*  The value of $field['name'] can be used (like below) to save extra data to the $field
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field	- an array holding all the field's data
	*/

	function create_options( $field )
	{
		// defaults?
		/*
		$field = array_merge($this->defaults, $field);
		*/

		// key is needed in the field names to correctly save the data
		$key = $field['name'];


		// Create Field Options HTML
		?>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Type",'acf'); ?></label>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'		=>	'radio',
			'name'		=>	'fields['.$key.'][data_type]',
			'value'		=>	$field['data_type'],
			'choices' =>  array(
				'terms' => __( 'Choose Terms', 'acf' ),
				'taxonomy'  => __( 'Choose Taxonomies', 'acf' ),
			)
		));

		?>
	</td>
</tr>

<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Taxonomies",'acf'); ?></label>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'		=>	'select',
			'name'		=>	'fields['.$key.'][taxonomies]',
			'value'		=>	$field['taxonomies'],
			'multiple'      =>  true,
			'choices'       =>  $this->taxonomies_array()
		));

		?>
	</td>
</tr>

<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Post Type Restriction",'acf'); ?></label>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'		=>	'select',
			'name'		=>	'fields['.$key.'][post_type]',
			'value'		=>	$field['post_type'],
			'choices'       =>  $this->post_types_array()
		));

		?>
	</td>
</tr>



<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Field Type",'acf'); ?></label>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'		=>	'select',
			'name'		=>	'fields['.$key.'][field_type]',
			'value'		=>	$field['field_type'],
			'choices' =>  array(
				'multiselect'  => __( 'Multiselect', 'acf' ),
				'select'       => __( 'Select', 'acf' )
			)
		));

		?>
	</td>
</tr>

<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Allow Null?",'acf'); ?></label>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'		=>	'radio',
			'name'		=>	'fields['.$key.'][allow_null]',
			'value'		=>	$field['allow_null'],
			'layout'  => 'horizontal',
			'choices' =>  array(
				1 => __( 'Yes', 'acf' ),
				0  => __( 'No', 'acf' ),
			)
		));

		?>
	</td>
</tr>

<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Return Value",'acf'); ?></label>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'		=>	'radio',
			'name'		=>	'fields['.$key.'][return_value]',
			'value'		=>	$field['return_value'],
			'choices' =>  array(
				'term_id' => __( 'Term ID / Taxonomy Slug', 'acf' ),
				'object'  => __( 'Term Object / Taxonomy Object', 'acf' ),
			)
		));

		?>
	</td>
</tr>


		<?php

	}



	/*
	*  create_field()
	*
	*  Create the HTML interface for your field
	*
	*  @param	$field - an array holding all the field's data
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/

	function create_field( $field )
	{
		call_user_func( array( $this, 'render_field_' . $field['data_type'] ), $field );
	}



	/*
	*  Render Terms Field
	*
	*  Displays the field for selecting terms
	*
	*  @param array $field
	*
	*/

	function render_field_terms( $field ) {
		$taxonomies = $this->get_taxonomies_from_selection( $field );
		$multiple = ( $field['field_type'] == 'multiselect' ) ? 'multiple="multiple"' : '';

		foreach( $taxonomies as $slug => $taxonomy ) {
			if( wp_count_terms( $slug ) == 0 ) {
				unset( $taxonomies[$slug] );
			}
		}
		?>
		<select name="<?php echo $field['name'] ?>[]" <?php echo $multiple ?>>
			<?php if( $field['allow_null'] == true ) : ?>
			<option value=''><?php _e( 'None', 'acf-advanced_taxonomy_selector' ) ?></option>
			<?php endif ?>
			<?php
				foreach( $taxonomies as $taxonomy ) :
			?>
				<optgroup label='<?php echo $taxonomy->label ?>'>
					<?php
						$terms = get_terms( $taxonomy->name, array( 'hide_empty' => false ) );
						foreach( $terms as $term ) :
							$selected = ( !empty( $field['value'] ) && in_array( $taxonomy->name . '_' . $term->term_id, $field['value'] ) ) ? 'selected="selected"' : '';
					?>
						<option <?php echo $selected ?> value='<?php echo $taxonomy->name ?>_<?php echo $term->term_id ?>'><?php echo $term->name ?></option>
					<?php endforeach ?>
				</optgroup>
			<?php endforeach ?>
		</select>

		<?php
	}

	/*
	*  Render Taxonomy Field
	*
	*  Displays the field for selecting taxonomies
	*
	*  @param array $field
	*
	*/
	function render_field_taxonomy( $field ) {
		$taxonomies = $this->get_taxonomies_from_selection( $field );
		$multiple = ( $field['field_type'] == 'multiselect' ) ? 'multiple="multiple"' : '';
		?>

		<select name="<?php echo $field['name'] ?>[]" <?php echo $multiple ?>>
			<?php if( $field['allow_null'] == true ) : ?>
			<option value=''><?php _e( 'None', 'acf-advanced_taxonomy_selector' ) ?></option>
			<?php endif ?>
			<?php if( empty( $taxonomies ) ) : ?>
				<option><?php _e( 'No Taxonomies Exist For This Post Type', 'acf-advanced_taxonomy_selector' ) ?></option>

			<?php else :
				foreach( $taxonomies as $taxonomy ) :
					$selected = ( !empty( $field['value'] ) && in_array( $taxonomy->name, $field['value'] ) ) ? 'selected="selected"' : '';
			?>
				<option <?php echo $selected ?> value='<?php echo $taxonomy->name ?>'><?php echo $taxonomy->label ?></option>
			<?php endforeach ?>
			<?php endif ?>
		</select>

		<?php
	}

	/*
	*  update_value()
	*
	*  This filter is applied to the $value before it is saved in the db
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value found in the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*  @return	$value
	*/

	function update_value( $value, $post_id, $field ) {

		if( $value == array( 0 => '' ) ) {
			return '';
		}

		return $value;

	}


	/*
	*  format_value()
	*
	*  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value which was loaded from the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*
	*  @return	$value (mixed) the modified value
	*/


	function format_value( $value, $post_id, $field ) {

		if( empty($value) ) {
			return $value;
		}

		if( $field['data_type'] == 'terms' ) {
			foreach( $value as $i => $val ) {
				$term = substr( $val, strrpos( $val, '_' ) + 1 );
				if( $field['return_value'] == 'object' ) {
					$taxonomy = substr( $val, 0, strrpos( $val, '_' ) );
					$term = get_term( $term, $taxonomy );
				}
				$value[$i] = $term;
			}
		}
		elseif( $field['data_type'] == 'taxonomy' && $field['return_value'] == 'object' ) {
			foreach( $value as $i => $val ) {
				$value[$i] = get_taxonomy( $val );
			}
		}

		return $value;
	}


	/*
	*  Get Taxonomies
	*
	*  Gets taxonomies without the built in ones, but grabs categories and tags
	*
	*/
	function get_taxonomies() {
		$taxonomies = get_taxonomies( array( '_builtin' => false, 'public' => true ), 'objects' );
		$taxonomies['category'] = get_taxonomy('category');
		$taxonomies['post_tag'] = get_taxonomy('post_tag');
		return $taxonomies;
	}

	/*
	*  Get Taxonomies Array
	*
	*  Gets a slug->label array of taxonomies
	*
	*/
	function taxonomies_array() {
		$taxonomies = $this->get_taxonomies();
		$choices = array( 'all' => __( 'All Taxonomies', 'acf-advanced_taxonomy_selector' ) );
		foreach ( $taxonomies as $slug => $taxonomy ) {
			$choices[$slug] = $taxonomy->label;
		}
		return $choices;
	}

	/*
	*  Get Post Types
	*
	*  Gets public post types
	*
	*/
	function get_post_tyes() {
		$post_types = get_post_types( array( 'public' => true ) );
		return $post_types;
	}

	/*
	*  Get Post Types Array
	*
	*  Gets a slug->name array of post types
	*
	*/
	function post_types_array() {
		$post_types = $this->get_post_tyes();
		$choices = array();
		foreach ( $post_types as $slug => $post_type ) {
			$choices[$slug] = $post_type;
		}
		return $choices;
	}


	/*
	*  Get Taxonomies From Selection
	*
	*  Gets only those taxonomies which have been selected
	*
	*/
	function get_taxonomies_from_selection( $field ) {

		if( !empty( $field['post_type'] ) ) {
			$type_taxonomies = get_object_taxonomies( $field['post_type'] );
			$all_taxonomies = get_taxonomies( array(), 'object');
			$taxonomies = array();

			if( !empty( $type_taxonomies ) ) {
				foreach( $type_taxonomies as $slug ) {
					$taxonomies[$slug] = $all_taxonomies[$slug];
				}
			}

			return $taxonomies;
		}

		if( empty( $field['taxonomies'] ) || in_array( 'all', $field['taxonomies'] ) !== false ) {
			$taxonomies = $this->get_taxonomies();
		}
		else {
			$taxonomies = array();
			foreach( $field['taxonomies'] as $taxonomy_slug ) {
				$taxonomy = get_taxonomy( $taxonomy_slug );
				$taxonomies[$taxonomy->name] = $taxonomy;
			}
		}
		return $taxonomies;
	}

}


// create field
new acf_field_advanced_taxonomy_selector();

?>
