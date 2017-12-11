<?php 
	class Admin_c extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		function index()
		{
			
			$this->data['temp'] = 'admin/home';			
			$this->load->view('admin/index',$this->data);
		}
		function logout()
		{
			if($this->session->userdata('login'))
			{
				$this->session->unset_userdata('login');
				redirect(admin_url('Login/index'));
			}
		}
	}
?>