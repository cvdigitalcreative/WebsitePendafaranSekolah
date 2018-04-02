<?php
 
class Create_pdf extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
         $this->load->model('Data_pribadi');
        $this->load->model('Data_sekolah');
         $this->load->model('Data_nilai_raport');
         $this->load->model('Data_essai');
          $this->load->model('Data_ayah_kandung');
          $this->load->model('Data_ibu_kandung');
          $this->load->model('Data_riwayat_kesehataan');
           $this->load->model('Data_prestasi');
            $this->load->model('Data_organisasi');
            $this->load->model('Data_tanggungan_orang_tua');
    }
 
    function print_item()
    {
        $email=$_SESSION["user_name"];
       //     load library
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
       // retrieve data from model
           $data['data_pribadi']=$this->Data_pribadi->get_data_pribadi_by_email($email);
        $data['data_sekolah']=$this->Data_sekolah->get_data_sekolah_by_email($email);
        $data['data_nilai_raport']=$this->Data_nilai_raport->get_data_nilai_raport_by_email($email);
        $data['data_essai']=$this->Data_essai->get_data_essai_by_email($email);
        $data['data_ayah_kandung']=$this->Data_ayah_kandung->get_data_ayah_kandung_by_email($email);
        $data['data_ibu_kandung']=$this->Data_ibu_kandung->get_data_ibu_kandung_by_email($email);
        $data['data_riwayat_kesehataan']=$this->Data_riwayat_kesehataan->get_data_riwayat_kesehataan_by_email($email);
        $data['data_prestasi']=$this->Data_prestasi->get_data_prestasi_by_email($email);
       
        $data['data_organisasi']=$this->Data_organisasi->get_data_organisasi_by_email($email);

        $data['data_tanggungan_orang_tua']=$this->Data_tanggungan_orang_tua->get_data_tanggungan_orang_tua_by_email($email);
        $data['title'] = "Data Formulir Pendaftaraan Online SMA Negeri Sumatera Selatan";
        ini_set('memory_limit', '256M'); 
       // boost the memory limit if it's low ;)
        $html = $this->load->view('home/cetak_pdf_view', $data, true);
       // render the view into HTML
        $pdf->WriteHTML($html); // write the HTML into the PDF
        $output = 'itemreport' . date('Y_m_d_H_i_s') . '_.pdf';
        $pdf->Output("$output", 'I'); // save to file because we can
        exit();
    }

    public function download(){
        
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            
            
            //file path
            $file = 'formulir/rekomendasi_sekolah_dan_denah_rumah.pdf';
            
            //download file from directory
            force_download($file, NULL);
        
    }

    // public function daftar()
    // {
    //     $email=$_SESSION["user_name"];
    //     $data['data_pribadi']=$this->Data_pribadi->get_data_pribadi_by_email($email);
    //     $data['data_sekolah']=$this->Data_sekolah->get_data_sekolah_by_email($email);
    //     $data['data_nilai_raport']=$this->Data_nilai_raport->get_data_nilai_raport_by_email($email);
    //     $data['data_essai']=$this->Data_essai->get_data_essai_by_email($email);
    //     $data['data_ayah_kandung']=$this->Data_ayah_kandung->get_data_ayah_kandung_by_email($email);
    //     $data['data_ibu_kandung']=$this->Data_ibu_kandung->get_data_ibu_kandung_by_email($email);
    //     $data['data_riwayat_kesehataan']=$this->Data_riwayat_kesehataan->get_data_riwayat_kesehataan_by_email($email);



    //     $this->load->view('home/daftar_ppbd',$data);
    // }

    // function print_data_pribadi()
    // {
    //     $email=$_SESSION["user_name"];
    //    //     load library
    //     $this->load->library('pdf');
    //     $pdf = $this->pdf->load();
    //    // retrieve data from model
    //     $data['data_pribadi']=$this->Data_pribadi->get_data_pribadi_by_email($email);
    //     $data['title'] = "items";
    //     ini_set('memory_limit', '256M'); 
    //    // boost the memory limit if it's low ;)
    //     $html = $this->load->view('home/cetak_pdf/data_pribadi', $data, true);
    //    // render the view into HTML
    //     $pdf->WriteHTML($html); // write the HTML into the PDF
    //     $output = 'data_pribadi' . $email . '.pdf';
    //     $pdf->Output("$output", 'I'); // save to file because we can
    //     exit();
    // }

    // function print_data_sekolah()
    // {
    //     $email=$_SESSION["user_name"];
    //    //     load library
    //     $this->load->library('pdf');
    //     $pdf = $this->pdf->load();
    //    // retrieve data from model
    //     $data['data_sekolah']=$this->Data_sekolah->get_data_sekolah_by_email($email);
    //     $data['title'] = "items";
    //     ini_set('memory_limit', '256M'); 
    //    // boost the memory limit if it's low ;)
    //     $html = $this->load->view('home/cetak_pdf/data_sekolah', $data, true);
    //    // render the view into HTML
    //     $pdf->WriteHTML($html); // write the HTML into the PDF
    //     $output = 'data_sekolah' . $email . '.pdf';
    //     $pdf->Output("$output", 'I'); // save to file because we can
    //     exit();
    // }

    // function print_data_nilai_raport()
    // {
    //     $email=$_SESSION["user_name"];
    //    //     load library
    //     $this->load->library('pdf');
    //     $pdf = $this->pdf->load();
    //    // retrieve data from model
    //      $data['data_nilai_raport']=$this->Data_nilai_raport->get_data_nilai_raport_by_email($email);
    //     $data['title'] = "items";
    //     ini_set('memory_limit', '256M'); 
    //    // boost the memory limit if it's low ;)
    //     $html = $this->load->view('home/cetak_pdf/data_nilai_raport', $data, true);
    //    // render the view into HTML
    //     $pdf->WriteHTML($html); // write the HTML into the PDF
    //     $output = 'data_nilai_raport' . $email . '.pdf';
    //     $pdf->Output("$output", 'I'); // save to file because we can
    //     exit();
    // }

    // function print_data_essai()
    // {
    //     $email=$_SESSION["user_name"];
    //    //     load library
    //     $this->load->library('pdf');
    //     $pdf = $this->pdf->load();
    //    // retrieve data from model
    //      $data['data_essai']=$this->Data_essai->get_data_essai_by_email($email);
    //     $data['title'] = "items";
    //     ini_set('memory_limit', '256M'); 
    //    // boost the memory limit if it's low ;)
    //     $html = $this->load->view('home/cetak_pdf/data_nilai_raport', $data, true);
    //    // render the view into HTML
    //     $pdf->WriteHTML($html); // write the HTML into the PDF
    //     $output = 'data_essai' . $email . '.pdf';
    //     $pdf->Output("$output", 'I'); // save to file because we can
    //     exit();
    // }

    // function print_data_ayah_kandung()
    // {
    //     $email=$_SESSION["user_name"];
    //    //     load library
    //     $this->load->library('pdf');
    //     $pdf = $this->pdf->load();
    //    // retrieve data from model
    //     $data['data_ayah_kandung']=$this->Data_ayah_kandung->get_data_ayah_kandung_by_email($email);
    //     $data['title'] = "items";
    //     ini_set('memory_limit', '256M'); 
    //    // boost the memory limit if it's low ;)
    //     $html = $this->load->view('home/cetak_pdf/data_ayah_kandung', $data, true);
    //    // render the view into HTML
    //     $pdf->WriteHTML($html); // write the HTML into the PDF
    //     $output = 'data_ayah_kandung' . $email . '.pdf';
    //     $pdf->Output("$output", 'I'); // save to file because we can
    //     exit();
    // }

    // function print_data_ibu_kandung()
    // {
    //     $email=$_SESSION["user_name"];
    //    //     load library
    //     $this->load->library('pdf');
    //     $pdf = $this->pdf->load();
    //    // retrieve data from model
    //      $data['data_ibu_kandung']=$this->Data_ibu_kandung->get_data_ibu_kandung_by_email($email);
    //     $data['title'] = "items";
    //     ini_set('memory_limit', '256M'); 
    //    // boost the memory limit if it's low ;)
    //     $html = $this->load->view('home/cetak_pdf/data_ibu_kandung', $data, true);
    //    // render the view into HTML
    //     $pdf->WriteHTML($html); // write the HTML into the PDF
    //     $output = 'data_ibu_kandung' . $email . '.pdf';
    //     $pdf->Output("$output", 'I'); // save to file because we can
    //     exit();
    // }

    // function print_data_riwayat_kesehataan()
    // {
    //     $email=$_SESSION["user_name"];
    //    //     load library
    //     $this->load->library('pdf');
    //     $pdf = $this->pdf->load();
    //    // retrieve data from model
    //      $data['data_riwayat_kesehataan']=$this->Data_riwayat_kesehataan->get_data_riwayat_kesehataan_by_email($email);
    //     $data['title'] = "items";
    //     ini_set('memory_limit', '256M'); 
    //    // boost the memory limit if it's low ;)
    //     $html = $this->load->view('home/cetak_pdf/data_riwayat_kesehataan', $data, true);
    //    // render the view into HTML
    //     $pdf->WriteHTML($html); // write the HTML into the PDF
    //     $output = 'data_riwayat_kesehataan' . $email . '.pdf';
    //     $pdf->Output("$output", 'I'); // save to file because we can
    //     exit();
    // }
 
}
 
?>