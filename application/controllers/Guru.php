<?php
class Guru extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('admin');
            redirect($url);
        };
		$this->load->model('m_guru');
		$this->load->library('upload');
		$this->load->helper('url');
		$this->load->library('pagination');
	}
	function index(){
		$this->load->view('include/v_head');
		$this->load->view('guru/v_data_guru');		
	}
	function loadRecord($limit=0){
		$offset = 10;
		if($limit != 0){
        	$limit = ($limit-1) * $offset;
      	}
      	$allcount = $this->m_guru->get_all_guru();
      	$users_record = $this->m_guru->get_guru_perpage($offset,$limit);
      	$config['base_url'] = base_url().'guru/loadRecord';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $offset;
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']  = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $limit;
 
        echo json_encode($data);
    }
    function filter_data($limit=0){
    	$keywords=$this->input->post('keywords');
    	if($keywords !== '') {

    		$offset = 100;
			if($limit != 0){
	        	$limit = ($limit-1) * $offset;
	      	}
	      	$allcount = $this->m_guru->get_all_guru();
	      	$users_record = $this->m_guru->get_fiter_guru_perpage($offset,$limit,$keywords);
	      	$config['base_url'] = base_url().'guru/filter_data';
	        $config['use_page_numbers'] = TRUE;
	        $config['total_rows'] = $allcount;
	        $config['per_page'] = $offset;
	        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
	        $config['full_tag_close']   = '</ul></nav></div>';
	        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	        $config['num_tag_close']    = '</span></li>';
	        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
	        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['prev_tag_close']  = '</span></li>';
	        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	        $config['first_tag_close'] = '</span></li>';
	        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['last_tag_close']  = '</span></li>';
	 
	        $this->pagination->initialize($config);
	        	 
	        $data['pagination'] = $this->pagination->create_links();
	        $data['result'] = $users_record;
	        $data['row'] = $limit;
	 
	        echo json_encode($data);
    	}else{
    		$this->loadRecord($limit=0);
    	}
    }
	function simpan_guru(){
		
		$nip 		= addslashes($this->input->post('nip'));
		$nama 		= addslashes($this->input->post('nama'));
		$jabatan	= addslashes($this->input->post('jabatan'));
		$bagian 	= addslashes($this->input->post('bagian'));
		$no_hp 		= str_replace(" ", "", $this->input->post('no_hp'));
		$status 	= addslashes($this->input->post('status'));
		$data_array = array(
			"nip" => $nip,
			"nama" => $nama, 
			"jabatan" => $jabatan,
			"no_hp" => $no_hp,
			"status" => $status
		);
		$this->m_guru->simpan_guru($data_array);
		echo $this->session->set_flashdata('msg','success-simpan');
		redirect('guru');
		
	}
	function get_data_edit_guru(){
        $id = $this->input->post('id');
        $data['guru'] = $this->m_guru->get_data_guru_by_id($id)->result_array();
        echo json_encode($data);
	}
	function update_guru(){
		$id 		= addslashes($this->input->post('id'));
		$nip 		= addslashes($this->input->post('nip'));
		$nama 		= addslashes($this->input->post('nama'));
		$jabatan	= addslashes($this->input->post('jabatan'));
		$no_hp 		= str_replace(" ", "", $this->input->post('no_hp'));
		$status 	= addslashes($this->input->post('status'));
		$data_array = array(
			"nip" => $nip,
			"nama" => $nama, 
			"jabatan" => $jabatan,
			"no_hp" => $no_hp,
			"status" => $status
		);
		$ubah = $this->m_guru->update_guru($id,$data_array);
		if($ubah) {
        	$data['pesan'] = "success";
        	echo $this->session->set_flashdata('msg','success-ubah');
		}else{
        	$data['pesan'] = "gagal";
        	echo $this->session->set_flashdata('msg','error-ubah');
		}
		
        echo json_encode($data);
	}
	function hapus_guru(){
		$id=$this->input->post('id');
		$hapus = $this->m_guru->hapus_guru($id);
	    if($hapus) {
        	$data['pesan'] = "success";
        	echo $this->session->set_flashdata('msg','success-ubah');
		}else{
        	$data['pesan'] = "gagal";
        	echo $this->session->set_flashdata('msg','error-ubah');
		}
		
        echo json_encode($data);
	}
	function loadjabatan(){
		$data=$this->m_guru->get_jabatan();
        $hasil = '<option value="">::Pilih Jabatan::</option> ';
        foreach ($data as $r) {
            $hasil .= '<option value="'.$r->nama_jabatan.'" >'.$r->nama_jabatan.'</option>';
        }
        echo $hasil;
	}
}