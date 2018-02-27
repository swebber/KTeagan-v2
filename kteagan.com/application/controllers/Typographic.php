<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Typographic extends MY_Controller 
{
    public function index()
	{
        $data['prev'] = 'meat';
        $data['top'] = 'typographic';
        $data['next'] = 'atlantic';

		$this->load->view('typographic/index', $data);
	}
}
