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
                <h3>COMING SOON</h3>
              </div>

              

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>COMING SOON</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      COMING SOON
                  </div>
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
  
  </body>
</html>

