<?php 
/**
 * 
 */
class Zadmin_Tools extends Zadmin {
	const TABNAME = 'tools';
    public $groups_name = [];
    public $groups_option = [];

	function __construct() {
		parent::__construct();
	}
}
$Zadmin_Tools = new Zadmin_Tools;
/*add_action( 'init', function(){
	global $Zadmin_Tools;
	echo "<pre>";print_r($Zadmin_Tools);echo "</pre>";
} );*/