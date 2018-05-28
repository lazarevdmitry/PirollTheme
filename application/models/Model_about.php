<?php

class Model_about extends CI_Model{
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  public function get_about_page_info(){
    $this->db->select("*");
    $this->db->from("Information");
    $this->db->or_where(
      array(
        "name"=>"NameHeader",
        "name"=>"NameSubheader",
        "name"=>"ProjectsAmount",
        "name"=>"WorkingHoursAmount",
        "name"=>"PositiveFeedbacksAmount",
        "name"=>"HappyClientsAmount",
      )
    );
    $query=$this->db->get();
    $temp=$query->result_array();
    $result=array();
    foreach($temp as $row){
      $result[$row['name']]=$row['value'];
    }

    return $result;
  }
}
