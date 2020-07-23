<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Puskesmas extends CI_Controller {

	/* fungsi yang akan di load pertama kali */
 	function __construct() {
        parent::__construct();
        	$this->load->model('m_puskesmas');
    }

	public function index()
	{
		$data['title']				= 'Puskesmas';
		$data['content'] 			= 'data/v_puskesmas';
		$data['totaldata']			= $this->m_puskesmas->totalData()->num_rows();
		$data['puskesmas']			= $this->m_puskesmas->get_puskesmas();
		$this->load->view('dashboard',$data);
	}
	
	/*fungsi add puskesmas*/
	public function add(){
		$nama 	= $this->input->post('nama_puskesmas');
		$alamat = $this->input->post('alamat');

		$data 	= array (
					'nama_puskesmas'	=> $this->input->post('nama_puskesmas'),
					'alamat'			=> $this->input->post('alamat')
		);

		$this->m_puskesmas->add($data);
		redirect('puskesmas');
	}

	/*fungsi update tabel puskesmas*/
	public function update(){
		$id = $this->input->post('id_puskesmas');
		$data = array (
			'nama_puskesmas'	=> $this->input->post('nama_puskesmas'),
			'alamat'			=> $this->input->post('alamat')
		);

		$this->m_puskesmas->update($data, $id);
		redirect('puskesmas');
	}

	/*fungsi delete data tabel puskesmas*/
	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->m_puskesmas->delete($id);
		redirect('puskesmas');
	}

}
