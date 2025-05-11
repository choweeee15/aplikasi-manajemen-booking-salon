<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Data Salon</h4>
            </div>
        </div>

        <div class="card-box">
            <a href="<?= base_url('lapangan/create') ?>" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah Service
            </a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tipe</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($lapangan as $l): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $l['nama'] ?></td>
                                <td><?= $l['tipe'] ?></td>
                                <td>Rp<?= number_format($l['harga'], 0, ',', '.') ?></td>
                                <td><?= ucfirst($l['status']) ?></td>
                                <td>

                                    <?php if (!empty($l['gambar'])): ?>
                                        <?php foreach ($l['gambar'] as $gambar): ?>
                                            <img src="<?= base_url('uploads/lapangan/' . $gambar['file']) ?>" alt="Gambar Lapangan" width="100" />
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p>No Image</p>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('lapangan/edit/' . $l['id']) ?>" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="<?= base_url('lapangan/delete/' . $l['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>