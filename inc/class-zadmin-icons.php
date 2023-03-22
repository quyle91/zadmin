<?php 
/**
 * 
 */
class Zadmin_Icons extends Zadmin {
	const TABNAME = 'icons';
    public $groups_name = [];
    public $groups_option = [];

	function __construct() {
		parent::__construct();
	}
}
$Zadmin_Icons = new Zadmin_Icons;
/*add_action( 'init', function(){
	global $Zadmin_Icons;
	echo "<pre>";print_r($Zadmin_Icons);echo "</pre>";
} );*/