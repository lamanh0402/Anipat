<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dichvu extends CI_Controller {


	// Hàm khởi tạo
    function __construct() {
        parent::__construct();
		$this->load->model('frontend/Mslider');
        $this->load->model('frontend/Mservice');
        $this->data['com']='dichvu';
    }
    


	public function index(){
        $aurl= explode('/',uri_string());
		$catlink=$aurl[0];
		$this->load->library('phantrang');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Mservice->service_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='Service');
        $this->data['list']=$this->Mservice->service_list_home($limit,$first);
        $this->data['title']='Anipat - Services';  
		$this->data['view']='index';
		$this->load->view('frontend/layout',$this->data);
	}



	public function detail(){
		$aurl = explode('/', uri_string());
		$link = $aurl[1];
		$row = $this->Mservice->service_get_detail($link);
		$this->data['row']=$row;
		$this->data['title']=$row['title'];
		$this->data['view']='detail';
		$this->load->view('frontend/layout',$this->data);
	}

	
}
