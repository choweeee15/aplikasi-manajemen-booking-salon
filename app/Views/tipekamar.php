	<div class="pagetitle">
      <h1>Input Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
          <li class="breadcrumb-item">Input</li>
          <li class="breadcrumb-item active">Input Tipe Kamar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tipe Kamar</h5>

	<form action="/gudang/inputtipekamar" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Tipe Kamar</td>
				<td><input type="text" class="form-control" name="tipe_kamar"></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td><input type="text" class="form-control" name="lokasi"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" class="form-control" name="harga"></td>
			</tr>
			<tr>
				<td>Jumlah Orang/Kamar</td>
				<td><input type="text" class="form-control" name="orang"></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" class="form-control" name="file" accept="img/" required></td>
			</tr>
			<tr>
<input type="hidden" class="form-control" name="fasilitas" value="Wi-Fi, meja kerja, TV, minibar.">
<input type="hidden" class="form-control" name="stok" value="5">
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
</div>
</div>