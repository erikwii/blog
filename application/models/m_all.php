<?php
class M_all extends CI_Model{
	
	public function cek_login($data)
	{
		if ($this->db->get_where('admin', $data)->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	public function get_admin($username)
	{
		return $this->db->get_where('admin', array('username' => $username))->row_array();
	}
	
	public function get_all_cathegory()
	{
		return $this->db->get('cathegory')->result();
	}
	
	public function get_post_cathegory($IDcathegory)
	{
		$this->db->order_by('IDpost', 'DESC');
		return $this->db->get_where('post', array('IDcathegory' => $IDcathegory))->result();
	}
	
	public function last_photo($IDcathegory=null)
	{
		$this->db->order_by('IDpost', 'DESC');
		$this->db->limit(1);
		if ($IDcathegory == null) {
			$this->db->where('type', 'Photo');
			$this->db->or_where('type', 'Text-Photo');
			return $this->db->get('post')->row_array();
		} else {
			$this->db->where('type', 'Photo');
			$this->db->or_where('type', 'Text-Photo');
			return $this->db->get_where('post', array('IDcathegory' => $IDcathegory))->row_array()['filePhoto'];
		}
	}
	
	public function get_cathegory($IDcathegory)
	{
		return $this->db->get_where('cathegory', array('IDcathegory' => $IDcathegory))->row_array();
	}
	
	public function get_post($IDpost)
	{
		return $this->db->get_where('post', array('IDpost' => $IDpost))->row_array();
	}
	
	public function change_datetoview($tanggal){
		$arrTgl = explode("-", $tanggal);
		$th = $arrTgl[0];
		$tbln = $arrTgl[1];
		$tgl = $arrTgl[2];

		switch($tbln){
			case"01":
				$bulan="Januari";
				break;
			case"02":
				$bulan="Februari";
				break;
			case"03":
				$bulan="Maret";
				break;
			case"04":
				$bulan="April";
				break;
			case"05":
				$bulan="Mei";
				break;
			case"06":
				$bulan="Juni";
				break;
			case"07":
				$bulan="Juli";
				break;
			case"08":
				$bulan="Agustus";
				break;
			case"09":
				$bulan="September";
				break;
			case"10":
				$bulan="Oktober";
				break;
			case"11":
				$bulan="November";
				break;
			case"12":
				$bulan="Desember";
				break;
		}
		return $db_tgl =+ $tgl." ".$bulan.", ".$th;
	}
}