<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Peminjaman Sepeda | Pendaftaran Anggota</title>
    
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
  
      <div id="successMessage"class="alert alert-success alert-dismissible" style="display:none;"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Pendaftaran Berhasil!</strong> Terima kasih telah mendaftar.</div>
      <div class="register-box-body">
        <p class="login-box-msg">Pendaftaran Anggota Baru</p>
        <form id="daftar" action="<?php echo base_url(); ?>index.php/anggota/daftar" method="post">
          <div class="form-group has-feedback">
            <input type="text" id="nama" class="form-control" name="nama"placeholder="Nama Lengkap" required/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
           <div class="form-group has-feedback">
            <input type="text" class="form-control " id="noktp" name="noktp" placeholder="Nomor KTP" required/>
            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
          </div>
           <div class="form-group has-feedback">
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required/>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
           <div class="form-group has-feedback">
            <input type="text" class="form-control" name="telp" id="telp" placeholder="Nomor Telepon" required/>
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" id="txtNewPassword" name="password" placeholder="Password" required/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="re" id="txtConfirmPassword" class="form-control" placeholder="Retype password" required/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
                                    
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button id="submit" type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
            </div><!-- /.col -->
          </div>
        </form>        
        <a href="<?php echo site_url(); ?>/anggota/masuk" class="text-center">Sudah Punya Akun?</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.1.4 --
    
    <!-- iCheck -->
    <!--<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>-->
    
    <script>
      $(function () {
        // $('input').iCheck({
        //   checkboxClass: 'icheckbox_square-blue',
        //   radioClass: 'iradio_square-blue',
        //   increaseArea: '20%' // optional
        // });
        $(document).ready(function () {
           $("#txtConfirmPassword").keyup(checkPasswordMatch);
        })
         $('#daftar input').tooltipster({
            trigger: 'custom',
            onlyOne: false,
            position: 'right'
        });
         $('#daftar').validate({ // initialize the plugin
            errorPlacement: function (error, element) {
                var lastError = $(element).data('lastError'),
                    newError = $(error).text();
                
                $(element).data('lastError', newError);
                                
                if(newError !== '' && newError !== lastError){
                    $(element).tooltipster('content', newError);
                    $(element).tooltipster('show');
                }
            },
            success: function (label, element) {
                $(element).tooltipster('hide');
            },
            rules: {
                nama: {
                    required: true
                },
                noktp: {
                    required: true,
                    minlength: 16,
                    digits: true,
                    maxlength: 16
                },
                alamat:{
                    required:true
                },
                email: {
                    required:true,
                    email:true
                },
                telp: {
                  required: true,
                  minlength: 9,
                  digits: true,
                  maxlength: 12
                }
            }
        });

        $('#submit').click(function(e){
          e.preventDefault();
          if(!$('#daftar').valid())return;
          var message2="<div class='row'><div class='col-md-12'> \
                        <div class='col-md-3'> \
                                    \
                        </div>                  \
                        <div class='col-md-6'>  \
                            Password Anda Tidak Sama \
                        </div>                  \
                      </div>"
          var message="<div class='row'><div class='col-md-12'> \
                        <div class='col-md-3'> \
                          Nama Lengkap          \
                        </div>                  \
                        <div class='col-md-6'>  \
                            "+$('#nama').val()+" \
                        </div>                  \
                      </div>                  \
                      <div class='col-md-12'> \
                        <div class='col-md-3'> \
                          Nomor KTP         \
                        </div>                  \
                        <div class='col-md-6'>  \
                            "+$('#noktp').val()+" \
                        </div>                  \
                      </div>                  \
                      <div class='col-md-12'> \
                        <div class='col-md-3'> \
                          Alamat          \
                        </div>                  \
                        <div class='col-md-6'>  \
                            "+$('#alamat').val()+" \
                        </div>                  \
                      </div>                  \
                      <div class='col-md-12'> \
                        <div class='col-md-3'> \
                          Email        \
                        </div>                  \
                        <div class='col-md-6'>  \
                            "+$('#email').val()+" \
                        </div>                  \
                      </div>                  \
                      <div class='col-md-12'> \
                        <div class='col-md-3'> \
                          Telepon          \
                        </div>                  \
                        <div class='col-md-6'>  \
                            "+$('#telp').val()+" \
                        </div>                  \
                      </div>"

          var password = $("#txtNewPassword").val();
          var confirmPassword = $("#txtConfirmPassword").val();

          if (password == confirmPassword) 
          {
            bootbox.dialog({
              message: message,
              title: "Apakah data dibawah ini telah benar",
              buttons: {
                danger: {
                  label: "Batal!",
                  className: "btn-danger",
                  callback: function() {
                    
                  }
                },
                success: {
                  label: "OK",
                  className: "btn-success",
                  callback: function() {
                   $.ajax({
                      url: "<?php echo base_url(); ?>index.php/anggota/daftar",
                      type: 'post',
                      dataType: 'json',
                      data: $("#daftar").serialize(),
                      success: function(data) {
                       if(data.status=='sukses')
                       {
                        $('#successMessage').show();
                       }
                      }
                    });
                      
                  }
                }
              }
            });
          }
          else
          {
            bootbox.dialog({
              message: message2,
              title: "Error",
              buttons: {
                danger: {
                  label: "Kembali",
                  className: "btn-danger",
                  callback: function() {
                    
                  }
                }
              }
            });
          }
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