<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_wp extends CI_Controller {

	/* fungsi yang akan di load pertama kali */
 	function __construct() {
        parent::__construct();
        	$this->load->model('m_nilai_wp');
        	$this->load->model('m_puskesmas');
    }

	public function index()
	{
		$data['title']				= 'Proses SPK WP';
		$data['content']		 	= 'data/v_nilai_wp';
		$data['nilai']				= $this->m_nilai_wp->get_penilaianpuskesmas();
		$data['jmlk_ling']			= $this->m_nilai_wp->get_jmlk_ling();
		$data['jmlk_tenmed']		= $this->m_nilai_wp->get_jmlk_tenmed();
		$data['jmlk_pel']			= $this->m_nilai_wp->get_jmlk_pel();
		$data['jmlk_fas']			= $this->m_nilai_wp->get_jmlk_fas();
		$data['rangking']			= $this->m_nilai_wp->get_rangking();
		$this->load->view('dashboard',$data);
	}
}
