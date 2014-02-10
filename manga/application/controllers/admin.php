<?php 

class Admin extends CI_Controller {

	function index()
	{
		if($this->session->userdata('is_logged_in')){
			redirect('admin/dashboard');
        }else{
        	$this->load->view('admin/login');	
        }
	}
	
	function __encrip_password($password) {
        return md5($password);
    }	
		
	function validate_credentials()
	{	

		$this->load->model('admin_model');

		$user_name = $this->input->post('user_name');
		$password = $this->input->post('password');

		$is_valid = $this->admin_model->validate($user_name, $password);
		
		if($is_valid)
		{
			$data = array(
				'user_name' => $user_name,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('admin/dashboard');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('admin/login', $data);	
		}
	}
	function dashboard()
	{
		$this->load->view('includes/header');	
		$this->load->view('admin/dashboard');	
		$this->load->view('includes/footer');	
	}
	function add_category()
	{
		$this->load->view('includes/header');	
		$this->load->view('admin/category/add');	
		$this->load->view('includes/footer');	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */