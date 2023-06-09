<?php 
/**
 * 
 */
class Zadmin_Fields extends Zadmin {
	
	function __construct() {
		$this->tao_field_mac_dinh();
		$this->apply_fields();
	}

	function tao_field_mac_dinh(){
		
		$arr[10] =[
			require ZADMIN_DIR."/fields/fields-wordpress.php",
			require ZADMIN_DIR."/fields/fields-wordpress-admin_settings.php",
			require ZADMIN_DIR."/fields/fields-wordpress-admin_users.php",
			require ZADMIN_DIR."/fields/fields-wordpress-taxonomy.php",
			require ZADMIN_DIR."/fields/fields-wordpress-editor_and_media.php",
		];

		$arr[20] =[
			require ZADMIN_DIR."/fields/fields-enqueue.php",
			require ZADMIN_DIR."/fields/fields-enqueue-fonts.php",
			require ZADMIN_DIR."/fields/fields-enqueue-wp_library.php",
			require ZADMIN_DIR."/fields/fields-enqueue-custom_code.php",
		];

		$arr[30] =[
			require ZADMIN_DIR."/fields/fields-quickcontact.php",
			require ZADMIN_DIR."/fields/fields-quickcontact-menu_create.php",
			require ZADMIN_DIR."/fields/fields-quickcontact-menu_settings.php",
		];

		$arr[40] =[
			require ZADMIN_DIR."/fields/fields-smtpmailer.php",
			require ZADMIN_DIR."/fields/fields-smtpmailer-smtp_settings.php",
			require ZADMIN_DIR."/fields/fields-smtpmailer-test_email.php",
		];
		$arr[50] =[
			require ZADMIN_DIR."/fields/fields-security.php",
			require ZADMIN_DIR."/fields/fields-security-functions.php",
		];

		$arr[60] =[
			require ZADMIN_DIR."/fields/fields-icons.php",
			require ZADMIN_DIR."/fields/fields-icons-icons.php",
		];

		$arr[70] =[
			require ZADMIN_DIR."/fields/fields-tools.php",
			require ZADMIN_DIR."/fields/fields-tools-replace-image.php",
		];

		$arr[80] =[
			require ZADMIN_DIR."/fields/fields-leechdata.php",
			require ZADMIN_DIR."/fields/fields-leechdata-css_selector.php",
			require ZADMIN_DIR."/fields/fields-leechdata-test_and_run.php",
			require ZADMIN_DIR."/fields/fields-leechdata-woocommerce_css_selector.php",
			require ZADMIN_DIR."/fields/fields-leechdata-woocommerce_test_and_run.php",
			require ZADMIN_DIR."/fields/fields-leechdata-leech_data_settings.php",
		];

		$arr[90] =[
			require ZADMIN_DIR."/fields/fields-acf.php",
			require ZADMIN_DIR."/fields/fields-acf-acf_settings.php",
		];

		if(function_exists('WC')):
			$arr[100] =[
				require ZADMIN_DIR."/fields/fields-woocommerce.php",
				require ZADMIN_DIR."/fields/fields-woocommerce-single_product.php",
				require ZADMIN_DIR."/fields/fields-woocommerce-product_list.php",
				require ZADMIN_DIR."/fields/fields-woocommerce-product_category.php",
				require ZADMIN_DIR."/fields/fields-woocommerce-price.php",
				require ZADMIN_DIR."/fields/fields-woocommerce-add_to_cart.php",
				require ZADMIN_DIR."/fields/fields-woocommerce-checkout.php",
				require ZADMIN_DIR."/fields/fields-woocommerce-product_filter.php",
				require ZADMIN_DIR."/fields/fields-woocommerce-currency.php",
				require ZADMIN_DIR."/fields/fields-woocommerce-template_hook.php",
				require ZADMIN_DIR."/fields/fields-woocommerce-other.php",
			];
		endif;

		if(in_array('Flatsome', [wp_get_theme()->name, wp_get_theme()->parent_theme])):
			$arr[110] =[
				require ZADMIN_DIR."/fields/fields-flatsome.php",
				require ZADMIN_DIR."/fields/fields-flatsome-uxbuilder_elements.php",
				require ZADMIN_DIR."/fields/fields-flatsome-flatsome_config.php",
				require ZADMIN_DIR."/fields/fields-flatsome-portfolio.php",
				require ZADMIN_DIR."/fields/fields-flatsome-template_hook.php",
				require ZADMIN_DIR."/fields/fields-flatsome-other.php",
				require ZADMIN_DIR."/fields/fields-flatsome-support.php",
			];
		endif;

		if (in_array('elementor/elementor.php', apply_filters('active_plugins', get_option('active_plugins')))):
			$arr[120] =[
				require ZADMIN_DIR."/fields/fields-elementor.php",
				require ZADMIN_DIR."/fields/fields-elementor-message.php"
			];
		endif;

		

		$arr[130] =[
			require ZADMIN_DIR."/fields/fields-advanced.php",
			require ZADMIN_DIR."/fields/fields-advanced-backup.php",
			require ZADMIN_DIR."/fields/fields-advanced-restore.php"
		];

		foreach ($arr as $priority => $groups) {
			foreach ($groups as $group) {

				add_filter( 'zadmin_fields', function($fields)use($group){
					$fields['fields'][] = $group;
					return $fields;
				},$priority );


				
				if($group['type'] == 'tab'){
					$_tab = $group['name'];
				}

				if($group['type'] == 'group'){
					add_filter( 'zadmin_fields_tab_'.$_tab, function($groups_name)use($group){
						$groups_name[] = $group['name'];
						return $groups_name;
					},$priority );
				}
			}
		}
	}

	function apply_fields(){
		if( function_exists('acf_add_local_field_group') ):
		    acf_add_local_field_group($this->get_fields());
		endif;  
	}

	function get_fields(){
		$fields = array(
	        'key' => 'group_641361df50589',
	        'title' => 'Z Admin - More settings for your site',
	        'fields' => array(),
	        'location' => array(
	            array(
	                array(
	                    'param' => 'options_page',
	                    'operator' => '==',
	                    'value' => 'acf-options-z-admin',
	                ),
	                array(
	                    'param' => 'current_user_role',
	                    'operator' => '==',
	                    'value' => 'administrator',
	                ),
	            ),
	        ),
	        'menu_order' => 0,
	        'position' => 'normal',
	        'style' => 'default',
	        'label_placement' => 'top',
	        'instruction_placement' => 'label',
	        'hide_on_screen' => '',
	        'active' => true,
	        'description' => '',
	        'show_in_rest' => 0,
	    );
	    $fields = apply_filters( 'zadmin_fields', $fields );
	    return $fields;
	}
}

new Zadmin_Fields;