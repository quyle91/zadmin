<?php return array(
    'key' => 'field_64173e8374ed8',
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
            'key' => 'field_64174276e7b95',
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
            'min' => 0,
            'max' => 0,
            'collapsed' => '',
            'button_label' => 'Add Row',
            'rows_per_page' => 20,
            'sub_fields' => array(
                array(
                    'key' => 'field_64174281e7b96',
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
                    'choices' => array(
                        'after_woocommerce_add_payment_method' => 'after_woocommerce_add_payment_method',
                        'after_woocommerce_pay' => 'after_woocommerce_pay',
                        'before_woocommerce_add_payment_method' => 'before_woocommerce_add_payment_method',
                        'before_woocommerce_init' => 'before_woocommerce_init',
                        'before_woocommerce_pay' => 'before_woocommerce_pay',
                        'woocommerce_account_content' => 'woocommerce_account_content',
                        'woocommerce_account_dashboard' => 'woocommerce_account_dashboard',
                        'woocommerce_account_navigation' => 'woocommerce_account_navigation',
                        'woocommerce_add_payment_method_form_bottom' => 'woocommerce_add_payment_method_form_bottom',
                    ),
                    'default_value' => false,
                    'return_format' => 'value',
                    'multiple' => 0,
                    'allow_null' => 0,
                    'ui' => 0,
                    'ajax' => 0,
                    'placeholder' => '',
                    'parent_repeater' => 'field_64174276e7b95',
                ),
                array(
                    'key' => 'field_641742a0e7b97',
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
                    'parent_repeater' => 'field_64174276e7b95',
                ),
            ),
        ),
    ),
); ?>