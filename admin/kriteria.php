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
				<i class="fa fa-bar-chart"></i>
				Data Kriteria
			</h2>
			<p style="margin: 0; color: #6b7280;">Kelola kriteria penilaian untuk sistem pendukung keputusan</p>
		</div>
	</div>

	<!-- Modern Table Container -->
	<div class="modern-table-container fade-in">
		<div class="modern-table-header">
			<h3 class="modern-table-title">
				<i class="fa fa-bar-chart"></i>
				Daftar Kriteria Penilaian
			</h3>
			<a href="kriteria_tambah.php" class="modern-btn">
				<i class="fa fa-plus"></i>
				Tambah Kriteria
			</a>
		</div>

		<!-- Table Controls -->
		<div class="table-controls">
			<div class="search-box">
				<i class="fa fa-search"></i>
				<input type="text" placeholder="Cari nama kriteria..." id="searchInput">
			</div>
			<div style="color: #64748b; font-size: 0.875rem;">
				<i class="fa fa-info-circle"></i>
				Total: <span id="totalRecords">0</span> kriteria
			</div>
		</div>

		<table class="modern-table" id="dataTable">
			<thead>
				<tr>
					<th style="width: 80px;">No</th>
					<th>Nama Kriteria</th>
					<th style="width: 150px;">Atribut</th>
					<th style="width: 120px;">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$nomor = 0;
				$hasil = mysqli_query($konek, "select * from kriteria ORDER BY namakriteria ASC");
				$total_records = mysqli_num_rows($hasil);
				
				if ($total_records > 0) {
					while ($dataku = mysqli_fetch_array($hasil)) {
						$nomor++;
				?>
					<tr>
						<td><?php echo $nomor; ?></td>
						<td>
							<div style="display: flex; align-items: center; gap: 0.75rem;">
								<div style="width: 40px; height: 40px; background: linear-gradient(135deg, #3b82f6, #1d4ed8); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; font-size: 0.875rem;">
									<?php echo strtoupper(substr($dataku['namakriteria'], 0, 1)); ?>
								</div>
								<div>
									<div style="font-weight: 600; color: #1e293b;"><?php echo htmlspecialchars($dataku['namakriteria']); ?></div>
									<div style="font-size: 0.75rem; color: #64748b;">ID: <?php echo $dataku['id_kriteria']; ?></div>
								</div>
							</div>
						</td>
						<td>
							<?php 
							$atribut = $dataku['atribut'];
							$atribut_class = '';
							$atribut_icon = '';
							
							if (strtolower($atribut) == 'benefit') {
								$atribut_class = 'background: rgba(16, 185, 129, 0.1); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.2);';
								$atribut_icon = 'fa-arrow-up';
							} else {
								$atribut_class = 'background: rgba(239, 68, 68, 0.1); color: #ef4444; border: 1px solid rgba(239, 68, 68, 0.2);';
								$atribut_icon = 'fa-arrow-down';
							}
							?>
							<span style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.375rem 0.75rem; border-radius: 0.375rem; font-size: 0.75rem; font-weight: 600; <?php echo $atribut_class; ?>">
								<i class="fa <?php echo $atribut_icon; ?>"></i>
								<?php echo ucfirst($atribut); ?>
							</span>
						</td>
						<td>
							<div class="action-buttons">
								<a href="kriteria_edit.php?id_kriteria=<?php echo $dataku['id_kriteria']; ?>" 
								   class="action-btn edit" 
								   title="Edit Kriteria">
									<i class="fa fa-edit"></i>
								</a>
								<a href="kriteria_hapus.php?id_kriteria=<?php echo $dataku['id_kriteria']; ?>" 
								   class="action-btn delete" 
								   title="Hapus Kriteria"
								   onclick="return confirm('Apakah Anda yakin ingin menghapus kriteria ini?')">
									<i class="fa fa-trash"></i>
								</a>
							</div>
						</td>
					</tr>
				<?php 
					}
				} else {
				?>
					<tr>
						<td colspan="4">
							<div class="empty-state">
								<i class="fa fa-bar-chart"></i>
								<h3>Belum Ada Kriteria</h3>
								<p>Belum ada kriteria yang terdaftar. Klik tombol "Tambah Kriteria" untuk menambah kriteria baru.</p>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

		<?php if ($total_records > 0) { ?>
		<div class="pagination-container">
			<div class="pagination-info">
				Menampilkan <strong><?php echo $total_records; ?></strong> dari <strong><?php echo $total_records; ?></strong> kriteria
			</div>
			<div style="color: #64748b; font-size: 0.875rem;">
				<i class="fa fa-clock-o"></i>
				Terakhir diperbarui: <?php echo date('d/m/Y H:i'); ?>
			</div>
		</div>
		<?php } ?>
	</div>
</div>

<!-- Footer -->
<?php include "footer.php"; ?>

<script>
// Initialize page
document.addEventListener('DOMContentLoaded', function() {
	// Update total records
	const totalRecords = <?php echo $total_records; ?>;
	document.getElementById('totalRecords').textContent = totalRecords;
	
	// Search functionality
	const searchInput = document.getElementById('searchInput');
	const table = document.getElementById('dataTable');
	const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
	
	searchInput.addEventListener('input', function() {
		const searchTerm = this.value.toLowerCase();
		let visibleCount = 0;
		
		for (let i = 0; i < rows.length; i++) {
			const row = rows[i];
			const nameCell = row.cells[1];
			const atributCell = row.cells[2];
			
			if (nameCell && atributCell) {
				const nameText = nameCell.textContent.toLowerCase();
				const atributText = atributCell.textContent.toLowerCase();
				
				if (nameText.includes(searchTerm) || atributText.includes(searchTerm)) {
					row.style.display = '';
					visibleCount++;
				} else {
					row.style.display = 'none';
				}
			}
		}
		
		// Update visible count
		document.getElementById('totalRecords').textContent = visibleCount;
	});
	
	// Add entrance animations
	const elements = document.querySelectorAll('.fade-in');
	elements.forEach((el, index) => {
		el.style.opacity = '0';
		el.style.transform = 'translateY(20px)';
		el.style.transition = 'all 0.6s ease-out';
		
		setTimeout(() => {
			el.style.opacity = '1';
			el.style.transform = 'translateY(0)';
		}, index * 100);
	});
});
</script>

