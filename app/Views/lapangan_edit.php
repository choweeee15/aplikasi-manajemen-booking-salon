<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Edit Service</h4>

            <form action="<?= base_url('lapangan/update/' . $lapangan['id']) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label>Nama Service</label>
                    <input type="text" name="nama" class="form-control" value="<?= $lapangan['nama'] ?>" required>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"><?= $lapangan['deskripsi'] ?></textarea>
                </div>

                <!-- <div class="form-group">
                    <label>Stylist</label>
                    <input type="text" name="lokasi" class="form-control" value="<?= $lapangan['lokasi'] ?>">
                </div> -->

                <div class="form-group">
    <label>Stylist</label>
    <select name="lokasi" class="form-control">
        <?php foreach ($pengguna as $p): ?>
            <option value="<?= $p['nama']; ?>" <?= ($lapangan['lokasi'] == $p['nama']) ? 'selected' : ''; ?>>
                <?= $p['nama']; ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>


                <div class="form-group">
                    <label>Tipe</label>
                    <select name="tipe" class="form-control" required>
                        <option value="Haircut" <?= ($lapangan['tipe'] == 'Haircut') ? 'selected' : '' ?>>Haircut ✂️</option>
                        <option value="Hair coloring" <?= ($lapangan['tipe'] == 'Hair coloring') ? 'selected' : '' ?>>Hair coloring 🎨</option>
                        <option value="Hair styling" <?= ($lapangan['tipe'] == 'Hair styling') ? 'selected' : '' ?>>Hair styling 💇‍♀️</option>
                        <option value="Hair treatment" <?= ($lapangan['tipe'] == 'Hair treatment') ? 'selected' : '' ?>>Hair Treatment 💆‍♀️</option>
                        <option value="Updo Styling" <?= ($lapangan['tipe'] == 'Updo Styling') ? 'selected' : '' ?>>Updo Styling  💁‍♀️</option>
                        <option value="Perming" <?= ($lapangan['tipe'] == 'Perming') ? 'selected' : '' ?>>Perming 🔄</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" value="<?= $lapangan['harga'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Gambar Service</label>
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