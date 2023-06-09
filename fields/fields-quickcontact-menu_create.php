<?php return array(
    'key' => 'field_6414ad7f99b69',
    'label' => 'Menu Create',
    'name' => 'menu_create',
    'aria-label' => '',
    'type' => 'group',
    'instructions' => '',
    'required' => 0,
    'conditional_logic' => 0,
    'wrapper' => array(
        'width' => '100',
        'class' => '',
        'id' => '',
    ),
    'layout' => 'table',
    'sub_fields' => array(
        array(
            'key' => 'field_6414b053038d2',
            'label' => 'Menu',
            'name' => 'menu',
            'aria-label' => '',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'table',
            'pagination' => 0,
            'min' => 0,
            'max' => 0,
            'collapsed' => '',
            'button_label' => 'Add Row',
            'rows_per_page' => 20,
            'sub_fields' => array(
                array(
                    'key' => 'field_6414b1686ce8b',
                    'label' => 'Menu Style',
                    'name' => 'menu_style',
                    'aria-label' => '',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '20',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'Fixed Bottom Mobile' => 'Fixed Bottom Mobile',
                        'Fixed Right' => 'Fixed Right',
                        'Left Expanding Group' => 'Left Expanding Group',
                        'Left Single' => 'Left Single',
                        'Left Expand' => 'Left Expand',
                        'Left Expand Horizontal' => 'Left Expand Horizontal',
                        '[NEW] Giuseart' => '[NEW] Giuseart',
                        '[NEW] Fixed Right' => '[NEW] Fixed Right',
                        '[NEW] Left Group' => '[NEW] Left Group',
                    ),
                    'default_value' => false,
                    'return_format' => 'value',
                    'multiple' => 0,
                    'allow_null' => 0,
                    'ui' => 0,
                    'ajax' => 0,
                    'placeholder' => '',
                    'parent_repeater' => 'field_6414b053038d2',
                ),
                array(
                    'key' => 'field_6414b1ed628b1',
                    'label' => 'Menu Items',
                    'name' => 'menu_items',
                    'aria-label' => '',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '80',
                        'class' => '',
                        'id' => '',
                    ),
                    'layout' => 'table',
                    'min' => 0,
                    'max' => 0,
                    'collapsed' => '',
                    'button_label' => 'Add Row',
                    'rows_per_page' => 20,
                    'sub_fields' => array(
                        array(
                            'key' => 'field_6414b08c038d5',
                            'label' => 'Url',
                            'name' => 'url',
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
                            'parent_repeater' => 'field_6414b1ed628b1',
                        ),
                        array(
                            'key' => 'field_6414b09c038d6',
                            'label' => 'Label',
                            'name' => 'label',
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
                            'parent_repeater' => 'field_6414b1ed628b1',
                        ),
                        array(
                            'key' => 'field_6414b0a2038d7',
                            'label' => 'Icon',
                            'name' => 'icon',
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
                            'parent_repeater' => 'field_6414b1ed628b1',
                        ),
                        array(
                            'key' => 'field_6414b0b3038d8',
                            'label' => 'Link',
                            'name' => 'link',
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
                            'parent_repeater' => 'field_6414b1ed628b1',
                        ),
                        array(
                            'key' => 'field_6414b0b8038d9',
                            'label' => 'Classes',
                            'name' => 'classes',
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
                            'parent_repeater' => 'field_6414b1ed628b1',
                        ),
                        array(
                            'key' => 'field_6414b0c4038da',
                            'label' => 'Color',
                            'name' => 'color_code',
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
                            'parent_repeater' => 'field_6414b1ed628b1',
                        ),
                        array(
                            'key' => 'field_6414b0cd038db',
                            'label' => 'Description',
                            'name' => 'description',
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
                            'parent_repeater' => 'field_6414b1ed628b1',
                        ),
                    ),
                    'parent_repeater' => 'field_6414b053038d2',
                ),
            ),
        ),
    ),
); ?>