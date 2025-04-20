		<div class="pagetitle">
      <h1>Edit Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Edit Pelanggan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pelanggan</h5>

		<form action="<?= base_url('gudang/simpan_pelanggan')?>" method="POST">
			<table>
				<input type="hidden" value="<?=$chelsica->level?>" name="level">
				<tr>
					<td>Username</td>
					<td><input type="text" class="form-control" id="username" name="username"  value="<?=$chelsica->username?>"></td>
				</tr>
				<tr>
					<td>Nama Pelanggan</td>
					<td><input type="text" class="form-control" id="pswd" name="nama_pelanggan" value="<?=$chelsica->nama_pelanggan?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" class="form-control" id="pswd" name="password" value="<?=$chelsica->password?>"></td>
				</tr>
											<tr>
												<td>No Telp</td>
												<td><input type="text" class="form-control" name="no_telp" value="<?= $chelsica->no_telp ?>"></td>
											</tr>
											<tr>
												<td>No KTP</td>
												<td><input type="text" class="form-control" name="no_ktp" value="<?= $chelsica->no_ktp ?>"></td>
											</tr>
											<td></td>
											<td>
												<input type="hidden" value="<?=$chelsica->id_user?>" name="idu">
												<input type="hidden" value="<?=$chelsica->id_pelanggan?>" name="id">
												<button class="btn btn-dark"><i class="fas fa-save"></i>   Edit</button>
												<a href="<?= base_url('gudang/hapus_pelangganuser/' . $chelsica->id_pelanggan) ?>" class="btn btn-danger">
													<i class="fas fa-trash"></i> Hapus
												</a>
											</td>
										</tr>
									</table>
								</form>