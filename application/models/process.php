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
    
}
?> 