<?php
	// Access (Global Model) for simple ORM
	// see extended function in : core/MY_Model.php
	
	class Model_Setting extends MY_Model {
		public $schema 	= ''; // ex : 'public.'
		public $table 		= 'tbSetting';
		public $primary_key = 'setting_id';
		public $order_by 	= 'setting_id'; // default order by
	
		// place your unique function here
	}
?>