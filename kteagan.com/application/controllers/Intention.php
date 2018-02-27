<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intention extends MY_Controller 
{
    public function index()
	{
        $data['prev'] = 'terra';
        $data['top'] = 'intention';
        $data['next'] = 'chewy';

		$this->load->view('intention/index', $data);
	}
}
