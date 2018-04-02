<?php

class Users_model extends CI_Model {
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_pribadi');
        $this->load->model('Data_sekolah');
         $this->load->model('Data_nilai_raport');
          $this->load->model('Data_organisasi');
          $this->load->model('Data_prestasi');
           $this->load->model('Data_essai');
           $this->load->model('Data_ayah_kandung');
           $this->load->model('Data_ibu_kandung');
           $this->load->model('Data_tanggungan_orang_tua');
           $this->load->model('Data_riwayat_kesehataan');
         
        
    }
   

    public function update_rumah_tampak_depan($email,$rumah_tampak_depan){
            $this->db->set('rumah_tampak_depan', $rumah_tampak_depan);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_rumah_tampak_belakang($email,$rumah_tampak_belakang){
            $this->db->set('rumah_tampak_belakang', $rumah_tampak_belakang);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_rumah_tampak_kanan($email,$rumah_tampak_kanan){
            $this->db->set('rumah_tampak_kanan', $rumah_tampak_kanan);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_rumah_tampak_kiri($email,$rumah_tampak_kiri){
            $this->db->set('rumah_tampak_kiri', $rumah_tampak_kiri);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_ruang_tengah($email,$ruang_tengah){
            $this->db->set('ruang_tengah', $ruang_tengah);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_kamar_tidur($email,$kamar_tidur){
            $this->db->set('kamar_tidur', $kamar_tidur);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_dapur($email,$dapur){
            $this->db->set('dapur', $dapur);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_kamar_mandi($email,$kamar_mandi){
            $this->db->set('kamar_mandi', $kamar_mandi);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_ktp_ayah($email,$ktp_ayah){
            $this->db->set('ktp_ayah', $ktp_ayah);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
     public function update_ktp_ibu($email,$ktp_ibu){
            $this->db->set('ktp_ibu', $ktp_ibu);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_kartu_keluarga($email,$kartu_keluarga){
            $this->db->set('kartu_keluarga', $kartu_keluarga);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_surat_keteranga_tidak_mampu($email,$surat_keteranga_tidak_mampu){
            $this->db->set('surat_keteranga_tidak_mampu', $surat_keteranga_tidak_mampu);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
     public function update_slip_gaji_ayah($email,$slip_gaji_ayah){
            $this->db->set('slip_gaji_ayah', $slip_gaji_ayah);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_slip_gaji_ibu($email,$slip_gaji_ibu){
            $this->db->set('slip_gaji_ibu', $slip_gaji_ibu);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_pembayaran_listrik($email,$pembayaran_listrik){
            $this->db->set('pembayaran_listrik', $pembayaran_listrik);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_sewa_rumah($email,$sewa_rumah){
            $this->db->set('sewa_rumah', $sewa_rumah);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_sertifikat($email,$sertifikat){
            $this->db->set('sertifikat', $sertifikat);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_sk_organisasi($email,$sk_organisasi){
            $this->db->set('sk_organisasi', $sk_organisasi);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */
	function validate($user_name, $password)
	{
		$this->db->where('email', $user_name);
		$this->db->where('password', $password);
		$query = $this->db->get('membership')->num_rows();
		
		if($query == 1)
		{
			return true;
		}		
	}

	function set_status($email, $status)
	{
		$this->db->where('email', $email);
		$this->db->update('membership', array('status' => $status));
	}

	function set_foto_pribadi_path($email, $foto_pribadi)
	{
		$this->db->set('foto_pribadi', $foto_pribadi);
		$this->db->where('email', $email);
		$this->db->update('membership');
	}

 	public function get_data_user($email)
    {
		$this->db->select('*');
		$this->db->from('membership');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array(); 
    }

    public function get_status($email)
    {
		$this->db->select('status');
		$this->db->from('membership');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array(); 
    }

     public function get_path_foto_pribadi($email)
    {
		$this->db->select('foto_pribadi');
		$this->db->from('membership');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array(); 
    }

    /**
    * Serialize the session data stored in the database, 
    * store it in a new array and return it to the controller 
    * @return array
    */
	function get_db_session_data()
	{
		$query = $this->db->select('user_data')->get('ci_sessions');
		$user = array(); /* array to store the user data we fetch */
		foreach ($query->result() as $row)
		{
		    $udata = unserialize($row->user_data);
		    /* put data in array using username as key */
		    $user['user_name'] = $udata['email']; 
		    $user['is_logged_in'] = $udata['is_logged_in']; 
		}
		return $user;
	}
	
    /**
    * Store the new user's data into the database
    * @return boolean - check the insert
    */	
	function create_member($foto_pribadi)
	{

		$this->db->where('email', $this->input->post('email'));
		$query = $this->db->get('membership');

        if($query->num_rows > 0){
        	echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
			  echo "Email Telah Terdaftar";	
			echo '</strong></div>';
		}else{
			$jumlah_id=$this->db->count_all_results('membership');
			$jumlah_id =$jumlah_id+1;
			$jumlah_id = str_pad($jumlah_id, 3, '0', STR_PAD_LEFT);
			$asal_daerah=$this->input->post('asal_daerah');
			$id_user=$jumlah_id.$asal_daerah."2018";
			$new_member_insert_data = array(
				'id'=> $id_user,
				'nama' => $this->input->post('nama'),
				'asal_daerah' => $this->input->post('asal_daerah'),
				'email' => $this->input->post('email'),	
				'foto_pribadi' => $foto_pribadi,		
				'password' => md5($this->input->post('password'))						
			);
			$email=$this->input->post('email');
			

			$insert = $this->db->insert('membership', $new_member_insert_data);
			
		    return $insert;
		}
	      
	}//create_member
}

