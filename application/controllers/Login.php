<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$data = array(
			'title' => 'Erik-Syafia | Login'
		);
		$this->load->view('login',$data);
	}
	
	public function kuy()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = array(
			'username' => $username,
			'password' => $password
		);
		
		if ($this->m_all->cek_login($data)) {
			$this->session->set_userdata('username', $username);
            $this->session->set_userdata('password', $password);
            redirect(base_url());
		} else {
			$this->session->set_userdata('gagal', 'Maaf username atau password tidak terdaftar');
			redirect(base_url().'login');
		}
	}
	
	function logout()
    {   
        if($this->session->has_userdata('username')){
            unset(
                $_SESSION['username'],
                $_SESSION['password']
            );
            $this->session->sess_destroy();
       }
       redirect(base_url());
    }
}