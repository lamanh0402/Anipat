<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dangnhap extends CI_Controller {


	// Hàm khởi tạo
    function __construct() {
        parent::__construct();
        $this->load->model('frontend/Mcategory');
        $this->load->model('frontend/Mcustomer');
        $this->load->model('frontend/Mcoupon');
        $this->load->model("frontend/Mproduct");
        $this->data['com']='dangnhap';
    }



    public function dangnhap(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[6]|max_length[32]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[32]');
        if($this->form_validation->run() ==TRUE){
            $username = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['username'] = $_POST['username'];

            $password = md5($_POST['password']);
            if($this->Mcustomer->customer_login($username, $password)!=FALSE){
                $row = $this->Mcustomer->customer_login($username, $password);
                $this->session->set_userdata('sessionKhachHang',$row);
                $this->session->set_userdata('id',$row['id']);
                $this->session->set_userdata('email',$row['email']);
                $this->session->set_userdata('sessionKhachHang_name',$row['fullname']);
                if($this->session->userdata('cart')){
                    redirect('Home','refresh');
                }else{
                    redirect('Profile','refresh');
                }
            }else{
                $this->data['error']='Incorrect account or password !';
                $this->data['title']='Login';
                $this->data['view']='dangnhap';
                $this->load->view('frontend/layout',$this->data);
            }
        }else{
            $this->data['title']='Anipat - Login';
            $this->data['view']='dangnhap';
            $this->load->view('frontend/layout',$this->data);
        }     
    }



    public function dangxuat(){
        $array_items = array( 'email','fullname', 'id','sessionKhachHang','sessionKhachHang_name','coupon_price','id_coupon_price');
        $this->session->unset_userdata($array_items);
        redirect('Home','refresh');
    }



    public function dangky(){
        $this->load->helper('string');

        $today = date('Y-m-d');

        // giới hạn mã giảm giá mới có hạn 30 ngày từ khi đăng ký tài khoản
        $todaylimit = strtotime(date("Y-m-d", strtotime($today)) . " +1 month");
        $todaylimit = strftime("%Y-%m-%d", $todaylimit);

        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[6]|max_length[32]|is_unique[db_customer.username]');
        $this->form_validation->set_rules('name', 'Fullname', 'required|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[32]');
        if(!$this->session->userdata('sessionKhachHang')){
            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[db_customer.email]');
        }
        $this->form_validation->set_rules('re_password', 'Confirm password', 'required|matches[password]');
        
        $this->form_validation->set_rules('phone', 'Phone', 'required|min_length[6]|numeric|is_unique[db_customer.phone]|max_length[11]');
        
        if($this->form_validation->run() ==TRUE){
            $data = array(
                'username'     => $this->input->post('username'),   
                'fullname'     => $this->input->post('name'),
                'email'    => $this->input->post('email'),
                'phone'    => $this->input->post('phone'),
                'created'=>$today,
                'password' => md5($this->input->post('password'))
            );

            $newcoupon=array(
                'code' => strtoupper(random_string('alnum', 12)),
                'discount' => '100000',
                'limit_number' => '1',
                'number_used' => '0',
                'payment_limit' => '250000',
                'expiration_date' => $todaylimit,
                'description' => 'Automatic 100,000 VND discount code upon successful registration',
                'created' => $today,
                'orders' => 0,
                'trash' => 1,
                'status' => 1,
            );

            //Lưu tt mã và ngày giới hạn để gửi mail
            $tempcoupon = $newcoupon['code'];
            $tempdatelimit = $newcoupon['expiration_date'];

            // tao mã giảm giá random
            $this->Mcoupon->coupon_insert($newcoupon);
            $this->Mcustomer->customer_insert($data);

            // gui mail ma giam gia
            $email = $this->input->post('email');
            $this->load->library('email');
            $this->load->library('parser');
            $this->email->clear();
            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'lamanh422002@gmail.com';
            $config['smtp_pass']    = 'lamanh0402';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $config['validation'] = TRUE;   
            $this->email->initialize($config);
            $this->email->from('lamanh422002@gmail.com', 'Anipat Store');
            $this->email->to($email);
            $this->email->subject('Anipat Store - New member gift');
            $this->email->message('Hi, you have become a new member of Anipat store, The store gives you a discount code of 100,000 VND : '.$tempcoupon.' , This code applies to orders from 250,000 VND and is valid until date '.$tempdatelimit. 'Please use your account to buy goods to accumulate and receive more incentives !!!!');
            $this->email->send();
            $this->data['success']='Sign Up Success! You have received 1 new member discount code, please check your email !!';

        }  
        $this->data['title']='Anipat - Register';   
        $this->data['view']='dangky';
        $this->load->view('frontend/layout',$this->data);  
    }



    function check_username(){
        $username = $this->input->post('username');
        if($this->Mcustomer->customer_check_username($username)){
            $this->form_validation->set_message(__FUNCTION__, 'Username is blank or already used');
            return FALSE;
        }
        return TRUE;
    }



    function check_mail(){
        $email = $this->input->post('email');
        if($this->Mcustomer->customer_detail_email($email))
        {
            $this->form_validation->set_message(__FUNCTION__, 'Email is blank or already used');
            return FALSE;
        }
        return TRUE;
    }



    public function forget_password(){
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_mail_forget');
        if($this->form_validation->run() ==TRUE){

            $email = $this->input->post('email');
            $list = $this->Mcustomer->customer_detail_email($email);

            $this->load->library('email');
            $this->load->library('parser');
            $this->email->clear();
            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'lamanh422002@gmail.com';
            $config['smtp_pass']    = 'lamanh0402';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $config['validation'] = TRUE;   
            $this->email->initialize($config);
            $this->email->from('lamanh422002@gmail.com', 'Anipat Store');
            $this->email->to($list['email']);
            $this->email->subject('Anipat Store - Get your password');
            $this->email->message('Please visit the link to retrieve your password <button class="btn"><a href="'.base_url().'dangnhap/reset_password_new/'.$list['id'].'">Get your password</a></button>'); 
            $this->email->send();
            $this->data['success']='Please check your email to reset your password!';   
        }  
        $this->data['title']='Anipat - Forgot password';   
        $this->data['view']='forget_password';
        $this->load->view('frontend/layout',$this->data);  
    }



    // Kiêm tra email lấy lại mk có đúng
    function check_mail_forget(){
        $email = $this->input->post('email');
        if($this->Mcustomer->customer_detail_email($email))
        {

            return TRUE;
        }
        else{
            $this->form_validation->set_message(__FUNCTION__, 'This email is not a member of the store !!');
            return FALSE;
        }
    }



    public function reset_password_new($id){
        $list = $this->Mcustomer->customer_detail_id($id);
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[32]');
        $this->form_validation->set_rules('re_password', 'Confirm password', 'required|matches[password]');
        
        if($this->form_validation->run() ==TRUE){ 
           $email = $_POST['email'];
           if($this->Mcustomer->customer_check_id_email($id, $email)!=FALSE){
               $password_new = md5($_POST['re_password']);
               $mydata= array( 'password' => $password_new,);
               $this->Mcustomer->customer_update($mydata, $list['id']);
               $this->data['success']='Change password successfully';
               echo '<script>alert("Change password successfully !")</script>';
               redirect('Login','refresh');
           }
           else{
            $this->data['error']='Invalid email, please enter correct email to reset password!';
            $this->data['title']='Anipat - Update new password';
            $this->data['view']='reset_password_new';
            $this->load->view('frontend/layout',$this->data);
        }

        }
        $this->data['title']='Anipat - Update new password';
        $this->data['view']='reset_password_new';
        $this->load->view('frontend/layout',$this->data);
    }

    

}