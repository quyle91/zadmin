<?php 

// add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
        array(
            'key' => 'field_64159556dd6fd',
            'label' => 'Icons',
            'name' => 'icons',
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
                    'key' => 'field_64159588dd700',
                    'label' => 'Supported Icons',
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
                    'message' => 'icons here here',
                    'new_lines' => 'wpautop',
                    'esc_html' => 0,
                ),
            ),
        ),
	];
    return $data;
	// $fields['fields'] = array_merge( $fields['fields'], $data);
	// return $fields;
// },60 );

