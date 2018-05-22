<?php

class Model_form extends CI_Model{
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  public function set_form_data($data){
    $name=html_escape($data['name']);
    $email=html_escape($data['email']);
    $title=html_escape($data['title']);
    $message=html_escape($data['message']);

    $query_str="INSERT INTO Submissions (name,email,title,message,date) VALUES ('$name','$email','$title','$message',datetime('now'));";
    $query=$this->db->query($query_str);

  }
}
