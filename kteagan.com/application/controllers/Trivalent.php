<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trivalent extends MY_Controller 
{
    public function index()
	{
        $data['prev'] = 'atlantic';
        $data['top'] = 'trivalent';
        $data['next'] = 'california-tortilla';

		$this->load->view('trivalent/index', $data);
	}
}
