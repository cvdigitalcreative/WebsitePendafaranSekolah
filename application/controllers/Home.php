<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_pribadi');
        $this->load->model('Data_sekolah');
         $this->load->model('Data_nilai_raport');
         $this->load->model('Data_essai');
          $this->load->model('Data_ayah_kandung');
          $this->load->model('Data_ibu_kandung');
          $this->load->model('Data_riwayat_kesehataan');
          $this->load->model('Users_model');
        if(!$this->session->userdata('is_logged_in')){
            redirect('welcome');
        }
        
    }
	public function index()
	{
	
		$email=$_SESSION["user_name"];

		$foto_pribadi=$this->Users_model->get_path_foto_pribadi($email);
		if($foto_pribadi[0]['foto_pribadi']!=""){
			$user_data=$this->Users_model->get_status($email);
		$this->session->set_userdata('status', $user_data[0]["status"]); 
			
		$this->load->view('home/homepage');
		}else{
			$this->load->view('home/upload_foto_pribadi');
		}
		
	}

	public function daftar()
	{

			$email=$_SESSION["user_name"];

		$foto_pribadi=$this->Users_model->get_path_foto_pribadi($email);
		if($foto_pribadi[0]['foto_pribadi']!=""){
			$user_data=$this->Users_model->get_status($email);
			$this->session->set_userdata('status', $user_data[0]["status"]); 
			if( $user_data[0]["status"]==0){
		
			
			$this->load->view('home/daftar_ppbd');
				
	        }else{
	        	redirect('home');	
	        }
		}else{
			$this->load->view('home/upload_foto_pribadi');
		}


		
		
	}

	

	public function hasil()
	{

		$this->load->view('home/hasil');
	}
	public function cetak()
	{
			$email=$_SESSION["user_name"];

			$foto_pribadi=$this->Users_model->get_path_foto_pribadi($email);
		if($foto_pribadi[0]['foto_pribadi']!=""){
			$user_data=$this->Users_model->get_status($email);
			$this->session->set_userdata('status', $user_data[0]["status"]); 
			if($user_data[0]["status"]==2){
				$this->load->view('home/cetak_formulir');
	        }else{
	        	redirect('home');	
	        }
		}else{
			$this->load->view('home/upload_foto_pribadi');
		}
			
			
		
		
	}

	public function upload_dokumen()
	{
			$email=$_SESSION["user_name"];
		$user_data=$this->Users_model->get_status($email);

		$this->session->set_userdata('status', $user_data[0]["status"]); 
		if($user_data[0]["status"]==1){
		$data['dokumen']=$this->Users_model->get_data_user($email);
		$this->load->view('home/upload_dokumen',$data);
        }else{
        	redirect('home');	
        }
	}

	
}
