<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lienhe extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->data['com']='Lienhe';
		$this->load->model('frontend/Mcategory');
		$this->load->model('frontend/Mproduct');
		$this->load->model('frontend/Mcontact');

	}
	


	public function index(){	
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday'];
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullname', 'Username','required' );
		$this->form_validation->set_rules('email', 'email','required|valid_email' );
		$this->form_validation->set_rules('phone', 'phone','required' );
		$this->form_validation->set_rules('title', 'title','required' );
		$this->form_validation->set_rules('content', 'content','required' );

		if($this->form_validation->run()==TRUE){
			$mydata=array(
				'fullname'=>$_POST['fullname'],
				'email'=>$_POST['email'],
				'phone'=>$_POST['phone'],
				'title'=>$_POST['title'],
				'content'=>$_POST['content'],
				'created_at'=> $today
			);
			$this->Mcontact->contact_insert($mydata);
			echo '<script>alert("Your message has been sent successfully, we will respond as soon as possible.! Thanks")</script>';
		}
		$this->data['title']="Anipat - Contact";
		$this->data['view']='index';
		$this->load->view('frontend/layout',$this->data);
	}
	
	
}

