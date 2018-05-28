<?php

class Model_info extends CI_Model{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->db->reset_query();
  }
  private function _send_query($str)
  {

    $query=$this->db->query($str);
    return $this->_parse_query($query);
  }
  private function _parse_query($q)
  {
    $result=$q->result_array();
    $temp=array();
    foreach ($result as $row){
      $key=$row['name'];
      $value=$row['value'];
      $temp["$key"]=$value;
    }
    return $temp;
  }
  public function get_contact_info()
  {

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
    /*
    $this->db->select("name,value");
    $this->db->from("Information");
    $this->db->where("name","Address");
    $this->db->where("name","Phone");
    $this->db->where("name","Email");
    $this->db->where("name","Fax");

    $result=$this->db->send();

    return $this->_parse_query($result);
    */

  }
  public function get_site_info()
  {
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
    /*
    $this->db->select("name,value");
    $this->db->from("Information");
    $this->db->or_where(
      array(
        "name"=>"Year",
        "name"=>"DesignedBy",
        "name"=>"ImplementedBy",
        "name"=>"Email",
        "name"=>"Phone",
        "name"=>"OwnerNameFull",
        "name"=>"OwnerNameBrief"
      )
    );
    $result=$this->db->get();

    return $this->_parse_query($result);
    */
  }
}
