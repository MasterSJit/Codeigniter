<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->model('SiteImages');
		$page['body'] = 'home';
		$this->load->view('inc', $page);
	}
}
