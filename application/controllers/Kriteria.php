<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	/* fungsi yang akan di load pertama kali */
 	function __construct() {
        parent::__construct();
        	$this->load->model('m_kriteria');
    }

    /* fungsi utama */
	public function index()
	{
		$data['title']				= 'Data Kriteria';
		$data['sub_title_c1']		= 'Kriteria Lingkungan (C1)';
		$data['sub_title_c2']		= 'Kriteria Tenaga Medis (C2)';
		$data['sub_title_c3']		= 'Kriteria Pelayanan(C3)';
		$data['sub_title_c4']		= 'Kriteria Fasilitas(C4)';
		$data['content'] 			= 'data/v_kriteria';
		$data['data_lingkungan']	= $this->m_kriteria->get_kriteria_lingkungan();
		$data['data_tenagamedis']	= $this->m_kriteria->get_kriteria_tenagamedis();
		$data['data_pelayanan']		= $this->m_kriteria->get_kriteria_pelayanan();
		$data['data_fasilitas']		= $this->m_kriteria->get_kriteria_fasilitas();
		$data['data_gal']			= $this->m_kriteria->get_all_lingkungan();
		$this->load->view('dashboard',$data);
	}

	/*fungsi update tabel lingkungan*/
	public function update1(){
		$id_kl = $this->input->post('id_kriteria_lingkungan');
		$data = array (
			'pilihan_kriteria_lingkungan'	=> $this->input->post('pilihan_kriteria_lingkungan'),
			'bobot_kriteria_lingkungan'	=> $this->input->post('bobot_kriteria_lingkungan')
		);

		$this->m_kriteria->update1($data, $id_kl);
		redirect('kriteria');
	}

	/*fungsi update tabel tenaga medis*/
	public function update2(){
		$id_ktm = $this->input->post('id_kriteria_tenmed');
		$data = array (
			'pilihan_kriteria_tenmed'	=> $this->input->post('pilihan_kriteria_tenmed'),
			'bobot_kriteria_tenmed'	=> $this->input->post('bobot_kriteria_tenmed')
		);

		$this->m_kriteria->update2($data, $id_ktm);
		redirect('kriteria');
	}

	/*fungsi update tabel pelayanan*/
	public function update3(){
		$id_kp = $this->input->post('id_kriteria_pelayanan');
		$data = array (
			'pilihan_kriteria_pelayanan'	=> $this->input->post('pilihan_kriteria_pelayanan'),
			'bobot_kriteria_pelayanan'	=> $this->input->post('bobot_kriteria_pelayanan')
		);

		$this->m_kriteria->update3($data, $id_kp);
		redirect('kriteria');
	}

	/*fungsi update tabel fasilitas*/
	public function update4(){
		$id_kf = $this->input->post('id_kriteria_fasilitas');
		$data = array (
			'pilihan_kriteria_fasilitas'	=> $this->input->post('pilihan_kriteria_fasilitas'),
			'bobot_kriteria_fasilitas'	=> $this->input->post('bobot_kriteria_fasilitas')
		);

		$this->m_kriteria->update4($data, $id_kf);
		redirect('kriteria');
	}
}
