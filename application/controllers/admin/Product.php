<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('backend/Mproduct');
		$this->load->model('backend/Mcategory');
		$this->load->model('backend/Muser');
		$this->load->model('backend/Mproducer');
		$this->load->model('backend/Morderdetail');
    $this->load->model('backend/Morders');
		if(!$this->session->userdata('sessionadmin')){
			redirect('admin/user/login','refresh');
		}
		$this->data['user']=$this->session->userdata('sessionadmin');
		$this->data['com']='product';
	}



	public function index(){
		$this->load->library('phantrang');
		$this->load->library('session');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Mproduct->product_sanpham_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='admin/product');
		$this->data['list']=$this->Mproduct->product_sanpham($limit,$first);
		$this->data['view']='index';
		$this->data['title']='Products';
		$this->load->view('backend/layout', $this->data);
	}



	public function insert(){
  
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('alias');
		$this->form_validation->set_rules('name', 'name product', 'required|is_unique[db_product.name]');
		$this->form_validation->set_rules('catid', 'category', 'required');
		$this->form_validation->set_rules('producer', 'brand', 'required');
	
		if ($this->form_validation->run() == TRUE){
			$mydata= array(
				'catid'=>$_POST['catid'],
				'producer'=>$_POST['producer'],
				'name' =>$_POST['name'], 
				'alias' =>$string=$this->alias->str_alias($_POST['name']),
				'detail'=>$_POST['detail'], 
				'sortDesc'=>$_POST['sortDesc'], 
				'number'=>$_POST['number'],
				'sale'=>$_POST['sale_of'],
				'price'=>$_POST['price'],
				'created'=>$today,
				'modified'=>$today,
				'trash'=>1,
				'status'=>$_POST['status']
			);
			$config = array();
	         //thuc m???c ch???a file
			$config['upload_path']   = './public/uploads/product/';
	         //?????nh d???ng file ???????c ph??p t???i
			$config['allowed_types'] = 'jpg|png|gif';
	    
	         //load th?? vi???n upload
	         //bien chua cac ten file upload
			$name_array = array();

	        //l??u bi???n m??i tr?????ng khi th???c hi???n upload
			$file  = $_FILES['image_list'];
			$count = count($file['name']);
			$img = '';
			$this->load->library('upload', $config);
			for($i=0; $i<=$count-1; $i++){

              	$_FILES['userfile']['name']     = $file['name'][$i];  //khai b??o t??n c???a file th??? i
              	$_FILES['userfile']['type']     = $file['type'][$i]; //khai b??o ki???u c???a file th??? i
              	$_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i]; //khai b??o ???????ng d???n t???m c???a file th??? i
          		$_FILES['userfile']['error']    = $file['error'][$i]; //khai b??o l???i c???a file th??? i
              	$_FILES['userfile']['size']     = $file['size'][$i]; //khai b??o k??ch c??? c???a file th??? i
	              //load th?? vi???n upload v?? c???u h??nh
	              //th???c hi???n upload t???ng file
              	if($this->upload->do_upload()){
	                  //n???u upload th??nh c??ng th?? l??u to??n b??? d??? li???u
              		$data = $this->upload->data();
	                  //in c???u tr??c d??? li???u c???a c??c file
              		$img .= $data['file_name'].'#';
              	}     
              }
	        //L??u nh??m h??nh ???nh chi ti???t
              $img = rtrim($img, '#');
              $mydata['img']= $img;
              if ( $this->upload->do_upload('img')){
              	$data = $this->upload->data();
              	$mydata['avatar']=$data['file_name'];
              }
              $this->Mproduct->product_insert($mydata);
              $this->session->set_flashdata('success', 'Add successfully products');
              redirect('admin/product','refresh');
            }else{
             $this->data['view']='insert';
             $this->data['title']='Add new product';
             $this->load->view('backend/layout', $this->data);
           }
  }

         

  public function update($id){
          $user_role=$this->session->userdata('sessionadmin');
    if($user_role['role']==2){
      redirect('admin/E403/index','refresh');
    }
         $this->data['row']=$this->Mproduct->product_detail($id);
         $d=getdate();
         $today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
         $this->load->library('form_validation');
         $this->load->library('session');
         $this->load->library('alias');
         $this->form_validation->set_rules('name', 'name product', 'required');
         $this->form_validation->set_rules('catid', 'category', 'required');
         $this->form_validation->set_rules('producer', 'brand', 'required');
      
         if ($this->form_validation->run() == TRUE){
          $mydata= array(
           'catid'=>$_POST['catid'],
           'producer'=>$_POST['producer'],
           'name' =>$_POST['name'], 
           'alias' =>$string=$this->alias->str_alias($_POST['name']),
           'detail'=>$_POST['detail'], 
           'sortDesc'=>$_POST['sortDesc'],
           'sale'=>$_POST['sale_of'],
           'price'=>$_POST['price'],
           'modified'=>$today,
           'status'=>$_POST['status']
         );
         $config = array();
         //thuc m???c ch???a file
    $config['upload_path']   = './public/uploads/product/';
         //?????nh d???ng file ???????c ph??p t???i
    $config['allowed_types'] = 'jpg|png|gif';
         //Dung l?????ng t???i ??a
   
         //load th?? vi???n upload
         //bien chua cac ten file upload
    $name_array = array();

        //l??u bi???n m??i tr?????ng khi th???c hi???n upload
    $file  = $_FILES['image_list'];
    $count = count($file['name']);
    $img = '';
    $this->load->library('upload', $config);
    for($i=0; $i<=$count-1; $i++){

              $_FILES['userfile']['name']     = $file['name'][$i];  //khai b??o t??n c???a file th??? i
              $_FILES['userfile']['type']     = $file['type'][$i]; //khai b??o ki???u c???a file th??? i
              $_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i]; //khai b??o ???????ng d???n t???m c???a file th??? i
            $_FILES['userfile']['error']    = $file['error'][$i]; //khai b??o l???i c???a file th??? i
              $_FILES['userfile']['size']     = $file['size'][$i]; //khai b??o k??ch c??? c???a file th??? i
              //load th?? vi???n upload v?? c???u h??nh
              //th???c hi???n upload t???ng file
              if($this->upload->do_upload()){
                  //n???u upload th??nh c??ng th?? l??u to??n b??? d??? li???u
                $data = $this->upload->data();
                  //in c???u tr??c d??? li???u c???a c??c file
                $img .= $data['file_name'].'#';
              }     
            }
        //L??u nh??m h??nh ???nh chi ti???t
            $img = rtrim($img, '#');
            $mydata['img']= $img;
            if ( $this->upload->do_upload('img')){
              $data = $this->upload->data();
              $mydata['avatar']=$data['file_name'];
            }
            $this->Mproduct->product_update($mydata, $id);
            $this->session->set_flashdata('success', 'Product update successfully');
            redirect('admin/product','refresh');
          }else{
            $this->data['view']='update';
            $this->data['title']='Update product';
            $this->load->view('backend/layout', $this->data);
         }
  }
     
  
  
  public function status($id){
           $row=$this->Mproduct->product_detail($id);
           $status=($row['status']==1)?0:1;
           $mydata= array('status' => $status,'modified_by'=>$this->session->userdata('id'),);
           $this->Mproduct->product_update($mydata, $id);
           $this->session->set_flashdata('success', 'Product update successful');
           redirect('admin/product/','refresh');
  }



  public function recyclebin(){
           $this->load->library('phantrang');
           $limit=10;
           $current=$this->phantrang->PageCurrent();
           $first=$this->phantrang->PageFirst($limit, $current);
           $total=$this->Mproduct->product_trash_count();
           $this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='admin/product/recyclebin');
           $this->data['list']=$this->Mproduct->product_trash($limit, $first);
           $this->data['view']='recyclebin';
           $this->data['title']='Product trash';
           $this->load->view('backend/layout', $this->data);
  }



  public function trash($id){
           $row = $this->Morderdetail->orderdetail_detail($id);
           if(count($row) > 0){
            $this->session->set_flashdata('error', 'Already have a customer order, can not delete !');
            redirect('admin/product','refresh');
          }else{
            $mydata= array('trash' => 0,'modified_by'=>$this->session->userdata('id'),);
            $this->Mproduct->product_update($mydata, $id);
            $this->session->set_flashdata('success', 'Deleted product in trash successfully');
            redirect('admin/product','refresh');
          }
  }



  public function restore($id){
         $this->Mproduct->product_restore($id);
         $this->session->set_flashdata('success', 'Successfully product recovery');
         redirect('admin/product/recyclebin','refresh');
  }



  public function delete($id){
         $this->load->helper('file');
         $row = $this->Mproduct->product_delete_detail($id);
         delete_files(base_url("public/images/products" . $row['img']));
         $this->Mproduct->product_delete($id);
         $this->session->set_flashdata('success', 'Delete product successfully');
         redirect('admin/product/recyclebin','refresh');
  }



  public function import($id){
         $row=$this->Mproduct->product_detail($id);
         $d=getdate();
         $today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
         $this->load->library('form_validation');
         $this->load->library('session');
         $this->load->library('alias');
         $this->form_validation->set_rules('number', 'number', 'required');
         if ($this->form_validation->run() == TRUE){
          $mydata= array(
           'number'=>$row['number']+$_POST['number'],
           'modified'=>$today,
           'modified_by'=>$this->session->userdata('id')
         );
          $this->Mproduct->product_update($mydata, $id);
          $this->session->set_flashdata('success', 'Update product successfully');
          redirect('admin/product','refresh');
        }
        $this->data['row']=$row;
        $this->data['view']='import';
        $this->data['title']='Update product';
        $this->load->view('backend/layout', $this->data);
  }
    


  
    }