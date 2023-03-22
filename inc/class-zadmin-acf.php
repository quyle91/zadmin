<?php 
/**
 * 
 */
class Zadmin_ACF extends Zadmin {
    const TABNAME = 'acf';
    public $groups_name = [];
    public $groups_option = [];
	
	function __construct() {
        parent::__construct();
        $this->create_options_page();
        add_filter( 'acf/settings/show_admin', [$this,'hide_custom_fields_menu'],10,1 );
	}

    function hide_custom_fields_menu(){
        return false;
    }

    function create_options_page(){
        if(function_exists('acf_add_options_page')):

            acf_add_options_page(array(
                'page_title'    => 'Theme General Settings',
                'menu_title'    => 'Theme Settings',
                'menu_slug'     => 'theme-general-settings',
                'capability'    => 'edit_posts',
                'redirect'      => false
            ));

            acf_add_options_sub_page(array(
                'page_title'    => 'Theme Header Settings',
                'menu_title'    => 'Header',
                'parent_slug'   => 'theme-general-settings',
            ));

            acf_add_options_sub_page(array(
                'page_title'    => 'Theme Footer Settings',
                'menu_title'    => 'Footer',
                'parent_slug'   => 'theme-general-settings',
            ));

            acf_add_options_sub_page(array(
                'page_title'    => 'Z Admin',
                'menu_title'    => 'Z Admin',
                'parent_slug'   => 'theme-general-settings',
            ));

        endif;
    }
}

$Zadmin_ACF = new Zadmin_ACF;
/*add_action( 'init', function(){
    global $Zadmin_ACF;
    echo "<pre>";print_r($Zadmin_ACF);echo "</pre>";
} );*/