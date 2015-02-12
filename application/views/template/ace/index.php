<!DOCTYPE html>
<?php 
	$template_name 	= 'ace';
	$url_css		= base_url().'assets/'.$template_name.'/css/'; 
	$url_script		= base_url().'assets/'.$template_name.'/js/'; 
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo $title?> | ISAFW</title>
	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- basic styles -->
	<link href="<?php echo $url_css;?>bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo $url_css;?>bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo $url_css;?>font-awesome.min.css" rel="stylesheet" />
	<!--[if IE 7]>
	<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
	<![endif]-->
	<!-- page specific plugin styles -->
	<link rel="stylesheet" href="<?php echo $url_css;?>jquery-ui-1.10.3.custom.min.css" />
	<link rel="stylesheet" href="<?php echo $url_css;?>chosen.css" />
	<link rel="stylesheet" href="<?php echo $url_css;?>jquery-ui-1.10.3.full.min.css" />
	<!-- fonts -->
	<link rel="stylesheet" href="<?php echo $url_css;?>ace-fonts.css" />
	<!-- ace styles -->
	<link rel="stylesheet" href="<?php echo $url_css;?>datepicker.css" />
	<link rel="stylesheet" href="<?php echo $url_css;?>ace.min.css" />
	<link rel="stylesheet" href="<?php echo $url_css;?>ace-responsive.min.css" />
	<link rel="stylesheet" href="<?php echo $url_css;?>ace-skins.min.css" />

	<link rel="stylesheet" href="<?php echo $url_css;?>ace.min.css" />
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="<?php echo $url_css;?>ace-ie.min.css" />
	<![endif]-->

	<!-- inline styles related to this page -->

	<!-- ace settings handler -->

	<script src="<?php echo $url_script;?>ace-extra.min.js"></script>
	<!--[if !IE]> -->
	<script src='<?php echo $url_script;?>jquery-2.0.3.min.js'></script>
	<!--<script type="text/javascript">
	window.jQuery || document.write(""+"<"+"/script>");
</script>-->
</head>

<body style="font-family:Tahoma">
	<div class="navbar" id="navbar">
		<script type="text/javascript">try{ace.settings.check('navbar' , 'fixed')}catch(e){}</script>
		<div class="navbar-inner">
			<div class="container-fluid">
				<a href="#" class="brand">
					<table width="100%">
						<tr>
							<td><img src="#" width="51" height="50"></td>
							<td style="padding:0px 15px"><large>IsaFW - Framework</large>
								<small>Information System</small></td>
							</tr>
						</table>					
					</a>
					<ul class="nav ace-nav pull-right">
						<li class="grey"></li>
						<li class="green"></li>
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="#" alt="Dude" />
								<span class="user-info">
									<small>Welcome,</small>Dude
								</span>
								<i class="icon-caret-down"></i>
							</a>
							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="#">
										<i class="icon-cog"></i>Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-user"></i>Profile
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">
										<i class="icon-off"></i>Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.container-fluid -->
			</div><!-- /.navbar-inner -->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#"><span class="menu-text"></span></a>
			<!-- Menu bar -->
			<?PHP $this->load->view('template/'.$template_name.'/menu'); ?>
			<!--end Menubar-->
			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
					try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="#">Home</a>
							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active"></li>
					</ul><!-- .breadcrumb -->

					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div>
				</div>
				<div class="page-content"> 
					<div class="page-header position-relative">
						<h1>
							<?php echo $title; ?>
							<small>
								<i class="icon-double-angle-right"></i>Subtitle
							</small>
						</h1>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<?php echo $this->load->view($content); ?>
						</div>
					</div>
				</div>
			</div><!-- /#ace-settings-container -->
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
		<i class="icon-double-angle-up icon-only bigger-110"></i>
	</a>
	<!-- added by haniefhan | for datatable -->
	<style type="text/css">
	.dataTables_filter{
		float:left;
	}
	div.dataTables_wrapper .row{
		margin-left: 0px!important;
	}
	.dataTables_paginate ul.pagination li{
		padding:5px 10px;
	}
	.dataTables_paginate ul.pagination li a{
		color:#1c6ca2;
	}
	.dataTables_paginate ul.pagination li.active{
		background-color: #6faed9;
		border-color: #6faed9;
	}
	.dataTables_paginate ul.pagination li.active a{
		color:white!important;
	}
	.dataTables_paginate ul.pagination li.disabled a{
		color:#999;
	}
	</style>
</body>
</html>