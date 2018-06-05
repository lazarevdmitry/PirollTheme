<?php

class Model_about extends CI_Model{
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  public function get_about_page_info(){
    $this->db->select("*");
    $this->db->from("Information");
    $this->db->or_where("name","NameHeader");
    $this->db->or_where("name","NameSubheader");
    $this->db->or_where("name","ProjectsAmount");
    $this->db->or_where("name","WorkingHoursAmount");
    $this->db->or_where("name","PositiveFeedbacksAmount");
    $this->db->or_where("name","HappyClientsAmount");
    $this->db->or_where("name","AboutHeader");
    $this->db->or_where("name","AboutDescription");


    $query=$this->db->get();
    $temp=$query->result_array();
    $result=array();
    foreach($temp as $row){
      $result[$row['name']]=$row['value'];
    }

    return $result;
  }

}
