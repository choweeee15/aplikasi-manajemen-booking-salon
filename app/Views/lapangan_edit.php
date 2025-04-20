<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Edit Lapangan</h4>

            <form action="<?= base_url('lapangan/update/' . $lapangan['id']) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label>Nama Lapangan</label>
                    <input type="text" name="nama" class="form-control" value="<?= $lapangan['nama'] ?>" required>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"><?= $lapangan['deskripsi'] ?></textarea>
                </div>

                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" value="<?= $lapangan['lokasi'] ?>">
                </div>

                <div class="form-group">
                    <label>Tipe</label>
                    <select name="tipe" class="form-control" required>
                        <option value="Futsal Field" <?= ($lapangan['tipe'] == 'Futsal Field') ? 'selected' : '' ?>>Futsal Field</option>
                        <option value="Basketball Court" <?= ($lapangan['tipe'] == 'Basketball Court') ? 'selected' : '' ?>>Basketball Court</option>
                        <option value="Badminton Court" <?= ($lapangan['tipe'] == 'Badminton Court') ? 'selected' : '' ?>>Badminton Court</option>
                        <option value="Volleyball Court" <?= ($lapangan['tipe'] == 'Volleyball Court') ? 'selected' : '' ?>>Volleyball Court</option>
                        <option value="Table Tennis" <?= ($lapangan['tipe'] == 'Table Tennis') ? 'selected' : '' ?>>Table Tennis</option>
                        <option value="Baseball Field" <?= ($lapangan['tipe'] == 'Baseball Field') ? 'selected' : '' ?>>Baseball Field</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" value="<?= $lapangan['harga'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Gambar Lapangan</label>
                    <div class="row">
                        <?php foreach ($gambar_lapangan as $gambar): ?>
                            <div class="col-sm-3">
                                <img src="<?= base_url('uploads/lapangan/' . $gambar['file']) ?>" alt="Lapangan Image" width="100">
                                <input type="checkbox" name="delete_images[]" value="<?= $gambar['id'] ?>"> Hapus
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <input type="file" name="gambar[]" class="form-control" multiple>
                    <small class="form-text text-muted">Pilih beberapa gambar (max 5 gambar) untuk diunggah dengan cara select beberapa gambar. Format yang diterima: JPG, PNG, JPEG.</small>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="tersedia" <?= ($lapangan['status'] == 'tersedia') ? 'selected' : '' ?>>Available</option>
                        <option value="tidak tersedia" <?= ($lapangan['status'] == 'tidak tersedia') ? 'selected' : '' ?>>Unavailable</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="<?= base_url('lapangan') ?>" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>