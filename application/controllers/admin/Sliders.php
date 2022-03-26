<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sliders extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('backend/Muser');
		$this->load->model('backend/Msliders');
		$this->load->model('backend/Morders');
		if(!$this->session->userdata('sessionadmin'))
		{
			redirect('admin/user/login','refresh');
		}
		$this->data['user']=$this->session->userdata('sessionadmin');
		$this->data['com']='sliders';
	}



	public function index(){
		$this->load->library('phantrang');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Msliders->slider_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='admin/sliders');
		$this->data['list']=$this->Msliders->slider_all($limit,$first);
		$this->data['view']='index';
		$this->data['title']='Banner';
		$this->load->view('backend/layout', $this->data);
	}



	public function insert(){
		$user_role=$this->session->userdata('sessionadmin');
		if($user_role['role']==2){
			redirect('admin/E403/index','refresh');
		}
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('alias');
		$this->form_validation->set_rules('name', 'name', 'required');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(
				'name' =>$_POST['name'],
				'link' =>$string=$this->alias->str_alias($_POST['name']),
				'created'=>$today,
				'modified'=>$today,
				'trash'=>1,
				'status'=>$_POST['status']
			);
			$config['upload_path']          = './public/uploads/banner/';
			$config['allowed_types']        = 'gif|jpg|png';
			$this->load->library('upload', $config);
			if ( $this->upload->do_upload('img'))
			{
				$data = $this->upload->data();
				$mydata['img']=$data['file_name'];
			}

			$this->Msliders->slider_insert($mydata);
			$this->session->set_flashdata('success', 'Successfully banner added');
			redirect('admin/sliders/','refresh');
		} 
		else 
		{
			$this->data['view']='insert';
			$this->data['title']='Add new sliders';
			$this->load->view('backend/layout', $this->data);
		}
	}



	public function update($id){
		$user_role=$this->session->userdata('sessionadmin');
		if($user_role['role']==2){
			redirect('admin/E403/index','refresh');
		}
		$this->data['row']=$this->Msliders->slider_detail($id);
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('alias');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(
				'link'=>$_POST['link'],
				'name' =>$_POST['name'],
				'modified'=>$today,
				'modified_by'=>$this->session->userdata('fullname'),
				'trash'=>1,
				'status'=>$_POST['status']
			);
			$config['upload_path']          = './public/uploads/banner/';
			$config['allowed_types']        = 'gif|jpg|png';
			$this->load->library('upload', $config);
			if ( $this->upload->do_upload('img'))
			{
				$data = $this->upload->data();
				$mydata['img']=$data['file_name'];
			}
			$this->Msliders->slider_update($mydata, $id);
			$this->session->set_flashdata('success', 'Update banner successfully');
			redirect('admin/sliders/','refresh');
		} 
		$this->data['view']='update';
		$this->data['title']='Update banner';
		$this->load->view('backend/layout', $this->data);
	}



	public function recyclebin(){
		$this->load->library('phantrang');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Msliders->slider_trash_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='admin/sliders/recyclebin');
		$this->data['list']=$this->Msliders->slider_trash($limit, $first);
		$this->data['view']='recyclebin';
		$this->data['title']='Banner/trash';
		$this->load->view('backend/layout', $this->data);
	}



	public function trash($id){
		$mydata= array('trash' => 0);
		$this->Msliders->slider_update($mydata, $id);
		$this->session->set_flashdata('success', 'Successfully deleted the banner in the trash');
		redirect('admin/sliders','refresh');
	}



	public function status($id){
		$row=$this->Msliders->slider_detail($id);
		$status=($row['status']==1)?0:1;
		$mydata= array('status' => $status);
		$this->Msliders->slider_update($mydata, $id);
		$this->session->set_flashdata('success', 'Update banner successfully');
		redirect('admin/sliders','refresh');
	}



	public function restore($id){
		$this->Msliders->slider_restore($id);
		$this->session->set_flashdata('success', 'Restore banner successfully');
		redirect('admin/sliders/recyclebin','refresh');
	}



	public function delete($id){
		$this->Msliders->slider_delete($id);
		$this->session->set_flashdata('success', 'Delete banner successfully');
		redirect('admin/sliders/recyclebin','refresh');
	}
	

	
}