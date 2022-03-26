<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mservice extends CI_Model {

	public function __construct(){
            parent::__construct();
            $this->table = $this->db->dbprefix('service');
    }


    public function service_list_home($limit,$first){
        $this->db->where('trash', 1);
        $this->db->where('status', 1);
        $this->db->order_by('created', 'desc');
        $query=$this->db->get($this->table, $limit,$first);
        return $query->result_array();
    }

    public function service_get_detail($link){
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $this->db->where('alias', $link);
        $this->db->limit(1);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }
     public function service_count()
    {
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }

    public function service_get_news($limit){
        $this->db->where('status',1);
        $this->db->where('trash',1);
        $this->db->limit($limit);
        $this->db->order_by('created', 'desc');
        $query=$this->db->get($this->table);
        return $query->result_array();
    }
}