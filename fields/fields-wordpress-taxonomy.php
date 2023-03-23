<?php 
return array(
    'key' => 'field_641363f87fe6d',
    'label' => 'Taxonomy Thumbnails',
    'name' => 'taxonomy',
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
            'key' => 'field_6413656e60a1b',
            'label' => 'Taxonomy Thumbnail',
            'name' => 'taxonomy_thumbnail',
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
            'choices' => get_taxonomies(),
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
);
