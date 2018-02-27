<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meat extends MY_Controller 
{
    public function index()
	{
        $data['prev'] = 'waldens';
        $data['top'] = 'meat';
        $data['next'] = 'typographic';

		$this->load->view('meat/index', $data);
	}
}
