<?php 

// add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
        array(
            'key' => 'field_64173e3e74ed4',
            'label' => 'Checkout',
            'name' => 'checkout',
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
            'layout' => 'table',
            'sub_fields' => array(
                array(
                    'key' => 'field_641741ab0714f',
                    'label' => 'Simple checkout field',
                    'name' => 'simple_checkout_field',
                    'aria-label' => '',
                    'type' => 'true_false',
                    'instructions' => 'If have error shipping address. you need set free ship',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
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
        ),
	];
    return $data;
	// $fields['fields'] = array_merge( $fields['fields'], $data);
	// return $fields;
// },100 );

