<div>
<div class="col-md-2" style="padding:inherit;">
<div id="MainMenu">
  <div class="list-group panel">

    <?php if($this->session->userdata('logged_in')){
        $session_data = $this->session->userdata('logged_in');
        $data['user'] = $session_data['user'];
        $data['hak'] = $session_data['hak'];
    ?>

    
    <a href="#data-daerah" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Data Daerah</a>
    
    <div class="collapse" id="data-daerah">
    <?php if($data['hak']=="petugas"){ ?>
                <a class="list-group-item" href="<?php echo site_url('manage/nasional');?>">Negara</a>
                <a class="list-group-item" href="<?php echo site_url('manage/propinsi')?>">Propinsi</a>
    <?php } ?>
                <a class="list-group-item" href="<?php echo site_url('manage/kab_kota')?>">Kab/Kota</a>
    </div>
    
<!--     <a href="#gambaran-umum" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Gambaran Umum</a>
    <div class="collapse" id="gambaran-umum">
                <a class="list-group-item" href="<?php echo site_url('manage/gambaran_umum');?>">Gambaran Umum</a>
                <a class="list-group-item" href="<?php echo site_url('manage/gambaran_umum_detail')?>">Detail Gambaran Umum</a>
    </div> -->
    <?php if($data['hak']=="admin"){ ?>
    <a href="#grand-design" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Grand Design</a>
    <div class="collapse" id="grand-design">
                <a class="list-group-item" href="<?php echo site_url('manage/gdsn');?>">GDSN</a>
                <a class="list-group-item" href="<?php echo site_url('manage/gdsp');?>">GDSP</a>
                <a class="list-group-item" href="<?php echo site_url('manage/progress');?>">Progress</a>
                <a class="list-group-item" href="<?php echo site_url('manage/roadmap_sida_nasional');?>">Roadmap Nasional</a>
                <a class="list-group-item" href="<?php echo site_url('manage/roadmap_sida_propinsi');?>">Roadmap Propinsi</a>
    </div>      
	<?php } ?>
	<a href="#menu-tambahan" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Gambaran Umum</a>
    <div class="collapse" id="menu-tambahan">
    <?php if($data['hak']=="admin"){ ?>                
                <a class="list-group-item" href="<?php echo site_url('manage/kategori_level1');?>">Kategori-1</a>
                <a class="list-group-item" href="<?php echo site_url('manage/kategori_level2')?>">Kategori-2</a>
                <a class="list-group-item" href="<?php echo site_url('manage/kategori_level3')?>">Kategori-3</a>
    <?php } ?>
				<a class="list-group-item" href="<?php echo site_url('manage/bidang')?>">Bidang</a>
    <?php if($data['hak']=="admin"){ ?>
                <a class="list-group-item" href="<?php echo site_url('manage/departemen')?>">Departemen</a>
				<a class="list-group-item" href="<?php echo site_url('manage/sektor')?>">Sektor</a>
                <a class="list-group-item" href="<?php echo site_url('manage/ekspor_impor')?>">Ekspor-Impor</a>
                <a class="list-group-item" href="<?php echo site_url('manage/lembaga_riset')?>">Lembaga Riset</a>
                <a class="list-group-item" href="<?php echo site_url('manage/departemen')?>">Lembaga Riset Departemen </a>
                <a class="list-group-item" href="<?php echo site_url('manage/pdb')?>">PDB</a>
                <a class="list-group-item" href="<?php echo site_url('manage/pdb_dasar')?>">PDB Dasar</a>                
                <a class="list-group-item" href="<?php echo site_url('manage/pertumbuhan_ekonomi')?>">Pertumbuhan Ekonomi</a>
                <a class="list-group-item" href="<?php echo site_url('manage/distribusi_produk')?>">Distribusi Produk</a>
    <?php } ?>
    </div>

    <a href="#organisasi" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Organisasi</a>
    <div class="collapse" id="organisasi">
                <a class="list-group-item" href="<?php echo site_url('manage/organisasi_kabkota');?>">Organisasi Kab/Kota</a>
                <a class="list-group-item" href="<?php echo site_url('manage/organisasi_kabkota_anggota')?>">Anggota Organisasi Kab/Kota</a>
    <?php if($data['hak']=="admin"){ ?>
                <a class="list-group-item" href="<?php echo site_url('manage/organisasi_propinsi')?>">Organisasi Propinsi</a>
                <a class="list-group-item" href="<?php echo site_url('manage/organisasi_propinsi_anggota')?>">Anggota Organisasi Propinsi</a>
    <?php } ?>
                <a class="list-group-item" href="<?php echo site_url('manage/pokja_kabkota')?>">Pokja Kab/Kota</a>
                <a class="list-group-item" href="<?php echo site_url('manage/pokja_kabkota_anggota')?>">Anggota Pokja Kab/Kota</a>
    <?php if($data['hak']=="admin"){ ?>
                <a class="list-group-item" href="<?php echo site_url('manage/pokja_propinsi')?>">Pokja Propinsi</a>
                <a class="list-group-item" href="<?php echo site_url('manage/pokja_propinsi_anggota')?>">Anggota Pokja Propinsi</a>
                <a class="list-group-item" href="<?php echo site_url('manage/tugas_koordinator')?>">Tugas Koordinator</a>
    <?php } ?>
                <a class="list-group-item" href="<?php echo site_url('manage/tugas_pokja_kabkota')?>">Tugas Pokja Kab/Kota</a>
    <?php if($data['hak']=="admin"){ ?>
                <a class="list-group-item" href="<?php echo site_url('manage/tugas_pokja_propinsi')?>">Tugas Pokja Propinsi</a>
    <?php } ?>
    </div>

    <a href="#strategi-kebijakan" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Strategi Kebijakan</a>
    <div class="collapse" id="strategi-kebijakan">                
                <a class="list-group-item" href="<?php echo site_url('manage/kebijakan');?>">Kebijakan</a>
                <a class="list-group-item" href="<?php echo site_url('manage/strategi');?>">Strategi</a>
                <a class="list-group-item" href="<?php echo site_url('manage/strategi_kebijakan');?>">Strategi Kebijakan</a>				
				<a class="list-group-item" href="<?php echo site_url('manage/strategi_detail');?>">Detil Strategi</a>                
    <?php if($data['hak']=="admin"){ ?>            
                <a class="list-group-item" href="<?php echo site_url('manage/indikator');?>">Indikator</a>
    <?php } ?>
                <a class="list-group-item" href="<?php echo site_url('manage/indikator_kabkota');?>">Indikator Kab/Kota</a>
	<?php if($data['hak']=="admin"){ ?>
            	<a class="list-group-item" href="<?php echo site_url('manage/evaluasi');?>">Evaluasi</a>
    <?php } ?>
                <a class="list-group-item" href="<?php echo site_url('manage/evaluasi_kabkota');?>">Evaluasi Kab/Kota</a>
    </div>
    <a href="#potensi" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Potensi</a>
    <div class="collapse" id="potensi">
                <a class="list-group-item" href="<?php echo site_url('manage/jenis_potensi');?>">Jenis Potensi</a>
                <a class="list-group-item" href="<?php echo site_url('manage/potensi');?>">Potensi</a>
    </div>
	<?php if($data['hak']=="admin"){ ?>
	<a href="#nilai-tambah" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Pengelolaan Data</a>
    <div class="collapse" id="nilai-tambah">
                <a class="list-group-item" href="<?php echo site_url('admin/data_petugas');?>">Petugas</a>
                <a class="list-group-item" href="<?php echo site_url('admin/data_petugas');?>">Anggota</a>

                <a class="list-group-item" href="<?php echo site_url('petugas/gudang_sepeda');?>">Sepeda</a>
    </div>
    <?php } ?>
	<?php } ?>
	<a href="#laporan" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Laporan</a>
    <div class="collapse" id="laporan">
      <a class="list-group-item" href="<?php echo site_url('report/bidang')?>">Bidang</a>
      <a class="list-group-item" href="<?php echo site_url('report/indikator')?>">Indikator</a>
    </div>
    

  </div>
</div>
</div>