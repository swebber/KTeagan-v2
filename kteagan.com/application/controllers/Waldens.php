<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waldens extends MY_Controller 
{
    public function index()
	{
        $data['prev'] = 'chewy';
        $data['top'] = 'waldens';
        $data['next'] = 'meat';

		$this->load->view('waldens/index', $data);
	}
}
