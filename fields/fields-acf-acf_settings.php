<?php 

//add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
        array(
            'key' => 'field_641597a30dd1e',
            'label' => 'ACF settings',
            'name' => 'acf_settings',
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
            'layout' => 'table',
            'sub_fields' => array(
                array(
                    'key' => 'field_641597ac0dd1f',
                    'label' => 'Disable Create Theme Settings',
                    'name' => 'disable_create_theme_settings',
                    'aria-label' => '',
                    'type' => 'true_false',
                    'instructions' => '',
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
                array(
                    'key' => 'field_641597b80dd20',
                    'label' => 'Hide menu Custom Fields',
                    'name' => 'hide_menu_custom_fields',
                    'aria-label' => '',
                    'type' => 'true_false',
                    'instructions' => '',
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
	//$fields['fields'] = array_merge( $fields['fields'], $data);
	//return $fields;
//},90 );

