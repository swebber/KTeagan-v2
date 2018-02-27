<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atlantic extends MY_Controller 
{
    public function index()
	{
        $data['prev'] = 'typographic';
        $data['top'] = 'atlantic';
        $data['next'] = 'trivalent';

		$this->load->view('atlantic/index', $data);
	}
}
