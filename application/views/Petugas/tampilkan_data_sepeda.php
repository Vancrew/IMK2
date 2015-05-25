<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Peminjaman Sepeda | Pendaftaran Anggota</title>
    <!-- Bootstrap 3.3.4 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- daterange picker -->
    <link href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Color Picker -->
    <link href="<?php echo base_url(); ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
    <!-- Bootstrap time Picker -->
    <link href="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />

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
   
    <section class="content" align="center">

          <div class="row">
            <!-- left column -->

            <div class="col-md-2"></div>
            
            <div class="col-md-4">
              <!-- general form elements -->
             <div class="box box-primary">
                <div class="box-header" align="center">
                  <h3 class="box-title">Isi Data Peminjaman</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form id="pinjam" method="post" action="<?php if($mode=='kembali'){ echo base_url().'index.php/petugas/kembali';?>
                        <?php }else{  echo base_url().'index.php/petugas/pinjam'; }?>"> 
                        
                  <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor KTP</label>
                      <input type="text" class="form-control" id="noktp" name="noktp" value="<?php echo $result[0]['noktp']; ?>" placeholder="Masukan Nomor KTP Anda" readonly>
                    </div>
                    <input type="hidden" name="id_reservasi" value="<?php echo $result[0]['id_peminjaman']; ?>"/>
                    <div class="form-group">
                      <label>Tanggal Peminjaman</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="reservation" name="reservation" value="<?php echo $result[0]['tanggal_peminjaman'].' - '.$result[0]['tanggal_pengembalian'] ?>" readonly/>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
              
                    <div class="form-group">
                      <label>Jumlah Sepeda</label>
                      <div class="row">
                        <div class="col-xs-6">
                          <label class="">Sepeda Anak - Anak</label>
                          <p class="help-block">Rp 25.000/sepeda/hari</p>
                          <select class="form-control" id="jml1" name="jml1" readonly>
                            <option value="0"><?php echo $result[0]['jml_spd_anak']; ?></option>
                          </select>
                        </div>
              
                        <div class="col-xs-6">
                          <label class="">Sepeda Standar</label>
                          <p class="help-block">Rp 50.000/sepeda/hari</p>
                          <select class="form-control" id="jml2" name="jml2" readonly>
                            <option value="0"><?php echo $result[0]['jml_spd_standar']; ?></option>
                          </select>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-6">
                          <label class="">Sepeda Gunung</label>
                          <p class="help-block">Rp 75.000/sepeda/hari</p>
                          <select class="form-control" id="jml3" name="jml3" readonly>
                            <option value="0"><?php echo $result[0]['jml_spd_gunung']; ?></option>
                          </select>
                        </div>
              
                        <div class="col-xs-6">
                          <label class="">Sepeda Tandem</label>
                          <p class="help-block">Rp 100.000/sepeda/hari</p>
                          <select class="form-control" id="jml4" name="jml4" readonly>
                            <option value="0"><?php echo $result[0]['jml_spd_tandem']; ?></option>
                          </select>
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                 

                    <div class="form-group">
                      <label for="exampleInputEmail1">Biaya</label>
                      <input type="text" class="form-control" id="biaya" name="biaya" value="<?php echo $result[0]['biaya']; ?>" readonly>
                    </div>

                    <div class="row">
                      <div class="col-xs-9"> <a href="reservasi" class="text-center">Pengguna Sudah Reservasi?</a></div>
                      <div class="col-xs-3">
                        <?php if($mode=='kembali'){ ?><button type="submit" class="btn btn-primary">kembali</button>
                        <?php }else{  ?>  <button type="submit" class="btn btn-primary">Pinjam</button>
                        <?php } ?>
                      </div>
                    </div>

                  </div>
                </form>
              </div><!-- /.box -->
              </div><!--/.col (left) -->
              <div class="col-md-4"></div>
              </div>   <!-- /.row -->
        </section><!-- /.content -->

   
  </body>
</html>