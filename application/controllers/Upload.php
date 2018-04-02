<?php
 
class Upload extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('file');
         $this->load->model('Users_model');
    }
 
    function index() {
        redirect('Home/upload_dokumen');
    }

    function do_upload_rumah_tampak_depan() {
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
        // upload tampak depan
       
            if($this->upload->do_upload('rumah_tampak_depan')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "rumah_tampak_depan"
                    );
                if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"rumah_tampak_depan");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                redirect('home/upload_dokumen');
        }else{
                 $this->Users_model->update_rumah_tampak_depan($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_rumah_tampak_belakang() {
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
        
                
            // upload tampak belakang
            
             if($this->upload->do_upload('rumah_tampak_belakang')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "rumah_tampak_belakang"
                    );
                if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"rumah_tampak_belakang");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_rumah_tampak_belakang($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_rumah_tampak_kanan() {
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
        
            // upload tampak kanan
       
             if($this->upload->do_upload('rumah_tampak_kanan')){
                $fileData = $this->upload->data();
                 $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "rumah_tampak_kanan"
                    );
                 if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"rumah_tampak_kanan");
                }
            }
            
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_rumah_tampak_kanan($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }
    
    function do_upload_rumah_tampak_kiri() {
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
        

       
            // upload tampak kiri
            
             if($this->upload->do_upload('rumah_tampak_kiri')){
                $fileData = $this->upload->data();
               $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "rumah_tampak_kiri"
                    );
               if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"rumah_tampak_kiri");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_rumah_tampak_kiri($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_ruang_tengah() {
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
        

        
            
            // upload tampak tengah
            
             if($this->upload->do_upload('ruang_tengah')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "ruang_tengah"
                    );
                 if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"ruang_tengah");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_ruang_tengah($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_kamar_tidur() {
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
        

        
            

             // upload kamar tidur
            
             if($this->upload->do_upload('kamar_tidur')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "kamar_tidur"
                    );
                if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"kamar_tidur");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_kamar_tidur($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_dapur() {
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
        

        
            
        
            // upload dapur
            
            if($this->upload->do_upload('dapur')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "dapur"
                    );
                if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"dapur");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_dapur($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }
    }

    function do_upload_kamar_mandi() {
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
        

        
     

        
            // upload kamar mandi
            
            if($this->upload->do_upload('kamar_mandi')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "kamar_mandi"
                    );
                if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"kamar_mandi");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_kamar_mandi($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_ktp_ayah() {
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
        

        
            
            // upload ktp ayah
           
            if($this->upload->do_upload('ktp_ayah')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "ktp_ayah"
                    );
                if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"ktp_ayah");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_ktp_ayah($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }


    function do_upload_ktp_ibu() {
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
        

       
            // upload ktp ibu
           
            if($this->upload->do_upload('ktp_ibu')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "ktp_ibu"
                    );
                if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"ktp_ibu");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_ktp_ibu($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_kartu_keluarga() {
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
        

        
            
            // upload kartu keluarga
           
            if($this->upload->do_upload('kartu_keluarga')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "kartu_keluarga"
                    );
                if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"kartu_keluarga");
                }
            }
            
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_kartu_keluarga($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_surat_keteranga_tidak_mampu() {
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
        

       
            
        
            // upload surat keterangan tidak mampu
           
            if($this->upload->do_upload('surat_keteranga_tidak_mampu')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "surat_keterangan_tidak_mampu"
                    );
                if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"surat_keteranga_tidak_mampu");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_surat_keteranga_tidak_mampu($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_slip_gaji_ayah() {
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
        

       
            
        
            // upload slip gaji ayah
            
            if($this->upload->do_upload('slip_gaji_ayah')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "slip_gaji_ayah"
                    );
                if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"slip_gaji_ayah");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_slip_gaji_ayah($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_slip_gaji_ibu() {
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
        

       
            

            // upload slip gaji ibu
            
            if($this->upload->do_upload('slip_gaji_ibu')){
                $fileData = $this->upload->data();
               $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "slip_gaji_ibu"
                    );
               if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"slip_gaji_ibu");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_slip_gaji_ibu($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_pembayaran_listrik() {
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
        

        
       
            
            
            // upload pembayaran listrik
            if($this->upload->do_upload('pembayaran_listrik')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "pembayaran_listrik"
                    );
                 if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"pembayaran_listrik");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_pembayaran_listrik($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_sewa_rumah() {
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
        

        
        
        
            
            // upload sewa rumah
            if($this->upload->do_upload('sewa_rumah')){
                $fileData = $this->upload->data();
                $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "sewa_rumah"
                    );
                if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"sewa_rumah");
                }
            }
        
        $error=$this->upload->display_errors();
        if($error){
                $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error ".$error;
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }else{
                 $this->Users_model->update_sewa_rumah($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }

    function do_upload_sertifikat() {
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
        

        
        
        //upload sertifikat
         $filesCount = count($_FILES['sertifikat']['name']);
         if ( $filesCount > 1){
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['sertifikats']['name'] = $_FILES['sertifikat']['name'][$i];
                $_FILES['sertifikats']['type'] = $_FILES['sertifikat']['type'][$i];
                $_FILES['sertifikats']['tmp_name'] = $_FILES['sertifikat']['tmp_name'][$i];
                $_FILES['sertifikats']['error'] = $_FILES['sertifikat']['error'][$i];
                $_FILES['sertifikats']['size'] = $_FILES['sertifikat']['size'][$i];

                
                if($this->upload->do_upload('sertifikats')){
                    $fileData = $this->upload->data();
                    $data = array(
                    'email'=> $_SESSION["user_name"],
                    'file_name' => $fileData['file_name'],
                    'created' => date("Y-m-d H:i:s"),
                    'modified' =>  date("Y-m-d H:i:s"),
                    'kategori_file' => "sertifikat".$i
                    );
                }

                if(!empty($data)){
                //Insert file information into the database
                $insert = $this->file->insert_data($data,$email,"sertifikat".$i);
                
                }
            }
        $this->Users_model->update_sertifikat($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
     
        }else{
            $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error file tidak ada";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }
        

    }

    function do_upload_sk_organisasi() {
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
        

        
        
       //upload sk_organisasi
        $filesCount = count($_FILES['sk_organisasi']['name']);
        if ( $filesCount > 1){
            for($i = 0; $i < $filesCount; $i++){
                    $_FILES['sk_organisasis']['name'] = $_FILES['sk_organisasi']['name'][$i];
                    $_FILES['sk_organisasis']['type'] = $_FILES['sk_organisasi']['type'][$i];
                    $_FILES['sk_organisasis']['tmp_name'] = $_FILES['sk_organisasi']['tmp_name'][$i];
                    $_FILES['sk_organisasis']['error'] = $_FILES['sk_organisasi']['error'][$i];
                    $_FILES['sk_organisasis']['size'] = $_FILES['sk_organisasi']['size'][$i];

                    
                    if($this->upload->do_upload('sk_organisasis')){
                        $fileData = $this->upload->data();
                        $data = array(
                        'email'=> $_SESSION["user_name"],
                        'file_name' => $fileData['file_name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' =>  date("Y-m-d H:i:s"),
                        'kategori_file' => "sk_organisasi".$i
                        );
                    }

                    if(!empty($data)){
                    //Insert file information into the database
                    $insert = $this->file->insert_data($data,$email,"sk_organisasi".$i);
                    
                    }
            }
                $this->Users_model->update_sk_organisasi($email,"1");
                $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
     
        }else{
            $data['message']="Gagal submit tunggu 5 detik maka akan kembali ke page sebelumnya pesan error file tidak ada";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/upload_dokumen";
                $this->load->view('home/message',$data);
        }

    }
    function finish() {
        $email=$_SESSION["user_name"];
        $this->Users_model->set_status($email,"2");
        $data['message']="Berhasil submit tunggu 5 detik maka akan redirect ke page berikutnya";
                $data['url_next']="http://localhost/WebsitePendaftaraanSekolah/home/cetak";
                $this->load->view('home/message',$data);

    }


    
}
 
?>