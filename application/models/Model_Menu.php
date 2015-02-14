<?php
	// Access (Global Model) for simple ORM
	// see extended function in : core/MY_Model.php
	
	class Model_Menu extends MY_Model {
		public $schema 	= ''; // ex : 'public.'
		public $table 		= 'refMenu';
		public $primary_key = 'menu_id';
		public $order_by 	= 'menu_order'; // default order by
	
		// place your unique function here
	}
?>