<?php
class Menu extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Menu_model");
		$this->title = 'Menu';
		$this->template = 'template/ace/index';
	}

	function index(){
		$data['title']		= $this->title;
		$data['content']	= 'blank.php';
		$data['data'] 		= $this->Menu_model->getMenuAll();

		$this->load->view($this->template,$data);
	}

	// get data use javascript, for javascript edit
	function get($id = 0){
		$data	= $this->menu->getMenuById($id);
		echo json_encode($data);
	}

	// add Menu by form
	function add(){
		$data['title']		= 'Add '.$this->title;
		$data['state']		= 'add';
		$data['content']	= 'menu_form.php';

		$this->load->view($this->template,$data);
	}

	// edit Menu by form
	function edit($id = 0){
		$data['title']		= 'Edit '.$this->title;
		$data['state']		= 'edit';
		$data['content']	= 'menu_form.php';
		$data['data'] 		= $this->Menu_model->getMenuById($id);

		$this->load->view($this->template,$data);
	}

	function insert(){
		$data = $this->input->post(); //  $data = $_POST;
		if($this->Menu_model->insertMenu($data)){
			$this->session->set_userdata(array('status' => true, 'msg' => 'Menu berhasil ditambahkan')); // Insert success
		}else{
			$this->session->set_userdata(array('status' => false, 'msg' => 'Menu gagal ditambahkan')); // Insert failed
		}
		redirect(base_url().'index.php/Menu');
	}

	function update($id = 0){
		$data = $this->input->post(); //  $data = $_POST;
		if($this->Menu_model->updateMenu($id,$data)){
			$this->session->set_userdata(array('status' => true, 'msg' => 'Menu berhasil diubah')); // Update success
		}else{
			$this->session->set_userdata(array('status' => false, 'msg' => 'Menu gagal diubah')); // Update failed
		}
		redirect(base_url().'index.php/Menu');
	}

	function delete($id = 0){
		if($this->Menu_model->deleteMenu($id)){
			$this->session->set_userdata(array('status' => true, 'msg' => 'Menu berhasil dihapus')); // Delete success
		}else{
			$this->session->set_userdata(array('status' => false, 'msg' => 'Menu gagal dihapus')); // Delete failed
		}
		redirect(base_url().'index.php/Menu');
	}
}
?>