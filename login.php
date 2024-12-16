<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('./db_connect.php');
ob_start();
if (!isset($_SESSION['system'])) {
	$system = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
	foreach ($system as $k => $v) {
		$_SESSION['system'][$k] = $v;
	}
}
ob_end_flush();
?>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php echo $_SESSION['system']['name'] ?></title>
	<?php include('./header.php'); ?>
	<?php
	if (isset($_SESSION['login_id']))
		header("location:index.php?page=home");
	?>

	<style>
		body {
			width: 100%;
			height: 100vh;
			margin: 0;
			background: url('assets/uploads/bg-login.png') no-repeat center center fixed;
			background-size: cover;
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
			overflow: hidden;
		}

		body::before {
			content: '';
			position: absolute;
			width: 100%;
			height: 100%;
			background: rgba(255, 255, 255, 0.3);
			backdrop-filter: blur(5px);
			z-index: 1;
		}

		#login-container {
			position: relative;
			z-index: 3;
			background: #ffffff;
			padding: 40px;
			border-radius: 20px;
			box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
			width: 400px;
			text-align: center;
		}

		#login-container form {
			margin-top: 20px;
		}

		#login-container .form-group {
			margin-bottom: 20px;
			text-align: left;
		}

		#login-container .form-group label {
			font-size: 14px;
			color: #333;
			font-weight: bold;
		}

		#login-container .form-group input {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 8px;
			font-size: 14px;
			box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
		}

		#login-container button {
			width: 100%;
			padding: 12px;
			background: #ff6b6b;
			color: white;
			border: none;
			border-radius: 8px;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			transition: background 0.3s;
		}

		#login-container button:hover {
			background: #e63946;
		}
	</style>
</head>

<body>
	<div id="login-container">
		<img src="assets/uploads/image1.png" style="width: 190px; margin-bottom: 10px;">
		<!-- <h4 class="text-center"><b><?php echo $_SESSION['system']['name'] ?></b></h4> -->
		<form id="login-form">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" id="username" name="username" class="form-control" placeholder="Masukkan username" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>
			</div>
			<button type="submit">Login</button>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$('#login-form').submit(function(e) {
			e.preventDefault();
			let formData = $(this).serialize();

			$.ajax({
				url: 'ajax.php?action=login',
				method: 'POST',
				data: formData,
				beforeSend: function() {
					$('#login-form button').attr('disabled', true).text('Logging in...');
				},
				success: function(resp) {
					if (resp == 1) {
						alert('Login berhasil!');
						location.href = 'index.php?page=home';
					} else {
						alert('Username atau password salah!');
						$('#login-form button').attr('disabled', false).text('Login');
					}
				},
				error: function(err) {
					console.error(err);
					alert('Terjadi kesalahan!');
					$('#login-form button').attr('disabled', false).text('Login');
				}
			});
		});
	</script>
</body>

</html>