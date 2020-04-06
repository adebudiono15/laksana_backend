<?php

class Panel extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('panel_model');

	}

	public function index ()
	{
		$data['title'] = 'PANEL';
		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['panel'] = $this->panel_model->getAllData('panel')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/panel', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id) 
	{
		$this->panel_model->hapusPanel($id);
		$this->session->set_flashdata('tambah', 'dihapus');
		redirect('panel');
	}
	
	public function edit($id)
	{
		$data['title'] = 'EDIT PANEL';
		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$where = array('id' => $id);
		$data['panel'] = $this->panel_model->edit_panel($where,'panel')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/edit_panel', $data);
		$this->load->view('templates/footer');
	}

	public function update_panel()
	{	
		$id	 						= $this->input->post('id');
			// panel
		$icon1   					= $this->input->post('icon1');
		$icon2   					= $this->input->post('icon2');
		$icon3   					= $this->input->post('icon3');
		$icon4   					= $this->input->post('icon4');
		$icon5   					= $this->input->post('icon5');
		$icon6   					= $this->input->post('icon6');
			// headline
		$heading1   				= $this->input->post('heading1');
		$headling2   				= $this->input->post('headling2');
		$headling3   				= $this->input->post('headling3');
		$headling4   				= $this->input->post('headling4');
		$headling5   				= $this->input->post('headling5');
		$headling6   				= $this->input->post('headling6');
			// content
		$content1   				= $this->input->post('content1');
		$content2   				= $this->input->post('content2');
		$content3   				= $this->input->post('content3');
		$content4   				= $this->input->post('content4');
		$content5   				= $this->input->post('content5');
		$content6   				= $this->input->post('content6');
		$data 			= array(
				// icon
			'icon1' 	=> $icon1,
			'icon2' 	=> $icon2,
			'icon3' 	=> $icon3,
			'icon4' 	=> $icon4,
			'icon5' 	=> $icon5,
			'icon6' 	=> $icon6,
				// headline
			'heading1'	 => $heading1,
			'headling2'	 => $headling2,
			'headling3'	 => $headling3,
			'headling4'	 => $headling4,
			'headling5'	 => $headling5,
			'headling6'	 => $headling6,
				// content
			'content1' 	=> $content1,
			'content2' 	=> $content2,
			'content3' 	=> $content3,
			'content4' 	=> $content4,
			'content5' 	=> $content5,
			'content6' 	=> $content6
		);
		$where 		= array(
			'id'	=> $id
		);
		$this->panel_model->update_panel($where, $data, 'panel');
		redirect ('panel');
	}

	public function panduan ()
	{
		$data['title'] = 'PANDUAN GANTI PANEL';
		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/panduan', $data);
		$this->load->view('templates/footer');
	}

}
