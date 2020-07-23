<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	/* fungsi yang akan di load pertama kali */
 	function __construct() {
        parent::__construct();
        	$this->load->model('m_nilai');
        	$this->load->model('m_puskesmas');
    }

	public function index()
	{
		$data['title']				= 'Proses Penilaian SPK';
		$data['content']		 	= 'data/v_nilai';
		$data['nilai']				= $this->m_nilai->get_penilaianpuskesmas();
		$data['jmlk_ling']			= $this->m_nilai->get_jmlk_ling();
		$data['jmlk_tenmed']		= $this->m_nilai->get_jmlk_tenmed();
		$data['jmlk_pel']			= $this->m_nilai->get_jmlk_pel();
		$data['jmlk_fas']			= $this->m_nilai->get_jmlk_fas();
		$data['rangking']			= $this->m_nilai->get_rangking();
		$this->load->view('dashboard',$data);
	}
}
