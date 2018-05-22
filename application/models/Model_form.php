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

    $input_array=array(
      "name"=>$name,
      "email"=>$email,
      "title"=>$title,
      "message"=>$message,
      "date"=>date('now')
    );
    $str=$this->db->insert_string("Submissions",$input_array);
    $query=$this->db->query($str);
  }
}
