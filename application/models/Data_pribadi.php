<?php

class Data_pribadi extends CI_Model {

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
    function add_data_pribadi($data,$email)
    {
    	$this->db->where('email',$email);
	   $q = $this->db->get('data_pribadi');

	   if ( $q->num_rows() > 0 ) 
	   {
	      $this->db->where('email',$email);
	      $this->db->update('data_pribadi',$data);
	   } else {
	      $this->db->set('email', $email);
	      $this->db->insert('data_pribadi',$data);
	   }
    	
	}

	 public function get_data_pribadi_by_email($email)
    {
		$this->db->select('*');
		$this->db->from('data_pribadi');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array(); 
    }
    
}

