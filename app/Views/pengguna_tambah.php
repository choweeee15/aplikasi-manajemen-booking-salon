<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Tambah Pengguna</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="card-title">Tambah Pengguna Information</h4>
                    <form action="<?= base_url('home/simpanPengguna'); ?>" method="POST">
    <div class="form-group row">
        <label class="col-form-label col-md-2">Nama</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="nama" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-2">Email</label>
        <div class="col-md-10">
            <input type="email" class="form-control" name="email" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-2">Password</label>
        <div class="col-md-10">
            <input type="password" class="form-control" name="password" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-2">Nomor Handphone</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="no_hp" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-2">Level</label>
        <div class="col-md-10">
            <select class="form-control" name="level" required>
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
        </div>
    </div>
    
<div class="form-group row">
    <label class="col-form-label col-md-2">Alamat</label>
    <div class="col-md-10">
        <input type="text" class="form-control" name="alamat" required>
    </div>
</div>

    <div class="form-group row">
        <div class="col-md-10 offset-md-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
