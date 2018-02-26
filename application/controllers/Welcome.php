<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$data = array(
			'isi' => 'home',
			'title' => 'Erik-Syafia',
			'description' => 'Website sederhana ini tak akan cukup untuk menceritakan serunya cerita kami.'
		);
		$this->load->view('layout/wrapper',$data);
	}
}