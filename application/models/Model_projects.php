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
    $query_str="SELECT * FROM Projects;";
    $query=$this->db->query($query_str);
    $result=$query->result_array();
    return $result;
  }
  public function get_project($id)
  {
    $query_str="SELECT * FROM Projects WHERE id={$id};";
    $query=$this->db->query($query_str);
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
      $query_str="SELECT id FROM Projects WHERE id={$id};";
      $query=$this->db->query($query_str);
      $result=$query->row_array();
      return $result;
    }
  }
  public function get_next_project($id)
  {
    $query_str="SELECT COUNT(*) FROM Projects;";
    $query=$this->db->query($query_str);
    $count=$query->row_array();

    if ($id==$query)
    {
      return NULL;
    } else
    {
      $id++;
      $query_str="SELECT id FROM Projects WHERE id={$id};";
      $query=$this->db->query($query_str);
      $result=$query->row_array();
      return $result;
    }
  }
}
