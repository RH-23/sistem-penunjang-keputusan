<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_puskesmas extends CI_Model {

	/*variabel yang memiliki tabel puskesmas*/
	var $table = 'tb_puskesmas';

	/*fungsi untuk menampilkan tabel puskesmas*/
	function get_puskesmas()
	{
		$query = 	"
    				SELECT
    				tb_puskesmas.id_puskesmas,
					tb_puskesmas.nama_puskesmas,
					tb_puskesmas.alamat,
					tb_puskesmas.id_user
					FROM
					tb_puskesmas
					ORDER BY
					tb_puskesmas.nama_puskesmas ASC";
		$result = $this->db->query($query);
        return $result->result_array();
	}

	/*fungsi untuk menampilkan dropdown tabel puskesmas*/
	function get_puskesmas_dropdown()
	{
		$query = 	"
    				SELECT
    				tb_puskesmas.id_puskesmas,
					tb_puskesmas.nama_puskesmas,
					tb_puskesmas.alamat,
					tb_puskesmas.id_user
					FROM
					tb_puskesmas
					ORDER BY
					tb_puskesmas.nama_puskesmas ASC";
		$result = $this->db->query($query);
        return $result->result_array();
	}

	/*fungsi add tabel kriteria lingkungan*/
	function add($data){
    	$this->db->insert($this->table, $data);
    	return true;
    }

	/*fungsi update tabel kriteria lingkungan*/
	function update($data, $id){
    	$this->db->where('id_puskesmas',$id);
    	$this->db->update($this->table, $data);
    	return true;
    }

    /*fungsi query delete atau hapus data tabel puskesmas*/
	function delete($id)
	{
		$this->db->where('id_puskesmas', $id);
		$this->db->delete('tb_puskesmas');
		return TRUE;
	}

	/*fungsi untuk menghitung total data tabel puskesmas*/
	public function totalData( ){
        return $this->db->get('tb_puskesmas');
    }

}
