<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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
		$data['title']='Home page';
		$data['site_info']=$this->_get_info();
		$this->load->view('templates/header',$data); // loading heading part of index page
		$this->load->model('model_projects');
		$data['projects_list']=$this->model_projects->get_projects();
		$this->load->view('pages/home',$data);
    $this->load->view('templates/footer',$data); // loading footing part of index page
	}
	private function _get_info()
	{
		$this->load->model('model_info');
		return $this->model_info->get_site_info();
	}
	public function show_about()
	{
		$data['title']='About page';
		$data['site_info']=$this->_get_info();
		$this->load->model('model_about');
		$data['about_data']=$this->model_about->get_about_page_info();

		$this->load->view('templates/header',$data); // loading heading part of index page

		$this->load->view('pages/about',$data);
    $this->load->view('templates/footer',$data); // loading footing part of index page
	}
	public function show_contact()
	{
		$data['title']='Contacts page';
		$data['site_info']=$this->_get_info();
		$this->load->model('model_info');
		$data['contact_info']=$this->model_info->get_contact_info();
		$this->load->view('templates/header',$data); // loading heading part of index page
		$this->load->view('pages/contact');
    $this->load->view('templates/footer'); // loading footing part of index page
	}
	public function post_form_data(){
		$data["name"]=$this->input->post("name");
		$data["email"]=$this->input->post("email");
		$data["title"]=$this->input->post("title");
		$data["message"]=$this->input->post("message");
		//i need to put here Referer's URL and push it to the view

		$this->load->model('model_form');
		$this->model_form->set_form_data($data);
	}
	public function show_404(){
		show_404();
	}
}
