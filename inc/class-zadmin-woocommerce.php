<?php 
/**
 * 
 */
class Zadmin_Woocommerce extends Zadmin {
	const TABNAME = 'woocommerce';
    public $groups_name = [];
    public $groups_option = [];

	function __construct() {
		parent::__construct();
	}
}
$Zadmin_Woocommerce = new Zadmin_Woocommerce;
/*add_action( 'init', function(){
	global $Zadmin_Woocommerce;
	echo "<pre>";print_r($Zadmin_Woocommerce);echo "</pre>";
} );*/