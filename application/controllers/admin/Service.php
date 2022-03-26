<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('backend/Mservice');
        $this->load->model('backend/Muser');
        $this->load->model('backend/Morders');
		if(!$this->session->userdata('sessionadmin'))
		{
			redirect('admin/user/login','refresh');
		}
		$this->data['user']=$this->session->userdata('sessionadmin');
		$this->data['com']='service';
	}



	public function index(){
		$this->load->library('phantrang');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Mservice->service_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='admin/service');
		$this->data['list']=$this->Mservice->service_all($limit,$first);
		$this->data['view']='index';
		$this->data['title']='List of Services';
		$this->load->view('backend/layout', $this->data);
	}



	public function insert(){
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('alias');
		$this->form_validation->set_rules('name', 'name', 'required|is_unique[db_service.name]');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(
				'name' =>$_POST['name'], 
				'alias' =>$string=$this->alias->str_alias($_POST['name']),
				'content'=>$_POST['content'], 
				'price'=>$_POST['price'], 
				'created'=>$today,
				'modified'=>$today,
				'trash'=>1,
				'status'=>$_POST['status']
			);
			$config['upload_path']= './public/uploads/service/';
            $config['allowed_types']= 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( $this->upload->do_upload('img'))
            {
                $data = $this->upload->data();
                $mydata['img']=$data['file_name'];
            }
            else
            {
                $mydata['img']='default.png';
            }

			$this->Mservice->service_insert($mydata);
			$this->session->set_flashdata('success', 'Add service successfully');
			redirect('admin/service','refresh');
		} 
		else 
		{
			$this->data['view']='insert';
			$this->data['title']='Add new service';
        	$this->load->view('backend/layout', $this->data);
		}
	}



	public function update($id){
		$this->data['row']=$this->Mservice->service_detail($id);
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('alias');
		$this->form_validation->set_rules('name', 'name service', 'required');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(
				'name' =>$_POST['name'], 
				'alias' =>$string=$this->alias->str_alias($_POST['name']),
				'content'=>$_POST['content'], 
				'price'=>$_POST['price'],
				'modified'=>$today, 
				'trash'=>1,
				'status'=>$_POST['status']
			);
			$config['upload_path']= './public/uploads/service/';
            $config['allowed_types']= 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( $this->upload->do_upload('img'))
            {
                $data = $this->upload->data();
                if(strlen($data['file_name'])!=0)
                {
                	$mydata['img']=$data['file_name'];
                }
            }

			$this->Mservice->service_update($mydata, $id);
			$this->session->set_flashdata('success', 'Update service successfully');
			redirect('admin/service/','refresh');
		} 
		$this->data['view']='update';
		$this->data['title']='Update service';
		$this->load->view('backend/layout', $this->data);
	}



	public function status($id){
		$row=$this->Mservice->service_detail($id);
		$status=($row['status']==1)?0:1;
		$mydata= array('status' => $status);
		$this->Mservice->service_update($mydata, $id);
		$this->session->set_flashdata('success', 'Update service successfully');
		redirect('admin/service/','refresh');
	}



	public function trash($id){
		$mydata= array('trash' => 0);
		$this->Mservice->service_update($mydata, $id);
		$this->session->set_flashdata('success', 'Deleted service to trash successfully');
		redirect('admin/service','refresh');
	}



	public function recyclebin(){
		$this->load->library('phantrang');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Mservice->service_trash_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='admin/service/recyclebin');
		$this->data['list']=$this->Mservice->service_trash($limit, $first);
		$this->data['view']='recyclebin';
		$this->data['title']='Services trash';
		$this->load->view('backend/layout', $this->data);
	}



	public function restore($id){
		$this->Mservice->service_restore($id);
		$this->session->set_flashdata('success', 'Service recovery successful');
		redirect('admin/service/recyclebin','refresh');
	}



	public function delete($id){
		$this->Mservice->service_delete($id);
		$this->session->set_flashdata('success', 'Service deleted successfully');
		redirect('admin/service/recyclebin','refresh');
	}


	
}