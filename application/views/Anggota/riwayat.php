<div class="col-md-10">

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
</div>  
    <script>
      $(function () {
        
        $('#riwayatTable').DataTable();
      });
    </script>

    
    
  </body>
</html>