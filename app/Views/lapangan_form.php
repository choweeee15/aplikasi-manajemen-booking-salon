<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Add Field</h4>

            <form action="<?= base_url('lapangan/store') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Field Name</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="lokasi" class="form-control">
                </div>

                <div class="form-group">
                    <label>Type</label>
                    <select name="tipe" class="form-control" required>
                        <option value="Futsal Field">Futsal Field</option>
                        <option value="Basketball Court">Basketball Court</option>
                        <option value="Badminton Court">Badminton Court</option>
                        <option value="Volleyball Court">Volleyball Court</option>
                        <option value="Table Tennis">Table Tennis</option>
                        <option value="Baseball Field">Baseball Field</option>
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
                    <label>Field Images</label>
                    <input type="file" name="gambar[]" class="form-control" multiple required>
                    <small class="form-text text-muted">Select multiple images (max 5 images) by selecting multiple files. Accepted formats: JPG, PNG, JPEG.</small>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="<?= base_url('lapangan') ?>" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>