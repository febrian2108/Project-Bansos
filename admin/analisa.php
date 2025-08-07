<?php include "head.php"; ?>
<!-- Link Menu -->
<?php include "menu.php"; ?>

<div class="container-fluid">
	<!-- Page Header -->
	<div class="card mb-4 fade-in">
		<div class="card-header">
			<h2 class="card-title">
				<i class="fa fa-line-chart"></i>
				Analisa Penerimaan Bantuan
			</h2>
			<p style="margin: 0; color: #6b7280;">Lakukan analisis untuk menentukan calon penerima bantuan yang layak</p>
		</div>
	</div>

	<!-- Modern Form Container -->
	<div class="modern-table-container fade-in">
		<div class="modern-table-header">
			<h3 class="modern-table-title">
				<i class="fa fa-pencil"></i>
				Form Analisa
			</h3>
		</div>

		<form class="form-horizontal" action="analisa_hasil.php" method="post" role="form" style="padding: 2rem;">
			<div class="form-group" style="margin-bottom: 1.5rem;">
				<label class="col-sm-3 control-label" style="font-weight: 600; color: #334155; margin-bottom: 0.5rem; display: block;">C1. Pendidikan Terakhir:</label>
				<div class="col-sm-8">
					<select name=\'bobot_pend_terakhir\' class="form-control" style="width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 0.5rem; font-size: 1rem;">
						<option value="10">Sangat Rendah (10)</option>
						<option value="20">Rendah (20)</option>
						<option value="30">Cukup (30)</option>
						<option value="40">Tinggi (40)</option>
						<option value="50">Sangat Tinggi (50)</option>
					</select>
				</div>
			</div>

			<div class="form-group" style="margin-bottom: 1.5rem;">
				<label class="col-sm-3 control-label" style="font-weight: 600; color: #334155; margin-bottom: 0.5rem; display: block;">C2. Penghasilan:</label>
				<div class="col-sm-8">
					<select name=\'bobot_penghasilan_ortu\' class="form-control" style="width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 0.5rem; font-size: 1rem;">
						<option value="10">Sangat Rendah (10)</option>
						<option value="20">Rendah (20)</option>
						<option value="30">Cukup (30)</option>
						<option value="40">Tinggi (40)</option>
						<option value="50">Sangat Tinggi (50)</option>
					</select>
				</div>
			</div>

			<div class="form-group" style="margin-bottom: 1.5rem;">
				<label class="col-sm-3 control-label" style="font-weight: 600; color: #334155; margin-bottom: 0.5rem; display: block;">C3. Kondisi Rumah:</label>
				<div class="col-sm-8">
					<select name=\'bobot_kond_rumah\' class="form-control" style="width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 0.5rem; font-size: 1rem;">
						<option value="10">Sangat Rendah (10)</option>
						<option value="20">Rendah (20)</option>
						<option value="30">Cukup (30)</option>
						<option value="40">Tinggi (40)</option>
						<option value="50">Sangat Tinggi (50)</option>
					</select>
				</div>
			</div>

			<div class="form-group" style="margin-bottom: 1.5rem;">
				<label class="col-sm-3 control-label" style="font-weight: 600; color: #334155; margin-bottom: 0.5rem; display: block;">C4. Jumlah Tanggungan:</label>
				<div class="col-sm-8">
					<select name=\'bobot_tanggungan\' class="form-control" style="width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 0.5rem; font-size: 1rem;">
						<option value="10">Sangat Rendah (10)</option>
						<option value="20">Rendah (20)</option>
						<option value="30">Cukup (30)</option>
						<option value="40">Tinggi (40)</option>
						<option value="50">Sangat Tinggi (50)</option>
					</select>
				</div>
			</div>

			<div class="form-group" style="margin-bottom: 1.5rem;">
				<label class="col-sm-3 control-label" style="font-weight: 600; color: #334155; margin-bottom: 0.5rem; display: block;">C5. Usia:</label>
				<div class="col-sm-8">
					<select name=\'bobot_usia\' class="form-control" style="width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 0.5rem; font-size: 1rem;">
						<option value="10">Sangat Rendah (10)</option>
						<option value="20">Rendah (20)</option>
						<option value="30">Cukup (30)</option>
						<option value="40">Tinggi (40)</option>
						<option value="50">Sangat Tinggi (50)</option>
					</select>
				</div>
			</div>

			<div class="form-action" style="display: flex; justify-content: flex-end; gap: 1rem; padding-top: 1rem; border-top: 1px solid #e2e8f0;">
				<input type="submit" name="simpan" value="Proses" class="modern-btn">
				<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="modern-btn btn-danger">
			</div>
		</form>
	</div>
</div>

<!-- Footer -->
<?php include "footer.php"; ?>

