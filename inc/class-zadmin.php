<?php 
/**
 * 
 */
class Zadmin{
	public $groups_name;
	public $groups_option;
	
	function __construct(){
		add_action( 'init',[$this,'set_groups_keys'] );
		

	}

	function set_groups_keys(){
		echo "<pre>";print_r(apply_filters( 'zadmin_fields_groups', $this->groups_name ));echo "</pre>";
	}
}

new Zadmin;