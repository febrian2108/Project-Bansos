<?php
include "head.php";
?>

<!-- Link Menu -->
<?php include "menu.php"; ?>

<!-- Dashboard Content -->
<div class="container-fluid">
	<!-- Page Header -->
	<div class="card mb-4 fade-in">
		<div class="card-header">
			<h2 class="card-title">
				<i class="fa fa-dashboard"></i>
				Dashboard Admin
			</h2>
			<p style="margin: 0; color: #6b7280;">Selamat datang di Sistem Pendukung Keputusan Bantuan Sosial</p>
		</div>
	</div>

	<!-- Statistics Cards -->
	<div class="stats-grid mb-4">
		<div class="stat-card fade-in" style="animation-delay: 0.1s;">
			<div class="stat-icon primary">
				<i class="fa fa-users"></i>
			</div>
			<div class="stat-value">1,234</div>
			<div class="stat-label">Total Calon Penerima</div>
		</div>
		
		<div class="stat-card fade-in" style="animation-delay: 0.2s;">
			<div class="stat-icon secondary">
				<i class="fa fa-check-circle"></i>
			</div>
			<div class="stat-value">856</div>
			<div class="stat-label">Bantuan Diberikan</div>
		</div>
		
		<div class="stat-card fade-in" style="animation-delay: 0.3s;">
			<div class="stat-icon accent">
				<i class="fa fa-clock-o"></i>
			</div>
			<div class="stat-value">378</div>
			<div class="stat-label">Dalam Proses</div>
		</div>
		
		<div class="stat-card fade-in" style="animation-delay: 0.4s;">
			<div class="stat-icon primary">
				<i class="fa fa-list-alt"></i>
			</div>
			<div class="stat-value">12</div>
			<div class="stat-label">Total Kriteria</div>
		</div>
	</div>

	<!-- Main Content Grid -->
	<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem; margin-bottom: 2rem;">
		<!-- Welcome Card -->
		<div class="card fade-in" style="animation-delay: 0.5s;">
			<div class="card-header">
				<h3 class="card-title">
					<i class="fa fa-info-circle"></i>
					Tentang Sistem
				</h3>
			</div>
			<div class="card-body">
				<div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
					<div style="width: 60px; height: 60px; background: linear-gradient(135deg, #10b981, #34d399); border-radius: 1rem; display: flex; align-items: center; justify-content: center;">
						<i class="fa fa-heart" style="color: white; font-size: 1.5rem;"></i>
					</div>
					<div>
						<h4 style="margin: 0; color: #1f2937;">Sistem Pendukung Keputusan</h4>
						<p style="margin: 0; color: #6b7280;">Bantuan Sosial untuk Masyarakat Kurang Mampu</p>
					</div>
				</div>
				
				<p style="color: #6b7280; line-height: 1.6; margin-bottom: 1.5rem;">
					Platform digital yang dirancang untuk mengotomatisasi proses seleksi penerima bantuan sosial. 
					Sistem ini memungkinkan petugas untuk melakukan survei, memasukkan data, dan melakukan analisis 
					secara otomatis untuk menentukan penerima bantuan yang layak.
				</p>
				
				<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
					<div style="padding: 1rem; background: rgba(16, 185, 129, 0.1); border-radius: 0.5rem; border-left: 4px solid #10b981;">
						<h5 style="margin: 0 0 0.5rem 0; color: #10b981;">
							<i class="fa fa-users"></i> Manajemen Data
						</h5>
						<p style="margin: 0; color: #6b7280; font-size: 0.875rem;">
							Kelola data calon penerima bantuan dengan mudah dan terstruktur
						</p>
					</div>
					
					<div style="padding: 1rem; background: rgba(59, 130, 246, 0.1); border-radius: 0.5rem; border-left: 4px solid #3b82f6;">
						<h5 style="margin: 0 0 0.5rem 0; color: #3b82f6;">
							<i class="fa fa-shield"></i> Keamanan Data
						</h5>
						<p style="margin: 0; color: #6b7280; font-size: 0.875rem;">
							Data terlindungi dengan sistem keamanan yang terpercaya
						</p>
					</div>
					
					<div style="padding: 1rem; background: rgba(245, 158, 11, 0.1); border-radius: 0.5rem; border-left: 4px solid #f59e0b;">
						<h5 style="margin: 0 0 0.5rem 0; color: #f59e0b;">
							<i class="fa fa-line-chart"></i> Analisis Otomatis
						</h5>
						<p style="margin: 0; color: #6b7280; font-size: 0.875rem;">
							Sistem pendukung keputusan yang akurat dan efisien
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Quick Actions -->
		<div class="card fade-in" style="animation-delay: 0.6s;">
			<div class="card-header">
				<h3 class="card-title">
					<i class="fa fa-bolt"></i>
					Aksi Cepat
				</h3>
			</div>
			<div class="card-body">
				<div style="display: flex; flex-direction: column; gap: 1rem;">
					<a href="calon_penerima.php" class="btn btn-primary" style="justify-content: flex-start;">
						<i class="fa fa-plus"></i>
						Tambah Calon Penerima
					</a>
					
					<a href="analisa.php" class="btn" style="background: rgba(59, 130, 246, 1); color: white; justify-content: flex-start; text-decoration: none;">
						<i class="fa fa-bar-chart"></i>
						Jalankan Analisis
					</a>
					
					<a href="kriteria.php" class="btn" style="background: rgba(245, 158, 11, 1); color: white; justify-content: flex-start; text-decoration: none;">
						<i class="fa fa-cog" aria-hidden="true"></i>
						Kelola Kriteria
					</a>
					
					<a href="himpunan.php" class="btn" style="background: rgba(139, 69, 19, 1); color: white; justify-content: flex-start; text-decoration: none;">
						<i class="fa fa-bookmark"></i>
						Nilai Kriteria
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- System Info -->
	<div class="card fade-in" style="animation-delay: 0.7s;">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-info"></i>
				Informasi Sistem
			</h3>
		</div>
		<div class="card-body">
			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
				<div style="text-align: center;">
					<div style="width: 48px; height: 48px; background: rgba(16, 185, 129, 0.1); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
						<i class="fa fa-user" style="color: #10b981; font-size: 1.25rem;"></i>
					</div>
					<h5 style="margin: 0 0 0.5rem 0; color: #1f2937;">Administrator</h5>
					<p style="margin: 0; color: #6b7280; font-size: 0.875rem;"><?php echo $_SESSION['nama']; ?></p>
				</div>
				
				<div style="text-align: center;">
					<div style="width: 48px; height: 48px; background: rgba(59, 130, 246, 0.1); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
						<i class="fa fa-calendar" style="color: #3b82f6; font-size: 1.25rem;"></i>
					</div>
					<h5 style="margin: 0 0 0.5rem 0; color: #1f2937;">Tanggal</h5>
					<p style="margin: 0; color: #6b7280; font-size: 0.875rem;"><?php echo $tanggal; ?></p>
				</div>
				
				<div style="text-align: center;">
					<div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.1); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
						<i class="fa fa-clock-o" style="color: #f59e0b; font-size: 1.25rem;"></i>
					</div>
					<h5 style="margin: 0 0 0.5rem 0; color: #1f2937;">Waktu</h5>
					<p style="margin: 0; color: #6b7280; font-size: 0.875rem;"><?php echo $jam; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

</div> <!-- Close the div from head.php -->

<!-- Footer -->
<?php include "footer.php" ?>

<script>
// Add entrance animations
window.addEventListener('load', function() {
	const elements = document.querySelectorAll('.fade-in');
	elements.forEach((el, index) => {
		setTimeout(() => {
			el.style.opacity = '1';
			el.style.transform = 'translateY(0)';
		}, index * 100);
	});
});

// Add hover effects to stat cards
document.querySelectorAll('.stat-card').forEach(card => {
	card.addEventListener('mouseenter', function() {
		this.style.transform = 'translateY(-8px)';
		this.style.boxShadow = '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)';
	});
	
	card.addEventListener('mouseleave', function() {
		this.style.transform = 'translateY(-4px)';
		this.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)';
	});
});

// Initialize fade-in elements
document.querySelectorAll('.fade-in').forEach(el => {
	el.style.opacity = '0';
	el.style.transform = 'translateY(20px)';
	el.style.transition = 'all 0.6s ease-out';
});
</script>