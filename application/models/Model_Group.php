<?php
	// Access (Global Model) for simple ORM
	// see extended function in : core/MY_Model.php
	
	class Model_Group extends MY_Model {
		public $schema 	= ''; // ex : 'public.'
		public $table 		= 'tbGroup';
		public $primary_key = 'group_id';
		public $order_by 	= 'group_id'; // default order by
	
		// place your unique function here
	}
?>