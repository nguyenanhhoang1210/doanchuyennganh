<?php 
	class Baiviet_c extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Baiviet_model');
		}
		function thembai()
		{
			$this->load->model('Dmbaiviet_model');
			$dmbv = $this->Dmbaiviet_model->get_list();
			$data = array();
			$data['temp'] = 'admin/thembai';
			$data['dmbv'] = $dmbv;
			// neu submit form mà co du lieu post len
			if($this->input->post())
			{
				$this->form_validation->set_rules('title',"Tiêu đề bài viết",'required');	
				$this->form_validation->set_rules('content',"Nội dung bài viết",'required');
				$this->form_validation->set_rules('img',"Ảnh tiêu đề",'required');		
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					$title = $this->input->post('title');
					$content = $this->input->post('content');
					$img = public_helper('user/images/').$this->input->post('img');
					$cat = $this->input->post('cat');

					$dulieu = array(
						'tieu_de'=>$title,'noi_dung'=>$content,'hinh_anh'=>$img,'id_dm'=>$cat
						);
					$this->Baiviet_model->create($dulieu);
					}		
				}
				$this->load->view('admin/index',$data);
		}
		function xembai()
		{
			$input = array();
			$data['list'] = $this->Baiviet_model->get_list($input);
			$data['temp'] = 'admin/xembai' ;
			$this->load->view('admin/index',$data);
		}
		function xoabai()
		{
			$id = $this->uri->segment(4);
			$this->Baiviet_model->delete($id);
			$this->session->set_flashdata('mess','Đã xóa thành công');
			redirect(admin_url('Baiviet_c/xembai'));
		}
		function suabai()
		{
			$id = $this->uri->segment(4);
			$id = intval($id);
			$info = $this->Baiviet_model->get_info($id);
			$data = array();
			$data['info'] = $info;
		
			if($this->input->post())
			{
				$this->form_validation->set_rules('title',"Tiêu đề bài viết",'required');	
				$this->form_validation->set_rules('content',"Nội dung bài viết",'required');
				$this->form_validation->set_rules('img',"Ảnh tiêu đề",'required');		
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					$title = $this->input->post('title');
					$content = $this->input->post('content');
					$img = public_helper('user/images/').$this->input->post('img');
					$cat = $this->input->post('cat');

					$dulieu = array(
						'tieu_de'=>$title,'noi_dung'=>$content,'hinh_anh'=>$img,'id_dm'=>$cat
						);
					$this->Baiviet_model->update($id,$dulieu);
					$this->session->set_flashdata('mess','Đã sửa thành công');
					redirect(admin_url('Baiviet_c/xembai'));
				}		
			}
				$data['temp'] = 'admin/suabai';
				$this->load->view('admin/index',$data);

		}
	}
?>