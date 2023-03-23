<?php return 
array(
    'key' => 'zadmin_fields_advanced_restore',
    'label' => 'Restore',
    'name' => 'restore',
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
            'key' => 'field_64136ea1036f91',
            'label' => 'Restore Code',
            'name' => 'retore_code',
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
        array(
            'key' => 'field_641592391242a1',
            'label' => 'Click to run restore with code',
            'name' => 'restore_code_btn',
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
                'Submit' => 'Submit',
            ),
            'default_value' => '',
            'return_format' => 'value',
            'allow_null' => 0,
            'layout' => 'horizontal',
        ),
    ),
); ?>