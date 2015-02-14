<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function system_info(){
	$CI =& get_instance();
	$set = new stdClass;
	foreach ($CI->db->get('refSetting')->result_array() as $i => $v) {
		$set->$v['set_name'] = $v['set_value'];
	}	
	return $set;
}

function get_menu(){
	$CI =& get_instance();
	$CI->load->model('Model_Menu');
	return $CI->Model_Menu->get();
}