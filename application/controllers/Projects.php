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
  public function show_project_page($product_num){
    $data['title']="Project {$product_num}";
    $this->load->model('model_info');
		$data['site_info']=$this->model_info->get_site_info();
    $this->load->view('templates/header',$data);

    $this->load->model('model_projects');
    $data['project_data']=$this->model_projects->get_project($product_num);
    $this->load->view('pages/product',$data);
    $this->load->view('templates/footer',$data);
  }
}
