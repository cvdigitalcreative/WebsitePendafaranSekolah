<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        $this->load->model('Data_Admin');
        
      
    }
     function __encrip_password($password) {
        return md5($password);
    }

    function validate_credentials()
	{	
		$user_name = $this->input->post('email');
		$password = $this->__encrip_password($this->input->post('password'));
		$is_valid = $this->Data_Admin->validate($user_name, $password);
		
		if($is_valid)
		{
			$user_data=$this->Data_Admin->get_data_admin($user_name);
			
			
			$data = array(
				'user_name' => $user_name,
				'role' => $user_data[0]['role'],
				'id' => $user_data[0]['id'],
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('Admin/home');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('admin/daftar', $data);	
		}
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function daftar()
	{
		$this->load->view('admin/daftar');
	}

	function create_member()
	{
		
					
			if
		           	($query = $this->Users_model->create_member($foto_pribadi)
		           	)
				{
					redirect('Admin/daftar');			
				}
				else
				{
					$this->load->view('daftar');			
				}
	       

			
	}


	public function home(){
		$data['seluruh_peserta']= $this->Data_Admin->count_jumlah_seluruh_peserta();
		$data['register_awal']= $this->Data_Admin->count_jumlah_registrasi_awal();
		$data['register_form']= $this->Data_Admin->count_jumlah_registrasi_form();
		$data['register_upload']= $this->Data_Admin->count_jumlah_registrasi_upload();
		$this->load->view('admin/homepage',$data);
	}

	public function list_siswa_fase_1()
	{
		$data['fase_1']= $this->Data_Admin->get_all_data_fase_1();
		$this->load->view('admin/list_siswa',$data);
	}

	public function list_siswa_fase_2()
	{
		$data['fase_2']= $this->Data_Admin->get_all_data_fase_2();
		$this->load->view('admin/list_siswa_fase_2',$data);
	}

	public function list_siswa_lulus()
	{
		$data['siswa_all']= $this->Data_Admin->get_siswa_lulus();
		$this->load->view('admin/list_siswa_lulus',$data);
	}

	public function list_siswa_all()
	{
		$data['siswa_all']= $this->Data_Admin->get_all_data_();
		$this->load->view('admin/list_all',$data);
	}

	public function update_status_fase(){
		$email=$this->input->post('email');
		$status_fase=$this->input->post('status_fase');
		
		
		 $this->Data_Admin->update_status_fase($email,$status_fase);
		 
		  redirect('/Admin/list_siswa_all', 'refresh');
	}

	public function list_siswa_fase_3_notes()
	{
		$data['fase_3']= $this->Data_Admin->get_notes();
		$this->load->view('admin/list_notes',$data);
	}

	public function update_notes(){
		$email=$this->input->post('email');
		$notes=$this->input->post('notes');
		
		 $this->Data_Admin->update_status_notes($email);
		 $this->Data_Admin->update_notes($email,$notes);
		 
		  redirect('/Admin/list_siswa_fase_3_notes', 'refresh');
	}


	public function list_siswa_fase_3_referensi()
	{
		$data['fase_3']= $this->Data_Admin->get_referensi();
		$this->load->view('admin/list_referensi_guru',$data);
	}

	public function update_skor_referensi(){
		$email=$this->input->post('email');
		$skor_referensi=$this->input->post('skor_referensi');
		
		 $this->Data_Admin->update_status_referensi($email);
		 $this->Data_Admin->update_skor_referensi($email,$skor_referensi);
		 
		  redirect('/Admin/list_siswa_fase_3_referensi', 'refresh');
	}

	public function list_siswa_fase_3_juara_umum()
	{
		$data['fase_3']= $this->Data_Admin->get_juara_umum();
		$this->load->view('admin/list_juara_umum',$data);
	}

	public function update_skor_juara_umum(){
		$email=$this->input->post('email');
		$skor_juara_umum=$this->input->post('skor_juara_umum');
		
		 $this->Data_Admin->update_status_juara_umum($email);
		 if($$skor_juara_umum<=3){
		 	$this->Data_Admin->update_skor_juara_umum($email,3);
		 }else if($$skor_juara_umum>=4){
		 	$this->Data_Admin->update_skor_juara_umum($email,6);
		 }
		 
		 
		  redirect('/Admin/list_siswa_fase_3_juara_umum', 'refresh');
	}

	public function list_siswa_fase_3_juara()
	{
		$data['fase_3']= $this->Data_Admin->get_juara();
		$this->load->view('admin/list_juara',$data);
	}

	public function update_skor_juara(){
		$email=$this->input->post('email');
		$skor_juara=$this->input->post('skor_juara');
		
		 $this->Data_Admin->update_status_juara($email);
		 $this->Data_Admin->update_skor_juara($email,$skor_juara);
		 
		  redirect('/Admin/list_siswa_fase_3_juara', 'refresh');
	}

	public function list_siswa_fase_3_essai()
	{
		$data['fase_3']= $this->Data_Admin->get_essai();
		$this->load->view('admin/list_essai',$data);
	}
	public function update_skor_essai(){
		$email=$this->input->post('email');
		$skor_essai=$this->input->post('skor_essai');
		
		 $this->Data_Admin->update_status_essai($email);
		 $this->Data_Admin->update_skor_essai($email,$skor_essai);
		 
		  redirect('/Admin/list_siswa_fase_3_essai', 'refresh');
	}

	public function list_siswa_fase_3_sertifikat_tingkat_nasional()
	{
		$data['fase_3']= $this->Data_Admin->get_jumlah_sertifikat_tingkat_nasional();
		$this->load->view('admin/list_sertifikat_nasional',$data);
	}
	public function update_sertifikat_nasional_with_post(){
		$email=$this->input->post('email');
		$jumlah_sertifikat_nasional=$this->input->post('jumlah_sertifikat_nasional');
		
		 $this->Data_Admin->update_status_sertifikat_nasional($email);
		 if($update_status_sertifikat_kota==1){
		 	$this->Data_Admin->update_skor_sertifikat_nasional($email,3);
		 }else if($update_status_sertifikat_kota==2){
		 	$this->Data_Admin->update_skor_sertifikat_nasional($email,6);
		 }else if($update_status_sertifikat_kota==3){
		 	$this->Data_Admin->update_skor_sertifikat_nasional($email,9);
		 }else if($update_status_sertifikat_kota==4){
		 	$this->Data_Admin->update_skor_sertifikat_nasional($email,12);
		 }else if($update_status_sertifikat_kota>=5){
		 	$this->Data_Admin->update_skor_sertifikat_nasional($email,15);
		 }
		  redirect('/Admin/list_siswa_fase_3_sertifikat_tingkat_nasional', 'refresh');
	}

	public function update_sertifikat_nasional(){
		$email=$_GET['email'];
		$jumlah_sertifikat_nasional=$_GET['jumlah_sertifikat_nasional'];

		 $this->Data_Admin->update_status_sertifikat_nasional($email);
		 if($update_status_sertifikat_kota==1){
		 	$this->Data_Admin->update_skor_sertifikat_nasional($email,3);
		 }else if($update_status_sertifikat_kota==2){
		 	$this->Data_Admin->update_skor_sertifikat_nasional($email,6);
		 }else if($update_status_sertifikat_kota==3){
		 	$this->Data_Admin->update_skor_sertifikat_nasional($email,9);
		 }else if($update_status_sertifikat_kota==4){
		 	$this->Data_Admin->update_skor_sertifikat_nasional($email,12);
		 }else if($update_status_sertifikat_kota>=5){
		 	$this->Data_Admin->update_skor_sertifikat_nasional($email,15);
		 }
		  redirect('/Admin/list_siswa_fase_3_sertifikat_tingkat_nasional', 'refresh');
	}


	public function list_siswa_fase_3_sertifikat_tingkat_provinsi()
	{
		$data['fase_3']= $this->Data_Admin->get_jumlah_sertifikat_tingkat_provinsi();
		$this->load->view('admin/list_sertifikat_provinsi',$data);
	}
	public function update_sertifikat_provinsi_with_post(){
		$email=$this->input->post('email');
		$jumlah_sertifikat_provinsi=$this->input->post('jumlah_sertifikat_provinsi');
		
		 $this->Data_Admin->update_status_sertifikat_provinsi($email);
		 if($update_status_sertifikat_provinsi==1){
		 	$this->Data_Admin->update_skor_sertifikat_provinsi($email,2);
		 }else if($update_status_sertifikat_provinsi==2){
		 	$this->Data_Admin->update_skor_sertifikat_provinsi($email,4);
		 }else if($update_status_sertifikat_provinsi==3){
		 	$this->Data_Admin->update_skor_sertifikat_provinsi($email,6);
		 }else if($update_status_sertifikat_provinsi==4){
		 	$this->Data_Admin->update_skor_sertifikat_provinsi($email,8);
		 }else if($update_status_sertifikat_provinsi>=5){
		 	$this->Data_Admin->update_skor_sertifikat_provinsi($email,10);
		 }
		  redirect('/Admin/list_siswa_fase_3_sertifikat_tingkat_provinsi', 'refresh');
	}

	public function update_sertifikat_provinsi(){
		$email=$_GET['email'];
		$jumlah_sertifikat_provinsi=$_GET['jumlah_sertifikat_provinsi'];

		$this->Data_Admin->update_status_sertifikat_provinsi($email);
		 if($update_status_sertifikat_provinsi==1){
		 	$this->Data_Admin->update_skor_sertifikat_provinsi($email,2);
		 }else if($update_status_sertifikat_provinsi==2){
		 	$this->Data_Admin->update_skor_sertifikat_provinsi($email,4);
		 }else if($update_status_sertifikat_provinsi==3){
		 	$this->Data_Admin->update_skor_sertifikat_provinsi($email,6);
		 }else if($update_status_sertifikat_provinsi==4){
		 	$this->Data_Admin->update_skor_sertifikat_provinsi($email,8);
		 }else if($update_status_sertifikat_provinsi>=5){
		 	$this->Data_Admin->update_skor_sertifikat_provinsi($email,10);
		 }
		  redirect('/Admin/list_siswa_fase_3_sertifikat_tingkat_provinsi', 'refresh');
	}

	public function list_siswa_fase_3_sertifikat_tingkat_kota()
	{
		$data['fase_3']= $this->Data_Admin->get_jumlah_sertifikat_tingkat_kota();
		$this->load->view('admin/list_sertifikat_kota',$data);
	}
	public function update_sertifikat_kota_with_post(){
		$email=$this->input->post('email');
		$jumlah_sertifikat_kota=$this->input->post('jumlah_sertifikat_kota');
		
		 $this->Data_Admin->update_status_sertifikat_kota($email);
		 if($update_status_sertifikat_kota==1){
		 	$this->Data_Admin->update_skor_sertifikat_kota($email,2);
		 }else if($update_status_sertifikat_kota==2){
		 	$this->Data_Admin->update_skor_sertifikat_kota($email,4);
		 }else if($update_status_sertifikat_kota==3){
		 	$this->Data_Admin->update_skor_sertifikat_kota($email,6);
		 }else if($update_status_sertifikat_kota==4){
		 	$this->Data_Admin->update_skor_sertifikat_kota($email,8);
		 }else if($update_status_sertifikat_kota>=5){
		 	$this->Data_Admin->update_skor_sertifikat_kota($email,10);
		 }
		  redirect('/Admin/list_siswa_fase_3_sertifikat_tingkat_kota', 'refresh');
	}

	public function update_sertifikat_kota(){
		$email=$_GET['email'];
		$jumlah_sertifikat_kota=$_GET['jumlah_sertifikat_kota'];

		$this->Data_Admin->update_status_sertifikat_kota($email);
		 if($update_status_sertifikat_kota==1){
		 	$this->Data_Admin->update_skor_sertifikat_kota($email,2);
		 }else if($update_status_sertifikat_kota==2){
		 	$this->Data_Admin->update_skor_sertifikat_kota($email,4);
		 }else if($update_status_sertifikat_kota==3){
		 	$this->Data_Admin->update_skor_sertifikat_kota($email,6);
		 }else if($update_status_sertifikat_kota==4){
		 	$this->Data_Admin->update_skor_sertifikat_kota($email,8);
		 }else if($update_status_sertifikat_kota>=5){
		 	$this->Data_Admin->update_skor_sertifikat_kota($email,10);
		 }
		  redirect('/Admin/list_siswa_fase_3_sertifikat_tingkat_kota', 'refresh');
	}

	
	public function list_siswa_fase_3_olahraga()
	{
		$data['fase_3']= $this->Data_Admin->get_jumlah_prestasi_olahraga();
		$this->load->view('admin/list_olahraga',$data);
	}
	public function update_olahraga_with_post(){
		$email=$this->input->post('email');
		$jumlah_juara_olahraga=$this->input->post('jumlah_juara_olahraga');
		
		 $this->Data_Admin->update_status_keahlian_bidang($email);
		 if($jumlah_juara_olahraga>=1){
		 	$this->Data_Admin->update_skor_keahlian_bidang($email,1);
		 }
		  redirect('/Admin/list_siswa_fase_3_olahraga', 'refresh');
	}

	public function update_olahraga(){
		$email=$_GET['email'];
		$jumlah_juara_olahraga=$_GET['jumlah_juara_olahraga'];
		
		 $this->Data_Admin->update_status_keahlian_bidang($email);
		 if($jumlah_juara_olahraga>=1){
		 	$this->Data_Admin->update_skor_keahlian_bidang($email,1);
		 }
		  redirect('/Admin/list_siswa_fase_3_olahraga', 'refresh');
	}

	public function list_siswa_fase_3_seni()
	{
		$data['fase_3']= $this->Data_Admin->get_jumlah_prestasi_seni();
		$this->load->view('admin/list_prestasi_seni',$data);
	}
	public function update_seni_with_post(){
		$email=$this->input->post('email');
		$jumlah_juara_seni=$this->input->post('jumlah_juara_seni');
		
		 $this->Data_Admin->update_status_kreatifitas($email);
		 if($jumlah_juara_seni>=1){
		 	$this->Data_Admin->update_skor_kreatifitas($email,1);
		 }
		  redirect('/Admin/list_siswa_fase_3_seni', 'refresh');
	}

	public function update_seni(){
		$email=$_GET['email'];
		$jumlah_juara_seni=$_GET['jumlah_juara_seni'];
		
		 $this->Data_Admin->update_status_kreatifitas($email);
		 if($jumlah_juara_seni>=1){
		 	$this->Data_Admin->update_skor_kreatifitas($email,1);
		 }
		  redirect('/Admin/list_siswa_fase_3_seni', 'refresh');
	}


	public function list_siswa_fase_3_organisasi()
	{
		$data['fase_3']= $this->Data_Admin->get_jumlah_organisasi();
		$this->load->view('admin/list_organisasi',$data);
	}
	public function update_organisasi_with_post(){
		$email=$this->input->post('email');
		$jumlah_organisasi=$this->input->post('jumlah_organisasi');
		
		 $this->Data_Admin->update_status_organisasi($email);
		 if($jumlah_organisasi==1){
		 	$this->Data_Admin->update_skor_organisasi($email,1);
		 }else if( $jumlah_organisasi==2 ){
		 	$this->Data_Admin->update_skor_organisasi($email,1);
		 }else if($jumlah_organisasi>=3 ){
		 	$this->Data_Admin->update_skor_organisasi($email,2);
		 }
		  redirect('/Admin/list_siswa_fase_3_organisasi', 'refresh');
	}

	public function update_organisasi(){
		$email=$_GET['email'];
		$jumlah_organisasi=$_GET['jumlah_organisasi'];
		
		 $this->Data_Admin->update_status_organisasi($email);
		 if($jumlah_organisasi==1){
		 	$this->Data_Admin->update_skor_organisasi($email,1);
		 }else if( $jumlah_organisasi==2 ){
		 	$this->Data_Admin->update_skor_organisasi($email,1);
		 }else if($jumlah_organisasi>=3 ){
		 	$this->Data_Admin->update_skor_organisasi($email,2);
		 }
		  redirect('/Admin/list_siswa_fase_3_organisasi', 'refresh');
	}

	
	public function list_siswa_fase_3_kepemimpinan()
	{
		$data['fase_3']= $this->Data_Admin->get_jumlah_kepimpinan();
		$this->load->view('admin/kepemimpinan_list',$data);
	}

	public function update_kepemimpinan_with_post(){
		$email=$this->input->post('email');
		$jumlah_kepimpinan=$this->input->post('jumlah_kepimpinan');
		
		 $this->Data_Admin->update_status_kepemimpinan($email);
		 if($jumlah_kepimpinan==1){
		 	$this->Data_Admin->update_skor_kepimpinan($email,1);
		 }else if( $jumlah_kepimpinan==2 ){
		 	$this->Data_Admin->update_skor_kepimpinan($email,2);
		 }else if($jumlah_kepimpinan>=3 ){
		 	$this->Data_Admin->update_skor_kepimpinan($email,3);
		 }
		  redirect('/Admin/list_siswa_fase_3_kepemimpinan', 'refresh');
	}

	public function update_kepemimpinan(){
		$email=$_GET['email'];
		$jumlah_kepimpinan=$_GET['jumlah_kepimpinan'];
		
		 $this->Data_Admin->update_status_kepemimpinan($email);
		 if($jumlah_kepimpinan==1){
		 	$this->Data_Admin->update_skor_kepimpinan($email,1);
		 }else if( $jumlah_kepimpinan==2 ){
		 	$this->Data_Admin->update_skor_kepimpinan($email,2);
		 }else if($jumlah_kepimpinan>=3 ){
		 	$this->Data_Admin->update_skor_kepimpinan($email,3);
		 }
		  redirect('/Admin/list_siswa_fase_3_kepemimpinan', 'refresh');
	}

	public function list_siswa_fase_3_rata_rata_rapor()
	{
		$data['fase_3']= $this->Data_Admin->nilai_rata_rata_semester_seluruh_siswa();
		$this->load->view('admin/nilai_rata_rata_keseluruhan',$data);
	}

	public function update_raport_with_post(){
		$email=$this->input->post('email');
		$jumlah_kepimpinan=$this->input->post('jumlah_kepimpinan');
		
		 $this->Data_Admin->update_status_raport($email);
		 if($nilai_rata_rata<=81.99){
		 	$this->Data_Admin->update_skor_raport($email,0);
		 }else if($nilai_rata_rata>=82.0 and $nilai_rata_rata<=84.0  ){
		 	$this->Data_Admin->update_skor_raport($email,1);
		 }else if($nilai_rata_rata>=84.1 and $nilai_rata_rata<=86.0  ){
		 	$this->Data_Admin->update_skor_raport($email,2);
		 }else if($nilai_rata_rata>=86.1 and $nilai_rata_rata<=88.0  ){
		 	$this->Data_Admin->update_skor_raport($email,3);
		 }else if($nilai_rata_rata>=88.1 and $nilai_rata_rata<=90.0  ){
		 	$this->Data_Admin->update_skor_raport($email,4);
		 }else if($nilai_rata_rata>=90.1 and $nilai_rata_rata<=92.0  ){
		 	$this->Data_Admin->update_skor_raport($email,5);
		 }else if($nilai_rata_rata>=82.1  ){
		 	$this->Data_Admin->update_skor_raport($email,6);
		 }
		  redirect('/Admin/list_siswa_fase_3_rata_rata_rapor', 'refresh');
	}

	public function update_raport(){
		$email=$_GET['email'];
		$nilai_rata_rata=$_GET['nilai_rata_rata'];
		
		 $this->Data_Admin->update_status_raport($email);
		 if($nilai_rata_rata<=81.99){
		 	$this->Data_Admin->update_skor_raport($email,0);
		 }else if($nilai_rata_rata>=82.0 and $nilai_rata_rata<=84.0  ){
		 	$this->Data_Admin->update_skor_raport($email,1);
		 }else if($nilai_rata_rata>=84.1 and $nilai_rata_rata<=86.0  ){
		 	$this->Data_Admin->update_skor_raport($email,2);
		 }else if($nilai_rata_rata>=86.1 and $nilai_rata_rata<=88.0  ){
		 	$this->Data_Admin->update_skor_raport($email,3);
		 }else if($nilai_rata_rata>=88.1 and $nilai_rata_rata<=90.0  ){
		 	$this->Data_Admin->update_skor_raport($email,4);
		 }else if($nilai_rata_rata>=90.1 and $nilai_rata_rata<=92.0  ){
		 	$this->Data_Admin->update_skor_raport($email,5);
		 }else if($nilai_rata_rata>=82.1  ){
		 	$this->Data_Admin->update_skor_raport($email,6);
		 }
		  redirect('/Admin/list_siswa_fase_3_rata_rata_rapor', 'refresh');
	}

	public function update_melengkapi_data(){
		$email=$_GET['email'];

		 $this->Data_Admin->update_melengkapi_data($email);
		  redirect('/Admin/list_siswa_fase_1', 'refresh');
	}

	  public function update_fotokopi_rapor(){
            $email=$_GET['email'];

		 $this->Data_Admin->update_fotokopi_rapor($email);
		  redirect('/Admin/list_siswa_fase_1', 'refresh');
           
    }

    public function update_pas_foto(){
           $email=$_GET['email'];

		 $this->Data_Admin->update_pas_foto($email);
		  redirect('/Admin/list_siswa_fase_1', 'refresh');
           
    }

    public function update_fotokopi_ktp(){
              $email=$_GET['email'];

		 $this->Data_Admin->update_fotokopi_ktp($email);
		  redirect('/Admin/list_siswa_fase_1', 'refresh');
           
    }

     public function update_fotokopi_kk(){
             $email=$_GET['email'];

		 $this->Data_Admin->update_fotokopi_kk($email);
		  redirect('/Admin/list_siswa_fase_1', 'refresh');
           
    }
    
    public function update_formulir_referensi(){
              $email=$_GET['email'];

		 $this->Data_Admin->update_formulir_referensi($email);
		  redirect('/Admin/list_siswa_fase_1', 'refresh');
           
    }

    public function update_fotokopi_rekening_listrik(){
              $email=$_GET['email'];

		 $this->Data_Admin->update_fotokopi_rekening_listrik($email);
		  redirect('/Admin/list_siswa_fase_1', 'refresh');
           
    }

    public function update_fotokopi_slip_gaji(){
             $email=$_GET['email'];

		 $this->Data_Admin->update_fotokopi_slip_gaji($email);
		  redirect('/Admin/list_siswa_fase_1', 'refresh');
           
    }
    public function update_surat_keterangan_tidak_mampu(){
           $email=$_GET['email'];

		 $this->Data_Admin->update_surat_keterangan_tidak_mampu($email);
		  redirect('/Admin/list_siswa_fase_1', 'refresh');
           
    }
    public function update_fotokopi_ijazah(){
            $email=$_GET['email'];

		 $this->Data_Admin->update_fotokopi_ijazah($email);
		  redirect('/Admin/list_siswa_fase_1', 'refresh');
           
    }
	

     public function update_wni_domisili(){
            $email=$_GET['email'];

		 $this->Data_Admin->update_wni_domisili($email);
		  redirect('/Admin/list_siswa_fase_2', 'refresh');
           
    }

     public function update_usia_diatas_14(){
            $email=$_GET['email'];

		 $this->Data_Admin->update_usia_diatas_14($email);
		  redirect('/Admin/list_siswa_fase_2', 'refresh');
           
    }

     public function update_rata_rata_rapor(){
             $email=$_GET['email'];

		 $this->Data_Admin->update_rata_rata_rapor($email);
		  redirect('/Admin/list_siswa_fase_2', 'refresh');
           
    }

     public function update_peringkat_10(){
            $email=$_GET['email'];

		 $this->Data_Admin->update_peringkat_10($email);
		  redirect('/Admin/list_siswa_fase_2', 'refresh');
           
    }

     public function update_tagihan_listrik(){
            $email=$_GET['email'];

		 $this->Data_Admin->update_tagihan_listrik($email);
		  redirect('/Admin/list_siswa_fase_2', 'refresh');
           
    }

      public function update_dukungan_referensi(){
            $email=$_GET['email'];

		 $this->Data_Admin->update_dukungan_referensi($email);
		  redirect('/Admin/list_siswa_fase_2', 'refresh');
           
    }

      public function update_lulusan_maksimal(){
             $email=$_GET['email'];

		 $this->Data_Admin->update_lulusan_maksimal($email);
		  redirect('/Admin/list_siswa_fase_2', 'refresh');
           
    }

    public function update_tidak_sedang_menjabat(){
            $email=$_GET['email'];

		 $this->Data_Admin->update_tidak_sedang_menjabat($email);
		  redirect('/Admin/list_siswa_fase_2', 'refresh');
           
    }
    function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}	
	
}
