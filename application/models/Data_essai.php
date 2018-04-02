<?php

class Data_essai extends CI_Model {

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
    function add_data_essai($data,$email)
    {
    	$this->db->where('email',$email);
	   $q = $this->db->get('data_essai');

	   if ( $q->num_rows() > 0 ) 
	   {
	      $this->db->where('email',$email);
	      $this->db->update('data_essai',$data);
	   } else {
	      $this->db->set('email', $email);
	      $this->db->insert('data_essai',$data);
	   }
    	
	}

	 public function get_data_essai_by_email($email)
    {
		$this->db->select('*');
		$this->db->from('data_essai');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array(); 
    }
    
}

