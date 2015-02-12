<?php
class Menu_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->schema = '';
	}

	public function getMenuAll(){
		return $this->db->get($this->schema.'refMenu')->result_array();
	}

	public function getMenuById($id = 0){
		$this->db->where('id', $id);
		return $this->db->get($this->schema.'refMenu')->row_array();
	}

	public function insertMenu($data = array()){
		return $this->db->insert($this->schema.'refMenu');
	}

	public function updateMenu($id = 0, $data = array()){
		$this->db->where('id', $id);
		return $this->db->update($this->schema.'refMenu', $data);
	}

	public function deleteMenu($id = 0){
		$this->db->where('id', $id);
		return $this->db->delete($this->schema.'refMenu');
	}
}
?>