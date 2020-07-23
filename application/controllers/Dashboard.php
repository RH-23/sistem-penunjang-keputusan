<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title']	= '';
		$data['content'] = 'v_home';
		$this->load->view('dashboard',$data);
	}
}
