<?php 
/**
 * 
 */
class Zadmin_Flatsome extends Zadmin {
	const TABNAME = 'flatsome';
    public $groups_name = [];
    public $groups_option = [];

	function __construct() {
		parent::__construct();
	}
}

$Zadmin_Flatsome = new Zadmin_Flatsome;
/*add_action( 'init', function(){
	global $Zadmin_Flatsome;
	echo "<pre>";print_r($Zadmin_Flatsome);echo "</pre>";
} );*/