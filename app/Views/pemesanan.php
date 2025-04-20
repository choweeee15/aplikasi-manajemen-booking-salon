<div class="pagetitle">
	<h1>Input Form</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
			<li class="breadcrumb-item">Input</li>
			<li class="breadcrumb-item active">Pesan</li>
		</ol>
	</nav>
</div><!-- End Page Title -->
<section class="section">
	<div class="row">
		<div class="col-lg-12">

			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Pesan</h5>

					<form action="/gudang/inputpemesanan" method="POST">
						<table>
							<tr>
								<td>Tipe Kamar</td>
								<td>
									<select class="form-control" name="tipe_kamar">

										<option> Pilih Tipe Kamar</option>
										<?php
										foreach ($chelsica as $key => $value) {
											?>
											<option value="<?=$value->id_tipe?>"><?= $value->tipe_kamar?> - <?= $value->lokasi?></option>
											<?php
										}
										?>

									</select>
								</td>
							</tr>
							<tr style="display:none;">
								<td>Id Pelanggan</td>
								<td>
									<input type="text" name="id_pelanggan" value="<?= session()->get('id_user') ?>" />
								</td>
							</tr>
							<tr>
								<td>Jumlah Tamu</td>
								<td>
									<input type="text" class="form-control" name="jumlah_tamu">
								</td>
							</tr>
							<tr>
								<td>Cek In</td>
								<td>
									<input type="datetime-local" class="form-control" name="cekin">
								</td>
							</tr>
							<tr>
								<td>Cek Out</td>
								<td>
									<input type="datetime-local" class="form-control" name="cekout">
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<button type="submit" class="btn btn-primary">Simpan</button>
									<button type="reset" class="btn btn-secondary">Reset</button>
									<button type="button" class="btn btn-secondary">Kembali</button>
								</td>
							</tr>
						</table>
					</form>