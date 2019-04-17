<?php 
class Process extends CI_Model {
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function add_quotes($str)
    {
    	return "'".$str."'";
    }

    function log_user($log_data)
    {

        $query = $this->db->query('SELECT email FROM users WHERE email ='. $this->add_quotes($log_data['email']));
        if (empty($query->result()))
        {
        	$this->session->set_userdata('error', 'This email is not registered with an account');
        }
        else {
        	$pc = $this->db->query('SELECT password FROM users WHERE email ='. $this->add_quotes($log_data['email']));
        	if (md5($log_data['password']) == $pc->result()[0]->password)
        	{
        		$query = $this->db->query('SELECT * FROM users WHERE email ='. $this->add_quotes($log_data['email']));
        		return $query;
        	}
        	else 
        	{
        		$this->session->set_userdata('error', 'Incorrect email/password combination');
        	}
        }
        //return $query;
    }

    function reg_user($log_data)
    {

        $query = $this->db->query('SELECT email FROM users WHERE email ='. $this->add_quotes($log_data['email']));
        if (!empty($query->result()))
        {
        	$this->session->set_userdata('error', 'This email is already registered with an account');
        }
        else {
        	$this->db->query('INSERT INTO users (first_name, last_name, email, phone_number, password) VALUES ('.$this->add_quotes($log_data['firstname']).', '.$this->add_quotes($log_data['lastname']).', '.$this->add_quotes($log_data['email']).', '.$this->add_quotes($log_data['phonenumber']).', '.$this->add_quotes(md5($log_data['password'])).')');
        }
        //return $query;
    }

    function subscribe_newsletter($log_data)
    {
        $this->load->helper('date');
        date_default_timezone_set('Africa/Lagos'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        
        $query = $this->db->query('SELECT email FROM newsletter WHERE email ='. $this->add_quotes($log_data['email']));
        if (!empty($query->result()))
        {
        	$this->session->set_userdata('error', 'This email is already registered');
        }
        else {
            
            $this->db->query('INSERT INTO newsletter (first_name, last_name, email, date_subscribe, status) VALUES ('.$this->add_quotes($log_data['firstname']).', '.$this->add_quotes($log_data['lastname']).', '.$this->add_quotes($log_data['email']).', '.$this->add_quotes($now).', '.$this->add_quotes("SUBSCRIBED").')');
            $this->session->set_userdata('error', 'Registration successful! You would be notified once we launch');
        }
        //return $query;
    }

    function displayNewsletter(){
        return $this->db->get('newsletter')->result();
       }

       function addProduct($log_data){
        $this->db->query('INSERT INTO products (product_name, merchant_id, category_id, quantity) VALUES ('.$this->add_quotes($log_data['productname']).', '.$this->add_quotes($log_data['merchantid']).', '.$this->add_quotes($log_data['categoryid']).', '.$this->add_quotes($log_data['quantity']).')');
        $this->session->set_userdata('error', 'Product added successfully!');
       }

       function displayProducts(){
        return $this->db->get('products')->result();
       }
}
?>