<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mslider extends CI_Model {

	public function __construct()
    {
            parent::__construct();
            $this->table = $this->db->dbprefix('slider');
    }
    public function list_img_banner1()
    {
            $this->db->where('status', 1);
            $this->db->where('id', 8);
            $this->db->where('trash', 1);
            $query = $this->db->get($this->table);
            return $query->result_array();
    }

    public function list_img_banner2()
    {
            $this->db->where('status', 1);
            $this->db->where('id', 9);
            $this->db->where('trash', 1);
            $query = $this->db->get($this->table);
            return $query->result_array();
    }

    public function list_img_banner3()
    {
            $this->db->where('status', 1);
            $this->db->where('id', 10);
            $this->db->where('trash', 1);
            $query = $this->db->get($this->table);
            return $query->result_array();
    }

    public function list_img_banner4()
    {
            $this->db->where('status', 1);
            $this->db->where('id', 13);
            $this->db->where('trash', 1);
            $query = $this->db->get($this->table);
            return $query->result_array();
    }


    public function list_img_banner5()
    {
            $this->db->where('status', 1);
            $this->db->where('id', 12);
            $this->db->where('trash', 1);
            $query = $this->db->get($this->table);
            return $query->result_array();
    }


    public function list_img_banner6()
    {
            $this->db->where('status', 1);
            $this->db->where('id', 11);
            $this->db->where('trash', 1);
            $query = $this->db->get($this->table);
            return $query->result_array();
    }


    public function list_img_banner7()
    {
            $this->db->where('status', 1);
            $this->db->where('id', 14);
            $this->db->where('trash', 1);
            $query = $this->db->get($this->table);
            return $query->result_array();
    }

    public function list_img_banner8()
    {
            $this->db->where('status', 1);
            $this->db->where('id', 15);
            $this->db->where('trash', 1);
            $query = $this->db->get($this->table);
            return $query->result_array();
    }

    public function list_img_banner9()
    {
            $this->db->where('status', 1);
            $this->db->where('id', 16);
            $this->db->where('trash', 1);
            $query = $this->db->get($this->table);
            return $query->result_array();
    }

    public function list_img_banner10()
    {
            $this->db->where('status', 1);
            $this->db->where('id', 17);
            $this->db->where('trash', 1);
            $query = $this->db->get($this->table);
            return $query->result_array();
    }

    public function list_img_banner11()
    {
            $this->db->where('status', 1);
            $this->db->where('id', 18);
            $this->db->where('trash', 1);
            $query = $this->db->get($this->table);
            return $query->result_array();
    }
}
