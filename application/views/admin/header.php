<!DOCTYPE html>
<html>

<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- <script src="<?= base_url() ?>js/notify.min.js"></script> -->
	<script src="<?= base_url() ?>js/moment.min.js"></script>
	<!-- <script src="<?= base_url() ?>js/bootstrapValidator.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css">
	<link rel="stylesheet" type="text/css" media="print" href="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.print.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/skins/_all-skins.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/js/plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>/js/plugins/fullcalendar-3.4.0/fullcalendar.min.css">
	<link rel="stylesheet" media="print" href="<?= base_url() ?>/js/plugins/fullcalendar-3.4.0/fullcalendar.print.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/admin_style.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/admin.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/bootstrapValidator.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/jquery-ui.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/jquery-ui.structure.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/jquery-ui.theme.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/jquery.loadingModal.css">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/jquery.loadingModal.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/jquery.jOrgChart.css"> -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="<?php echo site_url(); ?>/css/datepicker3.css"> -->


</head>

<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">

		<header class="main-header">

			<!-- Logo -->
			<a class="logo">
				<span class="logo-mini">
					<b>A</b>LTE</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg">
					<b>Admin</b>LTE</span>
			</a>

			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<!-- Navbar Right Menu -->
				<ul class="nav navbar-nav pull-right">
					<!-- User Account: style can be found in dropdown.less -->
					<!--                        <li class="user user-menu">
                                                    <a href="<?= base_url() ?>/user/user_details/<?= $this->session->userdata['user_id'] ?>">
                                                        <span class="hidden-xs"><i class="fa fa-user">&nbsp;<?= $this->session->userdata['username'] ?></i></span>
                                                    </a>
                                                </li>-->
				</ul>

			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<!--                    <div class="user-panel">
                                            <div class="pull-left image">
                                                <img src="<?= base_url() . $this->session->userdata['thumbnail'] ?>" class="img-circle" alt="User Image">
                                            </div>
                                            <div class="pull-left info">
                                                <p><?= $this->session->userdata['username'] ?></p>
                                                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                            </div>
                                        </div>-->
				<!-- search form -->
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>
					<li>
						<a href="<?= base_url() ?>Admin">
							<i class="fa fa-coffee"></i>
							<span>Admin</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url() ?>User">
							<i class="fa fa-user"></i>
							<span>Users</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url() ?>product">
							<i class="fa fa-archive"></i>
							<span>Product</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url() ?>category">
							<i class="fa fa-industry"></i>
							<span>Category</span>
						</a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-truck"></i>
							<span>Orders</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu" style="display: none;">
							<li>
								<a href="<?= base_url() ?>Orders">
									<i class="fa fa-circle-thin"></i>
									<span>Orders</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url() ?>Orders_log">
									<i class="fa fa-circle-thin"></i>
									<span>Orders Log</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-image"></i>
							<span>Front Page Images</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu" style="display: none;">
							<li>
								<a href="<?= base_url() ?>Gallery">
									<i class="fa fa-circle-thin"></i>
									<span>Gallery</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url() ?>Banner">
									<i class="fa fa-circle-thin"></i>
									<span>Banner</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-question-circle"></i>
							<span>FAQ</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu" style="display: none;">
							<li>
								<a href="<?= base_url() ?>faq">
									<i class="fa fa-circle-thin"></i>
									<span>FAQ</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url() ?>faq_category">
									<i class="fa fa-circle-thin"></i>
									<span>FAQ Category</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= base_url() ?>Access/logout">
							<i class="fa fa-sign-out"></i>
							<span>Sign Out</span>
						</a>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
		<div class="content-wrapper 
            <?php
            if (isset($calendar_height)) {
                ?>
                     calendar-height
                     <?php

                }
                ?>">
			<!--        <header>
                            <nav class="navbar header noMargin">

           </nav>
       </header>

       <nav class="sidebar">

                           <a href="#visitor_link" data-toggle="collapse"><div class="sideLink">
                                   <span class="glyphicon glyphicon-tent"></span><span class="hidden-xs"> Visitors  <span class="glyphicon glyphicon-menu-down menu-toggle"></span></span>
                               </div>
                           </a>
                           <div class="collapse hiddenLink" id="visitor_link">
                               <ul>

                   <li><a href="<?= base_url() ?>visitor/all"><span class="glyphicon sideIcon glyphicon-user"></span><span class="hidden-xs"> All</span></a></li>

                   <li><a href="<?php echo site_url("visitor/assigned"); ?>"><span class="glyphicon sideIcon glyphicon-th-list"></span><span class="hidden-xs"> Under me</span></a></li>

               </ul>
           </div>


           <a href="<?= base_url() ?>settings/selection-on-card">
               <div class ="sideLink">
                   <span class ="glyphicon glyphicon-cog"></span> <span class="hidden-xs">Settings</span>
               </div>
           </a>
           <a href="<?= base_url() ?>access/logout">
       <div class ="sideLink">
           <span class ="glyphicon glyphicon-log-out"></span> <span class="hidden-xs">Logout</span>
       </div>
   </a>


       </nav><div class="content">-->