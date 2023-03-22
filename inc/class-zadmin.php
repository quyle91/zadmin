<?php 
/**
 * 
 */
class Zadmin{
	function __construct(){
		$this->set_groups_name();
		add_action( 'init', [$this,'set_groups_option']);
	}

	function set_groups_option(){
        if(!empty($this->groups_name) and is_array($this->groups_name)){
            foreach ($this->groups_name as $group) {
                $this->groups_option[$group] = get_field($group,'option');
            }
        }
    }

    function set_groups_name(){
        $this->groups_name = apply_filters( 'zadmin_fields_tab_'.$this::TABNAME, $this->groups_name );
    }
}
