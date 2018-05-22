<?php
class Model_projects extends CI_Model{
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  public function get_projects(){
    $query_str="SELECT * FROM Projects;";
    $query=$this->db->query($query_str);
    $result=$query->result_array();
    return $result;
  }
  public function get_project($num){
    $query_str="SELECT * FROM Projects WHERE id={$num};";
    $query=$this->db->query($query_str);
    $result=$query->row_array();
    return $result;
  }
}
