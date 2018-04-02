<?php

class Data_ayah_kandung extends CI_Model {

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
    function add_data_ayah_kandung($data,$email)
    {
    	$this->db->where('email',$email);
	   $q = $this->db->get('data_ayah_kandung');

	   if ( $q->num_rows() > 0 ) 
	   {
	      $this->db->where('email',$email);
	      $this->db->update('data_ayah_kandung',$data);
	   } else {
	      $this->db->set('email', $email);
	      $this->db->insert('data_ayah_kandung',$data);
	   }
    	
	}

	 public function get_data_ayah_kandung_by_email($email)
    {
		$this->db->select('*');
		$this->db->from('data_ayah_kandung');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array(); 
    }
    
}

