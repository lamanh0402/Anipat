<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Useradmin extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('backend/Muser');
		$this->load->model('backend/Morders');
		if(!$this->session->userdata('sessionadmin'))
		{
			redirect('admin/user/login','refresh');
		}
		$this->data['user']=$this->session->userdata('sessionadmin');
		$this->data['com']='useradmin';
	}



	public function index(){
		$user_role=$this->session->userdata('sessionadmin');
		if($user_role['role']==2){
			redirect('admin/E403/index','refresh');
		}
		$this->load->library('phantrang');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Muser->users_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='admin/useradmin');
		$this->data['list']=$this->Muser->users_all($limit, $first);
		$this->data['view']='index';
		$this->data['title']='List of employee accounts';
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
		$this->load->library('alias');
		$this->form_validation->set_rules('fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|is_unique[db_user.phone]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[db_user.email]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[db_user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[32]');
		if ($this->form_validation->run() == TRUE){
			$mydata= array(
				'fullname' =>$_POST['fullname'], 
				'phone' =>$_POST['phone'], 
				'address' =>$_POST['address'], 
				'email' =>$_POST['email'], 
				'username' =>$_POST['username'], 
				'password' =>sha1($_POST['password']), 
				'role' =>$_POST['role'], 
				'status' =>$_POST['status'],
				'created' =>$today,
				'trash'=>1
			);
			$config['upload_path']          = './public/uploads/user/';
			$config['encrypt_name'] = TRUE;
            $config['allowed_types']        = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( $this->upload->do_upload('img')){
                $data = $this->upload->data();
                $mydata['img']=$data['file_name'];
            }else{
                $mydata['img']='noimage.png';
            }
			$this->Muser->user_insert($mydata);
			$this->session->set_flashdata('success', 'Successfully added account');
			redirect('admin/useradmin','refresh');
		} 
		else{
			$this->data['view']='insert';
			$this->data['title']='Add account';
			$this->load->view('backend/layout', $this->data);
		}
	}



	public function update($id){
		$user_role=$this->session->userdata('sessionadmin');
		if($user_role['role']==2){
			redirect('admin/E403/index','refresh');
		}
		$row=$this->Muser->user_detail_id($id);
		$this->data['row']=$row;
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');
		$this->load->library('alias');
		$this->form_validation->set_rules('fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[5]|max_length[32]');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(
				'fullname' =>$_POST['fullname'], 
				'address' =>$_POST['address'], 
				'password' =>sha1($_POST['password']), 
			);
         	$config = array();
	         $config['upload_path']   = './public/uploads/user/';
	         $config['allowed_types'] = 'jpg|png';
	         $config['encrypt_name'] = TRUE;
	         $this->load->library('upload', $config);
	         if($this->upload->do_upload('image')){
	             $data = $this->upload->data();
	             $mydata['img']=$data['file_name'];
	         }
			$this->Muser->user_update($mydata, $id);
			$this->session->set_flashdata('success', 'Account update successfully');
		} 
		$this->data['view']='update';
		$this->data['title']='Update account';
		$this->load->view('backend/layout', $this->data);
	}



	public function recyclebin(){
		$this->load->library('phantrang');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Muser->user_trash_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='admin/useradmin/recyclebin');
		$this->data['list']=$this->Muser->user_trash($limit, $first);
		$this->data['view']='recyclebin';
		$this->data['title']='Account trash';
		$this->load->view('backend/layout', $this->data);
	}



	public function trash($id){
		$row=$this->data['user'];
		if($row['role']==2){
			$this->session->set_flashdata('error', 'No permission to operate');
			redirect('admin/useradmin','refresh');
		}else{
			$mydata= array('trash' => 0);
			$this->Muser->user_update($mydata, $id);
			$this->session->set_flashdata('success', 'Deleted account to trash successfully');
			redirect('admin/useradmin','refresh');
		}
	}



	public function status($id){
		$row=$this->Muser->user_detail_id($id);
		$user=$this->data['user'];
		if($user['role']==2){
			$this->session->set_flashdata('error', 'No permission to operate');
			redirect('admin/useradmin','refresh');
		}else{
			if($id!=$user['id']){
				$status=($row['status']==1)?0:1;
				$mydata= array('status' => $status);
				$this->Muser->user_update($mydata, $id);
				$this->session->set_flashdata('success', 'Account update successfully');
				redirect('admin/useradmin','refresh');
			}else{
				$this->session->set_flashdata('error', 'Can not manipulate myself');
				redirect('admin/useradmin','refresh');
			}
		}
	}



	public function restore($id){
		$row=$this->data['user'];
		if($row['role']==2){
			$this->session->set_flashdata('error', 'Do not have the right to operate');
			redirect('admin/useradmin','refresh');
		}else{
			$this->Muser->user_restore($id);
			$this->session->set_flashdata('success', 'Successful account recovery');
			redirect('admin/useradmin/recyclebin','refresh');
		}
	}



	public function delete($id){
		$row=$this->data['user'];
		if($row['role']==2){
			$this->session->set_flashdata('error', 'Do not have the right to operate');
			redirect('admin/useradmin','refresh');
		}else{
			$this->Muser->user_delete($id);
			$this->session->set_flashdata('success', 'Account deleted successfully');
			redirect('admin/useradmin/recyclebin','refresh');
		}
	}



	function check_password(){
        $password = $this->input->post('password');
        $row=$this->data['row'];
        if(sha1($password)!=$row['password']){
            $this->form_validation->set_message(__FUNCTION__, 'Incorrect password');
            return FALSE;
        }
        return TRUE;
    }

	

}