<?php
class Data_siswa extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
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
         
        if(!$this->session->userdata('is_logged_in')){
            redirect('welcome');
        }
    }
 

    public function add_data_pribadi_all()
    {
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

            //form validation
            // $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap');
            // $this->form_validation->set_rules('nisn', 'nisn');
            // $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin');
            // $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir');
            // $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir');
            // $this->form_validation->set_rules('kewarganegaraan', 'kewarganegaraan');
            // $this->form_validation->set_rules('agama', 'agama');
            // $this->form_validation->set_rules('golongan_darah', 'golongan_darah');
            // $this->form_validation->set_rules('berat_badan', 'berat_badan');
            // $this->form_validation->set_rules('tinggi_badan', 'tinggi_badan');
            // $this->form_validation->set_rules('alamat', 'alamat');
            // $this->form_validation->set_rules('kota', 'kota');
            // $this->form_validation->set_rules('nomor_telpon', 'nomor_telpon');
            // $this->form_validation->set_rules('informasi_beasiswa', 'informasi_beasiswa');
            // $this->form_validation->set_rules('nama_saudara', 'nama_saudara');
            // $this->form_validation->set_rules('nama_hubungan', 'nama_hubungan');
            $email=$_SESSION["user_name"];
            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'nisn' => $this->input->post('nisn'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                    'agama' => $this->input->post('agama'),
                    'golongan_darah' => $this->input->post('golongan_darah'),
                    'berat_badan' => $this->input->post('berat_badan'),
                    'tinggi_badan' => $this->input->post('tinggi_badan'),
                    'alamat' => $this->input->post('alamat'),
                    'kota' => $this->input->post('kota'),
                    'nomor_telpon' => $this->input->post('nomor_telpon'),
                    'informasi_beasiswa' => substr(implode(', ', $this->input->post('informasi_beasiswa')), 0),
                    'nama_saudara' => $this->input->post('nama_saudara'),
                    'nama_hubungan' => $this->input->post('nama_hubungan')
                );
            $this->Data_pribadi->add_data_pribadi($data_to_store,$email);

            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'asal_sekolah' => $this->input->post('asal_sekolah'),
                    'tanggal_masuk' => $this->input->post('tanggal_masuk'),
                    'alamat_sekolah' => $this->input->post('alamat_sekolah'),
                    'nama_kepala_sekolah' => $this->input->post('nama_kepala_sekolah'),
                    'nomor_telpon_sekolah' => $this->input->post('nomor_telpon_sekolah')
                );
            $this->Data_sekolah->add_data_sekolah($data_to_store,$email);

            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nilai_mtk_semester_1' => $this->input->post('nilai_mtk_semester_1'),
                    'nilai_bahasa_indonesia_semester_1' => $this->input->post('nilai_bahasa_indonesia_semester_1'),
                    'nilai_bahasa_inggris_semester_1' => $this->input->post('nilai_bahasa_inggris_semester_1'),
                    'nilai_ipa_semester_1' => $this->input->post('nilai_ipa_semester_1'),
                    'nilai_ips_semester_1' => $this->input->post('nilai_ips_semester_1'),

                    'nilai_mtk_semester_2' => $this->input->post('nilai_mtk_semester_2'),
                    'nilai_bahasa_indonesia_semester_2' => $this->input->post('nilai_bahasa_indonesia_semester_2'),
                    'nilai_bahasa_inggris_semester_2' => $this->input->post('nilai_bahasa_inggris_semester_2'),
                    'nilai_ipa_semester_2' => $this->input->post('nilai_ipa_semester_2'),
                    'nilai_ips_semester_2' => $this->input->post('nilai_ips_semester_2'),

                    'nilai_mtk_semester_3' => $this->input->post('nilai_mtk_semester_3'),
                    'nilai_bahasa_indonesia_semester_3' => $this->input->post('nilai_bahasa_indonesia_semester_3'),
                    'nilai_bahasa_inggris_semester_3' => $this->input->post('nilai_bahasa_inggris_semester_3'),
                    'nilai_ipa_semester_3' => $this->input->post('nilai_ipa_semester_3'),
                    'nilai_ips_semester_3' => $this->input->post('nilai_ips_semester_3'),

                    'nilai_mtk_semester_4' => $this->input->post('nilai_mtk_semester_4'),
                    'nilai_bahasa_indonesia_semester_4' => $this->input->post('nilai_bahasa_indonesia_semester_4'),
                    'nilai_bahasa_inggris_semester_4' => $this->input->post('nilai_bahasa_inggris_semester_4'),
                    'nilai_ipa_semester_4' => $this->input->post('nilai_ipa_semester_4'),
                    'nilai_ips_semester_4' => $this->input->post('nilai_ips_semester_4'),

                    'nilai_mtk_semester_5' => $this->input->post('nilai_mtk_semester_5'),
                    'nilai_bahasa_indonesia_semester_5' => $this->input->post('nilai_bahasa_indonesia_semester_5'),
                    'nilai_bahasa_inggris_semester_5' => $this->input->post('nilai_bahasa_inggris_semester_5'),
                    'nilai_ipa_semester_5' => $this->input->post('nilai_ipa_semester_5'),
                    'nilai_ips_semester_5' => $this->input->post('nilai_ips_semester_5')
                );
            $this->Data_nilai_raport->add_data_nilai_raport($data_to_store,$email);


            $nama_organisasi = $this->input->post('nama_organisasi');
            $jabatan_organisasi = $this->input->post('jabatan_organisasi');
            $periode_organisasi = $this->input->post('periode_organisasi');
            $memiliki_sk = $this->input->post('memiliki_sk');
            for($i=0; $i<sizeof($nama_organisasi); $i++){
                $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_organisasi' => $nama_organisasi[$i],
                    'jabatan_organisasi' => $jabatan_organisasi[$i],
                    'periode_organisasi' =>  $periode_organisasi[$i],
                    'memiliki_sk' => $memiliki_sk[$i]
                );
                $this->Data_organisasi->add_data_organisasi($data_to_store,$email);

            }
            
            $nama_kegiatan = $this->input->post('nama_kegiatan');
            $tingkat_kejuaraan = $this->input->post('tingkat_kejuaraan');
            $juara = $this->input->post('juara');
            $kategori_kegiatan = $this->input->post('kategori_kegiatan');
            $tahun_juara = $this->input->post('tahun_juara');
            $memiliki_sk_prestasi = $this->input->post('memiliki_sk_prestasi');
            for($i=0; $i<sizeof($nama_kegiatan); $i++){
                $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_kegiatan' => $nama_kegiatan[$i],
                    'tingkat_kejuaraan' => $tingkat_kejuaraan[$i],
                    'juara' =>  $juara[$i],
                    'kategori_kegiatan' => $kategori_kegiatan[$i],
                    'tahun_juara' =>  $tahun_juara[$i],
                    'memiliki_sk_prestasi' => $memiliki_sk_prestasi[$i]
                );

                $this->Data_prestasi->add_data_prestasi($data_to_store,$email);
            }
             $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'essai' => $this->input->post('essai')
                );
            $this->Data_essai->add_data_essai($data_to_store,$email);
           
            redirect('Home/daftar');
            
        // //fetch manufactures data to populate the select field
        // $data['manufactures'] = $this->manufacturers_model->get_manufacturers();
        // //load the view
        // $data['main_content'] = 'admin/products/add';
        // $this->load->view('includes/template', $data);  
       } 
    }  


    public function add_data_orang_tua()
    {
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

            
            $email=$_SESSION["user_name"];
            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_ayah_kandung' => $this->input->post('nama_ayah_kandung'),
                    'tanggal_lahir_ayah_kandung' => $this->input->post('tanggal_lahir_ayah_kandung'),
                    'tempat_lahir_ayah_kandung' => $this->input->post('tempat_lahir_ayah_kandung'),
                    'nomor_ktp_ayah_kandung' => $this->input->post('nomor_ktp_ayah_kandung'),
                    'alamat_ayah_kandung' => $this->input->post('alamat_ayah_kandung'),
                    'nomor_telepon_ayah_kandung' => $this->input->post('nomor_telepon_ayah_kandung'),
                    'status_ayah_kandung' => $this->input->post('status_ayah_kandung'),
                    'pendidikan_terakhir_ayah_kandung' => $this->input->post('pendidikan_terakhir_ayah_kandung'),
                    'nama_institusi_ayah_kandung' => $this->input->post('nama_institusi_ayah_kandung'),
                    'status_pekerjaan_ayah_kandung' => $this->input->post('status_pekerjaan_ayah_kandung'),
                    'jenis_pekerjaan_ayah_kandung' => $this->input->post('jenis_pekerjaan_ayah_kandung'),
                    'nama_perusahaan_ayah_kandung' => $this->input->post('nama_perusahaan_ayah_kandung'),
                    'jabatan_ayah_kandung' => $this->input->post('jabatan_ayah_kandung'),
                    'tahun_mulai_bekerja_ayah_kandung' => $this->input->post('tahun_mulai_bekerja_ayah_kandung'),
                    'gaji_pokok_ayah_kandung' => $this->input->post('gaji_pokok_ayah_kandung')
                );
            $this->Data_ayah_kandung->add_data_ayah_kandung($data_to_store,$email);

          
            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_ibu_kandung' => $this->input->post('nama_ibu_kandung'),
                    'tanggal_lahir_ibu_kandung' => $this->input->post('tanggal_lahir_ibu_kandung'),
                    'tempat_lahir_ibu_kandung' => $this->input->post('tempat_lahir_ibu_kandung'),
                    'nomor_ktp_ibu_kandung' => $this->input->post('nomor_ktp_ibu_kandung'),
                    'alamat_ibu_kandung' => $this->input->post('alamat_ibu_kandung'),
                    'nomor_telepon_ibu_kandung' => $this->input->post('nomor_telepon_ibu_kandung'),
                    'status_ibu_kandung' => $this->input->post('status_ibu_kandung'),
                    'pendidikan_terakhir_ibu_kandung' => $this->input->post('pendidikan_terakhir_ibu_kandung'),
                    'nama_institusi_ibu_kandung' => $this->input->post('nama_institusi_ibu_kandung'),
                    'status_pekerjaan_ibu_kandung' => $this->input->post('status_pekerjaan_ibu_kandung'),
                    'jenis_pekerjaan_ibu_kandung' => $this->input->post('jenis_pekerjaan_ibu_kandung'),
                    'nama_perusahaan_ibu_kandung' => $this->input->post('nama_perusahaan_ibu_kandung'),
                    'jabatan_ibu_kandung' => $this->input->post('jabatan_ibu_kandung'),
                    'tahun_mulai_bekerja_ibu_kandung' => $this->input->post('tahun_mulai_bekerja_ibu_kandung'),
                    'gaji_pokok_ibu_kandung' => $this->input->post('gaji_pokok_ibu_kandung')
                );
            $this->Data_ibu_kandung->add_data_ibu_kandung($data_to_store,$email);

            $nama_tanggungan = $this->input->post('nama_tanggungan');
            $usia = $this->input->post('usia');
            $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
            $hubungan_keluarga = $this->input->post('hubungan_keluarga');
            $sudah_bekerja = $this->input->post('sudah_bekerja');
            $dibiayai = $this->input->post('dibiayai');
            for($i=0; $i<sizeof($nama_tanggungan); $i++){
                $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_tanggungan' => $nama_tanggungan[$i],
                    'usia' => $usia[$i],
                    'pendidikan_terakhir' =>  $pendidikan_terakhir[$i],
                    'hubungan_keluarga' => $hubungan_keluarga[$i],
                    'sudah_bekerja' =>  $sudah_bekerja[$i],
                    'dibiayai' => $dibiayai[$i]
                );
                $this->Data_tanggungan_orang_tua->add_data_tanggungan_orang_tua($data_to_store,$email);

            }

            redirect('Home/daftar');
            
        // //fetch manufactures data to populate the select field
        // $data['manufactures'] = $this->manufacturers_model->get_manufacturers();
        // //load the view
        // $data['main_content'] = 'admin/products/add';
        // $this->load->view('includes/template', $data);  
       } 
    } 

     public function add_data_kesehataan()
    {
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

            //form validation
            // $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap');
            // $this->form_validation->set_rules('nisn', 'nisn');
            // $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin');
            // $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir');
            // $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir');
            // $this->form_validation->set_rules('kewarganegaraan', 'kewarganegaraan');
            // $this->form_validation->set_rules('agama', 'agama');
            // $this->form_validation->set_rules('golongan_darah', 'golongan_darah');
            // $this->form_validation->set_rules('berat_badan', 'berat_badan');
            // $this->form_validation->set_rules('tinggi_badan', 'tinggi_badan');
            // $this->form_validation->set_rules('alamat', 'alamat');
            // $this->form_validation->set_rules('kota', 'kota');
            // $this->form_validation->set_rules('nomor_telpon', 'nomor_telpon');
            // $this->form_validation->set_rules('informasi_beasiswa', 'informasi_beasiswa');
            // $this->form_validation->set_rules('nama_saudara', 'nama_saudara');
            // $this->form_validation->set_rules('nama_hubungan', 'nama_hubungan');
            $email=$_SESSION["user_name"];
            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_dokter_keluarga' => $this->input->post('nama_dokter_keluarga'),
                    'rumah_sakit' => $this->input->post('rumah_sakit'),
                    'memiliki_penyakit_jantung' => $this->input->post('memiliki_penyakit_jantung'),
                    'memiliki_penyakit_kanker' => $this->input->post('memiliki_penyakit_kanker'),
                    'memiliki_penyakit_kelainan_psikologis' => $this->input->post('memiliki_penyakit_kelainan_psikologis'),
                    'memiliki_penyakit_kelainan_syaraf' => $this->input->post('memiliki_penyakit_kelainan_syaraf'),
                    'memiliki_penyakit_kelainan_darah' => $this->input->post('memiliki_penyakit_kelainan_darah'),
                    'rawat_inap_dalam_dua_tahun_terakhir' => $this->input->post('rawat_inap_dalam_dua_tahun_terakhir'),
                    'dalam_masa_pengobatan' => $this->input->post('dalam_masa_pengobatan'),
                    'bantuan_medis' => $this->input->post('bantuan_medis'),
                    'kondisi_fisik_perhatiaan_khusus' => $this->input->post('kondisi_fisik_perhatiaan_khusus')
                );
            $this->Data_riwayat_kesehataan->add_data_riwayat_kesehataan($data_to_store,$email);

          
            

            redirect('Home/daftar');
            
        
       } 
    }     

    public function save_all_data()
    {
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {


            $email=$_SESSION["user_name"];
            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'nisn' => $this->input->post('nisn'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                    'agama' => $this->input->post('agama'),
                    'golongan_darah' => $this->input->post('golongan_darah'),
                    'berat_badan' => $this->input->post('berat_badan'),
                    'tinggi_badan' => $this->input->post('tinggi_badan'),
                    'alamat' => $this->input->post('alamat'),
                    'kota' => $this->input->post('kota'),
                    'nomor_telpon' => $this->input->post('nomor_telpon'),
                    'informasi_beasiswa' => substr(implode(', ', $this->input->post('informasi_beasiswa')), 0),
                    'nama_saudara' => $this->input->post('nama_saudara'),
                    'nama_hubungan' => $this->input->post('nama_hubungan')
                );
            $this->Data_pribadi->add_data_pribadi($data_to_store,$email);

            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'asal_sekolah' => $this->input->post('asal_sekolah'),
                    'tanggal_masuk' => $this->input->post('tanggal_masuk'),
                    'alamat_sekolah' => $this->input->post('alamat_sekolah'),
                    'nama_kepala_sekolah' => $this->input->post('nama_kepala_sekolah'),
                    'nomor_telpon_sekolah' => $this->input->post('nomor_telpon_sekolah')
                );
            $this->Data_sekolah->add_data_sekolah($data_to_store,$email);

            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nilai_mtk_semester_1' => $this->input->post('nilai_mtk_semester_1'),
                    'nilai_bahasa_indonesia_semester_1' => $this->input->post('nilai_bahasa_indonesia_semester_1'),
                    'nilai_bahasa_inggris_semester_1' => $this->input->post('nilai_bahasa_inggris_semester_1'),
                    'nilai_ipa_semester_1' => $this->input->post('nilai_ipa_semester_1'),
                    'nilai_ips_semester_1' => $this->input->post('nilai_ips_semester_1'),

                    'nilai_mtk_semester_2' => $this->input->post('nilai_mtk_semester_2'),
                    'nilai_bahasa_indonesia_semester_2' => $this->input->post('nilai_bahasa_indonesia_semester_2'),
                    'nilai_bahasa_inggris_semester_2' => $this->input->post('nilai_bahasa_inggris_semester_2'),
                    'nilai_ipa_semester_2' => $this->input->post('nilai_ipa_semester_2'),
                    'nilai_ips_semester_2' => $this->input->post('nilai_ips_semester_2'),

                    'nilai_mtk_semester_3' => $this->input->post('nilai_mtk_semester_3'),
                    'nilai_bahasa_indonesia_semester_3' => $this->input->post('nilai_bahasa_indonesia_semester_3'),
                    'nilai_bahasa_inggris_semester_3' => $this->input->post('nilai_bahasa_inggris_semester_3'),
                    'nilai_ipa_semester_3' => $this->input->post('nilai_ipa_semester_3'),
                    'nilai_ips_semester_3' => $this->input->post('nilai_ips_semester_3'),

                    'nilai_mtk_semester_4' => $this->input->post('nilai_mtk_semester_4'),
                    'nilai_bahasa_indonesia_semester_4' => $this->input->post('nilai_bahasa_indonesia_semester_4'),
                    'nilai_bahasa_inggris_semester_4' => $this->input->post('nilai_bahasa_inggris_semester_4'),
                    'nilai_ipa_semester_4' => $this->input->post('nilai_ipa_semester_4'),
                    'nilai_ips_semester_4' => $this->input->post('nilai_ips_semester_4'),

                    'nilai_mtk_semester_5' => $this->input->post('nilai_mtk_semester_5'),
                    'nilai_bahasa_indonesia_semester_5' => $this->input->post('nilai_bahasa_indonesia_semester_5'),
                    'nilai_bahasa_inggris_semester_5' => $this->input->post('nilai_bahasa_inggris_semester_5'),
                    'nilai_ipa_semester_5' => $this->input->post('nilai_ipa_semester_5'),
                    'nilai_ips_semester_5' => $this->input->post('nilai_ips_semester_5')
                );
            $this->Data_nilai_raport->add_data_nilai_raport($data_to_store,$email);


            $nama_organisasi = $this->input->post('nama_organisasi');
            $jabatan_organisasi = $this->input->post('jabatan_organisasi');
            $periode_organisasi = $this->input->post('periode_organisasi');
            $memiliki_sk = $this->input->post('memiliki_sk');
            for($i=0; $i<sizeof($nama_organisasi); $i++){
                $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_organisasi' => $nama_organisasi[$i],
                    'jabatan_organisasi' => $jabatan_organisasi[$i],
                    'periode_organisasi' =>  $periode_organisasi[$i],
                    'memiliki_sk' => $memiliki_sk[$i]
                );
                $this->Data_organisasi->add_data_organisasi($data_to_store,$email);

            }
            
            $nama_kegiatan = $this->input->post('nama_kegiatan');
            $tingkat_kejuaraan = $this->input->post('tingkat_kejuaraan');
            $juara = $this->input->post('juara');
            $kategori_kegiatan = $this->input->post('kategori_kegiatan');
            $tahun_juara = $this->input->post('tahun_juara');
            $memiliki_sk_prestasi = $this->input->post('memiliki_sk_prestasi');
            for($i=0; $i<sizeof($nama_kegiatan); $i++){
                $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_kegiatan' => $nama_kegiatan[$i],
                    'tingkat_kejuaraan' => $tingkat_kejuaraan[$i],
                    'juara' =>  $juara[$i],
                    'kategori_kegiatan' => $kategori_kegiatan[$i],
                    'tahun_juara' =>  $tahun_juara[$i],
                    'memiliki_sk_prestasi' => $memiliki_sk_prestasi[$i]
                );
                 $this->Data_prestasi->add_data_prestasi($data_to_store,$email);
            }
                
             
                 $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'essai' => $this->input->post('essai')
                );
            $this->Data_essai->add_data_essai($data_to_store,$email);

            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_ayah_kandung' => $this->input->post('nama_ayah_kandung'),
                    'tanggal_lahir_ayah_kandung' => $this->input->post('tanggal_lahir_ayah_kandung'),
                    'tempat_lahir_ayah_kandung' => $this->input->post('tempat_lahir_ayah_kandung'),
                    'nomor_ktp_ayah_kandung' => $this->input->post('nomor_ktp_ayah_kandung'),
                    'alamat_ayah_kandung' => $this->input->post('alamat_ayah_kandung'),
                    'nomor_telepon_ayah_kandung' => $this->input->post('nomor_telepon_ayah_kandung'),
                    'status_ayah_kandung' => $this->input->post('status_ayah_kandung'),
                    'pendidikan_terakhir_ayah_kandung' => $this->input->post('pendidikan_terakhir_ayah_kandung'),
                    'nama_institusi_ayah_kandung' => $this->input->post('nama_institusi_ayah_kandung'),
                    'status_pekerjaan_ayah_kandung' => $this->input->post('status_pekerjaan_ayah_kandung'),
                    'jenis_pekerjaan_ayah_kandung' => $this->input->post('jenis_pekerjaan_ayah_kandung'),
                    'nama_perusahaan_ayah_kandung' => $this->input->post('nama_perusahaan_ayah_kandung'),
                    'jabatan_ayah_kandung' => $this->input->post('jabatan_ayah_kandung'),
                    'tahun_mulai_bekerja_ayah_kandung' => $this->input->post('tahun_mulai_bekerja_ayah_kandung'),
                    'gaji_pokok_ayah_kandung' => $this->input->post('gaji_pokok_ayah_kandung')
                );
            $this->Data_ayah_kandung->add_data_ayah_kandung($data_to_store,$email);

          
            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_ibu_kandung' => $this->input->post('nama_ibu_kandung'),
                    'tanggal_lahir_ibu_kandung' => $this->input->post('tanggal_lahir_ibu_kandung'),
                    'tempat_lahir_ibu_kandung' => $this->input->post('tempat_lahir_ibu_kandung'),
                    'nomor_ktp_ibu_kandung' => $this->input->post('nomor_ktp_ibu_kandung'),
                    'alamat_ibu_kandung' => $this->input->post('alamat_ibu_kandung'),
                    'nomor_telepon_ibu_kandung' => $this->input->post('nomor_telepon_ibu_kandung'),
                    'status_ibu_kandung' => $this->input->post('status_ibu_kandung'),
                    'pendidikan_terakhir_ibu_kandung' => $this->input->post('pendidikan_terakhir_ibu_kandung'),
                    'nama_institusi_ibu_kandung' => $this->input->post('nama_institusi_ibu_kandung'),
                    'status_pekerjaan_ibu_kandung' => $this->input->post('status_pekerjaan_ibu_kandung'),
                    'jenis_pekerjaan_ibu_kandung' => $this->input->post('jenis_pekerjaan_ibu_kandung'),
                    'nama_perusahaan_ibu_kandung' => $this->input->post('nama_perusahaan_ibu_kandung'),
                    'jabatan_ibu_kandung' => $this->input->post('jabatan_ibu_kandung'),
                    'tahun_mulai_bekerja_ibu_kandung' => $this->input->post('tahun_mulai_bekerja_ibu_kandung'),
                    'gaji_pokok_ibu_kandung' => $this->input->post('gaji_pokok_ibu_kandung')
                );
            $this->Data_ibu_kandung->add_data_ibu_kandung($data_to_store,$email);

            $nama_tanggungan = $this->input->post('nama_tanggungan');
            $usia = $this->input->post('usia');
            $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
            $hubungan_keluarga = $this->input->post('hubungan_keluarga');
            $sudah_bekerja = $this->input->post('sudah_bekerja');
            $dibiayai = $this->input->post('dibiayai');
            for($i=0; $i<sizeof($nama_tanggungan); $i++){
                $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_tanggungan' => $nama_tanggungan[$i],
                    'usia' => $usia[$i],
                    'pendidikan_terakhir' =>  $pendidikan_terakhir[$i],
                    'hubungan_keluarga' => $hubungan_keluarga[$i],
                    'sudah_bekerja' =>  $sudah_bekerja[$i],
                    'dibiayai' => $dibiayai[$i]
                );
                $this->Data_tanggungan_orang_tua->add_data_tanggungan_orang_tua($data_to_store,$email);
             }

            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_dokter_keluarga' => $this->input->post('nama_dokter_keluarga'),
                    'rumah_sakit' => $this->input->post('rumah_sakit'),
                    'memiliki_penyakit_jantung' => $this->input->post('memiliki_penyakit_jantung'),
                    'memiliki_penyakit_kanker' => $this->input->post('memiliki_penyakit_kanker'),
                    'memiliki_penyakit_kelainan_psikologis' => $this->input->post('memiliki_penyakit_kelainan_psikologis'),
                    'memiliki_penyakit_kelainan_syaraf' => $this->input->post('memiliki_penyakit_kelainan_syaraf'),
                    'memiliki_penyakit_kelainan_darah' => $this->input->post('memiliki_penyakit_kelainan_darah'),
                    'rawat_inap_dalam_dua_tahun_terakhir' => $this->input->post('rawat_inap_dalam_dua_tahun_terakhir'),
                    'dalam_masa_pengobatan' => $this->input->post('dalam_masa_pengobatan'),
                    'bantuan_medis' => $this->input->post('bantuan_medis'),
                    'kondisi_fisik_perhatiaan_khusus' => $this->input->post('kondisi_fisik_perhatiaan_khusus')
                );
            $this->Data_riwayat_kesehataan->add_data_riwayat_kesehataan($data_to_store,$email);

          
            
            

            redirect('Home/daftar');
        } 
    }

    public function upload_foto_pribadi(){
         $email=$_SESSION["user_name"];

            if (!is_dir('uploads/'.$email)) {
                mkdir('./uploads/' . $email, 0777, TRUE);
            }
             // setting konfigurasi upload
           $config = array(
                'upload_path' => "./uploads/".$email,
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "3048" // Can be set to particular file size , here it is 2 MB(2048 Kb)
                
                );
            // load library upload
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
            // upload tampak depan
            $img = "foto_pribadi";
            if($this->upload->do_upload($img )){
                $fileData = $this->upload->data();
                $foto_pribadi=$fileData['file_name'];
                $this->Users_model->set_foto_pribadi_path($email,$foto_pribadi);
                $this->session->set_userdata('foto_pribadi', $foto_pribadi); 
                redirect('home/daftar');
            }else{
                echo $this->upload->display_errors();
                redirect('home');
            }
    }

    public function finish_all_data()
    {
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $email=$_SESSION["user_name"];
          $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'nisn' => $this->input->post('nisn'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                    'agama' => $this->input->post('agama'),
                    'golongan_darah' => $this->input->post('golongan_darah'),
                    'berat_badan' => $this->input->post('berat_badan'),
                    'tinggi_badan' => $this->input->post('tinggi_badan'),
                    'alamat' => $this->input->post('alamat'),
                    'kota' => $this->input->post('kota'),
                    'nomor_telpon' => $this->input->post('nomor_telpon'),
                    'informasi_beasiswa' => substr(implode(', ', $this->input->post('informasi_beasiswa')), 0),
                    'nama_saudara' => $this->input->post('nama_saudara'),
                    'nama_hubungan' => $this->input->post('nama_hubungan')
                );
            $this->Data_pribadi->add_data_pribadi($data_to_store,$email);

            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'asal_sekolah' => $this->input->post('asal_sekolah'),
                    'tanggal_masuk' => $this->input->post('tanggal_masuk'),
                    'alamat_sekolah' => $this->input->post('alamat_sekolah'),
                    'nama_kepala_sekolah' => $this->input->post('nama_kepala_sekolah'),
                    'nomor_telpon_sekolah' => $this->input->post('nomor_telpon_sekolah')
                );
            $this->Data_sekolah->add_data_sekolah($data_to_store,$email);

            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nilai_mtk_semester_1' => $this->input->post('nilai_mtk_semester_1'),
                    'nilai_bahasa_indonesia_semester_1' => $this->input->post('nilai_bahasa_indonesia_semester_1'),
                    'nilai_bahasa_inggris_semester_1' => $this->input->post('nilai_bahasa_inggris_semester_1'),
                    'nilai_ipa_semester_1' => $this->input->post('nilai_ipa_semester_1'),
                    'nilai_ips_semester_1' => $this->input->post('nilai_ips_semester_1'),

                    'nilai_mtk_semester_2' => $this->input->post('nilai_mtk_semester_2'),
                    'nilai_bahasa_indonesia_semester_2' => $this->input->post('nilai_bahasa_indonesia_semester_2'),
                    'nilai_bahasa_inggris_semester_2' => $this->input->post('nilai_bahasa_inggris_semester_2'),
                    'nilai_ipa_semester_2' => $this->input->post('nilai_ipa_semester_2'),
                    'nilai_ips_semester_2' => $this->input->post('nilai_ips_semester_2'),

                    'nilai_mtk_semester_3' => $this->input->post('nilai_mtk_semester_3'),
                    'nilai_bahasa_indonesia_semester_3' => $this->input->post('nilai_bahasa_indonesia_semester_3'),
                    'nilai_bahasa_inggris_semester_3' => $this->input->post('nilai_bahasa_inggris_semester_3'),
                    'nilai_ipa_semester_3' => $this->input->post('nilai_ipa_semester_3'),
                    'nilai_ips_semester_3' => $this->input->post('nilai_ips_semester_3'),

                    'nilai_mtk_semester_4' => $this->input->post('nilai_mtk_semester_4'),
                    'nilai_bahasa_indonesia_semester_4' => $this->input->post('nilai_bahasa_indonesia_semester_4'),
                    'nilai_bahasa_inggris_semester_4' => $this->input->post('nilai_bahasa_inggris_semester_4'),
                    'nilai_ipa_semester_4' => $this->input->post('nilai_ipa_semester_4'),
                    'nilai_ips_semester_4' => $this->input->post('nilai_ips_semester_4'),

                    'nilai_mtk_semester_5' => $this->input->post('nilai_mtk_semester_5'),
                    'nilai_bahasa_indonesia_semester_5' => $this->input->post('nilai_bahasa_indonesia_semester_5'),
                    'nilai_bahasa_inggris_semester_5' => $this->input->post('nilai_bahasa_inggris_semester_5'),
                    'nilai_ipa_semester_5' => $this->input->post('nilai_ipa_semester_5'),
                    'nilai_ips_semester_5' => $this->input->post('nilai_ips_semester_5')
                );
            $this->Data_nilai_raport->add_data_nilai_raport($data_to_store,$email);


            $nama_organisasi = $this->input->post('nama_organisasi');
            $jabatan_organisasi = $this->input->post('jabatan_organisasi');
            $periode_organisasi = $this->input->post('periode_organisasi');
            $memiliki_sk = $this->input->post('memiliki_sk');
            for($i=0; $i<sizeof($nama_organisasi); $i++){
                $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_organisasi' => $nama_organisasi[$i],
                    'jabatan_organisasi' => $jabatan_organisasi[$i],
                    'periode_organisasi' =>  $periode_organisasi[$i],
                    'memiliki_sk' => $memiliki_sk[$i]
                );
                $this->Data_organisasi->add_data_organisasi($data_to_store,$email);

            }
            
            $nama_kegiatan = $this->input->post('nama_kegiatan');
            $tingkat_kejuaraan = $this->input->post('tingkat_kejuaraan');
            $juara = $this->input->post('juara');
            $kategori_kegiatan = $this->input->post('kategori_kegiatan');
            $tahun_juara = $this->input->post('tahun_juara');
            $memiliki_sk_prestasi = $this->input->post('memiliki_sk_prestasi');
            for($i=0; $i<sizeof($nama_kegiatan); $i++){
                $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_kegiatan' => $nama_kegiatan[$i],
                    'tingkat_kejuaraan' => $tingkat_kejuaraan[$i],
                    'juara' =>  $juara[$i],
                    'kategori_kegiatan' => $kategori_kegiatan[$i],
                    'tahun_juara' =>  $tahun_juara[$i],
                    'memiliki_sk_prestasi' => $memiliki_sk_prestasi[$i]
                );
                 $this->Data_prestasi->add_data_prestasi($data_to_store,$email);
            }
                
             
                 $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'essai' => $this->input->post('essai')
                );
            $this->Data_essai->add_data_essai($data_to_store,$email);

            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_ayah_kandung' => $this->input->post('nama_ayah_kandung'),
                    'tanggal_lahir_ayah_kandung' => $this->input->post('tanggal_lahir_ayah_kandung'),
                    'tempat_lahir_ayah_kandung' => $this->input->post('tempat_lahir_ayah_kandung'),
                    'nomor_ktp_ayah_kandung' => $this->input->post('nomor_ktp_ayah_kandung'),
                    'alamat_ayah_kandung' => $this->input->post('alamat_ayah_kandung'),
                    'nomor_telepon_ayah_kandung' => $this->input->post('nomor_telepon_ayah_kandung'),
                    'status_ayah_kandung' => $this->input->post('status_ayah_kandung'),
                    'pendidikan_terakhir_ayah_kandung' => $this->input->post('pendidikan_terakhir_ayah_kandung'),
                    'nama_institusi_ayah_kandung' => $this->input->post('nama_institusi_ayah_kandung'),
                    'status_pekerjaan_ayah_kandung' => $this->input->post('status_pekerjaan_ayah_kandung'),
                    'jenis_pekerjaan_ayah_kandung' => $this->input->post('jenis_pekerjaan_ayah_kandung'),
                    'nama_perusahaan_ayah_kandung' => $this->input->post('nama_perusahaan_ayah_kandung'),
                    'jabatan_ayah_kandung' => $this->input->post('jabatan_ayah_kandung'),
                    'tahun_mulai_bekerja_ayah_kandung' => $this->input->post('tahun_mulai_bekerja_ayah_kandung'),
                    'gaji_pokok_ayah_kandung' => $this->input->post('gaji_pokok_ayah_kandung')
                );
            $this->Data_ayah_kandung->add_data_ayah_kandung($data_to_store,$email);

          
            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_ibu_kandung' => $this->input->post('nama_ibu_kandung'),
                    'tanggal_lahir_ibu_kandung' => $this->input->post('tanggal_lahir_ibu_kandung'),
                    'tempat_lahir_ibu_kandung' => $this->input->post('tempat_lahir_ibu_kandung'),
                    'nomor_ktp_ibu_kandung' => $this->input->post('nomor_ktp_ibu_kandung'),
                    'alamat_ibu_kandung' => $this->input->post('alamat_ibu_kandung'),
                    'nomor_telepon_ibu_kandung' => $this->input->post('nomor_telepon_ibu_kandung'),
                    'status_ibu_kandung' => $this->input->post('status_ibu_kandung'),
                    'pendidikan_terakhir_ibu_kandung' => $this->input->post('pendidikan_terakhir_ibu_kandung'),
                    'nama_institusi_ibu_kandung' => $this->input->post('nama_institusi_ibu_kandung'),
                    'status_pekerjaan_ibu_kandung' => $this->input->post('status_pekerjaan_ibu_kandung'),
                    'jenis_pekerjaan_ibu_kandung' => $this->input->post('jenis_pekerjaan_ibu_kandung'),
                    'nama_perusahaan_ibu_kandung' => $this->input->post('nama_perusahaan_ibu_kandung'),
                    'jabatan_ibu_kandung' => $this->input->post('jabatan_ibu_kandung'),
                    'tahun_mulai_bekerja_ibu_kandung' => $this->input->post('tahun_mulai_bekerja_ibu_kandung'),
                    'gaji_pokok_ibu_kandung' => $this->input->post('gaji_pokok_ibu_kandung')
                );
            $this->Data_ibu_kandung->add_data_ibu_kandung($data_to_store,$email);


            $nama_tanggungan = $this->input->post('nama_tanggungan');
            $usia = $this->input->post('usia');
            $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
            $hubungan_keluarga = $this->input->post('hubungan_keluarga');
            $sudah_bekerja = $this->input->post('sudah_bekerja');
            $dibiayai = $this->input->post('dibiayai');
            for($i=0; $i<sizeof($nama_tanggungan); $i++){
                $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_tanggungan' => $nama_tanggungan[$i],
                    'usia' => $usia[$i],
                    'pendidikan_terakhir' =>  $pendidikan_terakhir[$i],
                    'hubungan_keluarga' => $hubungan_keluarga[$i],
                    'sudah_bekerja' =>  $sudah_bekerja[$i],
                    'dibiayai' => $dibiayai[$i]
                );
                $this->Data_tanggungan_orang_tua->add_data_tanggungan_orang_tua($data_to_store,$email);
             }


            $data_to_store = array(
                    'email'=> $_SESSION["user_name"],
                    'nama_dokter_keluarga' => $this->input->post('nama_dokter_keluarga'),
                    'rumah_sakit' => $this->input->post('rumah_sakit'),
                    'memiliki_penyakit_jantung' => $this->input->post('memiliki_penyakit_jantung'),
                    'memiliki_penyakit_kanker' => $this->input->post('memiliki_penyakit_kanker'),
                    'memiliki_penyakit_kelainan_psikologis' => $this->input->post('memiliki_penyakit_kelainan_psikologis'),
                    'memiliki_penyakit_kelainan_syaraf' => $this->input->post('memiliki_penyakit_kelainan_syaraf'),
                    'memiliki_penyakit_kelainan_darah' => $this->input->post('memiliki_penyakit_kelainan_darah'),
                    'rawat_inap_dalam_dua_tahun_terakhir' => $this->input->post('rawat_inap_dalam_dua_tahun_terakhir'),
                    'dalam_masa_pengobatan' => $this->input->post('dalam_masa_pengobatan'),
                    'bantuan_medis' => $this->input->post('bantuan_medis'),
                    'kondisi_fisik_perhatiaan_khusus' => $this->input->post('kondisi_fisik_perhatiaan_khusus')
                );
            $this->Data_riwayat_kesehataan->add_data_riwayat_kesehataan($data_to_store,$email);
             
            $error= $this->db->error();
            if($error['message']){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/daftar";
                 $this->load->view('home/message',$data);
            }else{
                $this->session->set_userdata('status', "1"); 
                $this->Users_model->set_status($email,1);
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
            }
          
        }
    } 
    
}