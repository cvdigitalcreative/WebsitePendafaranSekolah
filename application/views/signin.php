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
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>/build/css/custom.min.css" rel="stylesheet">
  </head>


  <body class="login"> 
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content"><br/><br/>
            <form name="log_in" action="<?php echo base_url(); ?>Welcome/validate_credentials" method="post">
              <h1>Login Form</h1><br/>
              <div>
                <input type="text" class="form-control" placeholder="Email"  id="email" name="email" required="" />
              </div>
              <div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              
              <div>
                <input type="submit" value="Log In" class="btn btn-default submit">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Belum Mempunyai Akun ?
                  <a href="#signup" class="to_register"> Buat Akun </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <!-- <h1><i class="fa"></i> PPDB SMA Negeri Sumatera Selatan !</h1> -->
                  <p>©2018 Copy Right Digital Creative </p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
          <?php
                        echo form_open_multipart('Welcome/create_member');
                        ?>
            <form name="sign_in" >
              <h1>Buat Akun</h1>
              <div>
                <label >
                        Nama Lengkap
                        </label> 
                <input type="text" id="nama" name="nama"  class="form-control" placeholder="Nama" required="" />
              </div>

              <div >
                             <label >
                        Asal Daerah
                        </label> 
                             
                                <select class="form-control" id="asal_daerah" name="asal_daerah">
                                <option value="">Pilih Opsi</option>
                                  <option value="01">Palembang</option>
                                  <option value="02">Banyuasin</option>
                                  <option value="03">Ogan Ilir</option>
                                  <option value="04">OKI</option>
                                  <option value="05">MUBA</option>
                                  <option value="06">OKU INDUK</option>
                                  <option value="07">OKU TIMUR</option>
                                  <option value="08">OKU SELATAHN</option>
                                  <option value="09">PRABUMULIH</option>
                                  <option value="10">MUARA ENIM</option>
                                  <option value="11">LAHAT</option>
                                  <option value="12">LUBUK LINGGAU</option>
                                  <option value="13">MUSI RAWAS</option>
                                  <option value="14">PAGAR ALAM</option>
                                  <option value="15">EMPAT LAWANG</option>
                                  <option value="16">PENUKAL ABAD LEMATANG ILIR</option>
                                  <option value="17">MUSI RAWAS UTARA</option>
                                </select>
                             
                            </div>

              <div>
                <label >
                        Email
                        </label>
                <input type="email" id="email" name="email"  class="form-control" placeholder="Email" required="" />
              </div>
              <div>
               <label >
                        Password
                        </label>
                <input type="password" id="password" name="password"  class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                 <label >
                        Foto pribadi
                        </label>
                        <input type="file"  class="form-control" name="foto_pribadi" id="foto_pribadi">
              </div>
              <div>
                <label >
                        
                </label>
                <input type="submit" value="Daftar" class=" form-control">
              </div>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Sudah Mempunyai Akun ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                 <div>
                  <h1><i class="fa "></i> PPDB SMA Negeri Sumatera Selatan !</h1>
                
                </div>
              </div>
            </form>
            <?php echo form_close(); ?>
          </section>
        </div>
      </div>
    </div>

    <div class="header">
    <h1 align="center">PPDB SMA NEGERI SUMATERA SELATAN</h1>
    </div>
</body>
 
</html>