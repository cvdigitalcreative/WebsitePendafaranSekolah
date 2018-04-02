<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <?php
                  echo "<h2> " . $_SESSION["user_name"] . "</h2>";
                ?>
                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>PPDB ONline</h3>
                <?php if($_SESSION["role"]==1) : ?>
                   <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>/Admin/"><i class="fa fa-home"></i> Home <span class="fa "></span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Fase 1<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_1">Fase 1</a></li>
                    </ul>
                  </li>  
                  <li><a><i class="fa fa-edit"></i> Fase 2 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_2">Fase 2</a></li>
                    </ul>
                  </li> 
                 

                  <li><a><i class="fa fa-edit"></i> Siswa Lulus<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_lulus">Siswa Lulus</a></li>
                    </ul>
                  </li> 
                  

                </ul>          
                <?php elseif($_SESSION["role"]==2)  : ?>
                      <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>/Admin/"><i class="fa fa-home"></i> Home <span class="fa "></span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Fase 1<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_1">Fase 1</a></li>
                    </ul>
                  </li>  
                  <li><a><i class="fa fa-edit"></i> Fase 2 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_2">Fase 2</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-edit"></i> Fase 3 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_rata_rata_rapor">Nilai Rata-rata rapor smp</a></li>
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_organisasi">Jumlah Keikutsertaan Organisasi</a></li>
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_kepemimpinan">Memiliki Jabatan Dalam Organisasi</a></li>
                        <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_seni">Kreativitas dan Keahlian Seni</a></li>
                         <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_olahraga">Memiliki Keahliaan Bidang Olahraga</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_sertifikat_tingkat_kota">Sertifikat Tingkat Kota</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_sertifikat_tingkat_provinsi">Sertifikat Tingkat Provinsi</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_sertifikat_tingkat_nasional">Sertifikat Tingkat Nasional</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_essai">Essai</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_juara">Juara Kelas</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_juara_umum">Juara Umum</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_referensi">Referensi kualitas personal dari guru</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_notes">Notes</a></li>
                    </ul>
                  </li> 

                  

                  <li><a><i class="fa fa-edit"></i> Siswa Lulus<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_lulus">Siswa Lulus</a></li>
                    </ul>
                  </li> 
                  

                </ul>         
                <?php elseif($_SESSION["role"]==3)  : ?>
                  <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>/Admin/"><i class="fa fa-home"></i> Home <span class="fa "></span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Fase 1<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_1">Fase 1</a></li>
                    </ul>
                  </li>  
                  <li><a><i class="fa fa-edit"></i> Fase 2 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_2">Fase 2</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-edit"></i> Fase 3 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_rata_rata_rapor">Nilai Rata-rata rapor smp</a></li>
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_organisasi">Jumlah Keikutsertaan Organisasi</a></li>
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_kepemimpinan">Memiliki Jabatan Dalam Organisasi</a></li>
                        <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_seni">Kreativitas dan Keahlian Seni</a></li>
                         <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_olahraga">Memiliki Keahliaan Bidang Olahraga</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_sertifikat_tingkat_kota">Sertifikat Tingkat Kota</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_sertifikat_tingkat_provinsi">Sertifikat Tingkat Provinsi</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_sertifikat_tingkat_nasional">Sertifikat Tingkat Nasional</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_essai">Essai</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_juara">Juara Kelas</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_juara_umum">Juara Umum</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_referensi">Referensi kualitas personal dari guru</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_notes">Notes</a></li>
                    </ul>
                  </li> 

                   

                  <li><a><i class="fa fa-edit"></i> Siswa Lulus<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_lulus">Siswa Lulus</a></li>
                    </ul>
                  </li> 
                  

                </ul>
                <?php elseif($_SESSION["role"]==4)  : ?>
                  <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>/Admin/"><i class="fa fa-home"></i> Home <span class="fa "></span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Fase 1<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_1">Fase 1</a></li>
                    </ul>
                  </li>  
                  <li><a><i class="fa fa-edit"></i> Fase 2 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_2">Fase 2</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-edit"></i> Fase 3 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_rata_rata_rapor">Nilai Rata-rata rapor smp</a></li>
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_organisasi">Jumlah Keikutsertaan Organisasi</a></li>
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_kepemimpinan">Memiliki Jabatan Dalam Organisasi</a></li>
                        <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_seni">Kreativitas dan Keahlian Seni</a></li>
                         <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_olahraga">Memiliki Keahliaan Bidang Olahraga</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_sertifikat_tingkat_kota">Sertifikat Tingkat Kota</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_sertifikat_tingkat_provinsi">Sertifikat Tingkat Provinsi</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_sertifikat_tingkat_nasional">Sertifikat Tingkat Nasional</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_essai">Essai</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_juara">Juara Kelas</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_juara_umum">Juara Umum</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_referensi">Referensi kualitas personal dari guru</a></li>
                          <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_fase_3_notes">Notes</a></li>
                    </ul>
                  </li> 

                   <li><a><i class="fa fa-edit"></i> Kelayakan Siswa<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_all">Kelayakan Siswa</a></li>
                    </ul>
                  </li> 

                  <li><a><i class="fa fa-edit"></i> Siswa Lulus<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                       <li><a href="<?php echo base_url(); ?>/Admin/list_siswa_lulus">Siswa Lulus</a></li>
                    </ul>
                  </li> 
                  
                  <li><a><i class="fa fa-edit"></i> Daftar Admin<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                       <li><a href="<?php echo base_url(); ?>/Admin/daftar">Daftar Admin</a></li>
                    </ul>
                  </li> 
                  
                </ul>
                <?php endif; ?>
                
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
                    <?php
                  echo $_SESSION["user_name"] ;
                ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  
                    <li><a href="<?php echo base_url(); ?>/Admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
           <div class="right_col" role="main">
          <div class="row top_tiles">

             <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count"><?php echo $seluruh_peserta[0]['total']; ?></div>
                  <h3>Jumlah Pendaftar Seluruh </h3>
                  
                  
                </div>
              </div>

            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count"><?php echo $register_awal[0]['total']; ?></div>
                  <h3>Jumlah Pendaftar </h3>
                  <p>Saat ini</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count"><?php echo $register_form[0]['total']; ?></div>
                  <h3>Jumlah Pendaftar </h3>
                  <p>yang telah selesai pengisian form</p>
                  
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count"><?php echo $register_upload[0]['total']; ?></div>
                  <h3>Jumlah Pendaftar</h3>
                   <p> yang telah selesai upload file</p>
                </div>
              </div>

               
              
              

            </div>
          </div>
        <!-- /page content -->

           
    
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
    <script src="<?php echo base_url(); ?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url(); ?>/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url(); ?>/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url(); ?>/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url(); ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(); ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url(); ?>/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url(); ?>/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>/build/js/custom.min.js"></script>
     <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>/vendors/Chart.js/dist/Chart.min.js"></script>
  
  </body>
</html>

