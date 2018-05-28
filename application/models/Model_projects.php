<?php
class Model_projects extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->db->reset_query();
  }
  public function add_project($name,$image,$header,$content,$cname,$cdate)
  {
    $id=$this->get_projects_amount();
    ++$id;
    $this->db->insert("Projects",array(
      "id"=>$id,
      "name"=>$name,
      "image"=>$image,
      "content"=>$content,
      "clientName"=>$cname,
      "clientDate"=>$cdate,
      "share"=>''
    ));

  }
  public function update_project($id,$name,$image,$header,$content,$cname,$cdate)
  {
    $d=array(
      'name'=>$name,
      'image'=>$image,
      'header'=>$header,
      'content'=>$content,
      'clientName'=>$cname,
      'clientDate'=>$cdate,
    );
    $where="id={$id}";
    $this->db->where("id",$id);
    $this->db->update("Projects",$d);

  }
  public function delete_project($index)
  {
    $this->db->delete("Projects",array("id"=>$index));
  }
  public function get_projects_amount(){
    return $this->db->count_all("Projects");
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
