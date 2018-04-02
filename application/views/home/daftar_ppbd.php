<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMA Negeri Sumatera Selatan PPDB Online </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url(); ?>/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url(); ?>/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="<?php echo base_url(); ?>/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url(); ?>/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/vendors/cropper/dist/cropper.min.css" rel="stylesheet">
     <!-- iCheck -->
    <link href="<?php echo base_url(); ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>/build/css/custom.min.css" rel="stylesheet">
   
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
              <div class="navbar nav_title" style="border: 0;">
                <a href="<?php echo base_url(); ?>/home" class="site_title"><i class="fa fa-paw"></i> <span>PPDB Online SMAN SUMSEL !</span></a>
              </div>

              <div class="clearfix"></div>

              <!-- menu profile quick info -->
              <div class="profile clearfix">
                <div class="profile_pic">
                  <img src="<?php echo base_url(); ?>/uploads/<?php echo $_SESSION["user_name"]; ?>/<?php echo $_SESSION["foto_pribadi"]; ?>" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <span>Welcome,</span>
                  <?php
                    echo "<h2> " . $_SESSION["nama"] . "</h2>";
                  ?>
                </div>
              </div>
              <!-- /menu profile quick info -->
              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>PPDB ONline</h3>
                  <ul class="nav side-menu">
                    <li><a href="<?php echo base_url(); ?>/home/"><i class="fa fa-home"></i> Home <span class="fa "></span></a>
                    </li>
                    <li><a><i class="fa fa-edit"></i> PPDB 2018 <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <?php if($_SESSION["status"]==0){  ?>
                            <li><a href="<?php echo base_url(); ?>/home/daftar">Daftar</a></li>
                        <?php } else if($_SESSION["status"]==1){  ?>
                            <li><a href="<?php echo base_url(); ?>/home/upload_dokumen">UPLOAD Dokumen</a></li>
                        <?php }else { ?>
                            <li><a href="<?php echo base_url(); ?>/home/cetak">CETAK FORMULIR</a></li>
                        <?php } ?>

                       
                        <li><a href="<?php echo base_url(); ?>/home/hasil">Lihat Hasil</a></li>
                        
                      </ul>
                    </li> 
                  </ul> 
                </div>
              </div>
              <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>

        </div>
        <!-- top navigation -->
          <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url(); ?>/uploads/<?php echo $_SESSION["user_name"]; ?>/<?php echo $_SESSION["foto_pribadi"]; ?>" alt=""><?php
                  echo "" . $_SESSION["nama"] . "";
                ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <?php if($_SESSION["status"]==0){  ?>
                          <li><a href="<?php echo base_url(); ?>/home/daftar">Daftar</a></li>
                      <?php } else if($_SESSION["status"]==1){  ?>
                          <li><a href="<?php echo base_url(); ?>/home/upload_dokumen">UPLOAD Dokumen</a></li>
                      <?php }else { ?>
                          <li><a href="<?php echo base_url(); ?>/home/cetak">CETAK FORMULIR</a></li>
                      <?php } ?>

                     
                      <li><a href="<?php echo base_url(); ?>/home/hasil">Lihat Hasil</a></li>
                    <li><a href="<?php echo base_url(); ?>/welcome/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>

            </nav>

          </div>

        </div>
        <!-- top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="page-title">
              <div class="title_left">
                <h3>Formulir Pendaftaran Online SMA Negeri Sumatera Selatan</h3>
              </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Daftar PPBD Online SMAN SUMSEL 
                </h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                  <div class="clearfix"></div>
              </div>
              <p>Formulir Pendaftaran Sekolah Menengah Negeri Sumatera Selatan</p>
              
              <form class="form-horizontal form-label-left anjay" id="demo-form2" data-parsley-validate name="data_all" action="<?php echo base_url(); ?>Data_siswa/finish_all_data" method="post">
                <div id="wizard" class="form_wizard wizard_horizontal">
                  <ul class="wizard_steps">
                    <li>
                      <a href="#step-1">
                        <span class="step_no">1
                        </span>
                        <span class="step_descr">
                          Data Pribadi<br />
                          <small>Data Pribadi Pendaftar
                          </small>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#step-2">
                        <span class="step_no">2</span>
                        <span class="step_descr">
                          Data Orang Tua<br />
                          <small>Data Orang Tua Pendaftar
                          </small>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#step-3">
                        <span class="step_no">3
                        </span>
                        <span class="step_descr">
                          Data Nilai Raport Anda<br />
                          <small>Data Nilai Raport Anda
                          </small>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#step-4">
                        <span class="step_no">4
                        </span>
                        <span class="step_descr">
                          Data Organisasi Anda<br />
                          <small>Data Organisasi Anda
                          </small>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="#step-5">
                        <span class="step_no">5
                        </span>
                        <span class="step_descr">
                          Data Prestasi<br />
                          <small>Data Prestasi Pendaftar
                          </small>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="#step-6">
                        <span class="step_no">6
                        </span>
                        <span class="step_descr">
                         Essai<br />
                          <small>Essai
                          </small>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="#step-7">
                        <span class="step_no">7
                        </span>
                        <span class="step_descr">
                          Data Pribadi Orang Tua<br />
                          <small>Data Pribadi Orang Tua
                          </small>
                        </span>
                      </a>
                    </li>


                    <li>
                      <a href="#step-8">
                        <span class="step_no">8
                        </span>
                        <span class="step_descr">
                         Data Kesehatan <br />
                          <small>Data Kesehatan Anda
                          </small>
                        </span>
                      </a>
                    </li>

                  </ul>
                  <div id="step-1">
                  <!-- start step 1 -->
                    <div class="x_title">
                      <h2>Data Pribadi </h2>
                      <div class="clearfix"></div>
                    </div>
                    

                    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap<span class="required">*</span> 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nama_lengkap" name="nama_lengkap" required="required" class="form-control col-md-7 col-xs-12" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">NISN<span class="required">*</span> 
                            </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="tel" id="nisn" name="nisn" required="required" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                    </div>

                    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                
                                 <option value="">Pilih Opsi</option>

                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                                
                              </select>
                            </div>
                    </div>

                    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Lahir<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" class="form-control" id="tanggal_lahir" required="required" name="tanggal_lahir" data-inputmask="'mask': '99/99/9999'">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="tempat_lahir" name="tempat_lahir" required="required" class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="kewarganegaraan" name="kewarganegaraan" required="required" class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Agama<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="agama" name="agama" required="required" class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Golongan Darah<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="golongan_darah" name="golongan_darah" required="required" class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Berat Badan<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="berat_badan" name="berat_badan" required="required" class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tinggi Badan<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="tinggi_badan" name="tinggi_badan" required="required" class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Rumah<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="alamat" name="alamat" required="required" class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kota<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="kota" name="kota" required="required" class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Nomor Telepon<span class="required">*</span> 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="tel" id="nomor_telpon" required="required" name="nomor_telpon"  class="form-control col-md-7 col-xs-12">
                            </div>
                    </div>

                    <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="beasiswa">Darimanakah anda mendapatkan informasi beasiswa ini<span class="required">*</span>
                            </label>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value="sekolah" id="informasi_beasiswa[]" name="informasi_beasiswa[]" class="flat"> Sekolah
                              </label>
                              <label>
                                <input type="checkbox" value="situs internet" id="informasi_beasiswa[]" name="informasi_beasiswa[]" class="flat"> Situs Internet
                              </label>
                              <label>
                                <input type="checkbox" value="media cetak" id="informasi_beasiswa[]" name="informasi_beasiswa[]" class="flat"> Media Cetak
                              </label>
                              <label>
                                <input type="checkbox" value="keluarga/teman" id="informasi_beasiswa[]" name="informasi_beasiswa[]" class="flat"> Keluarga / Teman
                              </label>
                              <label style="display: none;">
                                <input type="checkbox" value="sekolah" id="informasi_beasiswa[]" name="informasi_beasiswa[]" class="flat"  checked="true" value="">
                              </label>
                            </div>
                    </div>

                    <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Apakah Anda Memiliki saudara yang bersekolah di SMAN SUMSEL
                              </label>
                              <div class="checkbox">
                                <label>
                                   <input id="id_validate_hubungan_saudara_ya" name="id_validate_hubungan_saudara_ya" type="checkbox" onclick="validate_hubungan_saudara_ya()" /> YA
                                </label>
                                <label>
                                   <input id="id_validate_hubungan_saudara_tidak" name="id_validate_hubungan_saudara_tidak" type="checkbox" onclick="validate_hubungan_saudara_tidak()" /> Tidak
                                </label>
                              </div>
                      </div>

                      <div class="item form-group" id="nama_hubungan_saudara" style="display: none;">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Nama Saudara
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nama_saudara"  name="nama_saudara"  class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>

                      <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Apakah Anda Memiliki Hubungan Keluarga dengan Karyawan / Guru SMAN SUMSEL 
                              </label>
                              <div class="checkbox">
                                <label>
                                   <input id="id_validate_hubungan_keluarga_ya" name="id_validate_hubungan_keluarga_ya" type="checkbox" onclick="validate_hubungan_keluarga_ya()" /> YA
                                </label>
                                <label>
                                  <input id="id_validate_hubungan_keluarga_tidak" name="id_validate_hubungan_keluarga_tidak" type="checkbox" onclick="validate_hubungan_keluarga_tidak()" />Tidak
                                </label>
                              </div>
                      </div>

                      <div class="item form-group" id="nama_hubungan_keluarga" style="display: none;">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Nama 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nama_hubungan" name="nama_hubungan" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>

                  <!-- end step 1 -->
                  </div>
                 
                  <div id="step-2">
                  <!-- start step 2 -->
                    <div class="x_title">
                      <h2>Data Sekolah </h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Asal Sekolah<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="asal_sekolah" name="asal_sekolah" required="required"  class="form-control col-md-7 col-xs-12" type="text"  >
                            </div>
                    </div>

                    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Masuk <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="tanggal_masuk" name="tanggal_masuk" required="required"  class="form-control" data-inputmask="'mask': '99/99/9999'">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Sekolah<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="alamat_sekolah" name="alamat_sekolah" required="required" class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Kepala Sekolah<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nama_kepala_sekolah" name="nama_kepala_sekolah" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telpon Sekolah
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nomor_telpon_sekolah" name="nomor_telpon_sekolah" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>
                  <!-- end step 2 -->
                  </div>
                 
                  <div id="step-3">
                  <!-- start step 3 -->
                    <div class="x_title">
                      <h2>Data Nilai Raport Anda </h2>
                      <div class="clearfix"></div>
                    </div>

                    <div class="x_title">
                      <h2>Raport Semester 1 </h2>
                      <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai MTK Semester 1
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_mtk_semester_1" name="nilai_mtk_semester_1" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai Bahasa Indonesia Semester 1<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_bahasa_indonesia_semester_1" name="nilai_bahasa_indonesia_semester_1" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai Bahasa Inggris Semester 1<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_bahasa_inggris_semester_1" name="nilai_bahasa_inggris_semester_1" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai IPA Semester 1<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_ipa_semester_1" name="nilai_ipa_semester_1" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai IPS Semester 1<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_ips_semester_1" name="nilai_ips_semester_1" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="x_title">
                      <h2>Raport Semester 2 </h2>
                      <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai MTK Semester 2<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_mtk_semester_2" name="nilai_mtk_semester_2" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai Bahasa Indonesia Semester 2<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_bahasa_indonesia_semester_2" name="nilai_bahasa_indonesia_semester_2" required="required"   class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai Bahasa Inggris Semester 2<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_bahasa_inggris_semester_2" name="nilai_bahasa_inggris_semester_2" required="required"   class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai IPA Semester 2<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_ipa_semester_2" name="nilai_ipa_semester_2" required="required"   class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai IPS Semester 2<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_ips_semester_2" name="nilai_ips_semester_2" required="required" "  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="x_title">
                      <h2>Raport Semester 3 </h2>
                      <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai MTK Semester 3<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_mtk_semester_3" name="nilai_mtk_semester_3" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai Bahasa Indonesia Semester 3<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_bahasa_indonesia_semester_3" name="nilai_bahasa_indonesia_semester_3" required="required"   class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai Bahasa Inggris Semester 3<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_bahasa_inggris_semester_3" name="nilai_bahasa_inggris_semester_3" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai IPA Semester 3<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_ipa_semester_3" name="nilai_ipa_semester_3" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai IPS Semester 3<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_ips_semester_3" name="nilai_ips_semester_3" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="x_title">
                      <h2>Raport Semester 4</h2>
                      <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai MTK Semester 4<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_mtk_semester_4" name="nilai_mtk_semester_4" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai Bahasa Indonesia Semester 4<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_bahasa_indonesia_semester_4" name="nilai_bahasa_indonesia_semester_4" required="required"   class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai Bahasa Inggris Semester 4<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_bahasa_inggris_semester_4" name="nilai_bahasa_inggris_semester_4" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai IPA Semester 4<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_ipa_semester_4" name="nilai_ipa_semester_4" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai IPS Semester 4<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_ips_semester_4" name="nilai_ips_semester_4" required="required"   class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="x_title">
                      <h2>Raport Semester 5 </h2>
                      <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai MTK Semester 5<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_mtk_semester_5" name="nilai_mtk_semester_5" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai Bahasa Indonesia Semester 5<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_bahasa_indonesia_semester_5" name="nilai_bahasa_indonesia_semester_5" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai Bahasa Inggris Semester 5<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_bahasa_inggris_semester_5" name="nilai_bahasa_inggris_semester_5" required="required" class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai IPA Semester 5<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_ipa_semester_5" name="nilai_ipa_semester_5" required="required"   class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nilai IPS Semester 5<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nilai_ips_semester_5" name="nilai_ips_semester_5" required="required" class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                   <!-- end step 3 -->
                  </div>

                  <div id="step-4">
                  <!-- start step 4 -->
                    <div class="x_title">
                      <h2>Data Organisasi Anda</h2>
                      <div class="clearfix"></div>
                    </div>

                    <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Apakah Anda Mengikuti Organisasi?<span class="required">*</span> 
                            </label>
                            <div class="checkbox" >
                              <label>
                                 <input id="remember" name="remember" type="checkbox" onclick="validate()" />YA
                              </label>
                              <label>
                                 <input id="remember_tidak" name="remember_tidak" type="checkbox" onclick="validate_tidak()" />Tidak
                              </label>
                            </div>
                    </div>
                    <div id="organisasi_hidden" style="display: none;">
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Organisasi Yang Diikuti</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <select class="form-control" id="nama_organisasi[]" name="nama_organisasi[]">
                                <option value="">Pilih Opsi</option>
                                <option value="osis">OSIS</option>
                                <option value="pramuka">PRAMUKA</option>
                                <option value="rohis">ROHIS</option>
                                <option value="pmr">PMR</option>
                                <option value="pks">PKS</option>
                                <option value="basket">BASKET</option>
                                <option value="futsal">FUTSAL</option>
                                <option value="karya ilmiah remaja">KARYA ILMIAH REMAJA</option>
                                <option value="pencak silat">PENCAK SILAT / TAEKWONDO / KARATE</option>
                                <option value="paduan suara">PADUAN SUARA</option>
                                <option value="volley">VOLLEY</option>
                                <option value="tari">TARI</option>
                                <option value="lainnya">Lainnya</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="jabatan_organisasi[]" name="jabatan_organisasi[]">
                                  <option value="">Pilih Opsi</option>
                                  <option value="ketua">Ketua</option>
                                  <option value="wakil ketua">Wakil Ketua</option>
                                  <option value="bendahara">Bendahara</option>
                                  <option value="sekretaris">Sekretaris</option>
                                  <option value="ketua seksi">Ketua Seksi</option>
                                  <option value="anggota">Anggota</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Periode</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="periode_organisasi[]" name="periode_organisasi[]">
                                  <option value="">Pilih Opsi</option>
                                  <option value="20017-2018">Tahun 2017-2018</option>
                                  <option value="2016-2017">Tahun 2016-2017</option>
                                  <option value="2015-2016">Tahun 2015-2016</option>
                                  <option value="2014-2015">Tahun 2014-2015</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Memiliki SK</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="memiliki_sk[]" name="memiliki_sk[]">
                                  <option value="">Pilih Opsi</option>
                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                            </div>
                            </div>
                      </div>

                      <div class="organisasi" id="organisasi">

                      </div>

                          
                      <button type="button" id="tambah_organisasi" style="display: none;" name="tambah_organisasi" class="btn btn-round btn-success">Tambah Organisasi</button>

                   <!-- end step 4 -->
                  </div>

                  <div id="step-5">
                  <!-- start step 5 -->
                    <div class="x_title">
                      <h2>Data Prestasi</h2>
                      <div class="clearfix"></div>
                    </div>

                    <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Apakah Anda Pernah Memiliki Prestasi Diluar Sekolah ?<span class="required">*</span> 
                            </label>
                            <div class="checkbox" >
                              <label>
                                 <input id="id_validate_prestasi_ya" name="id_validate_prestasi_ya" type="checkbox" onclick="validate_prestasi_ya()" />YA
                              </label>
                              <label>
                                 <input id="id_validate_prestasi_tidak" name="id_validate_prestasi_tidak" type="checkbox" onclick="validate_prestasi_tidak()" />Tidak
                              </label>
                            </div>
                    </div>

                     <div id="prestasi_hidden" style="display: none;">
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Kegiatan</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nama_kegiatan[]" name="nama_kegiatan[]" class="form-control col-md-7 col-xs-12" type="text" >
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tingkat Kejuaraan</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="tingkat_kejuaraan[]" name="tingkat_kejuaraan[]">
                                  <option value="">Choose option</option>
                                  <option value="tingkat internasional">Tingkat Internasional</option>
                                  <option value="tingkat nasional">Tingkat Nasional</option>
                                  <option value="tingkat provinsi">Tingkat Provinsi</option>
                                  <option value="tingkat kota / kabupaten ">Tingkat Kota / Kabupaten</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Juara</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="juara[]" name="juara[]">
                                  <option value="">Choose option</option>
                                  <option value="Juara Satu">Juara Satu</option>
                                  <option value="Juara Dua">Juara Dua</option>
                                  <option value="Juara Tiga">Juara Tiga</option>
                                  
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Kegiatan</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="kategori_kegiatan[]" name="kategori_kegiatan[]">
                                  <option value="">Choose option</option>
                                  <option value="seni">Seni</option>
                                  <option value="olahraga">Olahraga</option>
                                  <option value="musik ">Musik</option>
                                   <option value="akademik ">Akademik</option>
                                  <option value="lainnya">Lainnya</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tahun Juara</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="tahun_juara[]" name="tahun_juara[]">
                                  <option value="">Choose option</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                  <option value="2014">2014</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Memiliki Sertifikat</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="memiliki_sk_prestasi[]" name="memiliki_sk_prestasi[]">
                                  <option value="">Choose option</option>
                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                            </div>
                    </div>
                    <div class="prestasi" id="prestasi">

                    </div>
                    <button type="button" id="tambah_prestasi" style="display: none;" name="tambah_prestasi" class="btn btn-round btn-success">Tambah Prestasi</button>

                   <!-- end step 5 -->
                  </div>

                  <div id="step-6">
                  <!-- start step 6 -->
                    <div class="x_title">
                      <h2>Essai</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Tulislah essai anda disini dalam bahasa inggris (essai terdiri dari 200 kata dan mendeskripsikan tentang diri anda dan keluarga anda, mengapa anda pantas menjadi siswa SMAN Sumatera Selatan dan cita-cita kepemimpinan dimasa depan<span class="required">*</span> 
                            </label>   
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea id="essai" name="essai" required="required"  class="form-control" style="margin: 0px -159.15625px 0px 0px; width: 617px; height: 304px;">
                              </textarea>
                            </div>
                    </div>
                   <!-- end step 6 -->
                  </div>

                  <div id="step-7">
                  <!-- start step 7 -->
                    <div class="x_title">
                      <h2>Data Pribadi Ayah Kandung</h2>
                      <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ayah Kandung<span class="required">*</span>  
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nama_ayah_kandung" name="nama_ayah_kandung" required="required"   class="form-control col-md-7 col-xs-12">
                            </div>
                    </div>
                            
                   
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Lahir<span class="required">*</span> 
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="tanggal_lahir_ayah_kandung" name="tanggal_lahir_ayah_kandung" required="required" class="form-control" data-inputmask="'mask': '99/99/9999'">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input d="tempat_lahir_ayah_kandung" name="tempat_lahir_ayah_kandung" required="required"   class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor KTP 
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nomor_ktp_ayah_kandung" name="nomor_ktp_ayah_kandung" required="required"  class="form-control col-md-7 col-xs-12">
                            </div>
                    </div>

                    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat 
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="alamat_ayah_kandung" name="alamat_ayah_kandung" required="required"   class="form-control col-md-7 col-xs-12">
                            </div>
                    </div>

                    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telepon
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nomor_telepon_ayah_kandung" name="nomor_telepon_ayah_kandung" required="required"   class="form-control col-md-7 col-xs-12">
                            </div>
                    </div>

                    <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Ayah Kandung<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="status_ayah_kandung" name="status_ayah_kandung">
                                  <option value="">Pilih Opsi</option>
                                  </option>
                                  
                                  <option value="hidup">Hidup</option>
                                  <option value="meninggal">Meninggal</option>
                                </select>
                              </div>
                    </div>

                    <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir Ayah Kandung<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="pendidikan_terakhir_ayah_kandung" name="pendidikan_terakhir_ayah_kandung">
                                  <option value="">Pilih Opsi</option>
                                  <option value="sma">SMP</option>
                                  <option value="sma">SMA</option>
                                  <option value="d-3">D-3</option>
                                  <option value="S-1">S-1</option>
                                  <option value="S-2">S-2</option>
                                  <option value="lainnya">Lainnya</option>
                                </select>
                              </div>
                      </div>

                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama institusi pendidikan terakhir 
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nama_institusi_ayah_kandung" name="nama_institusi_ayah_kandung" required="required"  class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>

                      <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Pekerjaan<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="status_pekerjaan_ayah_kandung" name="status_pekerjaan_ayah_kandung">

                                  <option value="">Pilih Opsi</option>


                                  <option value="bekerja">Bekerja</option>
                                  <option value="tidak bekerja">Tidak Bekerja</option>
                                  <option value="lainnya">Lainnya</option>
                                </select>
                              </div>
                      </div>

                      <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Pekerjaan<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="jenis_pekerjaan_ayah_kandung" name="jenis_pekerjaan_ayah_kandung">

                                  <option value="">Pilih Opsi</option>


                                  <option value="karyawan">Karyawan</option>
                                  <option value="pns">PNS</option>
                                  <option value="buruh harian lepas">Buruh Harian Lepas</option>
                                   <option value="petani">Petani</option>
                                    <option value="pedagang">Pedagang</option>
                                     <option value="wiraswasta">Wiraswasta</option>
                                      <option value="sopir">Sopir</option>
                                       <option value="buruh tani">Buruh Tani</option>
                                  <option value="lainnya">Lainnya</option>
                                </select>
                              </div>
                      </div>

                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Perusahaan Tempat bekerja 
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text"  id="nama_perusahaan_ayah_kandung" name="nama_perusahaan_ayah_kandung" required="required"  class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jabatan 
                          <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text"  id="jabatan_ayah_kandung" name="jabatan_ayah_kandung" required="required"   class="form-control col-md-7 col-xs-12">
                          </div>
                      </div>

                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tahun Mulai Bekerja/ wirausaha 
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text"  id="tahun_mulai_bekerja_ayah_kandung" name="tahun_mulai_bekerja_ayah_kandung" required="required"   class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasilan<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="gaji_pokok_ayah_kandung" name="gaji_pokok_ayah_kandung">
                                  
                                  <option value="">Pilih Opsi</option>


                                  <option value="600000">Dibawah Rp. 750.000</option>
                                  <option value="1250000">Rp. 750.000-Rp. 1.500.000</option>
                                  <option value="2000000">Rp. 1.500.000-Rp. 2.500.000</option>
                                  <option value="3000000">Rp. 2.500.000-Rp. 3.500.000</option>
                                  <option value="4000000">Diatas Rp. 3.500.000</option>
                                 
                                </select>
                              </div>
                            </div>

                            <div class="x_title">
                            <h2>Data Pribadi ibu Kandung</h2>
                            
                            <div class="clearfix"></div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama ibu Kandung<span class="required">*</span> 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nama_ibu_kandung" name="nama_ibu_kandung" required="required"  class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Lahir<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="tanggal_lahir_ibu_kandung" name="tanggal_lahir_ibu_kandung" required="required"  class="form-control" data-inputmask="'mask': '99/99/9999'">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input d="tempat_lahir_ibu_kandung" name="tempat_lahir_ibu_kandung" required="required"  class="form-control col-md-7 col-xs-12" type="text" >
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor KTP 
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nomor_ktp_ibu_kandung" name="nomor_ktp_ibu_kandung" required="required"  class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat 
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="alamat_ibu_kandung" name="alamat_ibu_kandung" required="required"   class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telepon
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nomor_telepon_ibu_kandung" name="nomor_telepon_ibu_kandung" required="required"   class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Status ibu Kandung<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="status_ibu_kandung" name="status_ibu_kandung">
                                  
                                  <option value="">Pilih Opsi</option>


                                  <option value="hidup">Hidup</option>
                                  <option value="meninggal">Meninggal</option>
                                </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir ibu Kandung<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="pendidikan_terakhir_ibu_kandung" name="pendidikan_terakhir_ibu_kandung">
                                  
                                  <option value="">Pilih Opsi</option>

                                  <option value="sma">SMP</option>
                                  <option value="sma">SMA</option>
                                  <option value="d-3">D-3</option>
                                  <option value="S-1">S-1</option>
                                  <option value="S-2">S-2</option>
                                  <option value="lainnya">Lainnya</option>
                                </select>
                              </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama institusi pendidikan terakhir 
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nama_institusi_ibu_kandung" name="nama_institusi_ibu_kandung" required="required"   class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Pekerjaan<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="status_pekerjaan_ibu_kandung" name="status_pekerjaan_ibu_kandung">
                                  
                                  <option value="">Pilih Opsi</option>

                                  <option value="bekerja">Bekerja</option>
                                  <option value="tidak bekerja">Tidak Bekerja</option>
                                  <option value="lainnya">Lainnya</option>
                                </select>
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Pekerjaan<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="jenis_pekerjaan_ibu_kandung" name="jenis_pekerjaan_ibu_kandung">
                                  
                                  <option value="">Pilih Opsi</option>

                                  <option value="karyawan">Karyawan</option>
                                  <option value="pns">PNS</option>
                                  <option value="buruh harian lepas">Buruh Harian Lepas</option>
                                   <option value="petani">Petani</option>
                                    <option value="pedagang">Pedagang</option>
                                     <option value="wiraswasta">Wiraswasta</option>
                                      <option value="sopir">Sopir</option>
                                       <option value="buruh tani">Buruh Tani</option>
                                  <option value="lainnya">Lainnya</option>
                                </select>
                              </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Perusahaan Tempat bekerja 
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text"  id="nama_perusahaan_ibu_kandung" name="nama_perusahaan_ibu_kandung" required="required"  class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jabatan 
                            <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text"  id="jabatan_ibu_kandung" name="jabatan_ibu_kandung" required="required"   class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tahun Mulai Bekerja/ wirausaha <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text"  id="tahun_mulai_bekerja_ibu_kandung" name="tahun_mulai_bekerja_ibu_kandung" required="required"   class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasilan<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="gaji_pokok_ibu_kandung" name="gaji_pokok_ibu_kandung">
                                  
                                  <option value="">Pilih Opsi</option>

                                  <option value="600000">Dibawah Rp. 750.000</option>
                                  <option value="1250000">Rp. 750.000-Rp. 1.500.000</option>
                                  <option value="2000000">Rp. 1.500.000-Rp. 2.500.000</option>
                                  <option value="3000000">Rp. 2.500.000-Rp. 3.500.000</option>
                                  <option value="4000000">Diatas Rp. 3.500.000</option>
                                 
                                </select>
                              </div>
                            </div>

                          
                          
                          <div class="x_title">
                            <h2>Data Tanggungan Orang Tua</h2>
                            
                            <div class="clearfix"></div>

                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Apakah Orang Tua Anda Memiliki Tanggungan Selain Anda ?
                            <span class="required">*</span></label>
                            <div class="checkbox"  >
                              <label>
                                 <input id="id_validate_tanggungan_ya" name="id_validate_tanggungan_ya" type="checkbox" onclick="validate_tanggungan_ya()" />YA
                              </label>
                              <label>
                                 <input id="id_validate_tanggungan_tidak" name="id_validate_tanggungan_tidak" type="checkbox" onclick="validate_tanggungan_tidak()" />Tidak
                              </label>
                            </div>
                          </div>


                          
                          <div id="tanggungan_hidden" style="display: none;">
                            
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama  Tanggungan<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="nama_tanggungan[]" name="nama_tanggungan[]" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Usia<span class="required">*</span> 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="usia[]" name="usia[]" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>

                             <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir<span class="required">*</span> </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" id="pendidikan_terakhir[]" name="pendidikan_terakhir[]">
                                      <option value="">Choose option</option>
                                      <option value="sd">SD</option>
                                      <option value="sma">SMP</option>
                                      <option value="sma">SMA</option>
                                      <option value="d-3">D-3</option>
                                      <option value="S-1">S-1</option>
                                      <option value="S-2">S-2</option>
                                      <option value="lainnya">Lainnya</option>
                                    </select>
                                  </div>
                              </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hubungan Keluarga Dengan Orang Tua Calon Siswa<span class="required">*</span> 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="hubungan_keluarga[]" name="hubungan_keluarga[]" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Sudah Bekerja<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="sudah_bekerja[]" name="sudah_bekerja[]">
                                  <option value="">Choose option</option>
                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                            </div>

                         
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Dibiayai<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="dibiayai[]" name="dibiayai[]">
                                  <option value="">Choose option</option>
                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                            </div>

                            
                            </div>
                         

                          <div class="tanggungan" id="tanggungan">

                          </div>
                           <button type="button" id="tambah_tanggungan" style="display: none;" name="tambah_tanggungan" class="btn btn-round btn-success">Tambah Tanggungan</button>

                   <!-- end step 7 -->
                  </div>

                  <div id="step-8">
                  <!-- start step 7 -->
                    <div class="x_title">
                      <h2>Data Kesehatan Anda</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Dokter Keluarga Anda<span class="required">*</span> 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nama_dokter_keluarga" name="nama_dokter_keluarga" required="required" class="form-control col-md-7 col-xs-12" type="text" >
                              </div>
                    </div>
                    <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Rumah Sakit/ Klinik<span class="required">*</span> 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="rumah_sakit" name="rumah_sakit" required="required" class="form-control col-md-7 col-xs-12" type="text">
                              </div>
                    </div>

                    <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Apakah Anda Memiliki Penyakit Jantung ?<span class="required">*</span> 
                              </label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="memiliki_penyakit_jantung" name="memiliki_penyakit_jantung">

                                  <option value="">Pilih Opsi</option>

                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                    </div>

                    <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Apakah Anda Memiliki Penyakit Kanker ?
                              <span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="memiliki_penyakit_kanker" name="memiliki_penyakit_kanker">
                                  
                                  <option value="">Pilih Opsi</option>

                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                    </div>

                    <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Apakah Anda Memiliki Penyakit Kelainan Psikologis?<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="memiliki_penyakit_kelainan_psikologis" name="memiliki_penyakit_kelainan_psikologis">
                                  
                                  <option value="">Pilih Opsi</option>
                                  

                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                    </div>

                    <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Apakah Anda Memiliki Kelainan Syaraf ?<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="memiliki_penyakit_kelainan_syaraf" name="memiliki_penyakit_kelainan_syaraf">
                                  
                                  <option value="">Pilih Opsi</option>

                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                     </div>

                    <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Apakah Anda Memiliki  Kelainan Darah ?<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="memiliki_penyakit_kelainan_darah" name="memiliki_penyakit_kelainan_darah">
                                  
                                 <option value="">Pilih Opsi</option>

                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                    </div>

                    <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Apakah Anda Pernah diperasi atau menjalani rawt inap selama dua tahun ini ?<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="rawat_inap_dalam_dua_tahun_terakhir" name="rawat_inap_dalam_dua_tahun_terakhir">
                                  
                                  <option value="">Pilih Opsi</option>
                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                    </div>

                    <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Apakah Anda sedang dalam masa pengobatan ?<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="dalam_masa_pengobatan" name="dalam_masa_pengobatan">
                                  
                                  <option value="">Pilih Opsi</option>

                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                    </div>

                    <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Dalam dua bulan ini, apakah anda mengalami tanda-tanda atau gejala yang memerlukan bantuan medis ?<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="bantuan_medis" name="bantuan_medis">
                                  
                                  <option value="">Pilih Opsi</option>

                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                    </div>

                    <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Apakah anda memiliki kondisi fisik yang memerlukan perhatiaan khusus ?<span class="required">*</span></label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="kondisi_fisik_perhatiaan_khusus" name="kondisi_fisik_perhatiaan_khusus">
                                  
                                  <option value="">Pilih Opsi</option>

                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>
                    </div>
                   <!-- end step 8 -->
                  </div>

               </div>
              </form>
              
            </div>
          </div>
      </div>

          
       

        <!-- page content -->

             <!-- footer content -->
            <footer>
              <div class="pull-right">
                Template by digital creative
              </div>
              <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
         
          
          </div>
          </div>
         
        
 
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url(); ?>/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url(); ?>/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="<?php echo base_url(); ?>/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="<?php echo base_url(); ?>/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="<?php echo base_url(); ?>/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Knob -->
    <script src="<?php echo base_url(); ?>/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url(); ?>/vendors/select2/dist/js/select2.full.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>/vendors/iCheck/icheck.min.js"></script>
    
    <!-- validator -->
    <script src="<?php echo base_url(); ?>/vendors/validator/validator.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url(); ?>/vendors/parsleyjs/dist/parsley.min.js"></script>
   <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>/build/js/custom.min.js"></script>
    <script>
      $(document).ready(function(){

       $("#demo-form2").submit(function(e){
            var r = confirm("Anda Yakin Untuk Mensubmit Data Ini");
            if (r == true) {
                
              
            } 
        });

        $('#tambah_organisasi').click(function(){
           document.getElementById('organisasi').innerHTML += '<div id="kolom_organisasi"> <div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12">Organisasi Yang Diikuti</label><div class="col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="nama_organisasi[]" name="nama_organisasi[]"><option>Choose option</option><option value="osis">OSIS</option><option value="pramuka">PRAMUKA</option><option value="rohis">ROHIS</option><option value="pmr">PMR</option><option value="pks">PKS</option><option value="basket">BASKET</option><option value="futsal">FUTSAL</option><option value="karya ilmiah remaja">KARYA ILMIAH REMAJA</option><option value="pencak silat">PENCAK SILAT / TAEKWONDO / KARATE</option><option value="paduan suara">PADUAN SUARA</option><option value="volley">VOLLEY</option><option value="tari">TARI</option></select></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label><div class="col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="jabatan_organisasi[]" name="jabatan_organisasi[]"><option>Choose option</option><option value="ketua">Ketua</option><option value="wakil ketua">Wakil Ketua</option><option value="bendahara">Bendahara</option><option value="sekretaris">Sekretaris</option><option value="ketua seksi">Ketua Seksi</option><option value="anggota">Anggota</option></select></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12">Periode</label><div class="col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="periode_organisasi[]" name="periode_organisasi[]"><option>Choose option</option><option value="20017 - 2018">Tahun 2017-2018</option><option value="2016 - 2017">Tahun 2016-2017</option><option value="2015 - 2016">Tahun 2015-2016</option><option value="2014 - 2015">Tahun 2014-2015</option></select></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12">Memilik SK</label><div class="col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="memiliki_sk[]" name="memiliki_sk[]"><option value="">Choose option</option><option value="ya">YA</option><option value="tidak">Tidak</option></select></div></div></div>';
        });

        $('#tambah_prestasi').click(function(){
           document.getElementById('prestasi').innerHTML += '<div id="kolom_prestasi"> <div class="form-group"><label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Kegiatan</label><div class="col-md-6 col-sm-6 col-xs-12"><input id="nama_kegiatan[]" name="nama_kegiatan[]" class="form-control col-md-7 col-xs-12" type="text" ></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12">Tingkat Kejuaraan</label><div class="col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="tingkat_kejuaraan[]" name="tingkat_kejuaraan[]"><option value="">Choose option</option><option value="tingkat internasional">Tingkat Internasional</option><option value="tingkat nasional">Tingkat Nasional</option><option value="tingkat provinsi">Tingkat Provinsi</option><option value="tingkat kota / kabupaten ">Tingkat Kota / Kabupaten</option></select></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12">Juara</label><div class="col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="juara[]" name="juara[]"><option value="">Choose option</option><option value="Juara Satu">Juara Satu</option><option value="Juara Dua">Juara Dua</option><option value="Juara Tiga">Juara Tiga</option></select></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Kegiatan</label><div class="col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="kategori_kegiatan[]" name="kategori_kegiatan[]"><option value="">Choose option</option><option value="seni">Seni</option><option value="olahraga">Olahraga</option><option value="musik ">Musik</option><option value="lainnya">Lainnya</option></select></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12">Tahun Juara</label><div class="col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="tahun_juara[]" name="tahun_juara[]"><option value="">Choose option</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option></select></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12">Memiliki SK</label><div class="col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="memiliki_sk_prestasi[]" name="memiliki_sk_prestasi[]"><option value="">Choose option</option><option value="ya">Ya</option><option value="tidak">Tidak</option></select></div></div> </div>';
        });

        $('#tambah_tanggungan').click(function(){
           document.getElementById('tanggungan').innerHTML += '<div id="kolom_tanggungan"> <div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama  Tanggungan</label><div class="col-md-6 col-sm-6 col-xs-12"><input type="text" id="nama_tanggungan[]" name="nama_tanggungan[]" class="form-control col-md-7 col-xs-12"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Usia</label><div class="col-md-6 col-sm-6 col-xs-12"><input type="text" id="usia[]" name="usia[]" class="form-control col-md-7 col-xs-12"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir </label><div class="col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="pendidikan_terakhir[]" name="pendidikan_terakhir[]"><option value="">Choose option</option><option value="sd">SD</option><option value="sma">SMP</option><option value="sma">SMA</option><option value="d-3">D-3</option><option value="S-1">S-1</option><option value="S-2">S-2</option><option value="lainnya">Lainnya</option></select></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hubungan Keluarga Dengan Orang Tua Calon Siswa</label><div class="col-md-6 col-sm-6 col-xs-12"><input type="text" id="hubungan_keluarga[]" name="hubungan_keluarga[]" class="form-control col-md-7 col-xs-12"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12">Sudah Bekerja</label><div class="col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="sudah_bekerja[]" name="sudah_bekerja[]"><option value="">Choose option</option><option value="ya">Ya</option><option value="tidak">Tidak</option></select></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12">Dibiayai</label><div class="col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="dibiayai[]" name="dibiayai[]"><option value="">Choose option</option><option value="ya">Ya</option><option value="tidak">Tidak</option></select></div></div> </div>';
        });
        


      });

      
      
      function validate_hubungan_saudara_ya(){
        if (document.getElementById('id_validate_hubungan_saudara_ya').checked){
                  $('#id_validate_hubungan_saudara_tidak').prop('checked', false);
                  $('#nama_hubungan_saudara').show();

        }else{
             $('#id_validate_hubungan_saudara_ya').prop('checked', false);
                  $('#nama_hubungan_saudara').hide();
        }
        
      }

      function validate_hubungan_saudara_tidak(){
        if (document.getElementById('id_validate_hubungan_saudara_tidak').checked){
                  $('#id_validate_hubungan_saudara_ya').prop('checked', false);
                  $('#nama_hubungan_saudara').hide();
                  

        }else{
             $('#id_validate_hubungan_saudara_tidak').prop('checked', false);
                  $('#id_validate_hubungan_saudara_ya').prop('checked', false);
                  $('#nama_hubungan_saudara').hide();
        }
      }

      function validate_hubungan_keluarga_ya(){
        if (document.getElementById('id_validate_hubungan_keluarga_ya').checked){
                  $('#id_validate_hubungan_keluarga_tidak').prop('checked', false);
                  $('#nama_hubungan_keluarga').show();

        }else{
             $('#id_validate_hubungan_keluarga_ya').prop('checked', false);
                  $('#nama_hubungan_keluarga').hide();
        }
        
      }

      function validate_hubungan_keluarga_tidak(){
        if (document.getElementById('id_validate_hubungan_keluarga_tidak').checked){
                  $('#id_validate_hubungan_keluarga_ya').prop('checked', false);
                  $('#nama_hubungan_keluarga').hide();
                  

        }else{
             $('#id_validate_hubungan_keluarga_tidak').prop('checked', false);
                  $('#id_validate_hubungan_keluarga_ya').prop('checked', false);
                  $('#nama_hubungan_keluarga').hide();
        }
      }

      function validate(){
        if (document.getElementById('remember').checked){
                  $('#remember_tidak').prop('checked', false);
                  $('#organisasi_hidden').show();
                  $('#tambah_organisasi').show();

        }else{
             $('#remember_tidak').prop('checked', false);
                  $('#organisasi_hidden').hide();
                   $('#tambah_organisasi').hide();
        }

        
      }
      function validate_tidak(){
        if (document.getElementById('remember_tidak').checked){
                  $('#remember').prop('checked', false);
                   $('#tambah_organisasi').hide();
                   $('#organisasi_hidden').hide();
                  $('#kolom_organisasi').remove();

        }else{
             $('#remember').prop('checked', false);
                  $('#organisasi_hidden').remove();
                  $('#kolom_organisasi').remove();
        }
      }
      

      function validate_prestasi_ya(){
        if (document.getElementById('id_validate_prestasi_ya').checked){
                  $('#id_validate_prestasi_tidak').prop('checked', false);
                  $('#prestasi_hidden').show();
                  $('#tambah_prestasi').show();

        }else{
             $('#id_validate_prestasi_tidak').prop('checked', false);
                  $('#prestasi_hidden').hide();
                   $('#tambah_prestasi').hide();
        }
        
      }

      function validate_prestasi_tidak(){
        if (document.getElementById('id_validate_prestasi_tidak').checked){
                  $('#id_validate_prestasi_ya').prop('checked', false);
                  $('#prestasi_hidden').hide();
                  $('#tambah_prestasi').hide();
                   $('#kolom_prestasi').remove();

        }else{
             $('#id_validate_prestasi_tidak').prop('checked', false);
                  $('#prestasi_hidden').hide();
                   $('#tambah_prestasi').hide();
                   $('#kolom_prestasi').remove();
        }

      }

      function validate_tanggungan_ya(){
        if (document.getElementById('id_validate_tanggungan_ya').checked){
                  $('#id_validate_tanggungan_tidak').prop('checked', false);
                  $('#tanggungan_hidden').show();
                  $('#tambah_tanggungan').show();

        }else{
             $('#id_validate_tanggungan_tidak').prop('checked', false);
                  $('#tanggungan_hidden').hide();
                   $('#tambah_tanggungan').hide();
        }
        
      }

      function validate_tanggungan_tidak(){
        if (document.getElementById('id_validate_tanggungan_tidak').checked){
                  $('#id_validate_tanggungan_ya').prop('checked', false);
                  $('#tanggungan_hidden').hide();
                  $('#tambah_tanggungan').hide();
                  $('#kolom_tanggungan').remove();

        }else{
             $('#id_validate_tanggungan_tidak').prop('checked', false);
                  $('#tanggungan_hidden').hide();
                   $('#tambah_tanggungan').hide();
                   $('#kolom_tanggungan').remove();
        }

      }

    </script>
    
  </body>
</html>

  

