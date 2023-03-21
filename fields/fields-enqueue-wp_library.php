<?php 

// add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
        array(
            'key' => 'field_6414ad7b99b67',
            'label' => 'Wordpress Librbary',
            'name' => 'wp_library',
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
                    'key' => 'field_6414a54bd28d7',
                    'label' => 'JS Library',
                    'name' => 'css_library',
                    'aria-label' => '',
                    'type' => 'select',
                    'instructions' => '<a target=_blank href="https://developer.wordpress.org/reference/functions/wp_enqueue_script/">Document</a>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'utils' => 'utils',
                        'common' => 'common',
                        'wp-sanitize' => 'wp-sanitize',
                        'sack' => 'sack',
                        'quicktags' => 'quicktags',
                        'colorpicker' => 'colorpicker',
                    ),
                    'default_value' => array(
                    ),
                    'return_format' => 'value',
                    'multiple' => 1,
                    'allow_null' => 1,
                    'ui' => 1,
                    'ajax' => 0,
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_6414a344a2fe3',
                    'label' => 'CSS Library',
                    'name' => 'css_library',
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
                        'utils' => 'utils',
                        'common' => 'common',
                        'wp-sanitize' => 'wp-sanitize',
                        'sack' => 'sack',
                        'quicktags' => 'quicktags',
                        'colorpicker' => 'colorpicker',
                        'editor' => 'editor',
                        'clipboard' => 'clipboard',
                        'wp-ajax-response' => 'wp-ajax-response',
                        'wp-api-request' => 'wp-api-request',
                        'wp-pointer' => 'wp-pointer',
                        'autosave' => 'autosave',
                        'heartbeat' => 'heartbeat',
                    ),
                    'default_value' => array(
                    ),
                    'return_format' => 'value',
                    'multiple' => 1,
                    'allow_null' => 1,
                    'ui' => 1,
                    'ajax' => 1,
                    'placeholder' => '',
                ),
            ),
        ),
	];
    return $data;
	// $fields['fields'] = array_merge( $fields['fields'], $data);
	// return $fields;
// },20 );

