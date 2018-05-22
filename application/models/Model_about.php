<?php

class Model_about extends CI_Model{
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  public function get_about_page_info(){
    $query_str="SELECT * FROM Information WHERE name='NameHeader' OR name='NameSubheader' OR name='ProjectsAmount' OR name='WorkingHoursAmount' OR name='PositiveFeedbacksAmount' OR name='HappyClientsAmount';";

    $query=$this->db->query($query_str);
    $temp=$query->result_array();
    $result=array();
    foreach($temp as $row){
      $result[$row['name']]=$row['value'];
    }

    return $result;
  }
}
