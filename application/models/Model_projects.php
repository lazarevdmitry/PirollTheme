<?php
class Model_projects extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function get_projects()
  {
    $query=$this->db->get("Projects");
    $result=$query->result_array();
    return $result;
  }
  public function get_project($id)
  {
    $query=$this->db->get_where("Projects",array("id"=>$id));
    $result=$query->row_array();
    return $result;
  }
  public function get_prev_project($id)
  {
    if ($id<=1)
    {
      return NULL;
    } else
    {
      $id--;
      $this->db->select("id");
      $query=$this->db->get_where("Projects",array("id"=>$id));
      $result=$query->row_array();
      return $result;
    }
  }
  public function get_next_project($id)
  {
    $count=$this->db->count_all("Projects");
    if ($id==$count)
    {
      return NULL;
    } else
    {
      $id++;
      $this->db->select("id");
      $query=$this->db->get_where("Projects",array("id"=>$id));
      $result=$query->row_array();
      return $result;
    }
  }
}
