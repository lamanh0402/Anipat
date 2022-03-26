<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
    // Hàm khởi tạo
    function __construct() {
        parent::__construct();
        $this->load->model('frontend/Mproduct');
        $this->load->model('frontend/Mcategory');
        $this->load->model('frontend/Mslider');
        $this->load->model('frontend/Mcontent');
        $this->load->model('frontend/Mslider');
        $this->data['com']='home';
    }
    


	public function index(){
        $this->data['title']='Anipat';
        $this->data['view']='index';
		$this->load->view('frontend/layout',$this->data);
	}


}
