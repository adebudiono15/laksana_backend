<?php

class Content_satu extends CI_Controller
 {
	function __construct()
	{
	  parent::__construct();
	  $this->load->helper('text');
	  $this->load->model('content_model');

	}

 	public function index ()
		 	{
		 		$data['title'] = 'CONTENT HERO';
		 		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		 		$data['content_satu'] = $this->content_model->getAllData('content_satu')->result();

		 		$this->load->view('templates/header', $data);
		 		$this->load->view('templates/sidebar', $data);
		 		$this->load->view('templates/topbar', $data);
		 		$this->load->view('admin/content_satu', $data);
		 		$this->load->view('templates/footer');
		 	}
		 	public function hapus($id) 
		 	{
		 		$this->content_model->hapusContent($id);
		 		$this->session->set_flashdata('tambah', 'dihapus');
		 		redirect('content_satu');
		 	}
	public function edit($id)
		{
			$data['title'] = 'EDIT CONTENT';
			$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$where = array('id' => $id);
			$data['content_satu'] = $this->content_model->edit_content($where,'content_satu')->result();

				$this->load->view('templates/header', $data);
		 		$this->load->view('templates/sidebar', $data);
		 		$this->load->view('templates/topbar', $data);
		 		$this->load->view('admin/edit_content', $data);
		 		$this->load->view('templates/footer');
		}

	public function update_content()
		{	
			$id	 			= $this->input->post('id');
			$content   				= $this->input->post('content');
			$data = array(
				'content' => $content
			);
			$where = array(
				'id' => $id
			);
			$this->content_model->update_content($where, $data, 'content_satu');
			redirect ('content_satu');
		}



// Tentang
		public function tentang ()
		 	{
		 		$data['title'] = 'CONTENT HERO';
		 		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		 		$data['tentang'] = $this->content_model->getAllData('tentang')->result();

		 		$this->load->view('templates/header', $data);
		 		$this->load->view('templates/sidebar', $data);
		 		$this->load->view('templates/topbar', $data);
		 		$this->load->view('admin/tentang', $data);
		 		$this->load->view('templates/footer');
		 	}


		public function edit_tentang($id)
			{
				$data['title'] = 'EDIT TENTANG';
				$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
				$where = array('id' => $id);
				$data['tentang'] = $this->content_model->edit_content($where,'tentang')->result();

					$this->load->view('templates/header', $data);
			 		$this->load->view('templates/sidebar', $data);
			 		$this->load->view('templates/topbar', $data);
			 		$this->load->view('admin/edit_tentang', $data);
			 		$this->load->view('templates/footer');
			}

			public function update_tentang()
		{	
			$id	 			= $this->input->post('id');
			$tentang   				= $this->input->post('tentang');
			$data = array(
				'tentang' => $tentang
			);
			$where = array(
				'id' => $id
			);
			$this->content_model->update_tentang($where, $data, 'tentang');
			redirect ('content_satu/tentang');
		}
 }
