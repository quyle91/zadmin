<?php 

use Adminz\Admin\Adminz as Adminz;
add_action('ux_builder_setup', 'ux_adminz_add_viewcount');
function ux_adminz_add_viewcount(){
    $options = [];
    $options[]  = '--Select--';
    foreach (Adminz::get_support_icons() as $icon) {
        $options[str_replace(".svg", "", $icon)] = $icon;
    }
    add_ux_builder_shortcode('adminz_countviews', array(
        'name'      => __('Number Count Views'),
        'category'  => Adminz::get_adminz_menu_title(),
        'thumbnail' =>  get_template_directory_uri() . '/inc/builder/shortcodes/thumbnails/' . 'countdown' . '.svg',
        'options' => array(
			'post_id' => array(
                'type' => 'select',
		        'heading' => 'Custom Posts',
		        'param_name' => 'ids',
		        'config' => array(
		            'multiple' => false,
		            'placeholder' => 'Select..',
		            'postSelect' => array(
		                'post_type' => array()
		            ),
		        )
            ),
            'icon'=>array(
                'type' => 'select',                
                'heading'   =>'Use icon',
                'description' => "Tools/ ".Adminz::get_adminz_menu_title()."/ icons",
                'default' => 'eye',
                'options'=> $options
            ),
            'textbefore' => array(
                'type'       => 'textfield',
                'heading'   => __('Text before'),
                'default'    => '',
            ),
            'textafter' => array(
                'type'       => 'textfield',
                'heading'   => __('Text after'),
                'default'    => '',
            ),
            'class' => array(
                'type'       => 'textfield',
                'heading'   => __('Class'),
                'default'    => '',
            ),
        ),
    ));
}