<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_nilai_wp extends CI_Model {

	/*variabel yang memiliki tabel puskesmas*/
	var $table = 'tb_nilai';

	/*fungsi mengambil dan menampilkan data tabel*/
	function get_penilaianpuskesmas()
	{
		$query = 	"SELECT
					tb_nilai.id_nilai,
					tb_puskesmas.nama_puskesmas,
					tb_kriteria_lingkungan.bobot_kriteria_lingkungan,
					tb_kriteria_tenagamedis.bobot_kriteria_tenmed,
					tb_kriteria_pelayanan.bobot_kriteria_pelayanan,
					tb_kriteria_fasilitas.bobot_kriteria_fasilitas,
					tb_kriteria_lingkungan.pilihan_kriteria_lingkungan,
					tb_kriteria_tenagamedis.pilihan_kriteria_tenmed,
					tb_kriteria_pelayanan.pilihan_kriteria_pelayanan,
					tb_kriteria_fasilitas.pilihan_kriteria_fasilitas
					FROM
					tb_nilai
					INNER JOIN tb_puskesmas ON tb_puskesmas.id_puskesmas = tb_nilai.id_puskesmas
					INNER JOIN tb_kriteria_lingkungan ON tb_kriteria_lingkungan.id_kriteria_lingkungan = tb_nilai.id_kriteria_lingkungan
					INNER JOIN tb_kriteria_tenagamedis ON tb_nilai.id_kriteria_tenmed = tb_kriteria_tenagamedis.id_kriteria_tenmed
					INNER JOIN tb_kriteria_pelayanan ON tb_kriteria_pelayanan.id_kriteria_pelayanan = tb_nilai.id_kriteria_pelayanan
					INNER JOIN tb_kriteria_fasilitas ON tb_kriteria_fasilitas.id_kriteria_fasilitas = tb_nilai.id_kriteria_fasilitas
					ORDER BY
					tb_puskesmas.nama_puskesmas ASC
					";
		$result = $this->db->query($query);
        return $result->result_array();
	}

	/*fungsi menghitung total kriteria lingkungan (C1)*/
	function get_jmlk_ling()
	{
		$query = "SELECT sum(tb_kriteria_lingkungan.bobot_kriteria_lingkungan) AS jmlk_ling FROM tb_nilai 
				INNER JOIN tb_puskesmas ON tb_puskesmas.id_puskesmas = tb_nilai.id_puskesmas
				INNER JOIN tb_kriteria_lingkungan ON tb_kriteria_lingkungan.id_kriteria_lingkungan = tb_nilai.id_kriteria_lingkungan";
		$result = $this->db->query($query);
		return $result->row()->jmlk_ling;
	}

	/*fungsi menghitung total kriteria tenaga medis (C2)*/
	function get_jmlk_tenmed()
	{
		$query = "SELECT sum(tb_kriteria_tenagamedis.bobot_kriteria_tenmed) AS jmlk_tenmed FROM tb_nilai 
				INNER JOIN tb_puskesmas ON tb_puskesmas.id_puskesmas = tb_nilai.id_puskesmas
				INNER JOIN tb_kriteria_tenagamedis ON tb_nilai.id_kriteria_tenmed = tb_kriteria_tenagamedis.id_kriteria_tenmed";
		$result = $this->db->query($query);
		return $result->row()->jmlk_tenmed;
	}

	/*fungsi menghitung total kriteria pelayanan (C3)*/
	function get_jmlk_pel()
	{
		$query = "SELECT sum(tb_kriteria_pelayanan.bobot_kriteria_pelayanan) AS jmlk_pel FROM tb_nilai 
				INNER JOIN tb_puskesmas ON tb_puskesmas.id_puskesmas = tb_nilai.id_puskesmas
				INNER JOIN tb_kriteria_pelayanan ON tb_kriteria_pelayanan.id_kriteria_pelayanan = tb_nilai.id_kriteria_pelayanan";
		$result = $this->db->query($query);
		return $result->row()->jmlk_pel;
	}

	/*fungsi menghitung total kriteria fasilitas (C4)*/
	function get_jmlk_fas()
	{
		$query = "SELECT sum(tb_kriteria_fasilitas.bobot_kriteria_fasilitas) AS jmlk_fas FROM tb_nilai 
				INNER JOIN tb_puskesmas ON tb_puskesmas.id_puskesmas = tb_nilai.id_puskesmas
				INNER JOIN tb_kriteria_fasilitas ON tb_kriteria_fasilitas.id_kriteria_fasilitas = tb_nilai.id_kriteria_fasilitas";
		$result = $this->db->query($query);
		return $result->row()->jmlk_fas;
	}

	/*fungsi perangkingan*/
	function get_rangking()
	{
		$query = 	"SELECT
					MAX((tb_kriteria_lingkungan.bobot_kriteria_lingkungan * 0.4) + (tb_kriteria_tenagamedis.bobot_kriteria_tenmed * 0.25) + (tb_kriteria_pelayanan.bobot_kriteria_pelayanan * 0.15) + (tb_kriteria_fasilitas.bobot_kriteria_fasilitas * 0.2)) as nilai
					FROM
					tb_nilai
					INNER JOIN tb_puskesmas ON tb_puskesmas.id_puskesmas = tb_nilai.id_puskesmas
					INNER JOIN tb_kriteria_lingkungan ON tb_kriteria_lingkungan.id_kriteria_lingkungan = tb_nilai.id_kriteria_lingkungan
					INNER JOIN tb_kriteria_tenagamedis ON tb_nilai.id_kriteria_tenmed = tb_kriteria_tenagamedis.id_kriteria_tenmed
					INNER JOIN tb_kriteria_pelayanan ON tb_kriteria_pelayanan.id_kriteria_pelayanan = tb_nilai.id_kriteria_pelayanan
					INNER JOIN tb_kriteria_fasilitas ON tb_kriteria_fasilitas.id_kriteria_fasilitas = tb_nilai.id_kriteria_fasilitas"; 

		$result = $this->db->query($query);
		return $result->result_array();			
	}
	
}