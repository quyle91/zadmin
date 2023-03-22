<?php 
/**
 * 
 */
class Zadmin_Security extends Zadmin {
	const TABNAME = 'security';
    public $groups_name = [];
    public $groups_option = [];

	function __construct() {
		parent::__construct();
	}
}
$Zadmin_Security = new Zadmin_Security;
/*add_action( 'init', function(){
	global $Zadmin_Security;
	echo "<pre>";print_r($Zadmin_Security);echo "</pre>";
} );*/