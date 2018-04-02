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
         
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
          <?php
                        echo form_open_multipart('Welcome/create_member');
                        ?>
            <form name="sign_in" >
              <h1>Buat Akun</h1>
              

              <div >
                             <label >
                        Role
                        </label> 
                             
                                <select class="form-control" id="role" name="role">
                                <option value="">Pilih Opsi</option>
                                  <option value="04">Super Admin All</option>
                                  <option value="03">Super Admin Not All</option>
                                  <option value="02">Admin Fase 2</option>
                                  <option value="01">Admin Fase 1</option>
                                  
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
                        
                </label>
                <input type="submit" value="Daftar" class=" form-control">
              </div>
              <div class="clearfix"></div>

              <div class="separator">
               

                <div class="clearfix"></div>
                <br />

                 <div>
                  <h1><i class="fa "></i> PPDB SMA Negeri Sumatera Selatan !</h1>
                  <p>©2018 Copy Right Digital Creative </p>
                </div>
              </div>
            </form>
            <?php echo form_close(); ?>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
