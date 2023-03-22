<?php 
/**
 * 
 */
class Zadmin_Wordpress extends Zadmin {
	const TABNAME = 'wordpress';
    public $groups_name = [];
    public $groups_option = [];

	function __construct() {
		parent::__construct();
	}
}
$Zadmin_Wordpress = new Zadmin_Wordpress;
/*add_action( 'init', function(){
	global $Zadmin_Wordpress;
	echo "<pre>";print_r($Zadmin_Wordpress);echo "</pre>";
} );*/