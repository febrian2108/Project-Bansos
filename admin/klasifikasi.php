<?php  
include "head.php";
?>

<!-- Link Menu -->
<?php include "menu.php"; ?>

<div class="container-fluid">
	<!-- Page Header -->
	<div class="card mb-4 fade-in">
		<div class="card-header">
			<h2 class="card-title">
				<i class="fa fa-tags"></i>
				Data Klasifikasi
			</h2>
			<p style="margin: 0; color: #6b7280;">Lihat hasil klasifikasi calon penerima bantuan</p>
		</div>
	</div>

	<!-- Modern Table Container -->
	<div class="modern-table-container fade-in">
		<div class="modern-table-header">
			<h3 class="modern-table-title">
				<i class="fa fa-tags"></i>
				Daftar Klasifikasi Penerima
			</h3>
			<a href="klasifikasi_tambah.php" class="modern-btn">
				<i class="fa fa-plus"></i>
				Tambah Klasifikasi
			</a>
		</div>

		<!-- Table Controls -->
		<div class="table-controls">
			<div class="search-box">
				<i class="fa fa-search"></i>
				<input type="text" placeholder="Cari nama penerima..." id="searchInput">
			</div>
			<div style="color: #64748b; font-size: 0.875rem;">
				<i class="fa fa-info-circle"></i>
				Total: <span id="totalRecords">0</span> data
			</div>
		</div>

		<table class="modern-table" id="dataTable">
			<thead>
				<tr>
					<th style="width: 80px;">No</th>
					<th>Nama Penerima</th>
					<th>Pendidikan Terakhir</th>
					<th>Penghasilan</th>
					<th>Kondisi Rumah</th>
					<th>Jumlah Tanggungan</th>
					<th>Usia</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$nomor = 0;
				$hasil = mysqli_query($konek, "select * from klasifikasi, penerima where klasifikasi.id_penerima=penerima.id_penerima ORDER BY nama_penerima ASC");
				$total_records = mysqli_num_rows($hasil);
				
				if ($total_records > 0) {
					while ($dataku = mysqli_fetch_array($hasil)) {
						$nomor++;
				?>
					<tr>
						<td><?php echo $nomor; ?></td>
						<td>
							<div style="font-weight: 600; color: #1e293b;"><?php echo htmlspecialchars($dataku["nama_penerima"]); ?></div>
							<div style="font-size: 0.75rem; color: #64748b;">ID: <?php echo $dataku["id_penerima"]; ?></div>
						</td>
						<td><?php echo htmlspecialchars($dataku["pend_terakhir"]); ?></td>
						<td><?php echo htmlspecialchars($dataku["penghasilan_ortu"]); ?></td>
						<td><?php echo htmlspecialchars($dataku["kond_rumah"]); ?></td>
						<td><?php echo htmlspecialchars($dataku["jml_tanggungan"]); ?></td>
						<td><?php echo htmlspecialchars($dataku["usia"]); ?></td>
					</tr>
				<?php 
					}
				} else {
				?>
					<tr>
						<td colspan="7">
							<div class="empty-state">
								<i class="fa fa-tags"></i>
								<h3>Belum Ada Data Klasifikasi</h3>
								<p>Belum ada data klasifikasi yang terdaftar. Klik tombol "Tambah Klasifikasi" untuk menambah data baru.</p>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

		<?php if ($total_records > 0) { ?>
		<div class="pagination-container">
			<div class="pagination-info">
				Menampilkan <strong><?php echo $total_records; ?></strong> dari <strong><?php echo $total_records; ?></strong> data
			</div>
			<div style="color: #64748b; font-size: 0.875rem;">
				<i class="fa fa-clock-o"></i>
				Terakhir diperbarui: <?php echo date("d/m/Y H:i"); ?>
			</div>
		</div>
		<?php } ?>
	</div>
</div>

<!-- Footer -->
<?php include "footer.php"; ?>

<script>
// Initialize page
document.addEventListener(\'DOMContentLoaded\', function() {
	// Update total records
	const totalRecords = <?php echo $total_records; ?>;
	document.getElementById(\'totalRecords\').textContent = totalRecords;
	
	// Search functionality
	const searchInput = document.getElementById(\'searchInput\');
	const table = document.getElementById(\'dataTable\');
	const rows = table.getElementsByTagName(\'tbody\')[0].getElementsByTagName(\'tr\');
	
	searchInput.addEventListener(\'input\', function() {
		const searchTerm = this.value.toLowerCase();
		let visibleCount = 0;
		
		for (let i = 0; i < rows.length; i++) {
			const row = rows[i];
			const nameCell = row.cells[1];
			
			if (nameCell) {
				const nameText = nameCell.textContent.toLowerCase();
				
				if (nameText.includes(searchTerm)) {
					row.style.display = \'\';
					visibleCount++;
				} else {
					row.style.display = \'none\';
				}
			}
		}
		
		// Update visible count
		document.getElementById(\'totalRecords\').textContent = visibleCount;
	});
	
	// Add entrance animations
	const elements = document.querySelectorAll(\'fade-in\');
	elements.forEach((el, index) => {
		el.style.opacity = \'0\';
		el.style.transform = \'translateY(20px)\';
		el.style.transition = \'all 0.6s ease-out\';
		
		setTimeout(() => {
			el.style.opacity = \'1\';
			el.style.transform = \'translateY(0)\';
		}, index * 100);
	});
});
</script>

