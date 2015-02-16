<?php
// SIMPLE GLOBAL MODEL TREAT THE MODELS LIKE ORM
class MY_Model extends CI_Model {
	protected $schema 		= '';
	protected $table  		= '';
	protected $primary_key 	= 'id'; // can be string can be array
	protected $order_by 	= '';
	protected $order_type 	= 'DESC';
	protected $result 		= 'object'; 

	public function __construct(){
		if($this->order_by != ''){
			if(is_array($this->order_by)){
				$this->db->order_by(implode(",", array_map('trim',$this->order_by)), $this->order_type);
			}else{
				$this->db->order_by($this->order_by, $this->order_type);
			}
		}
	}

	/* SELECT */
	public function select($select = array()){
		$this->db->select(implode(",", array_map('trim',$select)));
	}

	/* GET ALL */
	public function get(){
		return $this->_parse_return($this->db->get($this->table));
	}

	/* GET BY ID*/
	// return just one array/object data
	public function get_by_id($id = 0){
		if(is_array($this->primary_key)){
			foreach ($this->primary_key as $i => $v) {
				$this->db->where($v, $id[$i]);	
			}
		}else{
			$this->db->where($this->primary_key, $id);
		}
		return $this->_parse_return($this->db->get($this->table), false);
	}

	/* GET WHERE*/
	public function get_where($where = array()){ //  = array($field, $value);
		if(count($where) > 0){
			foreach($where as $whr){
				$this->db->where($whr[0], $whr[1]);
			}
		}
		return $this->_parse_return($this->db->get($this->table));
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

	public function set_result($res = 'object'){
		$this->result = $res;
	}

	private function _parse_return($ret = '', $all = true){
		if($this->result == 'array' && $all == true)
			return $ret->result_array();
		else if($this->result == 'array' && $all == false)
			return $ret->row_array();
		else if($this->result == 'object' && $all == false)
			return $ret->row();
		else
			return $ret->result();
	}
}
?>