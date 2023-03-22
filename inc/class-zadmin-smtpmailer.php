<?php 
/**
 * 
 */
class Zadmin_Smtpmailer extends Zadmin {
	const TABNAME = 'smtpmailer';
    public $groups_name = [];
    public $groups_option = [];

	function __construct() {
		parent::__construct();
	}
}
$Zadmin_Smtpmailer = new Zadmin_Smtpmailer;
/*add_action( 'init', function(){
	global $Zadmin_Smtpmailer;
	echo "<pre>";print_r($Zadmin_Smtpmailer);echo "</pre>";
} );*/