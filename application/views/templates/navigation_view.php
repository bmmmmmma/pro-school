<ul class="nav nav-list">



<?php if(!$this->session->userdata('username')) { ?>
<li class="">
	<a href="<?= base_url() ?>index.php/registration">
		<i class="menu-icon fa fa-key"></i>
		<span class="menu-text"> Регистрация </span>
	</a>
	<b class="arrow"></b>
</li>
<li class="">
	<a href="<?= base_url() ?>index.php/login">
		<i class="menu-icon fa fa-key"></i>
		<span class="menu-text"> Вход </span>
	</a>
	<b class="arrow"></b>
</li>
<?php } ?>
<li class="">
	<a href="<?= base_url() ?>index.php/courses">
		<i class="menu-icon fa fa-list"></i>
		<span class="menu-text"> Курсы </span>
	</a>
	<b class="arrow"></b>
</li>
<?php if($this->session->userdata('username')) { ?>
	<?php if($this->session->userdata('id') != 21) { ?>
	<li class="">
		<a href="<?= base_url() ?>index.php/userbook">
			<i class="menu-icon fa fa-book"></i>
			<span class="menu-text"> Журнал </span>
		</a>
		<b class="arrow"></b>
	</li>
	<?php } ?>

	<li class="">
		<a href="<?= base_url() ?>index.php/tests">
			<i class="menu-icon fa fa-bookmark"></i>
			<span class="menu-text"> Тесты </span>
		</a>
		<b class="arrow"></b>
	</li>

<?php } ?>
<!-- <li class="">
	<a href="<?= base_url() ?>index.php/archive">
		<i class="menu-icon fa fa-calendar"></i>
		<span class="menu-text"> Архив </span>
	</a>
	<b class="arrow"></b>
</li> -->

</ul>
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
	<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>
</div>

<div class="main-content">
<div class="main-content-inner">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<i class="ace-icon fa fa-home home-icon"></i>
			
			<!-- <li class="active">Blank Page</li> -->
		</ul><!-- /.breadcrumb -->

		<div class="nav-search" id="nav-search">
			<form class="form-search">
				<span class="input-icon">
					<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
					<i class="ace-icon fa fa-search nav-search-icon"></i>
				</span>
			</form>
		</div><!-- /.nav-search -->
	</div>

	<div class="page-content">
		

		<div class="row">
			<div class="col-xs-12">