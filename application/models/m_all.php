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
		return $this->db->get_where('post', array('IDcathegory' => $IDcathegory))->result();
	}
	
	public function last_photo($IDcathegory=null)
	{
		$this->db->order_by('IDpost', 'DESC');
		$this->db->limit(1);
		if ($IDcathegory == null) {
			return $this->db->get('post')->row_array();
		} else {
			return $this->db->get_where('post', array('IDcathegory' => $IDcathegory))->row_array()['filePhoto'];
		}
	}
}