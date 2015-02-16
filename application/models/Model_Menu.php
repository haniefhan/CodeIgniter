<?php
	// Access (Global Model) for simple ORM
	// see extended function in : core/MY_Model.php
	
	class Model_Menu extends MY_Model {
		protected $schema 		= ''; // ex : 'public.'
		protected $table 		= 'refMenu';
		protected $primary_key 	= 'menu_id';
		protected $order_by 	= 'menu_order'; // default order by
		protected $order_type 	= 'ASC';
		// place your unique function here
	}
?>