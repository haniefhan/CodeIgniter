<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function system_info(){
	$CI =& get_instance();
	$set = new stdClass;
	foreach ($CI->db->get('refSetting')->result_array() as $i => $v) {
		$set->$v['set_name'] = $v['set_value'];
	}
	return $set;
}

function set_child($menus = array(), $child = array()){
	foreach ($menus as $i => $menu) {
		if(isset($child[$menu['menu_id']])){
			// set sub-submenu and go on..
			$child[$menu['menu_id']] = set_child($child[$menu['menu_id']], $child);
			$menus[$i]['menu_child'] = $child[$menu['menu_id']];
			unset($child);
		}
	}
	return $menus;
}

function get_menu(){
	$CI =& get_instance();
	$CI->db->where('menu_status', 1);
	$CI->db->order_by('menu_order', 'ASC');
	$menus = $CI->db->get('refMenu')->result_array();
	$child 	= array();
	
	foreach ($menus as $i => $menu) {
		if($menu['menu_parent'] != 0){
			$child[$menu['menu_parent']][] = $menu;
			unset($menus[$i]);
		}else{
			$menus[$i] = $menu;
		}
	}
	$menus = set_child($menus, $child);

	return $menus;
}