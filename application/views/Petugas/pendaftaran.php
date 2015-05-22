    <div class="register-box">

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
            <a href="peminjaman" class="text-center">Sudah Punya Akun?</a>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
            </div><!-- /.col -->
          </div>
        </form>        


        
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