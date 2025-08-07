<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistem Bantuan Sosial - Login</title>
	
	<!-- Modern Styles -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/modern-styles.css">
	
	<!-- Scripts -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="login-wrapper">
		<div class="login-container">
			<div class="login-header">
				<div class="login-logo">
					<i class="fa fa-heart"></i>
				</div>
				<h1 class="login-title">Sistem Bantuan Sosial</h1>
				<p class="login-subtitle">Silakan masuk untuk mengakses dashboard admin</p>
			</div>

			<?php
			//kode php ini kita gunakan untuk menampilkan pesan error
			if (!empty($_GET['error'])) {
				if ($_GET['error'] == 4) {
					echo '<div class="alert alert-error">
							<i class="fa fa-exclamation-triangle"></i>
							Username dan Password tidak terdaftar!
						  </div>';
				}
			}
			?>

			<form name="login" action="otentikasi.php" method="post" id="loginForm">
				<div class="form-group">
					<label for="username" class="form-label">
						<i class="fa fa-user"></i> Username
					</label>
					<input type="text" 
						   class="form-control" 
						   id="username"
						   name="username" 
						   placeholder="Masukkan username Anda..." 
						   required>
				</div>

				<div class="form-group">
					<label for="password" class="form-label">
						<i class="fa fa-lock"></i> Password
					</label>
					<input type="password" 
						   class="form-control" 
						   id="password"
						   name="password" 
						   placeholder="Masukkan password Anda..." 
						   required>
				</div>

				<button type="submit" class="btn btn-primary btn-full" id="loginBtn">
					<span class="btn-text">
						<i class="fa fa-sign-in"></i> Masuk ke Dashboard
					</span>
					<span class="loading" style="display: none;"></span>
				</button>
			</form>

			<div class="text-center mt-3">
				<small style="color: #6b7280;">
					<i class="fa fa-shield"></i> 
					Sistem Pendukung Keputusan Bantuan Sosial
				</small>
			</div>
		</div>
	</div>

	<script>
		// Add loading animation on form submit
		document.getElementById('loginForm').addEventListener('submit', function() {
			const btn = document.getElementById('loginBtn');
			const btnText = btn.querySelector('.btn-text');
			const loading = btn.querySelector('.loading');
			
			btnText.style.display = 'none';
			loading.style.display = 'inline-block';
			btn.disabled = true;
		});

		// Add focus animations
		document.querySelectorAll('.form-control').forEach(input => {
			input.addEventListener('focus', function() {
				this.parentElement.style.transform = 'translateY(-2px)';
			});
			
			input.addEventListener('blur', function() {
				this.parentElement.style.transform = 'translateY(0)';
			});
		});

		// Add entrance animation
		window.addEventListener('load', function() {
			document.querySelector('.login-container').classList.add('fade-in');
		});
	</script>
</body>
</html>