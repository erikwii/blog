<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends CI_Controller {

	public function index()
	{	
		$cathegory = $this->m_all->get_all_cathegory();
		$data = array(
			'isi' => 'story',
			'title' => 'Erik-Syafia | Story',
			'description' => 'Website sederhana ini tak akan cukup untuk menceritakan serunya cerita kami.',
			'cathegory' => $cathegory
		);
		$this->load->view('layout/wrapper',$data);
	}
	
	public function us($IDcathegory)
	{
		$cat = $this->m_all->get_cathegory($IDcathegory);
		$post = $this->m_all->get_post_cathegory($IDcathegory);
		$data = array(
			'isi' => 'post',
			'title' => 'Erik-Syafia | '.$cat['name'],
			'description' => $cat['description'],
			'post' => $post,
			'IDcathegory' => $IDcathegory
		);
		$this->load->view('layout/wrapper',$data);
	}
	
	public function post($IDcathegory,$type)
	{
		switch ($type) {
			case 'Text':
				$title = $this->input->post('judul');
				$content = $this->input->post('content');
				$sizeCol = $this->input->post('col');
				
				$data = array(
					'IDcathegory' => $IDcathegory,
					'title' => $title,
					'content' => $content,
					'type' => $type,
					'sizeCol' => $sizeCol
				);
				$this->db->insert('post', $data);
				$_SESSION['jadwal_err'] = false;
				$_SESSION['deletef'] = 'Tautan berhasil di-upload :)';
				redirect(base_url().'story/us/'.$IDcathegory);
				break;
			case 'Text-Photo':
				$config['upload_path']          = 'assets/images/post/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 0;
				$config['max_width']            = 0;
				$config['max_height']           = 0;

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('userfile')){
					$error = array('error' => $this->upload->display_errors());
					
					$_SESSION['jadwal_err'] = true;
					$_SESSION['deletex'] = $error['error'];
				}else{
					$data = array('upload_data' => $this->upload->data());
					$title = $this->input->post('title');
					$content = $this->input->post('content');
					$sizeCol = $this->input->post('col');
					
					$data = array(
						'IDcathegory' => $IDcathegory,
						'title' => $title,
						'content' => $content,
						'type' => $type,
						'sizeCol' => $sizeCol,
						'filePhoto' => $this->upload->data()['file_name']
					);
					$this->db->insert('post', $data);
					
					$_SESSION['jadwal_err'] = false;
					$_SESSION['deletef'] = 'Tautan berhasil di-upload :)';
				}
				redirect(base_url().'story/us/'.$IDcathegory);
				break;
			case 'Quotes':
				$content = $this->input->post('content');
				$sizeCol = $this->input->post('col');
				
				$data = array(
					'IDcathegory' => $IDcathegory,
					'content' => $content,
					'type' => $type,
					'sizeCol' => $sizeCol
				);
				$this->db->insert('post', $data);
				
				$_SESSION['jadwal_err'] = false;
				$_SESSION['deletef'] = 'Quotes berhasil di-upload :)';
				redirect(base_url().'story/us/'.$IDcathegory);
				break;
			default:
				$config['upload_path']          = 'assets/images/post/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 0;
				$config['max_width']            = 0;
				$config['max_height']           = 0;

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('userfile')){
					$error = array('error' => $this->upload->display_errors());
					
					$_SESSION['jadwal_err'] = true;
					$_SESSION['deletex'] = $error['error'];
				}else{
					$data = array('upload_data' => $this->upload->data());
					$sizeCol = $this->input->post('col');
					
					$data = array(
						'IDcathegory' => $IDcathegory,
						'type' => $type,
						'sizeCol' => $sizeCol,
						'filePhoto' => $this->upload->data()['file_name']
					);
					$this->db->insert('post', $data);
					
					$_SESSION['jadwal_err'] = false;
					$_SESSION['deletef'] = 'Foto berhasil di-upload :)';
				}
				redirect(base_url().'story/us/'.$IDcathegory);
				break;
		}
	}
	
	public function delete($IDpost,$IDcathegory)
	{
		$post = $this->m_all->get_post($IDpost);
		
		if ($post['type'] == 'Photo' || $post['type'] == 'Text-Photo') {
			
			$this->load->helper('file');
			
			$file = $post['filePhoto'];
			
			$db_delete = $this->db->delete('post', array('IDpost' => $IDpost));
			$delete = unlink(FCPATH.'assets/images/post/'.$file);
			
			if($db_delete && $delete){
				$_SESSION['jadwal_err'] = false;
				$_SESSION['deletef'] = 'Post berhasil dihapus.';
			}else{
				$_SESSION['jadwal_err'] = true;
				$_SESSION['deletef'] = 'Post berhasil dihapus.';
				$_SESSION['deletew'] = 'Terdapat kesalahan saat menghapus file Foto';
			}
		} else {
			$db_delete = $this->db->delete('post', array('IDpost' => $IDpost));
			
			if($db_delete){
				$_SESSION['jadwal_err'] = false;
				$_SESSION['deletef'] = 'Post berhasil dihapus.';
			}else{
				$_SESSION['jadwal_err'] = true;
				$_SESSION['deletef'] = 'Post gagal dihapus.';
			}
		}
		
		redirect(base_url().'story/us/'.$post['IDcathegory']);
	}
}
