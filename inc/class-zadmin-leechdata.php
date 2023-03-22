<?php 
/**
 * 
 */
class Zadmin_Leechdata extends Zadmin {
	const TABNAME = 'leechdata';
    public $groups_name = [];
    public $groups_option = [];

	function __construct() {
		parent::__construct();
	}
}

$Zadmin_Leechdata = new Zadmin_Leechdata;

/*add_action( 'init', function(){
	global $Zadmin_Leechdata;
	echo "<pre>";print_r($Zadmin_Leechdata);echo "</pre>";
} );*/