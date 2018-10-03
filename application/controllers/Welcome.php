<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	/*
		Admin => Gunakan return admin('view_location',array())
		User => Gunakan return user('view_location',array())
	*/
	public function index()
	{
		$data  = Users::all();
		return user('dashboard/indesx',['name' => 'User', 'data' => $data]);
	}
}
