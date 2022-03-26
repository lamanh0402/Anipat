<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thongtin extends CI_Controller {


	// Hàm khởi tạo
    function __construct() {
        parent::__construct();
        $this->data['com']='thongtin';
        $this->load->model('frontend/Mproduct');
        $this->load->model('frontend/Mcategory');
        $this->load->model('frontend/Mcustomer');
        $this->load->model('frontend/Morder');
        $this->load->model('frontend/Morderdetail');
        $this->load->model('frontend/Minfocustomer');
        $this->load->model('frontend/Mprovince');
        $this->load->model('frontend/Mdistrict');
        $this->load->model('frontend/Mconfig');
        if(!$this->session->userdata('sessionKhachHang')){
            redirect('Profile','refresh');
        }
        $this->data['info']=$this->Minfocustomer->customer_detail_id($this->session->userdata('id'));
    }
    


    public function index(){
        $this->data['title']='Anipat - Account information';
        $this->data['view']='index';
        $this->load->view('frontend/layout',$this->data);
    }



    public function order(){
        $aurl= explode('/',uri_string());
        $id = $aurl[2];
        $this->data['orderid'] = $id;
        $priceShip=$this->Mconfig->config_price_ship();
        $this->data['row'] = $this->Morderdetail->orderdetail_order_join_product($id);
        $this->data['info']=$this->Minfocustomer->order_orderid($id);
        $this->data['title']='Anipat - Order details';  
        $this->data['view']='detail';
        $this->load->view('frontend/layout',$this->data);
    }



    public function reset_password(){
        $row=$this->Mcustomer->customer_check_username($this->session->userdata('username'));
        $this->data['row']=$row;
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password_old', 'Password', 'required|callback_check_password');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[32]');
        $this->form_validation->set_rules('re_password', 'Confirm password', 'required|matches[password]');
        if($this->form_validation->run() ==TRUE){ 
            $password_old = $_POST['password_old'];
            $password_new = md5($_POST['password']);
            if($this->session->userdata('sessionKhachHang')){
                $mydata= array(
                    'password' => $password_new,
                );
            // }else{
            //    redirect('/dang-nhap','refresh');
        //    }

           $this->Mcustomer->customer_update($mydata, $this->session->userdata('id'));
        //    $this->data['successpassword']='Change password successfully';
           echo '<script>alert("Change password successfully !")</script>';
        //    redirect('Profile','refresh');


           // update session
           $_SESSION['password'] = $_POST['password'];
        //    $username = $this->session->userdata('username');
           $this->session->unset_userdata('sessionKhachHang');
           $row = $this->Mcustomer->customer_login($_SESSION['username'],md5($_SESSION['password']));
           $this->session->set_userdata('sessionKhachHang',$row);

           // end update session
                      redirect('Profile','refresh');

       }
    }
    //    $this->data['title']='Anipat - Change password ';
    //    $this->data['view']='reset_password';
    //    $this->load->view('frontend/layout',$this->data);
    }


    
    public function update($id){
        $row=$this->Morder->order_detail($id);
        $status = $row['status'];
        if($status == 0)
        {
            $status = 3;
            $mydata= array('status' => $status);
            $this->Morder->order_update($mydata, $id);
            redirect('Profile','refresh');
        }
    }



    function check_password(){
        $row=$this->Mcustomer->customer_detail_email($this->session->userdata('email'));
        $password = $this->input->post('password_old');
        if(md5($password)!= $row['password']){
            $this->form_validation->set_message(__FUNCTION__, 'Old password is incorrect');
            return FALSE;
        }
        return TRUE;
    }


    public function updateprofile($id){
		$row=$this->Mcustomer->customer_detail_id($id);
		$this->data['row']=$row;
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');
		$this->load->library('alias');
		$this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(
				'fullname' =>$fullname, 
				'username'=>$username,
				'phone'=>$phone,
				'email'=>$email,

			);

			$this->Mcustomer->user_update($mydata, $id);
			$this->session->set_flashdata('success', 'Account update successfully');

            // update session
            $this->session->unset_userdata('sessionKhachHang');
            $row = $this->Mcustomer->customer_login($username,md5($_SESSION['password']));
            $this->session->set_userdata('sessionKhachHang',$row);

            // end update session
			redirect('Profile/','refresh');
		} 
		// $this->data['view']='Profile';
		// $this->data['title']='Anipat-Account';
		// $this->load->view('backend/layout', $this->data);
	}







    
    public function updateimg($id){
		$row=$this->Mcustomer->customer_detail_id($id);
		$this->data['row']=$row;
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');
		$this->load->library('alias');

		if ($this->form_validation->run() == TRUE) 
		{
			$config = array();
	         $config['upload_path']   = './public/uploads/user/';
	         $config['allowed_types'] = 'jpg|png';
	         $config['encrypt_name'] = TRUE;
	         $this->load->library('upload', $config);
	         if($this->upload->do_upload('image')){
	             $data = $this->upload->data();
	             $mydata['img']=$data['file_name'];
             }
			$this->Mcustomer->imgupdate($mydata, $id);
			$this->session->set_flashdata('success', 'Account update successfully');
            
			redirect('Profile','refresh');
		} 
		$this->data['view']='Profile';
		$this->data['title']='Anipat - Account';
		$this->load->view('frontend/layout', $this->data);
	}

}
