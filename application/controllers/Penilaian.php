<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

	/* fungsi yang akan di load pertama kali */
 	function __construct() {
        parent::__construct();
        	$this->load->model('m_penilaian');
    }

	public function index()
	{
		$data['title']						= 'Penilaian Puskesmas';
		$data['content'] 					= 'data/v_penilaian';
		$data['penilaian']					= $this->m_penilaian->get_penilaianpuskesmas();
		$data['totaldata_nilai']			= $this->m_penilaian->totalDataNilai()->num_rows();
		$data['nilai_puskesmas']			= $this->m_penilaian->get_puskesmas_dropdown();
		$data['nilai_kriteria_lingkungan']	= $this->m_penilaian->get_kriteria1_dropdown();
		$data['nilai_kriteria_tenagamedis']	= $this->m_penilaian->get_kriteria2_dropdown();
		$data['nilai_kriteria_pelayanan']	= $this->m_penilaian->get_kriteria3_dropdown();
		$data['nilai_kriteria_fasilitas']	= $this->m_penilaian->get_kriteria4_dropdown();
		$this->load->view('dashboard',$data);
	}

	/*fungsi add penilaian puskesmas*/
	public function add(){
		$idpuskes 	= $this->input->post('nama_puskesmas');
		$idling 	= $this->input->post('nama_lingkungan');
		$idtenmed 	= $this->input->post('nama_tenmed');
		$idpel	 	= $this->input->post('nama_pel');
		$idfas 		= $this->input->post('nama_fas');

		$data 	= array (
					'id_puskesmas'					=> $idpuskes,
					'id_kriteria_lingkungan'		=> $idling,
					'id_kriteria_tenmed'			=> $idtenmed,
					'id_kriteria_pelayanan'			=> $idpel,
					'id_kriteria_fasilitas'			=> $idfas
		);

		$this->m_penilaian->add($data);
		redirect('penilaian');
	}

	/*fungsi update penilaian puskesmas*/
	public function update(){
		$id = $this->input->post('id_nilai');
		$data = array (
			'id_puskesmas'				=> $this->input->post('id_puskesmas'),
			'id_kriteria_lingkungan'	=> $this->input->post('nama_lingkungan'),
			'id_kriteria_tenmed'		=> $this->input->post('nama_tenmed'),
			'id_kriteria_pelayanan'		=> $this->input->post('nama_pel'),
			'id_kriteria_fasilitas'		=> $this->input->post('nama_fas'),
		);

		$this->m_penilaian->update($data, $id);
		redirect('penilaian');
	}

	/*fungsi delete data penilaian puskesmas*/
	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->m_penilaian->delete($id);
		redirect('penilaian');
	}

}