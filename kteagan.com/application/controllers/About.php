<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller 
{
    public function index()
	{
		$data['active'] = 'about';
		$this->load->view('about/index', $data);
	}
}
