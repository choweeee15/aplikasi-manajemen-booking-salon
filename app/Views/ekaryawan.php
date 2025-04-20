		<div class="pagetitle">
      <h1>Edit Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Edit Karyawan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Karyawan</h5>

		<form action="<?= base_url('gudang/simpan_karyawan')?>" method="POST">
			<table>
				<input type="hidden" value="<?=$chelsica->level?>" name="level">
				<tr>
					<td>Username</td>
					<td><input type="text" class="form-control" id="username" name="username"  value="<?=$chelsica->username?>"></td>
				</tr>
				<tr>
					<td>Nama Karyawan</td>
					<td><input type="text" class="form-control" id="pswd" name="namakaryawan" value="<?=$chelsica->nama_karyawan?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" class="form-control" id="pswd" name="password" value="<?=$chelsica->password?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<select class="form-select" name="jenis_kelamin">
							<option value="">---Jenis Kelamin---</option>
							<option value="laki-laki" <?= ($chelsica->jenis_kelamin == 'Laki-laki') ? 'selected' : '' ?>>Laki-Laki</option>
							<option value="perempuan" <?= ($chelsica->jenis_kelamin == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
						</select>
					</td>
				</tr>
						<tr>
							<td>Jam Masuk</td>
							<td><input type="time" class="form-control" id="pswd"name="jam_masuk" value="<?= $chelsica->jam_masuk ?>"></td>
						</tr>
						<tr>
							<td>Jam Keluar</td>
							<td><input type="time" class="form-control" name="jam_keluar"  value="<?= $chelsica->jam_keluar ?>"></td>
						</tr>
											<tr>
												<td>Gaji</td>
												<td><input type="text" class="form-control" name="gaji" value="<?= $chelsica->gaji ?>"></td>
											</tr>
											<td></td>
											<td>
												<input type="hidden" value="<?=$chelsica->id_user?>" name="idu">
												<input type="hidden" value="<?=$chelsica->id_karyawan?>" name="id">
												<button class="btn btn-dark"><i class="fas fa-save"></i>   Edit</button>
												<a href="<?= base_url('gudang/hapus_karyawanuser/' . $chelsica->id_karyawan) ?>" class="btn btn-danger">
													<i class="fas fa-trash"></i> Hapus
												</a>
											</td>
										</tr>
									</table>
								</form>