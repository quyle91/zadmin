<?php 

// add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
        array(
            'key' => 'field_6415d2a779f5d',
            'label' => 'Test & Run',
            'name' => 'test_and_run',
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
                    'key' => 'field_6415d399f51a3',
                    'label' => 'From post',
                    'name' => 'from_post',
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
                            'key' => 'field_6415d3a9f51a4',
                            'label' => 'From post',
                            'name' => 'text',
                            'aria-label' => '',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '50',
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
                            'key' => 'field_6415d3bef51a5',
                            'label' => 'Test & run',
                            'name' => 'test_and_run',
                            'aria-label' => '',
                            'type' => 'button_group',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'Test' => 'Test',
                                'Run' => 'Run',
                            ),
                            'default_value' => '',
                            'return_format' => '',
                            'allow_null' => 0,
                            'layout' => '',
                        ),
                        array(
                            'key' => 'field_6415d481fd763',
                            'label' => 'Message',
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
                            'message' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem',
                            'new_lines' => 'wpautop',
                            'esc_html' => 0,
                        ),
                    ),
                ),
                array(
                    'key' => 'field_6415dfbdaa5ff',
                    'label' => 'From category',
                    'name' => 'from_post_copy',
                    'aria-label' => '',
                    'type' => 'group',
                    'instructions' => 'Check single import before run category import is recommended.',
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
                            'key' => 'field_6415dfbdaa600',
                            'label' => 'From post',
                            'name' => 'text',
                            'aria-label' => '',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '50',
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
                            'key' => 'field_6415dfbdaa601',
                            'label' => 'Test & run',
                            'name' => 'test_and_run',
                            'aria-label' => '',
                            'type' => 'button_group',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'Test' => 'Test',
                                'Run' => 'Run',
                            ),
                            'default_value' => '',
                            'return_format' => 'value',
                            'allow_null' => 0,
                            'layout' => 'horizontal',
                        ),
                        array(
                            'key' => 'field_6415dfbdaa602',
                            'label' => 'Message',
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
                            'message' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem',
                            'new_lines' => 'wpautop',
                            'esc_html' => 0,
                        ),
                    ),
                ),
            ),
        ),
	];
    return $data;
	// $fields['fields'] = array_merge( $fields['fields'], $data);
	// return $fields;
// },80 );

