<?php 
/**
 * 
 */
class Zadmin_Enqueue extends Zadmin {
	const TABNAME = 'enqueue';
    public $groups_name = [];
    public $groups_option = [];

	function __construct() {
		parent::__construct();
	}
}

$Zadmin_Enqueue = new Zadmin_Enqueue;
/*add_action( 'init', function(){
	global $Zadmin_Enqueue;
	echo "<pre>";print_r($Zadmin_Enqueue);echo "</pre>";
} );*/