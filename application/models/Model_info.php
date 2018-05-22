<?php

class Model_info extends CI_Model{
  public function __construct(){
    parent::__construct();

  }
  private function _send_query($str){
    $this->load->database();
    $query=$this->db->query($str);
    $result=$query->result_array();
//    var_dump($result);
    $temp=array();
    foreach ($result as $row){
      $key=$row['name'];
      $value=$row['value'];
      $temp["$key"]=$value;
    }
    return $temp;
  }
  public function get_contact_info(){
    $query_str="
      SELECT name, value
        FROM Information
        WHERE
          name='Address' OR
          name='Phone' OR
          name='Email' OR
          name='Fax';
    ";
    return $this->_send_query($query_str);
  }
  public function get_site_info(){
    $query_str="
      SELECT name, value
        FROM Information
        WHERE
          name='Year' OR
          name='DesignedBy' OR
          name='ImplementedBy' OR
          name='Email' OR
          name='Phone' OR
          name='OwnerNameFull' OR
          name='OwnerNameBrief';
    ";
    return $this->_send_query($query_str);
  }
}
