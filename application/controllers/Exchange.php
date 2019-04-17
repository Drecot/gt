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
	public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
    }
	public function index()
	{
		$this->load->model('process');
		   $data['record'] = $this->process->displayProducts();
		$this->load->view('index', $data);
	}

	public function index1()
	{
		$this->load->view('index1');
	}
	public function about()
	{
		$this->load->view('aboutus');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function faq()
	{
		$this->load->view('faq');
	}
	public function trade()
	{
		$this->load->model('process');
		$data['record'] = $this->process->displayProducts();
		$this->load->view('trade', $data);
	}
	public function trackorder()
	{
		$this->load->view('track-order');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		header("Location: /exchange/index");
	}
	public function loginmerchant()
	{
		$this->load->view('login-merchant');
	}

	public function signup()
	{
		$this->load->view('signup');
	}

	public function signupmerchant()
	{
		$this->load->view('signup-merchant');
	}

	public function account()
	{
		$this->load->view('profile');
	}

	public function deliveryaddress()
	{
		$this->load->view('delivery-address');
	}

	public function orders()
	{
		$this->load->view('orders');
	}

	public function wishlist()
	{
		$this->load->view('wishlist');
	}

	public function resetpassword()
	{
		$this->load->view('resetpassword');
	}

	public function headerafterlogin()
	{
		$this->load->view('header_afterlogin');
	}

	public function coupons()
	{
		$this->load->view('coupons');
	}

	public function inventory()
	{
		$this->load->model('process');
		$data['record'] = $this->process->displayProducts();
		$this->load->view('inventory', $data);
	}

	public function cart()
	{
		$this->load->view('cart');
	}

	public function captcha()
	{
		$this->load->view('captcha');
	}

	public function checkout()
	{
		$this->load->view('checkout');
	}

	public function products()
	{
		$this->load->model('process');
		$data['record'] = $this->process->displayProducts();
		$this->load->view('products', $data);
	}

	public function comingsoon()
	{
		$this->load->view('comingsoon');
	}

	public function admin()
	{
		$this->load->view('admin');
	}

	public function subscriptions()
	{	 
		   $this->load->model('process');
		   $data['record'] = $this->process->displayNewsletter();
		   $this->load->view('subscriptions', $data);
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
			//Set session data
			$this->session->set_userdata('user', 'True');
			//var_dump($query->result()[0]->first_name);
			$this->session->set_userdata('firstname', $query->result()[0]->first_name);
			$this->session->set_userdata('lastname', $query->result()[0]->last_name);
			$this->session->set_userdata('phonenumber', $query->result()[0]->phone_number);
			$this->session->set_userdata('email', $query->result()[0]->email);
			header("Location: index");
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
			$this->session->set_userdata('user', 'True');
			header("Location: index");
		}

	}

	public function process_subscribe_newsletter()
	{
		$_POST['firstname'] = trim($_POST['firstname']);
		$_POST['lastname'] = trim($_POST['lastname']);
		$_POST['email'] = trim($_POST['email']);
		$this->load->model('process');
		$query = $this->process->subscribe_newsletter($_POST);
		header("Location: comingsoon");
	}

	public function process_addProduct()
	{
		$_POST['productname'] = trim($_POST['productname']);
		$_POST['merchantid'] = trim($_POST['merchantid']);
		$_POST['categoryid'] = trim($_POST['categoryid']);
		$_POST['quantity'] = trim($_POST['quantity']);
		$this->load->model('process');
		$query = $this->process->addProduct($_POST);
		header("Location: inventory");
	}
}