<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends CI_Controller {

	public function index()
	{	
		$cathegory = $this->m_all->get_all_cathegory();
		$data = array(
			'isi' => 'story',
			'title' => 'Erik-Syafia | Story',
			'cathegory' => $cathegory
		);
		$this->load->view('layout/wrapper',$data);
	}
	
	public function us($IDcathegory)
	{
		$post = $this->m_all->get_post_cathegory($IDcathegory);
		$data = array(
			'isi' => 'post',
			'title' => 'Erik-Syafia | Story',
			'post' => $post
		);
		$this->load->view('layout/wrapper',$data);
	}
}
