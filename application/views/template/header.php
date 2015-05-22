<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>SIP (Sistem Informasi Sepeda)</title>
    
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css"?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/style.css"?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap-theme.min.css"?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/select2-bootstrap.css"?>" />
	<link href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url()."assets/"?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/"?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/"?>js/scripts.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<?php if(isset($css_files)){
	foreach($css_files as $file): ?>
	    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	 
	<?php endforeach; }?>
	<?php if(isset($js_files)){ foreach($js_files as $file): ?>
	 
	    <script src="<?php echo $file; ?>"></script>
	<?php endforeach; }?>
  </head>
  <body style="padding-top:70px;">
	<div class="navbar navbar-default navbar-fixed-top">
		<div>
			<div class="col-md-12 column">
				<ul class="nav">
					<li class="">
						<a href="<?php echo site_url('/')?>" class="navbar-brand pull-left">Basis Data Sistem Inovasi Daerah (SIDa)</a>
					</li>
					<?php if($this->session->userdata('logged_in')){
						$session_data = $this->session->userdata('logged_in');
          				$data['user'] = $session_data['user'];
            			$data['hak'] = $session_data['hak'];
            			if($data['hak']=='admin' || $data['hak']=='Petugas'){?>
					<li class="dropdown pull-right">
						<a href="<?php echo site_url('petugas/log_out')?>">Logout</a>
					</li>
					<?php }else { ?>
					<li class="dropdown pull-right">
						<a href="<?php echo site_url('anggota/log_out')?>">Logout</a>
					</li>
					<?php } ?>
					<?php }else {?>
					<li class="dropdown pull-right" id="login">
						<a id="login-trigger" class="active">
					        Log in <span>▼</span>
				        </a>
					      <div id="login-content" style="display:none;">
					        <form action="<?php echo site_url('c_verifylogin')?>" method="post">
					          <fieldset id="inputs">
					            <input id="username" type="text" name="username" placeholder="Username" required/><br/>
					            <input id="password" type="password" name="password" placeholder="Password" required/>
					          </fieldset>
					          <fieldset id="actions">
					            <input class="pull-right" type="submit" id="submit" value="Login">
					          </fieldset>
					        </form>
					        <br/><br/>
					      </div>     
					</li>
					<script type="text/javascript">
						$(document).ready(function(){
						  $('#login-trigger').click(function(){
						    $(this).next('#login-content').slideToggle();
						    $(this).toggleClass('active');          
						    
						    if ($(this).hasClass('active')) $(this).find('span').html('&#x25BC;')
						      else $(this).find('span').html('&#x25B2;')
						    })
						});
					</script>
					<?php } ?>
					<li class="pull-right"><a href="<?php echo site_url('manage/index');?>">Home</a></li>
				</ul>
			</div>
		</div>
	</div>