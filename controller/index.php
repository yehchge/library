<?php

class Index extends jream\mvc\Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		
		$this->view->render('header');
		$this->view->render('index/index');
		$this->view->render('footer');
	}
	
	public function about($arg1, $arg2)
	{
		$data = array(
			'arg1' => $arg1,
			'arg2' => $arg2
		);

		$this->view->render('header');
		$this->view->render('index/about', $data);
		$this->view->render('footer');
		//echo 'about page: ' . $anything . ' - ' . $other;
	}
		
}