<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lamanh extends CI_Controller {
	
    // Hàm khởi tạo
    function __construct() {
        // unset($_SESSION['password']);
        parent::__construct();
		$arr = $this->session->userdata('sessionKhachHang');
		// $this->session->unset_userdata('sessionKhachHang');
        print_r($arr);
        $this->data['com']='lamanh';
    }
    


	public function index(){
        $this->data['view']='lamanh';
	}


}
