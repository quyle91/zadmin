<?php 

// add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
        array(
            'key' => 'field_64173e1974ed0',
            'label' => 'Products List',
            'name' => 'product_list',
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
                    'key' => 'field_64173f6bd85e7',
                    'label' => 'Products Featured text',
                    'name' => 'products_featured_text',
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
                ),
                array(
                    'key' => 'field_64173f88d85e8',
                    'label' => 'List Ordering',
                    'name' => 'list_ordering',
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
                        'Remove Default sorting' => 'Remove Default sorting',
                        'Remove Sort by popularity' => 'Remove Sort by popularity',
                        'Remove Sort by average rating' => 'Remove Sort by average rating',
                        'Remove Sort by latest' => 'Remove Sort by latest',
                        'Remove Sort by price: low to high' => 'Remove Sort by price: low to high',
                        'Remove Sort by price: high to low' => 'Remove Sort by price: high to low',
                        'Enable Percentage discount' => 'Enable Percentage discount',
                    ),
                    'default_value' => array(
                    ),
                    'return_format' => 'value',
                    'multiple' => 1,
                    'allow_null' => 0,
                    'ui' => 1,
                    'ajax' => 0,
                    'placeholder' => '',
                ),
            ),
        ),
	];
    return $data;
	// $fields['fields'] = array_merge( $fields['fields'], $data);
	// return $fields;
// },100 );

