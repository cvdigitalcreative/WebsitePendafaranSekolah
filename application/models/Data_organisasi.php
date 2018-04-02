<?php

class Data_organisasi extends CI_Model {

	/**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }
    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    function add_data_organisasi($data,$email)
    {
    	
	      $this->db->set('email', $email);
	      $this->db->insert('data_organisasi_anda',$data);
	   
    	
	}

	 public function get_data_organisasi_by_email($email)
    {
		$this->db->select('*');
		$this->db->from('data_organisasi_anda');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array(); 
    }
    
}

