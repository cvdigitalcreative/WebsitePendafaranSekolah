<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class File extends CI_Model{

    public function getRows($id = ''){
        $this->db->select('id,file_name,created');
        $this->db->from('files');
        if($id){
            $this->db->where('id',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('created','desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }
    
    

    public function insert_data($data,$email,$kategori_file ){
        $this->db->where('email',$email);
        $this->db->where('kategori_file',$kategori_file);
       $q = $this->db->get('files');

       if ( $q->num_rows() > 0 ) 
       {
          $this->db->where('email',$email);
          $this->db->update('files',$data);
       } else {
          $this->db->set('email', $email);
          $this->db->insert('files',$data);
       }
      
    }
    
}