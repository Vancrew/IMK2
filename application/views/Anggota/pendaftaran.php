<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Peminjaman Sepeda | Pendaftaran Anggota</title>
    <SCRIPT language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/ckck.js">
    </script>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="<?php echo base_url(); ?>assets/index2.html"><b>SI</b>SEPEDA</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Pendaftaran Anggota Baru</p>
        <form action="<?php echo base_url(); ?>index.php/anggota/daftar" method="post" onSubmit="return cek()">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="nama"placeholder="Nama Lengkap" required/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
           <div class="form-group has-feedback">
            <input type="text" class="form-control" name="noktp" placeholder="Nomor KTP" required/>
            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
          </div>
           <div class="form-group has-feedback">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required/>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email" required/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
           <div class="form-group has-feedback">
            <input type="text" class="form-control" name="telp" placeholder="Nomor Telepon" required/>
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" id="txtNewPassword" name="password" placeholder="Password" required/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="re" id="txtConfirmPassword" class="form-control" placeholder="Retype password" required/>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
                                    
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
            </div><!-- /.col -->
          </div>
        </form>        


        <a href="masuk" class="text-center">Sudah Punya Akun?</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
        $(document).ready(function () {
           $("#txtConfirmPassword").keyup(checkPasswordMatch);
        })
        function checkPasswordMatch() {
            var password = $("#txtNewPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();

            if (password != confirmPassword)
                $("#divCheckPasswordMatch").html("Passwords do not match!");
            else
                $("#divCheckPasswordMatch").html("Passwords match.");
        }
      });
    </script>
  </body>
</html>