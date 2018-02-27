<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chewy extends MY_Controller 
{
    public function index()
	{
        $data['prev'] = 'intention';
        $data['top'] = 'chewy';
        $data['next'] = 'waldens';

		$this->load->view('chewy/index', $data);
	}
}
