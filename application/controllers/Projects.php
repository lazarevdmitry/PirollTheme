<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

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

	}
	public function __construct(){
		parent::__construct();
		$this->load->model('model_info');
	}
	
  public function show_project_page($product_num){
    $data['title']="Project {$product_num}";

		// retrives site info and pushes it to the view

		$data['site_info']=$this->model_info->get_site_info();
    $this->load->view('templates/header',$data);

		// retrieves data for Product page
    $this->load->model('model_projects');
    $data['project_data']=$this->model_projects->get_project($product_num);
		$data['prev_project_url']=$this->model_projects->get_prev_project($product_num);
		$data['next_project_url']=$this->model_projects->get_next_project($product_num);
    $this->load->view('pages/project',$data);

    $this->load->view('templates/footer',$data);
  }
}
