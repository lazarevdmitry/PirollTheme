<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $this->_show_login_form();
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
	}

  public function input_login_info()
	{
    //$cookies=$this->_get_cookies();
    $login_data=array();
		/*
		$cookies_not_existed=!isset($cookies)
    || $cookies["login"] == null
    || $cookies["password"] == null;
		*/
    /*if (
      $cookies_not_existed
    ){*/
      $login_data["login"]=$this->input->post("login");
      $login_data["password"]=$this->input->post("password");
    /*} else {
      $login_data["login"]=$cookies["login"];
      $login_data["password"]=$cookies["password"];
    }*/
    // loads model
    $this->load->model("model_admin");

    if (
      $this->_is_user_accepted($login_data)
    )
    {
      //if ($cookies_not_existed) $this->_set_cookies($login_data);
			$this->session->set_userdata(
				array(
					"login"=>$login_data["login"],
					"password"=>$login_data["password"]
				)
			);
      $this->_show_user_accepted_screen();
    } else {
      $this->_show_user_not_accepted_screen();
    }
  }
	private function _check_user($login,$pass)
	{
		$this->load->model("model_admin");
		return $this->model_admin->check_user($login,$pass);
	}
	public function show_info_page()
	{
		if (
				!$this->_check_user($this->session->userdata("login"),$this->session->userdata("password"))
			)
		{
			$this->_show_user_not_accepted_screen();
			return ;
		}
		$data["title"]="Info page";
		$this->load->model("model_info");
		$data["contacts"]=$this->model_info->get_contact_info();
		$data["site_info"]=$this->model_info->get_site_info();
    // outputs header
    $this->load->view("admin/login_accepted_header",$data);
    // outputs document body
    $this->load->view("admin/accepted/info",$data);
    // outputs footer
    $this->load->view("admin/login_accepted_footer",$data);
	}
	public function show_home_page()
	{

			if (
					!$this->_check_user($this->session->userdata("login"),$this->session->userdata("password"))
				)
			{
				$this->_show_user_not_accepted_screen();
				return ;
			}
			$data["title"]="Home page";
			$this->load->model("model_info");

			if (!is_null($this->input->post("home_submit"))){
				$home_header=$this->input->post("home_header");
				if (is_null($home_header)){
					$home_header="No home headers";
				}
				$home_description=$this->input->post("home_description");
				if (is_null($home_description)){
					$home_description="No home description";
				}
				$this->model_info->update_home_info(
					$home_header,
					$home_description
				);
			}

			$data["contacts"]=$this->model_info->get_contact_info();
			$data["home_info"]=$this->model_info->get_home_block_info();
	    // outputs header
	    $this->load->view("admin/login_accepted_header",$data);
	    // outputs document body
	    $this->load->view("admin/accepted/home",$data);
	    // outputs footer
	    $this->load->view("admin/login_accepted_footer",$data);
	}
	public function show_about_page()
	{

			if (
					!$this->_check_user($this->session->userdata("login"),$this->session->userdata("password"))
				)
			{
				$this->_show_user_not_accepted_screen();
				return ;
			}
			$data["title"]="About page";
			$this->load->model("model_info");

			if (!is_null($this->input->post("about_submit"))){
				$about_header=$this->input->post("about_header");
				if (is_null($about_header)){
					$about_header="No about headers";
				}
				$about_description=$this->input->post("about_description");
				if (is_null($about_description)){
					$about_description="No about description";
				}
				$this->model_info->update_about_info(
					$about_header,
					$about_description
				);
			}

			$data["contacts"]=$this->model_info->get_contact_info();
			$this->load->model("model_about");
			$data["about_info"]=$this->model_about->get_about_page_info();
	    // outputs header
	    $this->load->view("admin/login_accepted_header",$data);
	    // outputs document body
	    $this->load->view("admin/accepted/about",$data);
	    // outputs footer
	    $this->load->view("admin/login_accepted_footer",$data);
	}
	public function show_projects_page()
	{
		if (
				!$this->_check_user($this->session->userdata("login"),$this->session->userdata("password"))
			)
		{
			$this->_show_user_not_accepted_screen();
			return ;
		}
		$data["title"]="Projects page";
		$this->load->model("model_projects");

		if (!is_null($this->input->post("add_new_project"))){
			$project_name=$this->input->post("project_name");
			if (is_null($project_name)){
				$project_name="Anonymous Project";
			}
			$project_image=$this->input->post("project_image");
			if (is_null($project_image)){
				$project_image="noproject.png";
			}
			$project_header=$this->input->post("project_header");
			if (is_null($project_header)){
				$project_header="Anonymous Project";
			}
			$project_content=$this->input->post("project_content");
			if (is_null($project_content)){
				$project_content="Content of Anonymous Project";
			}
			$project_client_name=$this->input->post("project_client_name");
			if (is_null($project_client_name)){
				$project_client_name="No name";
			}
			$project_client_date=$this->input->post("project_client_date");
			if (is_null($project_client_date)){
				$project_client_date=date("Y-m-d");
			}
			$project_client_date=date("Y-m-d");
			$this->model_projects->add_project(
				$project_name,
				$project_image,
				$project_header,
				$project_content,
				$project_client_name,
				$project_client_date
			);
		}

		if (!is_null($this->input->post("delete_project"))){
			$project_id=$this->input->post("project_id");
			$this->model_projects->delete_project($project_id);
		}

		if (!is_null($this->input->post("update_project"))){
			$project_name=$this->input->post("project_name");
			if (is_null($project_name)){
				$project_name="Anonymous Project";
			}
			$project_image=$this->input->post("project_image");
			if (is_null($project_image)){
				$project_image="noproject.png";
			}
			$project_header=$this->input->post("project_header");
			if (is_null($project_header)){
				$project_header="Anonymous Project";
			}
			$project_content=$this->input->post("project_content");
			if (is_null($project_content)){
				$project_content="Content of Anonymous Project";
			}
			$project_client_name=$this->input->post("project_client_name");
			if (is_null($project_client_name)){
				$project_client_name="No name";
			}
			$project_client_date=$this->input->post("project_client_date");
			if (is_null($project_client_date)){
				$project_client_date=date("Y-m-d");
			}
			//$project_client_date=date("d.m.Y");
			$project_id=$this->input->post("id");

			$this->model_projects->update_project(
				$project_id,
				$project_name,
				$project_image,
				$project_header,
				$project_content,
				$project_client_name,
				$project_client_date
			);
		}

		$data["projects_list"]=$this->model_projects->get_projects();
    // outputs header
    $this->load->view("admin/login_accepted_header",$data);
    // outputs document body
    $this->load->view("admin/accepted/projects",$data);
    // outputs footer
    $this->load->view("admin/login_accepted_footer",$data);
	}
	public function show_admin_page($page_name)
	{
		if (
				!$this->_check_user($this->session->userdata("login"),$this->session->userdata("password"))
			)
		{
			$this->_show_user_not_accepted_screen();
			return ;
		}
    $data["title"]="$page_name page";
		$this->load->model("model_{$page_name}");
    // outputs header
    $this->load->view("admin/login_accepted_header",$data);
    // outputs document body
    $this->load->view("admin/accepted/$page_name",$data);
    // outputs footer
    $this->load->view("admin/login_accepted_footer",$data);
  }
	public function show_new_project_page()
	{
		if (
				!$this->_check_user($this->session->userdata("login"),$this->session->userdata("password"))
			)
		{
			$this->_show_user_not_accepted_screen();
			return ;
		}
		$data["title"]="New Project Page";
    // outputs header
    $this->load->view("admin/login_accepted_header",$data);
    // outputs document body
    $this->load->view("admin/accepted/new_project",$data);
    // outputs footer
    $this->load->view("admin/login_accepted_footer",$data);
	}
	public function show_submissions_page()
	{
		if (
				!$this->_check_user($this->session->userdata("login"),$this->session->userdata("password"))
			)
		{
			$this->_show_user_not_accepted_screen();
			return ;
		}
		$data["title"]="Submissions Page";
		$this->load->model("model_form");
		$data['submissions']=$this->model_form->get_all_submissions();
    // outputs header
    $this->load->view("admin/login_accepted_header",$data);
    // outputs document body
    $this->load->view("admin/accepted/submissions",$data);
    // outputs footer
    $this->load->view("admin/login_accepted_footer",$data);
	}
	public function logout_page(){
		$this->session->unset_userdata("login");
		$this->session->unset_userdata("password");
		$this->_show_login_form();
	}
  private function _set_cookies($d)
	{
    set_cookie("login",$d["login"]);
    set_cookie("password",$d["password"]);
  }
  private function _get_cookies()
	{
    $this->load->helper("cookie");
    $result=array();
    $result["login"]=get_cookie("login");
    $result["password"]=get_cookie("password");
    return $result;
  }
  private function _is_user_accepted($log_data)
	{
    return $this->model_admin->is_user_accepted($log_data);
  }

  private function _show_login_form()
	{
    $data["title"]="Login Page";
    // outputs header
    $this->load->view("admin/templates/header",$data);
    // outputs document body
    $this->load->view("admin/admin_login",$data);
    // outputs footer
    $this->load->view("admin/templates/footer",$data);
  }
  private function _show_user_accepted_screen()
	{
    $data["title"]="User accepted";
    // outputs header
    $this->load->view("admin/login_accepted_header",$data);
    // outputs document body
    $this->load->view("admin/login_accepted",$data);
    // outputs footer
    $this->load->view("admin/login_accepted_footer",$data);
  }
  private function _show_user_not_accepted_screen()
	{
    $data["title"]="User does not accepted";
    // outputs header
    $this->load->view("admin/templates/header",$data);
    // outputs document body
    $this->load->view("admin/login_not_accepted",$data);
    // outputs footer
    $this->load->view("admin/templates/footer",$data);
  }


}
