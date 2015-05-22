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
    <link href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
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
    
        
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Riwayat Peminjaman Sepeda</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="riwayatTable" class="table table-striped table-bordered"> 
                  <thead>
                    <tr>
                      <th style="min-width: 160px;">Tanggal Peminjaman</th>
                      <th style="min-width: 100px;">Tanggal Pengembalian</th>
                      <th style="min-width: 100px;">Jumlah Sepeda Anak</th>
                      <th style="min-width: 100px;">Jumlah Sepeda Standar</th>
                      <th style="min-width: 100px;">Jumlah Sepeda Gunung</th>
                      <th style="min-width: 100px;">Jumlah Sepeda Tandem</th>
                      
                      <th style="min-width: 100px;">biaya</th>
                     
                    </tr>
                </thead>
                <tbody>

                   <?php foreach ($riwayat as $i)
                   {

                    echo '<tr>';
                      
                      ?>

                     
                  <?php  
                      echo '<td> '.$i['tanggal_peminjaman'].'</td>';
                      echo '<td>'.$i['tanggal_pengembalian'].'</td>';
                      echo '<td>'.$i['jml_spd_anak'].'</td>';
                      echo '<td>'.$i['jml_spd_standar'].'</td>';
                      echo '<td>'.$i['jml_spd_gunung'].'</td>';
                      echo '<td>'.$i['jml_spd_tandem'].'</td>';
                      
                      echo '<td>'.$i['biaya'].'</td>';
                      echo '</tr>';

                   }?>
                </tbody>
              </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
              </div>
              </section>
  

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
        $('#riwayatTable').DataTable();
      });
    </script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
  </body>
</html>