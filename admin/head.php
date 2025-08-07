<?php  
session_start();
	if ($_SESSION['username'] == null || $_SESSION['password'] == null) {
		echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
		exit;
	}
	include "../inc/koneksi.php";
	include "../config/authentication_users.php";
	include "../config/fungsi_indotgl.php";
	include "../config/library.php";
	include "../inc/library.php";
	$tanggal = tgl_indo(date("Y m d"));
	$jam	 = date("H:i:s");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<title>Sistem Bantuan Sosial - Dashboard Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Modern Styles -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/modern-styles.css">
	<link rel="stylesheet" type="text/css" href="../css/brain-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/modern-table.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>

	<script type="text/javascript" src="../js/plugins/charts/flot.js"></script>
	<script type="text/javascript" src="../js/plugins/charts/flot.orderbars.js"></script>
	<script type="text/javascript" src="../js/plugins/charts/flot.pie.js"></script>
	<script type="text/javascript" src="../js/plugins/charts/flot.time.js"></script>
	<script type="text/javascript" src="../js/plugins/charts/flot.animator.min.js"></script>
	<script type="text/javascript" src="../js/plugins/charts/excanvas.min.js"></script>
	<script type="text/javascript" src="../js/plugins/charts/flot.resize.min.js"></script>

	<script type="text/javascript" src="../js/plugins/forms/uniform.min.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/select2.min.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/inputmask.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/autosize.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/inputlimit.min.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/listbox.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/multiselect.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/validate.min.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/tags.min.js"></script>

	<script type="text/javascript" src="../js/plugins/forms/uploader/plupload.full.min.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/uploader/plupload.queue.min.js"></script>

	<script type="text/javascript" src="../js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/wysihtml5/toolbar.js"></script>

	<script type="text/javascript" src="../js/plugins/interface/jgrowl.min.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/datatables.min.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/prettify.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/fancybox.min.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/colorpicker.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/timepicker.min.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/fullcalendar.min.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/collapsible.min.js"></script>

	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/application.js"></script>

	<script type="text/javascript" src="../js/charts/simple_graph.js"></script>

</head>
<!-- Body -->

<body style="background: linear-gradient(135deg, #ecfdf5 0%, #f0f9ff 100%); min-height: 100vh;">

	<!-- Modern Navbar -->
	<nav class="navbar" style="position: fixed; top: 0; left: 0; right: 0; z-index: 1000;">
		<div class="container-fluid" style="display: flex; justify-content: space-between; align-items: center; padding: 0 2rem;">
			<div class="navbar-brand" style="display: flex; align-items: center; gap: 0.75rem;">
				<div style="width: 40px; height: 40px; background: linear-gradient(135deg, #10b981, #34d399); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center;">
					<i class="fa fa-heart" style="color: white; font-size: 1.25rem;"></i>
				</div>
				<span style="font-weight: 700; color: #10b981; font-size: 1.25rem;">SPK Bansos</span>
			</div>
			
			<div style="display: flex; align-items: center; gap: 1rem;">
				<span style="color: #6b7280; font-size: 0.875rem;">
					<i class="fa fa-clock-o"></i> <?php echo $tanggal . " - " . $jam; ?>
				</span>
				<span style="color: #10b981; font-weight: 500;">
					<i class="fa fa-user"></i> <?php echo $_SESSION['nama']; ?>
				</span>
			</div>
		</div>
	</nav>

	<div style="margin-top: 80px; padding: 2rem;">
		<!-- Link Menu -->