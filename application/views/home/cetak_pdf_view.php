<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
   table, th, td{
    border: 1px solid #333;
   }
   body {
    
    background-image: url("<?php echo base_url(); ?>/formulir/back.png");
    
   
     background-image-resize: 5; background-position: top center;
    }
   
  </style>
  
<body>
 

<div >
    <h2 ALIGN=CENTER>Formulir Pendaftaran Online</h2>
    <h2 ALIGN=CENTER>PPDB SMAN Sumatera Selatan</h2>
    <div style='float: center;'>
        <img style='float: left; position: relative;'  width="151.181102px" height="226.771654px" src="<?php echo base_url(); ?>/uploads/<?php echo $_SESSION["user_name"]; ?>/<?php echo $_SESSION["foto_pribadi"]; ?>" alt="..." >
    </div>
    
    <div class="x_title">
        <h2>Data Pribadi </h2>
                            
        <div class="clearfix"></div>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap : <?php echo $data_pribadi[0]["nama_lengkap"]; ?>
        </label>
    </div>
    
     <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NISN : <?php 
                                echo $data_pribadi[0]["nisn"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Kelamin : <?php 
                              echo $data_pribadi[0]["jenis_kelamin"]; ?>
        </label>
    </div>


    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir : <?php 
                              echo $data_pribadi[0]["tanggal_lahir"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir : <?php 
                              echo $data_pribadi[0]["tempat_lahir"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kewarganegaraan : <?php 
                              echo $data_pribadi[0]["kewarganegaraan"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Agama : <?php 
                              echo $data_pribadi[0]["agama"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Golongan Darah : <?php 
                              echo $data_pribadi[0]["golongan_darah"]; ?>
        </label>
    </div>


    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Berat Badan : <?php 
                              echo $data_pribadi[0]["berat_badan"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tinggi Badan : <?php 
                              echo $data_pribadi[0]["tinggi_badan"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Rumah : <?php 
                              echo $data_pribadi[0]["alamat"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kota : <?php 
                              echo $data_pribadi[0]["kota"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telepon : <?php 
                              echo $data_pribadi[0]["nomor_telpon"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Saudara Yang Bersekolah di SMA Negeri Sumatera Selatan : <?php 
                            echo $data_pribadi[0]["nama_saudara"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Karyawan atau Guru Yang Memiliki Hubungan Keluarga di SMA Negeri Sumatera Selatan : <?php 
                            echo $data_pribadi[0]["nama_hubungan"]; ?>
        </label>
    </div>


    <div class="x_title">
                            <h2>Data Sekolah</h2>
                            
                            <div class="clearfix"></div>
                          </div>
     <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Asal Sekolah : <?php 
                              echo $data_sekolah[0]["asal_sekolah"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Masuk Sekolah : <?php 
                                echo $data_sekolah[0]["tanggal_masuk"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Sekolah : <?php 
                                echo $data_sekolah[0]["alamat_sekolah"]; ?>
        </label>
    </div>

     <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Kepala Sekolah : <?php 
                                echo $data_sekolah[0]["nama_kepala_sekolah"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telpon Sekolah : <?php 
                                echo $data_sekolah[0]["nomor_telpon_sekolah"]; ?>
        </label>
    </div>

    <div class="x_title">
                            <h2>Data Nilai Raport </h2>
                            
                            <div class="clearfix"></div>
    </div>

    <div>
           <table>
                <tr>
                    <th>Nomor</th>
                    <th>Semester</th>
                    <th>Mata Pelajaran</th>
                    <th>Nilai</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Semester 1</td>
                    <td>MTK</td>
                    <td><?php 
                                echo $data_nilai_raport[0]["nilai_mtk_semester_1"]; ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Semester 1</td>
                    <td>Bahasa Indonesia</td>
                    <td> <?php 
                                echo $data_nilai_raport[0]["nilai_bahasa_indonesia_semester_1"]; ?></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Semester 1</td>
                    <td>Bahasa Inggris</td>
                    <td> <?php 
                              echo $data_nilai_raport[0]["nilai_bahasa_inggris_semester_1"]; ?></td>
                </tr>

                 <tr>
                    <td>4</td>
                    <td>Semester 1</td>
                    <td>IPA</td>
                    <td>  <?php 
                                echo $data_nilai_raport[0]["nilai_ipa_semester_1"]; ?></td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>Semester 1</td>
                    <td>IPS</td>
                    <td>  <?php 
                                echo $data_nilai_raport[0]["nilai_ips_semester_1"]; ?></td>
                </tr>

                <tr>
                    <td>6</td>
                    <td>Semester 2</td>
                    <td>MTK</td>
                    <td><?php 
                                echo $data_nilai_raport[0]["nilai_mtk_semester_2"]; ?></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Semester 2</td>
                    <td>Bahasa Indonesia</td>
                    <td> <?php 
                                echo $data_nilai_raport[0]["nilai_bahasa_indonesia_semester_2"]; ?></td>
                </tr>

                <tr>
                    <td>8</td>
                    <td>Semester 2</td>
                    <td>Bahasa Inggris</td>
                    <td> <?php 
                              echo $data_nilai_raport[0]["nilai_bahasa_inggris_semester_2"]; ?></td>
                </tr>

                 <tr>
                    <td>9</td>
                    <td>Semester 2</td>
                    <td>IPA</td>
                    <td>  <?php 
                                echo $data_nilai_raport[0]["nilai_ipa_semester_2"]; ?></td>
                </tr>

                <tr>
                    <td>10</td>
                    <td>Semester 2</td>
                    <td>IPS</td>
                    <td>  <?php 
                                echo $data_nilai_raport[0]["nilai_ips_semester_2"]; ?></td>
                </tr>

                <tr>
                    <td>11</td>
                    <td>Semester 3</td>
                    <td>MTK</td>
                    <td><?php 
                                echo $data_nilai_raport[0]["nilai_mtk_semester_3"]; ?></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Semester 3</td>
                    <td>Bahasa Indonesia</td>
                    <td> <?php 
                                echo $data_nilai_raport[0]["nilai_bahasa_indonesia_semester_3"]; ?></td>
                </tr>

                <tr>
                    <td>13</td>
                    <td>Semester 3</td>
                    <td>Bahasa Inggris</td>
                    <td> <?php 
                              echo $data_nilai_raport[0]["nilai_bahasa_inggris_semester_3"]; ?></td>
                </tr>

                 <tr>
                    <td>14</td>
                    <td>Semester 3</td>
                    <td>IPA</td>
                    <td>  <?php 
                                echo $data_nilai_raport[0]["nilai_ipa_semester_3"]; ?></td>
                </tr>

                <tr>
                    <td>15</td>
                    <td>Semester 3</td>
                    <td>IPS</td>
                    <td>  <?php 
                                echo $data_nilai_raport[0]["nilai_ips_semester_3"]; ?></td>
                </tr>

                <tr>
                    <td>16</td>
                    <td>Semester 4</td>
                    <td>MTK</td>
                    <td><?php 
                                echo $data_nilai_raport[0]["nilai_mtk_semester_4"]; ?></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Semester 4</td>
                    <td>Bahasa Indonesia</td>
                    <td> <?php 
                                echo $data_nilai_raport[0]["nilai_bahasa_indonesia_semester_4"]; ?></td>
                </tr>

                <tr>
                    <td>18</td>
                    <td>Semester 4</td>
                    <td>Bahasa Inggris</td>
                    <td> <?php 
                              echo $data_nilai_raport[0]["nilai_bahasa_inggris_semester_4"]; ?></td>
                </tr>

                 <tr>
                    <td>19</td>
                    <td>Semester 4</td>
                    <td>IPA</td>
                    <td>  <?php 
                                echo $data_nilai_raport[0]["nilai_ipa_semester_4"]; ?></td>
                </tr>

                <tr>
                    <td>20</td>
                    <td>Semester 4</td>
                    <td>IPS</td>
                    <td>  <?php 
                                echo $data_nilai_raport[0]["nilai_ips_semester_4"]; ?></td>
                </tr>

                <tr>
                    <td>21</td>
                    <td>Semester 5</td>
                    <td>MTK</td>
                    <td><?php 
                                echo $data_nilai_raport[0]["nilai_mtk_semester_5"]; ?></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Semester 5</td>
                    <td>Bahasa Indonesia</td>
                    <td> <?php 
                                echo $data_nilai_raport[0]["nilai_bahasa_indonesia_semester_5"]; ?></td>
                </tr>

                <tr>
                    <td>23</td>
                    <td>Semester 5</td>
                    <td>Bahasa Inggris</td>
                    <td> <?php 
                              echo $data_nilai_raport[0]["nilai_bahasa_inggris_semester_5"]; ?></td>
                </tr>

                 <tr>
                    <td>24</td>
                    <td>Semester 5</td>
                    <td>IPA</td>
                    <td>  <?php 
                                echo $data_nilai_raport[0]["nilai_ipa_semester_5"]; ?></td>
                </tr>

                <tr>
                    <td>25</td>
                    <td>Semester 5</td>
                    <td>IPS</td>
                    <td>  <?php 
                                echo $data_nilai_raport[0]["nilai_ips_semester_5"]; ?></td>
                </tr>

            </table>
        
    </div>

   <div class="x_title">
        <h2>Data Organisasi </h2>
                            
        <div class="clearfix"></div>
    </div><table>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Periode</th>
                    <th>Memiliki SK</th>
                </tr>
    <?php $number=1; foreach ($data_organisasi as $organisasi) : ?>
         
        <tr>
                    <td><?php 
                                    echo $number ?></td>
                    <td><?php 
                                    echo $organisasi["nama_organisasi"]; ?></td>
                    <td><?php 
                                    echo $organisasi["jabatan_organisasi"]; ?></td>
                    <td><?php 
                                    echo $organisasi["periode_organisasi"]; ?></td>
                     <td><?php 
                                    echo $organisasi["memiliki_sk"]; ?></td>
                </tr>
    <?php $number++; endforeach ?>
    </table>
    <div class="x_title">
                            <h2>Data Prestasi </h2>
                            
                            <div class="clearfix"></div>
        </div>
    <table>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Kegiatan</th>
                    <th>Tingkat Kejuaraan</th>
                    <th>Juara</th>
                     <th>Kategori Kegiatan</th>
                      <th>Tahun Juara</th>
                    <th>Memiliki SK</th>
                </tr>
    <?php $number=1; foreach ($data_prestasi as $prestasi) : ?>
         
            <tr>
                    <td><?php 
                                    echo $number ?></td>

                    <td><?php 
                                    echo $prestasi["nama_kegiatan"]; ?></td>
                    <td><?php 
                                    echo $prestasi["tingkat_kejuaraan"]; ?></td>
                    <td><?php 
                                    echo $prestasi["juara"]; ?></td>
                    <td><?php 
                                    echo $prestasi["kategori_kegiatan"]; ?></td>
                    <td><?php 
                                    echo $prestasi["tahun_juara"]; ?></td>
                    <td><?php 
                                    echo $prestasi["memiliki_sk_prestasi"]; ?></td>
                    
            </tr>


    <?php $number++; endforeach ?>
    </table>
    


    <div class="x_title">
        <h2>Data Pribadi Ayah Kandung  </h2>
                            
        <div class="clearfix"></div>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ayah Kandung  :<?php 
                                echo $data_ayah_kandung[0]["nama_ayah_kandung"]; ?>
        </label>
    </div>

     <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["tanggal_lahir_ayah_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["tempat_lahir_ayah_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor KTP Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["nomor_ktp_ayah_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["alamat_ayah_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telepon Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["nomor_telepon_ayah_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["status_ayah_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan Terakhir Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["pendidikan_terakhir_ayah_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama institusi pendidikan terakhir Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["nama_institusi_ayah_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Pekerjaan Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["status_pekerjaan_ayah_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Pekerjaan Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["jenis_pekerjaan_ayah_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Perusahaan Tempat Bekerja Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["nama_perusahaan_ayah_kandung"]; ?>
        </label>
    </div>

     <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jabatan Pada Perusahaan Tempat Bekerja Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["jabatan_ayah_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tahun Mulai Bekerja/ Wirausaha  Ayah Kandung  : <?php 
                                echo $data_ayah_kandung[0]["tahun_mulai_bekerja_ayah_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penghasilan  Ayah Kandung  :  <?php 
                                echo 'Rp. ' . number_format(  $data_ayah_kandung[0]["gaji_pokok_ayah_kandung"] , 0 , '' , '.' ) . ',-'; ?><?php 
                                 ?>
        </label>
    </div>

     <div class="x_title">
        <h2>Data Pribadi Ibu Kandung  </h2>
                            
        <div class="clearfix"></div>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ibu Kandung  :<?php 
                                echo $data_ibu_kandung[0]["nama_ibu_kandung"]; ?>
        </label>
    </div>

     <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["tanggal_lahir_ibu_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["tempat_lahir_ibu_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor KTP Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["nomor_ktp_ibu_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["alamat_ibu_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telepon Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["nomor_telepon_ibu_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["status_ibu_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan Terakhir Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["pendidikan_terakhir_ibu_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama institusi pendidikan terakhir Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["nama_institusi_ibu_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Pekerjaan Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["status_pekerjaan_ibu_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Pekerjaan Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["jenis_pekerjaan_ibu_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Perusahaan Tempat Bekerja Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["nama_perusahaan_ibu_kandung"]; ?>
        </label>
    </div>

     <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jabatan Pada Perusahaan Tempat Bekerja Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["jabatan_ibu_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tahun Mulai Bekerja/ Wirausaha  Ibu Kandung  : <?php 
                                echo $data_ibu_kandung[0]["tahun_mulai_bekerja_ibu_kandung"]; ?>
        </label>
    </div>

    <div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penghasilan  Ibu Kandung  : <?php 
                                echo 'Rp. ' . number_format(  $data_ibu_kandung[0]["gaji_pokok_ibu_kandung"], 0 , '' , '.' ) . ',-'; ?>
        </label>
    </div>
    <div class="x_title">
                            <h2>Data Tanggungan Orang Tua </h2>
                            
                            <div class="clearfix"></div>
        </div>
        <table>
                <tr>
                    <th>Nomor</th>
                    <th>Nama  </th>
                    <th>Usia</th>
                    <th>Pendidikan Terakhir</th>
                     <th>Hubungan Keluarga</th>
                      <th>Sudah Bekerja</th>
                    <th>Dibiayai</th>
                </tr>
     <?php $number=1; foreach ($data_tanggungan_orang_tua as $tanggungan_orang_tua) : ?>
         
        <tr>
                    <td><?php 
                                    echo $number ?></td>

                    <td><?php 
                                    echo $tanggungan_orang_tua["nama_tanggungan"]; ?></td>
                    <td><?php 
                                    echo $tanggungan_orang_tua["usia"]; ?></td>
                    <td><?php 
                                    echo $tanggungan_orang_tua["pendidikan_terakhir"]; ?></td>
                    <td><?php 
                                    echo $tanggungan_orang_tua["hubungan_keluarga"]; ?></td>
                    <td><?php 
                                    echo $tanggungan_orang_tua["sudah_bekerja"]; ?></td>
                    <td><?php 
                                    echo $tanggungan_orang_tua["dibiayai"]; ?></td>
                    
                    
                </tr>



    <?php $number++; endforeach ?>
    </table>
   <div class="x_title">
                            <h2>Essai  </h2>
                            
                            <div class="clearfix"></div>
    </div>
    <div>
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php 
                                echo $data_essai[0]["essai"]; ?>
            </label>

    </div>
</div>
</body>
