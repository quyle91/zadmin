<?php 

//add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
        array(
            'key' => 'field_6417485d28fec',
            'label' => 'Template hook',
            'name' => 'template_hook',
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
                    'key' => 'field_6417485d28fed',
                    'label' => 'List action hooks',
                    'name' => 'list_action_hooks',
                    'aria-label' => '',
                    'type' => 'repeater',
                    'instructions' => 'type [adminz_test] to test',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layout' => 'table',
                    'pagination' => 0,
                    'rows_per_page' => 20,
                    'min' => 0,
                    'max' => 0,
                    'collapsed' => '',
                    'button_label' => 'Add Row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_6417485d28fee',
                            'label' => 'Add action',
                            'name' => 'add_action',
                            'aria-label' => '',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => require( ZADMIN_DIR.'/assets/php/flatsome_hooks.php' ),
                            'default_value' => false,
                            'return_format' => 'value',
                            'multiple' => 0,
                            'allow_null' => 0,
                            'ui' => 0,
                            'ajax' => 0,
                            'placeholder' => '',
                            'parent_repeater' => 'field_6417485d28fed',
                        ),
                        array(
                            'key' => 'field_6417485d28fef',
                            'label' => 'Shortcode',
                            'name' => 'shortcode',
                            'aria-label' => '',
                            'type' => 'text',
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
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'parent_repeater' => 'field_6417485d28fed',
                        ),
                    ),
                ),
            ),
        ),
	];
    return $data;
	//$fields['fields'] = array_merge( $fields['fields'], $data);
	//return $fields;
//},110 );

