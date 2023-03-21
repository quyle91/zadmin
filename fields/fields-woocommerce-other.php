<?php 

// add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
        array(
            'key' => 'field_64173e7374ed7',
            'label' => 'Khác',
            'name' => 'other',
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
                    'key' => 'field_641742ef28e77',
                    'label' => 'Tỉnh huyện xã',
                    'name' => 'bật',
                    'aria-label' => '',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
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
                    'key' => 'field_6417400d02000',
                    'label' => 'Navigation Auto Fill',
                    'name' => 'description_tiny_mce_editor_copy',
                    'aria-label' => '',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
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
                    'key' => 'field_6417475e6cc9c',
                    'label' => 'Navigation Auto Fill Message',
                    'name' => '',
                    'aria-label' => '',
                    'type' => 'message',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '* How to use: Type code into CSS classes input of Navigation Items class </br>
                    Get products: adminz_product Fill Products as child of Navigation item </br>
                    Get categories: adminz_product_category </br>
                    Get categories: adminz_product_category_replace Replace mod </br>
                    By parent: parent_{term_id} For get only children or your term_id. Ex: parent_57 </br>',
                    'new_lines' => 'wpautop',
                    'esc_html' => 0,
                ),
            ),
        ),
	];
    return $data;
	// $fields['fields'] = array_merge( $fields['fields'], $data);
	// return $fields;
// },100 );

