<?php

class Pages extends Controller{

	public function __construct(){

	}

	public function index(){
		$check = Config::get('mysql/host');

		$data = [
			'title' => 'Mantis MVC',
			'check' => $check
		];

		$this->view("pages/index", $data);
	}

	public function about(){
		$data = [
			'title' => 'About Us'
		];
		$this->view("pages/about", $data);
	}
}