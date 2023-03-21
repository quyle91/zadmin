<?php 

//add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
		array(
            'key' => 'field_64159754f0433',
            'label' => 'Elementor',
            'name' => 'elementor',
            'aria-label' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_64159819c85fb',
            'label' => 'Elements',
            'name' => '_copy2',
            'aria-label' => '',
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_64159819c85fc',
                    'label' => '',
                    'name' => '',
                    'aria-label' => '',
                    'type' => 'message',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => 'Some shortcode for pagebuilder has been supported.',
                    'new_lines' => 'wpautop',
                    'esc_html' => 0,
                ),
            ),
        ),
	];
    return $data;
	//$fields['fields'] = array_merge( $fields['fields'], $data);
	//return $fields;
//},120 );

