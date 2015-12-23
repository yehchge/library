<?php

class User_model extends jream\mvc\Model
{
	public function __construct()
	{
		parent::__construct();
		$this->db = jream\Registry::fetch('db');
	}
	
	public function doSomething()
	{
		echo __FUNCTION__;
		echo $this->db;
	}
	

}