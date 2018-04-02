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

     <title>SMA Negeri Sumatera Selatan PPDB Online </title>

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

            <br />

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
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
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
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Upload Dokumen Yang Dibutuhkan</h3>
              </div>

              

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Upload Scan Dokumen</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                        
                        <div class="x_title">
                          <h2>Scan Rumah</h2>
                          
                          <div class="clearfix"></div>
                        </div>

                        <?php if($dokumen[0]['rumah_tampak_depan']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_rumah_tampak_depan');
                        ?>
                        <label >
                        Scan Rumah Tampak Depan
                        </label>
                        <input type="file" name="rumah_tampak_depan">
                        <br>
                         
                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                            <label >
                         Scan Rumah Tampak Depan 
                        </label>

                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        

                       <?php if($dokumen[0]['rumah_tampak_belakang']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_rumah_tampak_belakang');
                        ?>
                        <label >
                        Scan Rumah Tampak Belakang
                        </label>
                        <input type="file" name="rumah_tampak_belakang">
                        <br>
                         
                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                            <label >
                       Scan Rumah Tampak Belakang 
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <?php if($dokumen[0]['rumah_tampak_kanan']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_rumah_tampak_kanan');
                        ?>
                        <label >
                        Scan Rumah Tampak Kanan
                        </label>
                        <input type="file" name="rumah_tampak_kanan">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                            <label >
                        Scan Rumah Tampak Kanan
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <?php if($dokumen[0]['rumah_tampak_kiri']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_rumah_tampak_kiri');
                        ?>
                        <label >
                        Scan Rumah Tampak Kiri
                        </label>
                        <input type="file" name="rumah_tampak_kiri">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                            <label >
                        Scan Rumah Tampak Kiri
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <?php if($dokumen[0]['ruang_tengah']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_ruang_tengah');
                        ?>
                        <label >
                        Scan  Ruang Tengah
                        </label>
                        <input type="file" name="ruang_tengah">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                             <label >
                        Scan  Ruang Tengah
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <?php if($dokumen[0]['kamar_tidur']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_kamar_tidur');
                        ?>
                        <label >
                        Scan  Kamar Tidur
                        </label>
                        <input type="file" name="kamar_tidur">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                           <label >
                        Scan  Kamar Tidur
                        </label>
                        <span>&#10003;</span></div>

                        <?php endif; ?>

                        <?php if($dokumen[0]['dapur']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_dapur');
                        ?>
                        <label >
                        Scan  Dapur
                        </label>
                        <input type="file" name="dapur">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                            <label >
                        Scan  Dapur
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <?php if($dokumen[0]['kamar_mandi']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_kamar_mandi');
                        ?>
                        <label >
                        Scan  Kamar Mandi / Toilet
                        </label>
                        <input type="file" name="kamar_mandi">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                             <label >
                        Scan  Kamar Mandi / Toilet
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                       
                        <div class="x_title">
                          <h2>Scan KTP</h2>
                          
                          <div class="clearfix"></div>
                        </div>

                        <?php if($dokumen[0]['ktp_ayah']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_ktp_ayah');
                        ?>
                        <label >
                        Scan KTP Ayah
                        </label>
                        <input type="file" name="ktp_ayah">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                            <label >
                        Scan KTP Ayah
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <?php if($dokumen[0]['ktp_ibu']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_ktp_ibu');
                        ?>
                         <label >
                        Scan KTP Ibu
                        </label>
                        <input type="file" name="ktp_ibu">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                            <label >
                        Scan KTP Ibu
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <div class="x_title">
                          <h2>Scan Kartu Keluarga</h2>
                          
                          <div class="clearfix"></div>
                        </div>

                        <?php if($dokumen[0]['kartu_keluarga']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_kartu_keluarga');
                        ?>
                        <label >
                        Scan Kartu Keluarga
                        </label>
                        <input type="file" name="kartu_keluarga">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                             <label >
                        Scan Kartu Keluarga
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <div class="x_title">
                          <h2>Scan Surat Keterangan Tidak Mampu</h2>
                          
                          <div class="clearfix"></div>
                        </div>

                        <?php if($dokumen[0]['surat_keteranga_tidak_mampu']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_surat_keteranga_tidak_mampu');
                        ?>
                        <label >
                        Scan Surat Keterangan Tidak Mampu
                        </label>
                        <input type="file" name="surat_keteranga_tidak_mampu">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                           <label >
                        Scan Surat Keterangan Tidak Mampu
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <div class="x_title">
                          <h2>Scan Slip Gaji Bagi Yang Memiliki</h2>
                          
                          <div class="clearfix"></div>
                        </div>

                        <?php if($dokumen[0]['slip_gaji_ayah']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_slip_gaji_ayah');
                        ?>
                        <label >
                        Scan Slip Gaji Ayah
                        </label>
                        <input type="file" name="slip_gaji_ayah">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                            <label >
                        Scan Slip Gaji Ayah
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <?php if($dokumen[0]['slip_gaji_ibu']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_slip_gaji_ibu');
                        ?>
                         <label >
                        Scan Slip Gaji Ibu
                        </label>
                        <input type="file" name="slip_gaji_ibu">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                             <label >
                        Scan Slip Gaji Ibu
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <div class="x_title">
                          <h2>Scan Pembayaran Listrik 3 Bulan Atau Bukti Pembelian Token</h2>
                          
                          <div class="clearfix"></div>
                        </div>

                        <?php if($dokumen[0]['pembayaran_listrik']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_pembayaran_listrik');
                        ?>
                        <label >
                        Scan Pembayaran Listrik 3 Bulan Atau Bukti Pembelian Token
                        </label>
                        <input type="file" name="pembayaran_listrik">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                            <label >
                        Scan Pembayaran Listrik 3 Bulan Atau Bukti Pembelian Token
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <div class="x_title">
                          <h2>Scan Pembayaran Sewa Rumah</h2>
                          
                          <div class="clearfix"></div>
                        </div>

                        <?php if($dokumen[0]['sewa_rumah']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_sewa_rumah');
                        ?>
                        <label >
                        Scan Pembayaran Sewa Rumah
                        </label>
                        <input type="file" name="sewa_rumah">
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                            <label >
                        Scan Pembayaran Sewa Rumah
                        </label>
                        <span>&#10003;</span></div>
                        <?php endif; ?>

                        <div class="x_title">
                          <h2>Scan Sertifikat atau Piagam Prestasi</h2>
                          
                          <div class="clearfix"></div>
                        </div>

                        <?php if($dokumen[0]['sertifikat']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_sertifikat');
                        ?>
                        <label >
                        Scan Sertifikat atau Piagam Prestasi
                        </label>
                        <input type="file" class="form-control" name="sertifikat[]" multiple/>
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                            <label >
                        Scan Sertifikat atau Piagam Prestasi
                        </label>
                        <span>&#10003;</span></div>
                        </div>
                        <?php endif; ?>

                       
                        <div class="x_title">
                          <h2>Scan SK Organisasi</h2>
                          
                          <div class="clearfix"></div>
                        </div>

                        <?php if($dokumen[0]['sk_organisasi']==0) : ?>
                             
                               <?php
                        echo form_open_multipart('Upload/do_upload_sk_organisasi');
                        ?>
                        <label >
                        Scan SK Organisasi
                        </label>
                        <input type="file" class="form-control" name="sk_organisasi[]" multiple/>
                        <br>

                        <button type="submit" class="btn btn-round btn-success" id="fileSubmit">Upload Gambar</button>
                         <?php echo form_close(); ?>
                          <?php else : ?>
                            <div>
                            <label >
                        Scan SK Organisasi
                        </label>
                        <span>&#10003;</span></div>
                        
                        <?php endif; ?>


                        
                      </div>
                       <form name="log_in" action="<?php echo base_url(); ?>Upload/finish" method="post">
              
                            <input type="submit" value="Finish" class="btn btn-round submit">
                          
                      </form>
                  </div>
                  
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

    <script>
      $(document).ready(function(){
        $('#tambah_organisasi').click(function(){
           document.getElementById('sk_organisasi_tambah').innerHTML += '<div id="kolom_organisasi">  <label >Scan SK Organisasi</label><input type="file" name="sk_organisasi[]"><br></div>';
        });

        $('#tambah_sertifikat').click(function(){
           document.getElementById('sertifikat_tambah').innerHTML += '<div id="kolom_organisasi">  <label >Scan Sertifikat atau Piagam Prestasi</label><input type="file" name="sertifikat[]"><br></div>';
        });

      });
        

    </script>
  
  </body>
</html>

