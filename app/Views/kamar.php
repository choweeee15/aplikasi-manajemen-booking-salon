	<div class="pagetitle">
      <h1>Input Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
          <li class="breadcrumb-item">Input</li>
          <li class="breadcrumb-item active">Input Kamar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kamar</h5>

	<form action="/gudang/inputkamar" method="POST">
		<table>
			<tr>
				<td>Nomor Kamar</td>
				<td><input type="text" class="form-control" name="nomor_kamar"></td>
			</tr>
			<tr>
				<td>Tipe Kamar</td>
				<td><select class="form-control" name="id_tipe">

			<option> Pilih Tipe Kamar</option>
			<?php
			foreach ($chelsica as $key => $value) {
        ?>
				<option value="<?=$value->id_tipe?>"><?= $value->tipe_kamar?> - <?= $value->lokasi?></option>
			<?php
      }
      ?>

		</select></td>
			</tr>
			<tr>
			
				<td><input type="hidden" class="form-control" name="status" value="tersedia"></td>
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