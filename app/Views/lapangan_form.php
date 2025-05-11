<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Add Service</h4>

            <form action="<?= base_url('lapangan/store') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Service Name</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Stylist</label>
                    <select name="lokasi" class="form-control" required>
                        <?php foreach ($pengguna as $user) : ?>
                            <option value="<?= $user['nama']; ?>"><?= $user['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>


                <div class="form-group">
                    <label>Type</label>
                    <select name="tipe" class="form-control" required>
                        <option value="Haircut">Haircut ✂️</option>
                        <option value="Hair coloring">Hair coloring 🎨</option>
                        <option value="Hair styling">Hair styling 💇‍♀️</option>
                        <option value="Hair treatment">Hair treatment 💆‍♀️</option>
                        <option value="Updo Styling">Updo Styling 💁‍♀️</option>
                        <option value="Perming">Perming 🔄</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="tersedia">Available</option>
                        <option value="tidak tersedia">Unavailable</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Service Images</label>
                    <input type="file" name="gambar[]" class="form-control" multiple required>
                    <small class="form-text text-muted">Select multiple images (max 5 images) by selecting multiple files. Accepted formats: JPG, PNG, JPEG.</small>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="<?= base_url('lapangan') ?>" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>