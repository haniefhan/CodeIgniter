<?php
	// Access (Global Model) for simple ORM
	// see extended function in : core/MY_Model.php
	
	class Model_GroupMenu extends MY_Model {
		public $schema 	= ''; // ex : 'public.'
		public $table 	= 'tbGroupMenu';
		public $primary_key = ['group_id', 'menu_id'];
		public $order_by 	= ['group_id', 'menu_id']; // default order by
	
		// place your unique function here
	}
?>