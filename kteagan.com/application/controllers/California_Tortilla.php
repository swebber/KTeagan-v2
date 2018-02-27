<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class California_Tortilla extends MY_Controller 
{
    public function index()
	{
        $data['prev'] = 'trivalent';
        $data['top'] = 'california-tortilla';
        $data['next'] = 'terra';

		$this->load->view('california-tortilla/index', $data);
	}
}
