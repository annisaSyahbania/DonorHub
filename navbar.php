<style>
	a.nav-item1 {
		position: relative;
		display: block;
		padding: 0.75rem 1.25rem;
		margin-bottom: 10px;
		border: 1px;
		color: white;
		font-weight: 600;
	}


	a.nav-item1:hover,
	.nav-item1.active {
		background-color: #000000ad;
		color: #fffafa;
	}

	.collapse a {
		text-indent: 10px;
	}
</style>

<nav id="sidebar" class='mx-lt-5 bg-danger'>

	<div class="sidebar-list">
		<a href="index.php?page=home" class="nav-item1 nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
		<a href="index.php?page=donors" class="nav-item1 nav-donors"><span class='icon-field'><i class="fa fa-user-friends "></i></span> Pendonor</a>
		<a href="index.php?page=donations" class="nav-item1 nav-donations"><span class='icon-field'><i class="fa fa-tint"></i></span> Donor Darah</a>
		<a href="index.php?page=requests" class="nav-item1 nav-requests"><span class='icon-field'><i class="fa fa-th-list"></i></span> Request Darah</a>
		<a href="index.php?page=handedovers" class="nav-item1 nav-handedovers"><span class='icon-field'><i class="fa fa-toolbox"></i></span> Laporan</a>
		<!-- <?php if ($_SESSION['login_type'] == 1): ?>
			<a href="index.php?page=users" class="nav-item1 nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
			<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs text-danger"></i></span> System Settings</a>
		<?php endif; ?> -->
	</div>

</nav>
<script>
	$('.nav_collapse').click(function() {
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>