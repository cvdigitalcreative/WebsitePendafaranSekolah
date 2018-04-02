<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		if($this->session->userdata('is_logged_in')){
			redirect('home');
        }else{
        	$this->load->view('signin');	
        }
	}

	/**
    * encript the password 
    * @return mixed
    */	
    function __encrip_password($password) {
        return md5($password);
    }

    /**
    * check the username and the password with the database
    * @return void
    */
	function validate_credentials()
	{	

		$this->load->model('Users_model');

		$user_name = $this->input->post('email');
		$password = $this->__encrip_password($this->input->post('password'));

		$is_valid = $this->Users_model->validate($user_name, $password);
		
		if($is_valid)
		{
			$user_data=$this->Users_model->get_data_user($user_name);
			
			
			$data = array(
				'user_name' => $user_name,
				'foto_pribadi' => $user_data[0]['foto_pribadi'],
				'status' => $user_data[0]['status'],
				'nama' => $user_data[0]['nama'],
				'id' => $user_data[0]['id'],
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('home');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('signin', $data);	
		}
	}


    /**
    * Create new user and store it in the database
    * @return void
    */	
	function create_member()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('asal_daerah', 'asal_daerah', 'trim|required');
		$this->form_validation->set_rules('email', 'Email ', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		// $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		 // $username = $this->input->post("nama");
		 // echo "adada";
		 // die($username);
		$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
		
		if($this->form_validation->run() == FALSE)
		{
			redirect('home');
		}
		
		else
		{			
			$this->load->model('Users_model');
			$email=$this->input->post('email');
			if (!is_dir('uploads/'.$email)) {
            mkdir('./uploads/' . $email, 0777, TRUE);
        	}
        }
	        // setting konfigurasi upload
	       $config = array(
	            'upload_path' => "./uploads/".$email,
	            'allowed_types' => "gif|jpg|png|jpeg|pdf",
	            'overwrite' => TRUE,
	            'max_size' => "3048" // Can be set to particular file size , here it is 2 MB(2048 Kb)
	            
	            );

	        
	        // load library upload
	        $this->load->library('upload', $config);
	           $this->upload->initialize($config); 
	        // upload tampak depan
	       	  $img = "foto_pribadi";
	         if($this->upload->do_upload($img )){
	            $fileData = $this->upload->data();
	           $foto_pribadi=$fileData['file_name'];
	           if
		           	($query = $this->Users_model->create_member($foto_pribadi)
		           	)
				{
					redirect('home');			
				}
				else
				{
					$this->load->view('signin');			
				}
	        }else{
	        	redirect('Welcome');
	        }
	       

			
	}
		
	
	
	/**
    * Destroy the session, and logout the user.
    * @return void
    */		
	function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}		
}
