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
				<i class="fa fa-bookmark"></i>
				Data Nilai Kriteria
			</h2>
			<p style="margin: 0; color: #6b7280;">Kelola nilai kriteria untuk setiap himpunan</p>
		</div>
	</div>

	<!-- Modern Table Container -->
	<div class="modern-table-container fade-in">
		<div class="modern-table-header">
			<h3 class="modern-table-title">
				<i class="fa fa-bookmark"></i>
				Daftar Nilai Kriteria
			</h3>
			<a href="himpunan_tambah.php" class="modern-btn">
				<i class="fa fa-plus"></i>
				Tambah Nilai Kriteria
			</a>
		</div>

		<!-- Table Controls -->
		<div class="table-controls">
			<div class="search-box">
				<i class="fa fa-search"></i>
				<input type="text" placeholder="Cari nama kriteria atau himpunan..." id="searchInput">
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
					<th>Nama Kriteria</th>
					<th>Nama Himpunan</th>
					<th style="width: 100px;">Nilai</th>
					<th>Keterangan</th>
					<th style="width: 120px;">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$nomor = 0;
				$hasil = mysqli_query($konek, "SELECT * FROM himpunan, kriteria where himpunan.id_kriteria=kriteria.id_kriteria order by himpunan.id_himpunan asc");
				$total_records = mysqli_num_rows($hasil);

				if ($total_records > 0) {
					while ($dataku = mysqli_fetch_array($hasil)) {
						$nomor++;
				?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td>
								<div style="font-weight: 600; color: #1e293b;"><?php echo htmlspecialchars($dataku["namakriteria"]); ?></div>
								<div style="font-size: 0.75rem; color: #64748b;">ID: <?php echo $dataku["id_kriteria"]; ?></div>
							</td>
							<td><?php echo htmlspecialchars($dataku["namahimpunan"]); ?></td>
							<td>
								<span style="display: inline-block; padding: 0.3em 0.6em; border-radius: 0.3em; background-color: #e0f2fe; color: #0284c7; font-weight: 600;">
									<?php echo htmlspecialchars($dataku["nilai"]); ?>
								</span>
							</td>
							<td><?php echo htmlspecialchars($dataku["keterangan"]); ?></td>
							<td>
								<div class="action-buttons">
									<a href="himpunan_edit.php?id_himpunan=<?php echo $dataku["id_himpunan"]; ?>"
										class="action-btn edit"
										title="Edit Data">
										<i class="fa fa-edit"></i>
									</a>
									<a href="himpunan_hapus.php?id_himpunan=<?php echo $dataku["id_himpunan"]; ?>"
										class="action-btn delete"
										title="Hapus Data"
										onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
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
						<td colspan="6">
							<div class="empty-state">
								<i class="fa fa-bookmark"></i>
								<h3>Belum Ada Data Nilai Kriteria</h3>
								<p>Belum ada nilai kriteria yang terdaftar. Klik tombol "Tambah Nilai Kriteria" untuk menambah data baru.</p>
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
			const totalRecords = <?php echo $total_records; ?>; document.getElementById(\'totalRecords\').textContent = totalRecords;

				// Search functionality
				const searchInput = document.getElementById(\'searchInput\');
						const table = document.getElementById(\'dataTable\');
								const rows = table.getElementsByTagName(\'tbody\')[0].getElementsByTagName(\'tr\');

									searchInput.addEventListener(\'input\', function() {
										const searchTerm = this.value.toLowerCase();
										let visibleCount = 0;

										for (let i = 0; i < rows.length; i++) {
											const row = rows[i];
											const kriteriaCell = row.cells[1];
											const himpunanCell = row.cells[2];

											if (kriteriaCell && himpunanCell) {
												const kriteriaText = kriteriaCell.textContent.toLowerCase();
												const himpunanText = himpunanCell.textContent.toLowerCase();

												if (kriteriaText.includes(searchTerm) || himpunanText.includes(searchTerm)) {
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