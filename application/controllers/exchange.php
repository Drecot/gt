<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exchange extends CI_Controller {

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
		$this->load->view('index');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function signup()
	{
		$this->load->view('signup');
	}

	public function account()
	{
		$this->load->view('account/profile');
	}

	public function process_login()
	{
		$this->load->model('process');
		$query = $this->process->log_user($_POST);
		if($this->session->has_userdata('error')) 
		{
			header("Location: login");
			//echo $this->session->userdata('error');
		}
		else
		{
			var_dump($query);
		}
		//$this->load->view('index', array('dataset' =>  $query->result()));
		//$this->load->view('login');
	}

	public function process_register()
	{
		$_POST['firstname'] = trim($_POST['firstname']);
		$_POST['lastname'] = trim($_POST['lastname']);
		$_POST['phonenumber'] = trim($_POST['phonenumber']);
		$_POST['email'] = trim($_POST['email']);
		$this->load->model('process');
		$query = $this->process->reg_user($_POST);
		if($this->session->has_userdata('error')) 
		{
			header("Location: signup");
			//echo $this->session->userdata('error');
		}
		else
		{
			var_dump($query);
		}

	}
}
