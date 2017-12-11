<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {

  public function index()
  {
    $this->load->view('login_view');
  }
  public function login_validation()
  {
   
    if(isset($_POST['login'])){
      $user=$this->input->post('username',true);
      $pass=$this->input->post('password',true);
      $dulieu2=$this->login_model->login($user,$pass);
      $giatri=count($dulieu2);
      if($giatri>0)// đúng username và password
      {
        $ketqua=$this->db->get_where('thanhvien',array('username' => $user,'password'=>$pass))->row();
        if($ketqua -> level=='0')
        {
          redirect('index.php/showData','refresh');
          
        }
         if($ketqua -> level=='1')
        {
           redirect('index.php/addData','refresh');
        }
       
      }
      else
        {
          echo"Dang nhap that bai vui long kiem tra lai "
;        }
    }
  }

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */