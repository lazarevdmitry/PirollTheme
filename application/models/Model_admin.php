<?php

class Model_admin extends CI_Model{
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  public function is_user_accepted($log_data){
    $user=$log_data["login"];
    $pass=$log_data["password"];

    $this->db->select("name,password");
    $this->db->where("name",$user);
    $this->db->from("Users");
    $query=$this->db->get();
    $result=$query->result_array();
    if (count($result)==0){
      return FALSE;
    } else if ($result[0]["password"]===$pass){
      return TRUE;
    }
    return FALSE;
  }
  public function check_user($login,$pass){
    $l=$this->db->escape($login);
    $p=$this->db->escape($pass);
    $query_str="SELECT COUNT(*) AS amount FROM Users WHERE name={$l} AND password={$p};";
    $query=$this->db->query($query_str);

    if ($query->row_array()["amount"]>0){
      return TRUE;
    } else {
      return FALSE;
    }
  }


}
