<?php 

//add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
        array(
            'key' => 'field_64174932c61cf',
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
                    'key' => 'field_64174932c61d1',
                    'label' => 'Navigation Auto Fill',
                    'name' => 'navigation_auto_fill',
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
                    'key' => 'field_64174932c61d2',
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
                    'message' => '
                        <div id="adminz_flatsome_navigtion_woo" style="">
                            <p>* How to use: Type code into CSS classes input of Navigation Items class</p>
                            <p> <strong>Portfolio: </strong></p>
                            <p>Get portfolios: <code>adminz_portfolio</code> Fill Portfolios as child of Navigation item</p>
                            <p>Get categories: <code>adminz_portfolio_category</code></p>
                            <p>Get categories: <code>adminz_portfolio_category_replace</code> Replace mode </p>
                            <p>By parent: <code>parent_{term_id}</code> For get only children or your term_id. Ex: parent_57</p>
                            <p> <strong>Page:</strong></p>
                            <p>Get Pages: <code>adminz_page</code></p>
                            <p>Get Pages: <code>adminz_page_replace</code> Mode Replaces</p>
                            <p>Get pages as child of id: <code>parent_{id}</code> For get only children or your page #57. Ex: parent_57</p>
                            <p> <strong>Post: </strong></p>
                            <p>Get posts: <code>adminz_post</code> Fill posts as child of Navigation item</p>
                            <p>Get categories: <code>adminz_post_category</code></p>
                            <p>Get categories: <code>adminz_post_category_replace</code> Replace mode </p>
                            <p>By parent: <code>parent_{term_id}</code> For get only children or your term_id. Ex: parent_57</p>
                        </div>',
                    'new_lines' => 'wpautop',
                    'esc_html' => 0,
                ),
            ),
        ),
	];
    return $data;
	//$fields['fields'] = array_merge( $fields['fields'], $data);
	//return $fields;
//},110 );

