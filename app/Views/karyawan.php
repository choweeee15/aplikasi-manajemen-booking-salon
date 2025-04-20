<div class="pagetitle">
      <h1>Input Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
          <li class="breadcrumb-item">Input</li>
          <li class="breadcrumb-item active">Input Karyawan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Karyawan</h5>

<form action="<?= base_url('gudang/inputkaryawan')?>" method="POST">
	<table>
			<td><input type="hidden" value="2" name="level"></td>
<tr>
	<td>Email</td>
	<td><input type="text" class="form-control" name="username"></td>
</tr>
<tr>
	<td>Password</td>
	<td><input type="Password" class="form-control" name="password"></td>
</tr>
<tr>
	<td>Nama Karyawan</td>
	<td><input type="text" class="form-control" name="nama_karyawan"></td>
</tr>
<tr>		 
	<td>Jenis Kelamin</td>
	<td>
				<select class="form-select" name="jenis_kelamin">
					<option>--Jenis Kelamin</option>
					<option>laki-laki</option>
					<option>perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jam Masuk</td>
			<td><input type="time" class="form-control" name="jam_masuk"></td>
		</tr>
							<tr>
								<td>Jam Keluar</td>
								<td><input type="time" class="form-control" name="jam_keluar"></td>
							</tr>
							<tr>
								<td>Gaji</td>
								<td><input type="text" class="form-control" name="gaji"></td>
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