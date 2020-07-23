<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_kriteria extends CI_Model {

	/*
	Model Kriteria
	model/m_kriteria.php
	*/

	
	/*fungsi untuk tabel kriteria lingkungan*/
	function get_kriteria_lingkungan()
	{
		$query = $this->db->get('tb_kriteria_lingkungan');
		return $query->result_array();
	}	
	function get_id_lingkungan($id = null) 
	{
		$this->db->select('*');
		$this->db->from('tb_kriteria_lingkungan');
		if($id != null) {
			$this->db->where('id_kriteria_lingkungan', $id);
		}
		$query = $this->db->get();
		return $query;
	} 

	/*fungsi untuk tabel kriteria tenaga medis*/
	function get_kriteria_tenagamedis()
	{
		$query = $this->db->get('tb_kriteria_tenagamedis');
		return $query->result_array();
	}
	function get_id_tenagamedis($id = null) 
	{
		$this->db->select('*');
		$this->db->from('tb_kriteria_tenagamedis');
		if($id != null) {
			$this->db->where('id_kriteria_tenmed', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	/*fungsi untuk tabel kriteria pelayanan*/
	function get_kriteria_pelayanan()
	{
		$query = $this->db->get('tb_kriteria_pelayanan');
		return $query->result_array();
	}
	function get_id_pelayanan($id = null) 
	{
		$this->db->select('*');
		$this->db->from('tb_kriteria_pelayanan');
		if($id != null) {
			$this->db->where('id_kriteria_pelayanan', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	/*fungsi untuk tabel kriteria fasilitas*/
	function get_kriteria_fasilitas()
	{
		$query = $this->db->get('tb_kriteria_fasilitas');
		return $query->result_array();
	}
	function get_id_fasilitas($id = null) 
	{
		$this->db->select('*');
		$this->db->from('tb_kriteria_fasilitas');
		if($id != null) {
			$this->db->where('id_kriteria_fasilitas', $id);
		}
		$query = $this->db->get();
		return $query;  
	}


	var $table_kl 	= 'tb_kriteria_lingkungan';
	var $table_ktm	= 'tb_kriteria_tenagamedis';
	var $table_kp	= 'tb_kriteria_pelayanan';
	var $table_kf	= 'tb_kriteria_fasilitas';

	/*fungsi update tabel kriteria lingkungan*/
	function get_all_lingkungan( ){
        $result = $this->db->query("SELECT * FROM tb_kriteria_lingkungan");
        return $result;
    }

	function update1($data, $id_kl){
    	$this->db->where('id_kriteria_lingkungan',$id_kl);
    	$this->db->update($this->table_kl, $data);
    	return true;
    }

    /*fungsi update tabel kriteria tenaga medis*/
	function get_all_tenagamedis( ){
        $result = $this->db->query("SELECT * FROM tb_kriteria_tenagamedis");
        return $result;
    }

	function update2($data, $id_ktm){
    	$this->db->where('id_kriteria_tenmed',$id_ktm);
    	$this->db->update($this->table_ktm, $data);
    	return true;
    }

    /*fungsi update tabel kriteria pelayanan*/
	function get_all_pelayanan( ){
        $result = $this->db->query("SELECT * FROM tb_kriteria_pelayanan");
        return $result;
    }

	function update3($data, $id_kp){
    	$this->db->where('id_kriteria_pelayanan',$id_kp);
    	$this->db->update($this->table_kp, $data);
    	return true;
    }

    /*fungsi update tabel kriteria fasilitas*/
	function get_all_fasilitas( ){
        $result = $this->db->query("SELECT * FROM tb_kriteria_fasilitas");
        return $result;
    }

	function update4($data, $id_kf){
    	$this->db->where('id_kriteria_fasilitas',$id_kf);
    	$this->db->update($this->table_kf, $data);
    	return true;
    }

}
