<?php

class Data_sekolah extends CI_Model {

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
    function add_data_sekolah($data,$email)
    {
    	$this->db->where('email',$email);
	   $q = $this->db->get('data_sekolah');

	   if ( $q->num_rows() > 0 ) 
	   {
	      $this->db->where('email',$email);
	      $this->db->update('data_sekolah',$data);
	   } else {
	      $this->db->set('email', $email);
	      $this->db->insert('data_sekolah',$data);
	   }
    	
	}

	 public function get_data_sekolah_by_email($email)
    {
		$this->db->select('*');
		$this->db->from('data_sekolah');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array(); 
    }
    
}

