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
				<i class="fa fa-users"></i>
				Data Calon Penerima
			</h2>
			<p style="margin: 0; color: #6b7280;">Kelola data calon penerima bantuan sosial</p>
		</div>
	</div>

	<!-- Modern Table Container -->
	<div class="modern-table-container fade-in">
		<div class="modern-table-header">
			<h3 class="modern-table-title">
				<i class="fa fa-users"></i>
				Daftar Calon Penerima
			</h3>
			<a href="calon_penerima_tambah.php" class="modern-btn">
				<i class="fa fa-plus"></i>
				Tambah Calon Penerima
			</a>
		</div>

		<!-- Table Controls -->
		<div class="table-controls">
			<div class="search-box">
				<i class="fa fa-search"></i>
				<input type="text" placeholder="Cari nama atau asal..." id="searchInput">
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
					<th>Nama Calon Penerima</th>
					<th>Asal</th>
					<th style="width: 120px;">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$nomor = 0;
				$hasil = mysqli_query($konek, "select * from penerima ORDER BY nama_penerima ASC");
				$total_records = mysqli_num_rows($hasil);

				if ($total_records > 0) {
					while ($dataku = mysqli_fetch_assoc($hasil)) {
						$nomor++;
				?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td>
								<div style="display: flex; align-items: center; gap: 0.75rem;">
									<div style="width: 40px; height: 40px; background: linear-gradient(135deg, #10b981, #34d399); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; font-size: 0.875rem;">
										<?php echo strtoupper(substr($dataku['nama_penerima'], 0, 1)); ?>
									</div>
									<div>
										<div style="font-weight: 600; color: #1e293b;"><?php echo htmlspecialchars($dataku['nama_penerima']); ?></div>
										<div style="font-size: 0.75rem; color: #64748b;">ID: <?php echo $dataku['id_penerima']; ?></div>
									</div>
								</div>
							</td>
							<td>
								<div style="display: flex; align-items: center; gap: 0.5rem;">
									<i class="fa fa-map-marker" style="color: #64748b;"></i>
									<?php echo htmlspecialchars($dataku['asal']); ?>
								</div>
							</td>
							<td>
								<div class="action-buttons">
									<a href="calon_penerima_edit.php?id_penerima=<?php echo $dataku['id_penerima']; ?>"
										class="action-btn edit"
										title="Edit Data">
										<i class="fa fa-edit"></i>
									</a>
									<a href="calon_penerima_hapus.php?id_penerima=<?php echo $dataku['id_penerima']; ?>"
										class="action-btn delete"
										title="Hapus Data"
										onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
								<i class="fa fa-users"></i>
								<h3>Belum Ada Data</h3>
								<p>Belum ada calon penerima yang terdaftar. Klik tombol "Tambah Calon Penerima" untuk menambah data baru.</p>
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
				const asalCell = row.cells[2];

				if (nameCell && asalCell) {
					const nameText = nameCell.textContent.toLowerCase();
					const asalText = asalCell.textContent.toLowerCase();

					if (nameText.includes(searchTerm) || asalText.includes(searchTerm)) {
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

	// Confirm delete
	function confirmDelete(name) {
		return confirm(`Apakah Anda yakin ingin menghapus data "${name}"?\n\nTindakan ini tidak dapat dibatalkan.`);
	}
</script>