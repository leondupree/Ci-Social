<?php
class User_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function sessionstatus()
	{
		if($this->session->userdata('logged_in'))
		{
			return true;
		}
		else
		{
			return false;

		}
	}
	
	function register_process() {
		$auto_login = false;
		$username = $this->input->post('username'); 
		$email = $this->input->post('email_address');
		$password = $this->input->post('password');
		$retype_password = $this->input->post('retype_password');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$company_name = $this->input->post('company_name');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$zip_code = $this->input->post('zip_code');
		$phone_number = $this->input->post('phone_number');
		$role = $this->input->post('role');
		
		$this->db->select('username');
		$this->db->where('username', $username); 
		$check_user = $this->db->get('users');

		
		$this->db->select('email');
		$this->db->where('email', $email); 
		$check_email = $this->db->get('users');



		if($check_user->num_rows() > 0)
		{
			return 'dupluname';
		}
		

		if($check_email->num_rows() > 0)
		{
			return 'duplemail';
		}
		
		
		
		
		//Check against user table
		$this->db->select('email','username');
		$this->db->where('email', $email); 
		$this->db->or_where('username', $username);
		$query = $this->db->get('users');
		
		if ($query->num_rows() > 0) {

			//Insert account into the database
			return 'duplicate account';

		} else {
			$password = md5($password);
			
			$data = array(
						'username' => $username,
						'email' => $email,
						'role' => $role,
						'password' => $password,
						'info' => serialize(array(
									'fname' => $fname,
									'lname' => $lname,
									'company_name' => $company_name,
									'address' => $address,
									'city' => $city,
									'zip_code' => $zip_code,
									'phone_number' => $phone_number
									)
								)
					);
					
			$this->db->set($data); 
			if(!$this->db->insert('users')) {
				return 'saveerror';						
			}
			$user_id = $this->db->insert_id();


			
			if($auto_login) {		
				$this->session->sess_destroy();
				
				$this->session->sess_create();
				
				$this->session->set_userdata(array('user_id' => $user_id,'username' => $username));
				
				$this->session->set_userdata(array('logged_in' => true));			
				
			}
			
			return true;
		}

	}
	
	
	
	function login_process()
	{
		$this->session->sess_destroy();

		$this->db->having('password = \''.md5($this->input->post('password')).'\'');
		$this->db->where('username', $this->input->post('username'));
		$this->db->or_where('email', $this->input->post('username'));
		$user_query = $this->db->get('users');
		if($user_query->num_rows() > 0 )
		{//USER FOUND
			$user_row = $user_query->row();
			$userdata = array(
							   'role'  => $user_row->role,
							   'username'  => $user_row->username,
							   'email'     => $user_row->email,
							   'logged_in' => TRUE
						   );
			
			$this->session->set_userdata($userdata);
//			$this->session->set_flashdata('status','successfully logged in');
			return 'success';
			
		}
		else
		{//USER NOT FOUND
		
		
		return 'Wrong username or password.';

/*		$this->db->having('password = \''.md5($this->input->post('password')).'\'');
		$this->db->where('username', $this->input->post('username'));
		$this->db->or_where('email', $this->input->post('username'));
			$this->db->limit(1);
			$pass_query = $this->db->get('users');
			
			if($pass_query->num_rows() > 0 ){
				return 'wrong password';
			}else{
				return 'user not found';
			}
*/		

		}
		
	}
	
	
}