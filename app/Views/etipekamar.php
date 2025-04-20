		<div class="pagetitle">
      <h1>Edit Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Edit Tipe Kamar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tipe Kamar</h5>

		<form action="<?= base_url('gudang/simpan_tipekamar')?>" method="POST">
			<table>
				<tr>
				<td>Tipe Kamar</td>
				<td><input type="text" class="form-control" name="tipe_kamar" value="<?=$chelsica->tipe_kamar?>"></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td><input type="text" class="form-control" name="lokasi" value="<?=$chelsica->lokasi?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" class="form-control" name="harga" value="<?=$chelsica->harga?>"></td>
			</tr>
			<tr>
				<td>Jumlah Orang/Kamar</td>
				<td><input type="text" class="form-control" name="orang" value="<?=$chelsica->orang?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" class="form-control" name="file" value="<?=$chelsica->foto?>"></td>
			</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" value="<?=$chelsica->id_tipe?>" name="id">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<button type="reset" class="btn btn-secondary">Reset</button>
						<button type="button" class="btn btn-secondary">Kembali</button>
					</td>
				</tr>
			</table>
		</form>