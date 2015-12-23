<?php

class Base_model extends jream\mvc\Model
{
	public function __construct()
	{
		parent::__construct();
		
		$this->db = new jream\Database(array(
		   'type' => 'mysql'
		   ,'host' => 'localhost'
		   ,'name' => 'test'
		   ,'user' => 'robot'
		   ,'pass' => 'robot'
		));
	}
}