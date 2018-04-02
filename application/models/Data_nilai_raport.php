<?php

class Data_nilai_raport extends CI_Model {

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
    function add_data_nilai_raport($data,$email)
    {
    	$this->db->where('email',$email);
	   $q = $this->db->get('data_nilai_raport');

	   if ( $q->num_rows() > 0 ) 
	   {
	      $this->db->where('email',$email);
	      $this->db->update('data_nilai_raport',$data);
	   } else {
	      $this->db->set('email', $email);
	      $this->db->insert('data_nilai_raport',$data);
	   }
    	
	}

	 public function get_data_nilai_raport_by_email($email)
    {
		$this->db->select('*');
		$this->db->from('data_nilai_raport');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array(); 
    }
    
}

