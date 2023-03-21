<?php 

// add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
        array(
            'key' => 'field_641596d96451f',
            'label' => 'Replace Image',
            'name' => 'replace_image',
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
                    'key' => 'field_641596e364520',
                    'label' => 'Upload file',
                    'name' => 'upload_',
                    'aria-label' => '',
                    'type' => 'file',
                    'instructions' => 'Keep ID & image url

                    Usage: Prepare a replacement image in advance with the same name as the current image on the website. Click the upload button. </br>
                    Note: Image type support: Jpg/ jpeg/ png/ gif </br>
                    Note: Only images listed in the gallery are supported. </br>
                    Note: File search must be full size.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'library' => 'all',
                    'min_size' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
            ),
        ),
	];
    return $data;
	// $fields['fields'] = array_merge( $fields['fields'], $data);
	// return $fields;
// },70 );

