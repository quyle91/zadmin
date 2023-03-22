<?php 
/**
 * 
 */
class Zadmin_Elementor extends Zadmin {
	const TABNAME = 'elementor';
    public $groups_name = [];
    public $groups_option = [];

	function __construct() {
		parent::__construct();
	}
}
$Zadmin_Elementor = new Zadmin_Elementor;
/*add_action( 'init', function(){
	global $Zadmin_Elementor;
	echo "<pre>";print_r($Zadmin_Elementor);echo "</pre>";
} );*/
