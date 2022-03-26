<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('backend/Mcustomer');
		$this->load->model('backend/Muser');
		$this->load->model('backend/Morders');
		if(!$this->session->userdata('sessionadmin'))
		{
			redirect('admin/user/login','refresh');
		}
		$this->data['user']=$this->session->userdata('sessionadmin');
		$this->data['com']='customer';
	}



	public function index(){
		$this->load->library('phantrang');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Mcustomer->customer_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='admin/customer');
		$this->data['list']=$this->Mcustomer->customer_all($limit, $first);
		$this->data['view']='index';
		$this->data['title']='List of customers';
		$this->load->view('backend/layout', $this->data);
	}



	public function update($id){
		$this->data['row']=$this->Mcustomer->customer_detail($id);
		$this->data['view']='update';
		$this->data['title']='Update customer';
		$this->load->view('backend/layout', $this->data);
	}



	public function recyclebin(){
		$this->load->library('phantrang');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Mcustomer->customer_trash_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='admin/customer/recyclebin');
		$this->data['list']=$this->Mcustomer->customer_trash($limit, $first);
		$this->data['view']='recyclebin';
		$this->data['title']='Customers trash';
		$this->load->view('backend/layout', $this->data);
	}



	public function trash($id){
		$row = $this->Morders->orders_customerid($id);
		if(count($row) > 0)
		{
			$this->session->set_flashdata('error', 'Customer has placed an order, cannot delete !');
			redirect('admin/customer','refresh');
		}
		else
		{
			$mydata= array('trash' => 0);
			$this->Mcustomer->customer_update($mydata, $id);
			$this->session->set_flashdata('success', 'Deleted customer to trash successfully');
			redirect('admin/customer','refresh');
		}
	}



	public function restore($id){
		$this->Mcustomer->customer_restore($id);
		$this->session->set_flashdata('success', 'Deleted customer to trash successfully');
		redirect('admin/customer/recyclebin','refresh');
	}



	public function delete($id){
		$this->Mcustomer->customer_delete($id);
		$this->session->set_flashdata('success', 'Delete customer successfully');
		redirect('admin/customer/recyclebin','refresh');
	}



}