<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elsewhere extends MY_Controller 
{
    public function index()
	{
		$data['active'] = 'elsewhere';
		$this->load->view('elsewhere/index', $data);
	}
}
