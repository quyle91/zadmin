<?php 

// add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
		array(
		    'key' => 'field_641369fc43af9',
		    'label' => 'Editor & Media',
		    'name' => 'editor_and_media',
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
		            'key' => 'field_641369fc43aff',
		            'label' => 'Use classic editor and widget',
		            'name' => 'use_classic_editor_and_widget',
		            'aria-label' => '',
		            'type' => 'true_false',
		            'instructions' => '',
		            'required' => 0,
		            'conditional_logic' => 0,
		            'wrapper' => array(
		                'width' => '33',
		                'class' => '',
		                'id' => '',
		            ),
		            'message' => '',
		            'default_value' => 0,
		            'ui_on_text' => '',
		            'ui_off_text' => '',
		            'ui' => 1,
		        ),
		        array(
		            'key' => 'field_641369fc43b00',
		            'label' => 'Category editor Tiny MCE',
		            'name' => 'category_editor_tiny_mce',
		            'aria-label' => '',
		            'type' => 'true_false',
		            'instructions' => '',
		            'required' => 0,
		            'conditional_logic' => 0,
		            'wrapper' => array(
		                'width' => '33',
		                'class' => '',
		                'id' => '',
		            ),
		            'message' => '',
		            'default_value' => 0,
		            'ui_on_text' => '',
		            'ui_off_text' => '',
		            'ui' => 1,
		        ),
		        array(
		            'key' => 'field_641369fc43b01',
		            'label' => 'Auto image excerpt',
		            'name' => 'auto_image_excerpt',
		            'aria-label' => '',
		            'type' => 'true_false',
		            'instructions' => '',
		            'required' => 0,
		            'conditional_logic' => 0,
		            'wrapper' => array(
		                'width' => '33',
		                'class' => '',
		                'id' => '',
		            ),
		            'message' => '',
		            'default_value' => 0,
		            'ui_on_text' => '',
		            'ui_off_text' => '',
		            'ui' => 1,
		        ),
		    ),
		)
	];
	return $data;
	// $fields['fields'] = array_merge( $fields['fields'], $data);
	// return $fields;
// },10 );
