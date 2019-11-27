<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>seleting title of thesis</title>
	<link href="<?php echo base_url() ?>css/bootstrap-cerulean.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url() ?>css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url() ?>css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url() ?>css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url() ?>css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url() ?>css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url() ?>css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url() ?>css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url() ?>css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url() ?>css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url() ?>css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url() ?>css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url() ?>css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url() ?>css/uploadify.css' rel='stylesheet'>
	<link href="<?php echo base_url() ?>img/favicon.ico" rel="shortcut icon" >
</head>
<body>

		<!-- topbar starts -->
	<div class="navbar navbar-fixed-top" role = "navigation">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar navbar-fixed-top" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="" src="img/logo20.png" /> <p>thesis system</p></a>
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone">langauge</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> English</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> pashto</a></li>

					</ul>
				</div>
				<!-- theme selector ends -->

				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url().'auth/logout'?>">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="#">Visit Site</a></li>
						<li>
	            <form class="navbar-search pull-left">
	              <input placeholder="Search" class="search-query span2" name="query" type="text">
	            </form>
	          </li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
</div>
<br>
<br><br><br><br>

	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">

			<?php $type = $_SESSION['kind_user'];?>

			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

					<span class="sr-only">toggle nevigation</span>


					<ul class="nav nav-tabs nav-stacked main-menu">
					<?php $page=$this->uri->segment(1)?>
					<li <?php if($page=='welcome') { echo "class='active'";}?> ><a class="ajax-link" href="<?php echo base_url().'dashboard/index' ?>"><i class="icon-user"></i><span class="hidden-tablet">Dashboard</span></a></li>
					<li><a class="ajax-link" href="<?php echo base_url().'thesis/index' ?>"><i class="icon-user"></i><span > Monographs</span></a></li>
					<li><a class="ajax-link" href="<?php echo base_url().'teacher/index' ?>"><i class="icon-home"></i><span class="hidden-tablet">Recommendations</span></a></li>
					<li><a class="ajax-link" href="<?php echo base_url().'post/index'?>"><i class="icon-home"></i><span class="hidden-tablet">posts</span></a></li>
					<?php if($type != 'teacher' && $type != 'student'):?>
						<li><a class="ajax-link" href="<?php echo base_url().'manger/index'?>"><i class="icon-home"></i><span class="hidden-tablet">Users</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url().'auth/logout'?>"><i class="icon-home"></i><span class="hidden-tablet">setting</span></a></li>
					<?php endif;?>
					<li><a class="ajax-link" href="<?php echo base_url().'author/index'?>"><i class="icon-home"></i><span class="hidden-tablet">about</span></a></li>
					<li><a class="ajax-link" href="<?php echo base_url().'auth/logout'?>"><i class="icon-home"></i><span class="hidden-tablet">logout</span></a></li>

					</ul>
				</div><!--/.well -->
			</div><!--/span-->

			<!-- left menu ends -->
			<div id="content" class="span10">
			<!-- content starts -->

			</div><!--/row-->

			<!-- content start -->
			<div>
			<?php
			$this->load->view($view);
			?>
			</div>




					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->

		<hr>
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo base_url() ?>js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url() ?>js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url() ?>js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url() ?>js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url() ?>js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url() ?>js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url() ?>js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url() ?>js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url() ?>js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url() ?>js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url() ?>js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url() ?>js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url() ?>js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url() ?>js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url() ?>js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url() ?>js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url() ?>js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url() ?>js/jquery.dataTables.min.js'></script>
	<!-- chart libraries start -->
	<script src="<?php echo base_url() ?>js/excanvas.js"></script>
	<script src="<?php echo base_url() ?>js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url() ?>js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url() ?>js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url() ?>js/jquery.flot.resize.min.js"></script>
	<script src="<?php echo base_url() ?>js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url() ?>js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url() ?>js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url() ?>js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url() ?>js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url() ?>js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url() ?>js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url() ?>js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url() ?>js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url() ?>js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url() ?>js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url() ?>js/charisma.js"></script>
</body>
</html>
