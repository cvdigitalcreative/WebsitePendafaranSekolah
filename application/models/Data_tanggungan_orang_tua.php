<?php

class Data_tanggungan_orang_tua extends CI_Model {

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
    function add_data_tanggungan_orang_tua($data,$email)
    {
    	
	      $this->db->set('email', $email);
	      $this->db->insert('data_tanggungan_orang_tua',$data);
	   
    	
	}

	 public function get_data_tanggungan_orang_tua_by_email($email)
    {
		$this->db->select('*');
		$this->db->from('data_tanggungan_orang_tua');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array(); 
    }
    
}

