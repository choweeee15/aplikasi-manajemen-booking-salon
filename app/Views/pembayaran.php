	<div class="pagetitle">
      <h1>Bayar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
          <li class="breadcrumb-item">Bayar</li>
          <li class="breadcrumb-item active">Bayar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kasir Kecil</h5>

	<form action="/gudang/simpan_nota" method="POST">
		<table>
			<input type="hidden" class="form-control" name="id_pemesanan" id="id_pemesanan" value="<?= $chelsica->id_pemesanan ?>">
			<tr>
				<td>Nomor Nota</td>
				<td><input type="text" class="form-control" name="nomor_nota" id="nomor_nota" value="<?= $chelsica->id_pemesanan ?><?= $chelsica->id_pelanggan ?><?= $chelsica->id_karyawan ?>" readonly></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" class="form-control" name="harga" id="harga" value="<?= $chelsica->harga * $chelsica->kuantitas?>" readonly></td>
			</tr>
			<tr>
				<td>Bayar</td>
				<td><input type="text" class="form-control"  name="uang_bayar" id="uang_bayar" value="" ></td>
			</tr>
			<tr>
				<td>Kembalian</td>
				<td><input type="text" class="form-control" name="kembalian" id="kembalian" value="" readonly></td>
			</tr>
			<tr>
				<td></td>
				<td>

					<input type="hidden" class="form-control" name="id_kamar" value="<?= $chelsica->id_kamar ?>">
					<input type="hidden" class="form-control" id="nama_tamu" name="nama_tamu" value="<?= $chelsica->nama_tamu ?>">
					<input type="hidden" class="form-control" id="id_pelanggan" name="id_pelanggan" value="<?= $chelsica->id_pelanggan ?>">
					<input type="hidden" class="form-control" id="id_karyawan" name="id_karyawan" value="<?= $chelsica->id_karyawan ?>">
					<input type="hidden" class="form-control" id="checkin" name="checkin" value="<?= $chelsica->cek_in ?>">
					<input type="hidden" class="form-control" id="checkout" name="checkout" value="<?= $chelsica->cek_out ?>">
					<input type="hidden" class="form-control" id="kuantitas" name="kuantitas" value="<?= $chelsica->kuantitas ?>">
					<input type="hidden" class="form-control" name="status" value="2">
					<input type="hidden" class="form-control" name="id_tipe" value="<?= $chelsica->id_tipe ?>">


			<button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="button" class="btn btn-secondary">Kembali</button>
				</td>
			</tr>
		</table>
	</form>
</div>
</div>
<script>
            document.getElementById("uang_bayar").addEventListener("input", function () {
              const harga = parseFloat(document.getElementById("harga").value) || 0;
              const uangBayar = parseFloat(this.value) || 0;
              const kembalian = uangBayar - harga;
              document.getElementById("kembalian").value = kembalian >= 0 ? kembalian : 0;
            });
          </script>