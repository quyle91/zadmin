<?php 

// add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
		array(
		    'key' => 'field_641363f87fe6d',
		    'label' => 'Taxonomy Thumbnails',
		    'name' => 'taxonomy',
		    'aria-label' => '',
		    'type' => 'group',
		    'instructions' => '',
		    'required' => 0,
		    'conditional_logic' => 0,
		    'wrapper' => array(
		        'width' => '50',
		        'class' => '',
		        'id' => '',
		    ),
		    'layout' => 'block',
		    'sub_fields' => array(
		        array(
		            'key' => 'field_6413656e60a1b',
		            'label' => 'Taxonomy Thumbnail',
		            'name' => 'taxonomy_thumbnail',
		            'aria-label' => '',
		            'type' => 'select',
		            'instructions' => '',
		            'required' => 0,
		            'conditional_logic' => 0,
		            'wrapper' => array(
		                'width' => '100',
		                'class' => '',
		                'id' => '',
		            ),
		            'choices' => array(
		                'category' => 'category',
		                'post_tag' => 'post_tag',
		                'nav_menu' => 'nav_menu',
		                'link_category' => 'link_category',
		                'post_format' => 'post_format',
		                'wp_theme' => 'wp_theme',
		                'wp_template_part_area' => 'wp_template_part_area',
		                'block_categories' => 'block_categories',
		                'product_type' => 'product_type',
		                'product_visibility' => 'product_visibility',
		                'product_cat' => 'product_cat',
		                'product_tag' => 'product_tag',
		                'product_shipping_class' => 'product_shipping_class',
		                'pa_attr-a' => 'pa_attr-a',
		                'pa_attr-b' => 'pa_attr-b',
		                'pa_color' => 'pa_color',
		                'pa_size' => 'pa_size',
		                'featured_item_category' => 'featured_item_category',
		                'featured_item_tag' => 'featured_item_tag',
		            ),
		            'default_value' => array(
		            ),
		            'return_format' => 'value',
		            'multiple' => 1,
		            'allow_null' => 0,
		            'ui' => 1,
		            'ajax' => 0,
		            'placeholder' => '',
		        ),
		    ),
		),
	];
	return $data;
	// $fields['fields'] = array_merge( $fields['fields'], $data);
	// return $fields;
// },10 );
