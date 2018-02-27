<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terra extends MY_Controller 
{
    public function index()
	{
        $data['prev'] = 'california-tortilla';
        $data['top'] = 'terra';
        $data['next'] = 'intention';

		$this->load->view('terra/index', $data);
	}
}
