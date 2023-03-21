<?php 

//add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
        array(
            'key' => 'field_641597f16a47c',
            'label' => 'UX Builder Elements',
            'name' => 'uxbuilder_elements',
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
                    'key' => 'field_641598026a47d',
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
                    'message' => 'Some shortcode from ux builder has beed added. Open Ux builder to show',
                    'new_lines' => 'wpautop',
                    'esc_html' => 0,
                ),
            ),
        ),
	];
    return $data;
	//$fields['fields'] = array_merge( $fields['fields'], $data);
	//return $fields;
//},110 );

