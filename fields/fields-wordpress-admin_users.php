<?php 

// add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
		array(
		    'key' => 'field_641362b80b129',
		    'label' => 'Admin Users',
		    'name' => 'admin_users',
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
		            'key' => 'field_64136ea1036f9',
		            'label' => 'Admin Notice',
		            'name' => 'admin_notice',
		            'aria-label' => '',
		            'type' => 'textarea',
		            'instructions' => '',
		            'required' => 0,
		            'conditional_logic' => 0,
		            'wrapper' => array(
		                'width' => '',
		                'class' => '',
		                'id' => '',
		            ),
		            'default_value' => '',
		            'maxlength' => '',
		            'rows' => '',
		            'placeholder' => '',
		            'new_lines' => '',
		        ),
		    ),
		),
	];
	return $data;
	// $fields['fields'] = array_merge( $fields['fields'], $data);
	// return $fields;
// },10 );

