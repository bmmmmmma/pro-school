<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?= $title; ?></title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="shortcut icon" href="<?=  base_url(); ?>assets/images/carpov.png" type="image/png">
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/jquery-ui.min.css" />
		
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/jquery.gritter.min.css" />
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/select2.min.css" />
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/bootstrap-editable.min.css" />
		
		<!-- text fonts -->
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?=  base_url(); ?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?=  base_url(); ?>assets/css/ace-ie.min.css" />
		<![endif]-->
		

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?=  base_url(); ?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?=  base_url(); ?>assets/js/html5shiv.min.js"></script>
		<script src="<?=  base_url(); ?>assets/js/respond.min.js"></script>
		<![endif]-->

		<!-- [if !IE] -->
		<script src="<?=base_url();?>assets/js/jquery-2.1.4.min.js"></script>
		<!-- <![endif]-->
		
		<!--[if IE]>
<script src="<?=base_url();?>assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?=base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
		
	</head>
	<?php if(isset($ed_but_id)) { ?>
				<script type="text/javascript" language="javascript">
				    function moveWindow ()
				    	{window.location.hash="edit_row";}
				</script>
				<body class="no-skin" onload="moveWindow()">
					
	<?php } else {?>
				<body class="no-skin">
	<?php }?>
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?=  base_url(); ?>" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							<!-- <img src="<?= base_url() ?>assets/images/carpov.png" height	= "40px" width = "40">  -->
							PRO School
						</small>
					</a>
				</div>
				<?php if($this->session->userdata('username')) { ?>
				
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<!-- <img class="nav-user-photo" src="" alt="Jason's Photo" /> -->
								<span class="user-info">
									<small>Welcome, </small>
									<?php echo $this->session->userdata('username'); ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?=base_url().'index.php/profile/'?>"> 
										<i class="ace-icon fa fa-user"></i>
										Профиль
									</a>
								</li>
								<?php if($this->session->userdata('id') == 21) { ?>
								<li class="">
									<a href="<?= base_url() ?>index.php/gradebook">
										<i class="menu-icon fa fa-book"></i>
										Журнал
									</a>
								</li>
								<?php } ?>
								<li class="divider"></li>

								<li>
									<a href="<?=base_url().'index.php/login/logout/'?>">
										<i class="ace-icon fa fa-power-off"></i>
										Выйти
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<?php } ?>
			</div><!-- /.navbar-container -->
		</div>
	<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success" >
							<a href = "<?= base_url() ?>index.php/total_product/index">
								<i class="ace-icon fa fa-signal"></i>
							</a>
						</button>
						<button class="btn btn-info">
								<i class="ace-icon fa fa-pencil"></i>
						</button> 	
						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>
						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->