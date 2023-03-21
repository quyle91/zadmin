<?php 

// add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
		array(
		    'key' => 'field_64136216011da',
		    'label' => 'Admin Settings',
		    'name' => 'admin_settings',
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
		            'key' => 'field_64136254011db',
		            'label' => 'Plugin name',
		            'name' => 'text',
		            'aria-label' => '',
		            'type' => 'text',
		            'instructions' => '',
		            'required' => 0,
		            'conditional_logic' => 0,
		            'wrapper' => array(
		                'width' => '33',
		                'class' => '',
		                'id' => '',
		            ),
		            'default_value' => '',
		            'maxlength' => '',
		            'placeholder' => '',
		            'prepend' => '',
		            'append' => '',
		        ),
		        array(
		            'key' => 'field_641362798af5b',
		            'label' => 'Wordpress Logo login image',
		            'name' => 'logo_login_image',
		            'aria-label' => '',
		            'type' => 'image',
		            'instructions' => '',
		            'required' => 0,
		            'conditional_logic' => 0,
		            'wrapper' => array(
		                'width' => '33',
		                'class' => '',
		                'id' => '',
		            ),
		            'return_format' => 'id',
		            'library' => 'all',
		            'min_width' => '',
		            'min_height' => '',
		            'min_size' => '',
		            'max_width' => '',
		            'max_height' => '',
		            'max_size' => '',
		            'mime_types' => '',
		            'preview_size' => 'medium',
		        ),
		        array(
		            'key' => 'field_6413627e8af5c',
		            'label' => 'Wordpress Logo link',
		            'name' => 'logo_link',
		            'aria-label' => '',
		            'type' => 'link',
		            'instructions' => '',
		            'required' => 0,
		            'conditional_logic' => 0,
		            'wrapper' => array(
		                'width' => '33',
		                'class' => '',
		                'id' => '',
		            ),
		            'return_format' => 'url',
		        ),
		    ),
		),
	];
	return $data;
	// $fields['fields'] = array_merge( $fields['fields'], $data);
	// return $fields;
// },10 );

