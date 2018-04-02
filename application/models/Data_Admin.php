<?php

class Data_Admin extends CI_Model {

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

    function create_member()
    {

        $this->db->where('email', $this->input->post('email'));
        $query = $this->db->get('admin');

        if($query->num_rows > 0){
            
        }else{
            
            $new_member_insert_data = array(
               
               
                'role' => $this->input->post('role'),
                'email' => $this->input->post('email'),      
                'password' => md5($this->input->post('password'))                       
            );
            

            $insert = $this->db->insert('admin', $new_member_insert_data);
            
            return $insert;
        }
          
    }

    function validate($user_name, $password)
    {
        $this->db->where('email', $user_name);
        $this->db->where('password', $password);
        $query = $this->db->get('admin')->num_rows();
        
        if($query == 1)
        {
            return true;
        }       
    }
    public function get_data_admin($email)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->result_array(); 
    }
   
    public function count_jumlah_seluruh_peserta()
    {
        $sql = "select count(id) as total from membership"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

     public function count_jumlah_registrasi_awal()
    {
        $sql = "select count(id) as total from membership where status=0"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }
     public function count_jumlah_registrasi_form()
    {
        $sql = "select count(id) as total from membership where status=1"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }
     
     public function count_jumlah_registrasi_upload()
    {
        $sql = "select count(id) as total from membership where status=2"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }


     public function get_siswa_lulus()
    {
        $sql = "SELECT SUM(skor_raport+skor_organisasi+skor_kepimpinan+skor_kreatifitas+skor_keahlian_bidang+skor_sertifikat_kota+skor_sertifikat_provinsi+skor_sertifikat_nasional+skor_essai+skor_juara+skor_juara_umum+skor_referensi) as skor_total,membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_fase,SUM(skor_raport+skor_organisasi+skor_kepimpinan+skor_kreatifitas+skor_keahlian_bidang) as skor_dimensi_1,SUM(skor_sertifikat_kota+skor_sertifikat_provinsi+skor_sertifikat_nasional+skor_essai+skor_juara+skor_juara_umum+skor_referensi) as skor_dimensi_2,notes FROM `membership`,`data_pribadi` where data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1 and membership.status_fase=1 GROUP by membership.email  ASC limit 200"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

     public function get_all_data_()
    {
        $sql = "SELECT SUM(skor_raport+skor_organisasi+skor_kepimpinan+skor_kreatifitas+skor_keahlian_bidang+skor_sertifikat_kota+skor_sertifikat_provinsi+skor_sertifikat_nasional+skor_essai+skor_juara+skor_juara_umum+skor_referensi) as skor_total,membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_fase,SUM(skor_raport+skor_organisasi+skor_kepimpinan+skor_kreatifitas+skor_keahlian_bidang) as skor_dimensi_1,SUM(skor_sertifikat_kota+skor_sertifikat_provinsi+skor_sertifikat_nasional+skor_essai+skor_juara+skor_juara_umum+skor_referensi) as skor_dimensi_2,notes FROM `membership`,`data_pribadi` where data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1 GROUP by membership.email  ASC "; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function update_status_fase($email,$status_fase){
            $this->db->set('status_fase', $status_fase);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function get_notes()
    {
        $sql = "SELECT membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_notes,membership.notes  FROM `membership`,`data_pribadi` where data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1  "; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function update_status_notes($email){
            $this->db->set('status_notes', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function update_notes($email,$notes){
            $this->db->set('notes', $notes);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }


    public function get_referensi()
    {
        $sql = "SELECT membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_referensi,membership.skor_referensi  FROM `membership`,`data_pribadi` where data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1  "; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function update_status_referensi($email){
            $this->db->set('status_referensi', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_skor_referensi($email,$skor_referensi){
            $this->db->set('skor_referensi', $skor_referensi);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function get_juara_umum()
    {
        $sql = "SELECT membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_juara_umum,membership.skor_juara_umum  FROM `membership`,`data_pribadi` where data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1  "; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function update_status_juara_umum($email){
            $this->db->set('status_juara_umum', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_skor_juara_umum($email,$skor_juara_umum){
            $this->db->set('skor_juara_umum', $skor_juara_umum);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function get_juara()
    {
        $sql = "SELECT membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_juara,membership.skor_juara  FROM `membership`,`data_pribadi` where data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1  "; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function update_status_juara($email){
            $this->db->set('status_juara', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_skor_juara($email,$skor_juara){
            $this->db->set('skor_juara', $skor_juara);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function get_essai()
    {
        $sql = "SELECT essai, membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_essai,membership.skor_essai  FROM `data_essai`,`membership`,`data_pribadi` where membership.email=data_essai.email and data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1  group by data_essai.email"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function update_status_essai($email){
            $this->db->set('status_essai', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_skor_essai($email,$skor_essai){
            $this->db->set('skor_essai', $skor_essai);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }


    public function get_jumlah_sertifikat_tingkat_nasional()
    {
        $sql = "SELECT count(DISTINCT nama_kegiatan) as jumlah_sertifikat_nasional, membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_sertifikat_nasional,membership.skor_sertifikat_nasional  FROM `data_prestasi`,`membership`,`data_pribadi` where memiliki_sk_prestasi='ya' and tingkat_kejuaraan='tingkat nasional' and membership.email=data_prestasi.email and data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1  group by data_prestasi.email"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function update_status_sertifikat_nasional($email){
            $this->db->set('status_sertifikat_nasional', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_skor_sertifikat_nasional($email,$skor_sertifikat_nasional){
            $this->db->set('skor_sertifikat_nasional', $skor_sertifikat_nasional);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

     public function get_jumlah_sertifikat_tingkat_provinsi()
    {
        $sql = "SELECT count(DISTINCT nama_kegiatan) as jumlah_sertifikat_provinsi, membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_sertifikat_provinsi,membership.skor_sertifikat_provinsi  FROM `data_prestasi`,`membership`,`data_pribadi` where memiliki_sk_prestasi='ya' and tingkat_kejuaraan='tingkat provinsi' and membership.email=data_prestasi.email and data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1  group by data_prestasi.email"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function update_status_sertifikat_provinsi($email){
            $this->db->set('status_sertifikat_provinsi', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_skor_sertifikat_provinsi($email,$skor_sertifikat_provinsi){
            $this->db->set('skor_sertifikat_provinsi', $skor_sertifikat_provinsi);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }


    public function get_jumlah_sertifikat_tingkat_kota()
    {
        $sql = "SELECT count(DISTINCT nama_kegiatan) as jumlah_sertifikat_kota, membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_sertifikat_kota,membership.skor_sertifikat_kota  FROM `data_prestasi`,`membership`,`data_pribadi` where memiliki_sk_prestasi='ya' and tingkat_kejuaraan='tingkat kota / kabupaten' and membership.email=data_prestasi.email and data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1  group by data_prestasi.email"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function update_status_sertifikat_kota($email){
            $this->db->set('status_sertifikat_kota', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_skor_sertifikat_kota($email,$skor_sertifikat_kota){
            $this->db->set('skor_sertifikat_kota', $skor_sertifikat_kota);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function get_jumlah_prestasi_olahraga()
    {
        $sql = "SELECT count(DISTINCT nama_kegiatan) as jumlah_juara_olahraga, membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_keahlian_bidang,membership.skor_keahlian_bidang  FROM `data_prestasi`,`membership`,`data_pribadi` where memiliki_sk_prestasi='ya' and kategori_kegiatan='olahraga' and membership.email=data_prestasi.email and data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1  group by data_prestasi.email"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function update_status_keahlian_bidang($email){
            $this->db->set('status_keahlian_bidang', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_skor_keahlian_bidang($email,$skor_keahlian_bidang){
            $this->db->set('skor_keahlian_bidang', $skor_keahlian_bidang);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }


    public function get_jumlah_prestasi_seni()
    {
        $sql = "SELECT count(DISTINCT nama_kegiatan) as jumlah_juara_seni, membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_kreatifitas,membership.skor_kreatifitas  FROM `data_prestasi`,`membership`,`data_pribadi` where memiliki_sk_prestasi='ya' and kategori_kegiatan='seni' and membership.email=data_prestasi.email and data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1  group by data_prestasi.email"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function update_status_kreatifitas($email){
            $this->db->set('status_kreatifitas', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_skor_kreatifitas($email,$skor_organisasi){
            $this->db->set('skor_kreatifitas', $skor_organisasi);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }


    public function get_jumlah_organisasi()
    {
        $sql = "SELECT count(DISTINCT nama_organisasi) as jumlah_organisasi, membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_organisasi,membership.skor_organisasi  FROM `data_organisasi_anda`,`membership`,`data_pribadi` where memiliki_sk='ya' and membership.email=data_organisasi_anda.email and data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1  group by data_organisasi_anda.email"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function update_status_organisasi($email){
            $this->db->set('status_organisasi', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_skor_organisasi($email,$skor_organisasi){
            $this->db->set('skor_organisasi', $skor_organisasi);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function get_jumlah_kepimpinan()
    {
        $sql = "SELECT  count(DISTINCT nama_organisasi) as jumlah_kepimpinan, membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_kepemimpinan,membership.skor_kepimpinan  FROM `data_organisasi_anda`,`membership`,`data_pribadi` where  ( 
                    (nama_organisasi='osis' or nama_organisasi='pramuka' or nama_organisasi='pmr' or nama_organisasi='rohis') and jabatan_organisasi!='anggota' 
                    and memiliki_sk='ya'   and membership.email=data_organisasi_anda.email and data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1
                     ) 
                    or (
                            (   nama_organisasi!='osis' and nama_organisasi!='pramuka' and nama_organisasi!='pmr' and nama_organisasi!='rohis'
                            )
                             and 
                             (
                             jabatan_organisasi='ketua' or jabatan_organisasi='wakil ketua'
                             ) 
                             and memiliki_sk='ya'   and membership.email=data_organisasi_anda.email and data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1

                        )

                      group by data_organisasi_anda.email"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }
    public function update_status_kepemimpinan($email){
            $this->db->set('status_kepemimpinan', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_skor_kepimpinan($email,$skor_kepimpinan){
            $this->db->set('skor_kepimpinan', $skor_kepimpinan);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

     public function nilai_rata_rata_semester_seluruh_siswa()
    {
        $sql = "SELECT membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,membership.status_raport,membership.skor_raport,(((nilai_mtk_semester_1+nilai_bahasa_indonesia_semester_1+nilai_bahasa_inggris_semester_1+nilai_ipa_semester_1+nilai_ips_semester_1)/5) +((nilai_mtk_semester_2+nilai_bahasa_indonesia_semester_2+nilai_bahasa_inggris_semester_2+nilai_ipa_semester_2+nilai_ips_semester_2)/5 )+((nilai_mtk_semester_3+nilai_bahasa_indonesia_semester_3+nilai_bahasa_inggris_semester_3+nilai_ipa_semester_3+nilai_ips_semester_3)/5)+((nilai_mtk_semester_4+nilai_bahasa_indonesia_semester_4+nilai_bahasa_inggris_semester_4+nilai_ipa_semester_4+nilai_ips_semester_4)/5)+((nilai_mtk_semester_5+nilai_bahasa_indonesia_semester_5+nilai_bahasa_inggris_semester_5+nilai_ipa_semester_5+nilai_ips_semester_5)/5) )/5 as nilai_rata_rata FROM `data_nilai_raport`,`membership`,`data_pribadi` where membership.email=data_nilai_raport.email and data_pribadi.email=membership.email and membership.status=2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 AND `wni_domisili` = 1 AND `usia_diatas_14` = 1 AND `rata_rata_rapor` = 1 AND `peringkat_10` = 1 AND `tagihan_listrik` = 1 AND `dukungan_referensi` = 1 AND `lulusan_maksimal` = 1 AND `tidak_sedang_menjabat` = 1"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }
    public function update_status_raport($email){
            $this->db->set('status_raport', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_skor_raport($email,$skor_raport){
            $this->db->set('skor_raport', $skor_raport);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function get_all_data_fase_1(){
       
        $sql = "SELECT membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,
        melengkapi_data,
        fotokopi_rapor,
        pas_foto,
        fotokopi_ktp,
        fotokopi_kk,
        formulir_referensi,
        fotokopi_rekening_listrik,
        fotokopi_slip_gaji,
        surat_keterangan_tidak_mampu,
        fotokopi_ijazah 
        FROM `membership`,`data_pribadi` WHERE data_pribadi.email=membership.email and  `status` = 2 AND `status_fase` = 0  
        ORDER BY `membership`.`nama` ASC"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

    public function get_all_data_fase_2(){
       
        $sql = "SELECT membership.id,membership.email,membership.nama,data_pribadi.nomor_telpon,
        wni_domisili,
        usia_diatas_14,
        rata_rata_rapor,
        peringkat_10,
        tagihan_listrik,
        dukungan_referensi,
        lulusan_maksimal,
        tidak_sedang_menjabat
        FROM `membership`,`data_pribadi` WHERE data_pribadi.email=membership.email and  `status` = 2 AND `melengkapi_data` = 1 AND `fotokopi_rapor` = 1 AND `pas_foto` = 1 AND `fotokopi_ktp` = 1 AND `fotokopi_kk` = 1 AND `formulir_referensi` = 1 AND `fotokopi_rekening_listrik` = 1 AND `fotokopi_slip_gaji` = 1 AND `surat_keterangan_tidak_mampu` = 1 AND `fotokopi_ijazah` = 1 
        ORDER BY `membership`.`nama` ASC"; 
        $query = $this->db->query($sql);
        return $query->result_array(); 
    }

     public function update_wni_domisili($email){
            $this->db->set('wni_domisili', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

     public function update_usia_diatas_14($email){
            $this->db->set('usia_diatas_14', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

     public function update_rata_rata_rapor($email){
            $this->db->set('rata_rata_rapor', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

     public function update_peringkat_10($email){
            $this->db->set('peringkat_10', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

     public function update_tagihan_listrik($email){
            $this->db->set('tagihan_listrik', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

      public function update_dukungan_referensi($email){
            $this->db->set('dukungan_referensi', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

      public function update_lulusan_maksimal($email){
            $this->db->set('lulusan_maksimal', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function update_tidak_sedang_menjabat($email){
            $this->db->set('tidak_sedang_menjabat', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function update_melengkapi_data($email){
            $this->db->set('melengkapi_data', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

     public function update_fotokopi_rapor($email){
            $this->db->set('fotokopi_rapor', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function update_pas_foto($email){
            $this->db->set('pas_foto', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function update_fotokopi_ktp($email){
            $this->db->set('fotokopi_ktp', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

     public function update_fotokopi_kk($email){
            $this->db->set('fotokopi_kk', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    
    public function update_formulir_referensi($email){
            $this->db->set('formulir_referensi', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function update_fotokopi_rekening_listrik($email){
            $this->db->set('fotokopi_rekening_listrik', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }

    public function update_fotokopi_slip_gaji($email){
            $this->db->set('fotokopi_slip_gaji', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_surat_keterangan_tidak_mampu($email){
            $this->db->set('surat_keterangan_tidak_mampu', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
    public function update_fotokopi_ijazah($email){
            $this->db->set('fotokopi_ijazah', 1);
            $this->db->where('email',$email);
            $this->db->update('membership');
           
    }
}

