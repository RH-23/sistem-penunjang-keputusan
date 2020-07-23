<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_penilaian extends CI_Model {

	/*variabel yang memiliki tabel puskesmas*/
	var $table = 'tb_nilai';

	function get_penilaianpuskesmas()
	{
		$query = 	"SELECT
					tb_kriteria_lingkungan.id_kriteria_lingkungan,
					tb_kriteria_lingkungan.pilihan_kriteria_lingkungan,
					tb_kriteria_lingkungan.bobot_kriteria_lingkungan,
					tb_puskesmas.id_puskesmas,
					tb_puskesmas.nama_puskesmas,
					tb_puskesmas.alamat,
					tb_puskesmas.id_user,
					tb_kriteria_tenagamedis.id_kriteria_tenmed,
					tb_kriteria_tenagamedis.pilihan_kriteria_tenmed,
					tb_kriteria_tenagamedis.bobot_kriteria_tenmed,
					tb_kriteria_pelayanan.id_kriteria_pelayanan,
					tb_kriteria_pelayanan.pilihan_kriteria_pelayanan,
					tb_kriteria_pelayanan.bobot_kriteria_pelayanan,
					tb_kriteria_fasilitas.id_kriteria_fasilitas,
					tb_kriteria_fasilitas.pilihan_kriteria_fasilitas,
					tb_kriteria_fasilitas.bobot_kriteria_fasilitas,
					tb_nilai.id_nilai,
					tb_nilai.id_puskesmas,
					tb_nilai.id_kriteria_lingkungan,
					tb_nilai.id_kriteria_tenmed,
					tb_nilai.id_kriteria_pelayanan,
					tb_nilai.id_kriteria_fasilitas
					FROM
					tb_nilai
					INNER JOIN tb_puskesmas ON tb_puskesmas.id_puskesmas = tb_nilai.id_puskesmas
					INNER JOIN tb_kriteria_lingkungan ON tb_kriteria_lingkungan.id_kriteria_lingkungan = tb_nilai.id_kriteria_lingkungan
					INNER JOIN tb_kriteria_tenagamedis ON tb_nilai.id_kriteria_tenmed = tb_kriteria_tenagamedis.id_kriteria_tenmed
					INNER JOIN tb_kriteria_pelayanan ON tb_kriteria_pelayanan.id_kriteria_pelayanan = tb_nilai.id_kriteria_pelayanan
					INNER JOIN tb_kriteria_fasilitas ON tb_kriteria_fasilitas.id_kriteria_fasilitas = tb_nilai.id_kriteria_fasilitas
					ORDER BY tb_puskesmas.nama_puskesmas ASC
					";
		$result = $this->db->query($query);
        return $result->result_array();
	}

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

	/*fungsi untuk menampilkan dropdown tabel kriteria lingkungan*/
	function get_kriteria1_dropdown()
	{
		$query = 	"SELECT
					tb_kriteria_lingkungan.id_kriteria_lingkungan,
					tb_kriteria_lingkungan.pilihan_kriteria_lingkungan
					FROM
					tb_kriteria_lingkungan
					ORDER BY
					tb_kriteria_lingkungan.id_kriteria_lingkungan ASC
					 ";
		$result = $this->db->query($query);
        return $result->result_array();
	}

	/*fungsi untuk menampilkan dropdown tabel kriteria tenaga medis*/
	function get_kriteria2_dropdown()
	{
		$query = 	"SELECT
					tb_kriteria_tenagamedis.id_kriteria_tenmed,
					tb_kriteria_tenagamedis.pilihan_kriteria_tenmed
					FROM
					tb_kriteria_tenagamedis
					ORDER BY
					tb_kriteria_tenagamedis.id_kriteria_tenmed ASC";
		$result = $this->db->query($query);
        return $result->result_array();
	}

	/*fungsi untuk menampilkan dropdown tabel kriteria pelayanan*/
	function get_kriteria3_dropdown()
	{
		$query = 	"SELECT
					tb_kriteria_pelayanan.id_kriteria_pelayanan,
					tb_kriteria_pelayanan.pilihan_kriteria_pelayanan
					FROM
					tb_kriteria_pelayanan
					ORDER BY
					tb_kriteria_pelayanan.id_kriteria_pelayanan ASC
					 ";
		$result = $this->db->query($query);
        return $result->result_array();
	}

	/*fungsi untuk menampilkan dropdown tabel kriteria fasilitas*/
	function get_kriteria4_dropdown()
	{
		$query = 	"SELECT
					tb_kriteria_fasilitas.id_kriteria_fasilitas,
					tb_kriteria_fasilitas.pilihan_kriteria_fasilitas
					FROM
					tb_kriteria_fasilitas
					ORDER BY
					tb_kriteria_fasilitas.id_kriteria_fasilitas ASC
					 ";
		$result = $this->db->query($query);
        return $result->result_array();
	}

    /*funngsi add nilai*/
   	function add($data){
    	$this->db->insert('tb_nilai', $data);
    	return true;
    }

    /*fungsi update nilai*/
   	function update($data, $id){
    	$this->db->where('id_nilai',$id);
    	$this->db->update('tb_nilai', $data);
    	return true;
    }

    /*fungsi query delete atau hapus data tabel puskesmas*/
	public function delete($id)
	{
		$this->db->where('id_nilai', $id);
		$this->db->delete('tb_nilai');
		return TRUE;
	}

    /*fungsi untuk menghitung total data tabel nilai*/
	public function totalDataNilai( )
	{
        return $this->db->get('tb_nilai');
    }

}