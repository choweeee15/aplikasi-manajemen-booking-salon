<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Data Pengguna</h4>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card-box">
                <div class="card-block">
                    <h4 class="card-title">Daftar Pengguna</h4>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <!-- <a href="<?= base_url('home/tambahPengguna'); ?>" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i> Tambah Pengguna
                        </a> -->
                        <!-- Tombol Tambah Pengguna -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahPenggunaModal">
                            <i class="fas fa-user-plus"></i> Tambah Pengguna
                        </button>

                        <!-- Modal Tambah Pengguna -->
<div class="modal fade" id="tambahPenggunaModal" tabindex="-1" aria-labelledby="tambahPenggunaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url('home/simpanPengguna'); ?>" method="POST" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPenggunaLabel">Tambah Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control border" name="nama">
</div>
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control border" name="email">
</div>
<div class="mb-3">
    <label class="form-label">Nomor HP</label>
    <input type="text" class="form-control border" name="no_hp">
</div>
<div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea class="form-control border" name="alamat"></textarea>
</div>
<div class="mb-3">
    <label class="form-label">Level</label>
    <select class="form-control border" name="level">
        <option value="0">Guest</option>
        <option value="1">Admin</option>
        <option value="2">User</option>
        <option value="3">Super Admin</option>
        <option value="4">Terblokir</option>
        <option value="10">Super Admin</option>
    </select>
</div>
<div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control border" name="password">
</div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>

                        <div class="btn-group">
                            <a href="<?= base_url('home/pengguna?filter=all'); ?>" class="btn btn-outline-info">
                                <i class="fas fa-eye"></i> Tampilkan Semua
                            </a>
                            <a href="<?= base_url('home/pengguna?filter=deleted'); ?>" class="btn btn-outline-warning">
                                <i class="fas fa-trash-restore"></i> Tampilkan Terhapus
                            </a>
                        </div>

                        <?php if (session('level') == 10 && isset($_GET['filter']) && $_GET['filter'] == 'deleted') : ?>
                            <a href="<?= base_url('home/restoreSemua'); ?>" class="btn btn-success">
                                <i class="fas fa-undo"></i> Restore Semua
                            </a>
                        <?php endif; ?>
                    </div>

                    <input type="text" id="searchInput" onkeyup="searchTable()" class="form-control mb-3" placeholder="Cari di tabel...">

                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Nomor Handphone</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($pengguna)) : ?>
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">Tidak ada data pengguna yang terhapus sementara</td>
                                    </tr>
                                <?php else : ?>
                                    <?php $ms = 1; // Menambahkan inisialisasi nomor 
                                    ?>
                                    <?php foreach ($pengguna as $p) : ?>
                                        <tr class="
                    <?php
                                        switch ($p->level) {
                                            case 0:
                                                echo 'table-secondary';
                                                break;
                                            case 1:
                                                echo 'table-danger';
                                                break;
                                            case 2:
                                                echo 'table-primary';
                                                break;
                                            case 10:
                                                echo 'table-info';
                                                break;
                                        }
                    ?>
                    ">
                                            <td><?= $ms++ ?></td>
                                            <td><?= $p->id_user; ?></td>
                                            <td><?= $p->nama; ?></td>
                                            <td><?= $p->no_hp; ?></td>
                                            <td>
                                                <?php
                                                switch ($p->level) {
                                                    case 0:
                                                        echo '<span class="badge bg-secondary">Guest</span>';
                                                        break;
                                                    case 1:
                                                        echo '<span class="badge bg-danger">Admin</span>';
                                                        break;
                                                    case 2:
                                                        echo '<span class="badge bg-primary">User</span>';
                                                        break;
                                                    case 3:
                                                        echo '<span class="badge bg-info">Super Admin</span>';
                                                        break;
                                                    case 4:
                                                        echo '<span class="badge bg-secondary">Terblokir</span>';
                                                        break;
                                                    case 10:
                                                        echo '<span class="badge bg-info">Super Admin</span>';
                                                        break;
                                                }
                                                ?>


                                            </td>
                                            <td>
                                                <?php if ($p->soft_delete == 0) : ?>
                                                    <?php if (in_array(session()->get('level'), [3, 10])): ?>
                                                        <a href="<?= base_url('AppealAdminController/blockPengguna/' . $p->id_user); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin memblokir pengguna ini?')">
                                                            <i class="fas fa-ban"></i> Blokir
                                                        </a>
                                                    <?php endif; ?>
                                                    <button class="btn btn-info btn-sm" onclick="viewData(<?= htmlspecialchars(json_encode($p), ENT_QUOTES, 'UTF-8') ?>)">
                                                        <i class="fas fa-info-circle"></i> Info
                                                    </button>
                                                    <a href="<?= base_url('home/editPengguna/' . $p->id_user); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                    <!-- Tombol Edit Pengguna -->

                                                    <a href="<?= base_url('home/hapusPengguna/' . $p->id_user); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pengguna ini?')"><i class="fas fa-trash-alt"></i> Hapus</a>
                                                <?php else : ?>
                                                    <a href="<?= base_url('home/restorePengguna/' . $p->id_user); ?>" class="btn btn-success btn-sm"><i class="fas fa-undo"></i> Restore</a>
                                                    <a href="<?= base_url('home/hapusPenggunaPermanen/' . $p->id_user); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus Permanen</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for User Details -->
    <div class="modal fade" id="userDetailModal" tabindex="-1" aria-labelledby="userDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userDetailModalLabel">Detail Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>ID:</strong> <span id="detailIdUser"></span></p>
                    <p><strong>Nama:</strong> <span id="detailNama"></span></p>
                    <p><strong>Email:</strong> <span id="detailEmail"></span></p>
                    <p><strong>Nomor Handphone:</strong> <span id="detailNoHP"></span></p>
                    <p><strong>Alamat:</strong> <span id="detailAlamat"></span></p>
                    <p><strong>Level:</strong> <span id="detailLevel"></span></p>
                    <p><strong>Status:</strong> <span id="detailStatus"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function searchTable() {
            let input = document.getElementById("searchInput");
            let filter = input.value.toLowerCase();
            let table = document.querySelector("table");
            let tr = table.getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) {
                tr[i].style.display = "none";
                let td = tr[i].getElementsByTagName("td");
                for (let j = 0; j < td.length; j++) {
                    if (td[j]) {
                        let txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toLowerCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                            break;
                        }
                    }
                }
            }
        }


        function viewData(pengguna) {
            document.getElementById("detailIdUser").innerText = pengguna.id_user;
            document.getElementById("detailNama").innerText = pengguna.nama;
            document.getElementById("detailEmail").innerText = pengguna.email;
            document.getElementById("detailNoHP").innerText = pengguna.no_hp;
            document.getElementById("detailAlamat").innerText = pengguna.alamat;

            // Tampilkan level langsung dari database tanpa switch
            document.getElementById("detailLevel").innerText = pengguna.level;

            // Cek status penghapusan
            let statusText = pengguna.soft_delete == 0 ? 'Active' : 'Deleted';
            document.getElementById("detailStatus").innerText = statusText;

            // Show modal
            var myModal = new bootstrap.Modal(document.getElementById("userDetailModal"));
            myModal.show();
        }
    </script>


</div>