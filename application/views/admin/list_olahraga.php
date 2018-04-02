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
    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Users <small>Some examples to get you started</small></h3>
                </div>

                <div class="title_right">
                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Button Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        
                          <th>Nomor</th>
                          <th>ID</th>
                          <th>Nama</th>
                          <th>Nomor HP</th>
                          <th>Jumlah Keahliaan Olahraga</th>
                          <th>Action</th>
                          <th>Masukan</th>
                         
                        </tr>
                      </thead>
                    

                      <tbody>
        
                         <?php 
                        $nomor=1;
                        for ($i=0; $i<sizeof($fase_3); $i++){
                        ?>
                        <tr>
                           <td><?php echo $nomor; ?></td>
                          <td><?php echo $fase_3[$i]['id']; ?></td>
                          <td><?php echo $fase_3[$i]['nama']; ?></td>
                          <td><?php echo $fase_3[$i]['nomor_telpon']; ?></td>
                          <td><?php echo $fase_3[$i]['jumlah_juara_olahraga']; ?></td>
                          <?php if($fase_3[$i]['status_kreatifitas']==0) : ?>
                               <td><a href="<?php echo site_url('Admin/update_olahraga?email='.$fase_3[$i]['email'].'&jumlah_juara_olahraga='.$fase_3[$i]['jumlah_juara_olahraga'])?>">Konfirmasi</a></td>
                               <td>
                                <form  action="<?php echo base_url(); ?>Admin/update_olahraga_with_post" method="post">
                                <input type="text" style="display: none;" id="email" name="email" value="<?php echo $fase_3[$i]['email']; ?>" >
                                 <input type="text" id="jumlah_juara_olahraga" name="jumlah_juara_olahraga" >
                                <input type="submit" value="Submit">
                                </form>
                               </td>
                          <?php else : ?>
                               <td>Sudah Dikonfirmasi</td>
                               <td>-</td>
                          <?php endif; ?>
                          
                         


                          
                        </tr>
                        <?php $nomor++; } ?>
                      </tbody>
                    </table>
                  </div>
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
    <script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url(); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>

