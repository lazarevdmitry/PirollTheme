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
    $this->db->select("name,value");
    $this->db->from("Information");
    $this->db->or_where("name","Address");
    $this->db->or_where("name","Phone");
    $this->db->or_where("name","Email");
    $this->db->or_where("name","Fax");
    $result=$this->db->get();

    return $this->_parse_query($result);
  }
  public function update_home_info($header,$description)
  {
    $data=array(
      "value"=>$header
    );
    $this->db->where("name","HomeHeader");
    $this->db->update("Information",$data);
    $data=array(
      "value"=>$description
    );
    $this->db->where("name","HomeDescription");
    $this->db->update("Information",$data);
  }
  public function update_about_info($header,$description)
  {
    $data=array(
      "value"=>$header
    );
    $this->db->where("name","AboutHeader");
    $this->db->update("Information",$data);
    $data=array(
      "value"=>$description
    );
    $this->db->where("name","AboutDescription");
    $this->db->update("Information",$data);
  }
  public function get_home_block_info()
  {
    $this->db->select("name,value");
    $this->db->from("Information");
    $this->db->or_where("name","HomeHeader");
    $this->db->or_where("name","HomeDescription");
    $result=$this->db->get();

    return $this->_parse_query($result);
  }
  
  public function get_site_info()
  {
    $this->db->select("name,value");
    $this->db->from("Information");
    $this->db->or_where("name","Year");
    $this->db->or_where("name","DesignedBy");
    $this->db->or_where("name","Email");
    $this->db->or_where("name","Phone");
    $this->db->or_where("name","OwnerNameFull");
    $this->db->or_where("name","OwnerNameBrief");
    $this->db->or_where("name","ImplementedBy");
    $result=$this->db->get();

    return $this->_parse_query($result);
  }
}
