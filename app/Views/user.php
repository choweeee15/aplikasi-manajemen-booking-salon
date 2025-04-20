		<div class="pagetitle">
      <h1>Input Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
          <li class="breadcrumb-item">Input</li>
          <li class="breadcrumb-item active">Input User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User</h5>


		<form action="/gudang/inputuser" method="POST">
			<table>
				<tr>
					<td>Email</td>
					<td><input type="text" class="form-control" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" class="form-control" name="password"></td>
				</tr>
				<tr>
					<td>Level</td>
					<td><input type="text" class="form-control" name="level"></td>
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