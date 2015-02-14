<?php
// SIMPLE GLOBAL MODEL TREAT THE MODELS LIKE ORM
class MY_Model extends CI_Model {
	public $schema 		= '';
	public $table  		= '';
	public $primary_key = 'id';

	/* SELECT */
	public function select($select = array()){
		$this->db->select(implode(",", array_map('trim',$select)));
	}

	/* GET ALL */
	public function get(){
		return $this->db->get($this->table)->result();
	}

	/* GET BY ID*/
	public function get_by_id($id = 0){
		$this->db->where($this->primary_key, $id);
		return $this->db->get($this->table)->row();
	}

	/* GET WHERE*/
	public function get_where($where = array()){ //  = array($field => $value);
		if(count($where) > 0){
			foreach($where as $field => $value){
				$this->db->where($field, $value);
			}
		}
		return $this->db->get($this->table)->result();
	}

	public function insert($data = array()){
		return $this->db->insert($this->table);
	}

	public function update($id = 0, $data = array()){
		$this->db->where($this->primary_key, $id);
		return $this->db->update($this->table, $data);
	}

	public function delete($id = 0){
		$this->db->where($this->primary_key, $id);
		return $this->db->delete($this->table);
	}
}
?>