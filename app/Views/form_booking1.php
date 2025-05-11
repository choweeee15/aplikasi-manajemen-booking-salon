<div class="container">
    <h2><?= $title ?></h2>
    
    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('message')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <form action="/booking1/bookSalon" method="post">
    <?= csrf_field(); ?>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" required>
    </div>
    <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text" class="form-control" name="telepon" id="telepon" required>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control" name="tanggal" id="tanggal" required>
    </div>
    <div class="form-group">
        <label for="jam">Jam</label>
        <input type="time" class="form-control" name="jam" id="jam" required>
    </div>
    <div class="form-group">
        <label for="layanan">Layanan</label>
        <input type="text" class="form-control" name="layanan" id="layanan" required>
    </div>
    <button type="submit" class="btn btn-primary">Booking</button>
</form>

</div>
