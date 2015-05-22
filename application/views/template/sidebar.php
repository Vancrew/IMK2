<div>
<div class="col-md-2" style="padding:inherit;">
<div id="MainMenu">
  <div class="list-group panel">

    <?php if($this->session->userdata('logged_in')){
        $session_data = $this->session->userdata('logged_in');
        $data['user'] = $session_data['user'];
        $data['hak'] = $session_data['hak'];
    ?>

    <?php if($data['hak']=="admin"){ ?>
    <a href="#pengelolaan_admin" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Pengelolaan Data</a>
    
    <div class="collapse" id="pengelolaan_admin">
   
                <a class="list-group-item" href="<?php echo site_url('petugas/data_petugas');?>">Petugas</a>
                 <a class="list-group-item" href="<?php echo site_url('petugas/gudang_sepeda')?>">Sepeda</a>
                    <a class="list-group-item" href="<?php echo site_url('petugas/data_anggota');?>">Anggota</a>

    </div>

   

    <a href="#Laporan" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Laporan</a>
    
    <div class="collapse" id="Laporan">
   
                <a class="list-group-item" href="<?php echo site_url('petugas/report_peminjaman');?>">Peminjaman</a>
                 <a class="list-group-item" href="<?php echo site_url('petugas/gudang_sepeda')?>">Keuangan</a>
    </div>

    <?php } ?>

    <?php if($data['hak']=="Petugas" || $data['hak']=="admin"){ ?>
    <a href="#Transaksi" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Transaksi</a>
    
    <div class="collapse" id="Transaksi">
   
                <a class="list-group-item" href="<?php echo site_url('petugas/peminjaman');?>">Peminjaman</a>
                 <a class="list-group-item" href="<?php echo site_url('petugas/pengembalian')?>">Pengembalian</a>
    </div>
    <?php } ?>

    <?php if($data['hak']=="Petugas"){ ?>
    <a href="#Data3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Pengelolaan Data</a>
    
    <div class="collapse" id="Data3">
   
                <a class="list-group-item" href="<?php echo site_url('petugas/peminjaman');?>">Sepeda</a>                
    </div>
    <?php } ?>

    

   
    
<!--     <a href="#gambaran-umum" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Gambaran Umum</a>
    <div class="collapse" id="gambaran-umum">
                <a class="list-group-item" href="<?php echo site_url('manage/gambaran_umum');?>">Gambaran Umum</a>
                <a class="list-group-item" href="<?php echo site_url('manage/gambaran_umum_detail')?>">Detail Gambaran Umum</a>
    </div> -->
    
	

   
    
    
	
	<?php } ?>
	
    

  </div>
</div>
</div>