<?php 
/**
 * 
 */
class Zadmin_Quickcontact extends Zadmin {
	const TABNAME = 'quickcontact';
    public $groups_name = [];
    public $groups_option = [];

	function __construct() {
		parent::__construct();
	}
}
$Zadmin_Quickcontact = new Zadmin_Quickcontact;
/*add_action( 'init', function(){
	global $Zadmin_Quickcontact;
	echo "<pre>";print_r($Zadmin_Quickcontact);echo "</pre>";
} );*/