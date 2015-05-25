
  <body class="register-page">
    <section class="content" align="center">
          <div class="row">
            <!-- left column -->
            
            <div class="col-md-2"></div>
            <div class="col-md-4">
              <!-- general form elements -->
              <?php if(isset($_GET['status']) && $_GET['status']=='gagal'){ ?>
              <div id="successMessage"class="alert  alert-dismissible" style="background-color:#FF4545;"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Pengembalian Gagal !</strong>Cek kembali id reservasi anda.</div>
            <?php } ?>
            <?php if(isset($_GET['status']) && $_GET['status']=='sukses'){ ?>
              <div id="successMessage"class="alert  alert-dismissible" style="background-color:#009933;"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Pengembalian berhasil !</strong>Terimakasih telah melakukan peminjaman.</div>
            <?php } ?>
             <div class="box box-primary">

                <div class="box-header" align="center">
                  <h3 class="box-title">Pengembalian Sepeda</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?php echo site_url().'/petugas/kembali'; ?>">
                  <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Kode Peminjaman / Reservasi</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="id_reservasi" placeholder="Masukan Kode Peminjaman / Reservasi Anda" required>
                    </div>

                   

                    <div class="row">
                      <div> </div>
                      <div class="col-xs-3">
                        <button type="submit" class="btn btn-primary">Submit</button>  
                      </div>
                    </div>

                  </div>
                </form>
              </div><!-- /.box -->
              </div><!--/.col (left) -->
              <div class="col-md-4"></div>
              </div>   <!-- /.row -->
        </section><!-- /.content -->

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

     $(function()
        {


          function calculateDate() { 
            var date=$('input[name="reservation"]').val().split('- ') 
            var dateConv1 = new Date(date[0]); 
            var dateMill1 =dateConv1.getTime(); 
            var dateConv2 = new Date(date[1]); 
            var dateMill2 =dateConv2.getTime(); console.log(date) 
            var totdate = dateMill2 -dateMill1 
            return (Math.floor(totdate/86400000) + 1)
          }

          // $('input[name="reservation"]').change(){

          // }

          $('input[name="reservation"]').on("apply.daterangepicker",function(){
            var jml1 = $('#jml1 option:selected').val() * 25000;
            var jml2 = $('#jml2 option:selected').val() * 50000;
            var jml3 = $('#jml3 option:selected').val() * 75000;
            var jml4 = $('#jml4 option:selected').val() * 100000;
            var days = calculateDate();
            var total = (jml1 + jml2 + jml3 + jml4) * days
            $('#biaya').val(total);
          
          })

          $('#jml1').change(function(){
            var jml1 = $('#jml1 option:selected').val() * 25000;
            var jml2 = $('#jml2 option:selected').val() * 50000;
            var jml3 = $('#jml3 option:selected').val() * 75000;
            var jml4 = $('#jml4 option:selected').val() * 100000;
            var days = calculateDate();
            var total = (jml1 + jml2 + jml3 + jml4) * days
            $('#biaya').val(total);
          
          })
            

          $('#jml2').change(function(){
            var jml1 = $('#jml1 option:selected').val() * 25000;
            var jml2 = $('#jml2 option:selected').val() * 50000;
            var jml3 = $('#jml3 option:selected').val() * 75000;
            var jml4 = $('#jml4 option:selected').val() * 100000;
            var days = calculateDate();
            var total = (jml1 + jml2 + jml3 + jml4) * days
            $('#biaya').val(total);
          
          })

          $('#jml3').change(function(){
            var jml1 = $('#jml1 option:selected').val() * 25000;
            var jml2 = $('#jml2 option:selected').val() * 50000;
            var jml3 = $('#jml3 option:selected').val() * 75000;
            var jml4 = $('#jml4 option:selected').val() * 100000;
            var days = calculateDate();
            var total = (jml1 + jml2 + jml3 + jml4) * days
            $('#biaya').val(total);
          
          })

          $('#jml4').change(function(){
            var jml1 = $('#jml1 option:selected').val() * 25000;
            var jml2 = $('#jml2 option:selected').val() * 50000;
            var jml3 = $('#jml3 option:selected').val() * 75000;
            var jml4 = $('#jml4 option:selected').val() * 100000;
            var days = calculateDate();
            var total = (jml1 + jml2 + jml3 + jml4) * days
            $('#biaya').val(total);
          
          })

        })

    </script>

    <!-- InputMask -->
    <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url(); ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js" type="text/javascript"></script>
    <!-- Page script -->
    <script type="text/javascript">
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                  },
                  startDate: moment().subtract('days', 29),
                  endDate: moment()
                },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>

  </body>
</html>