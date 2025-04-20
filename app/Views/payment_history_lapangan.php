<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Riwayat Pembayaran Lapangan</h4>
            </div>
        </div>

        <div class="col-lg-12">
    <div class="card-box">
        <div class="card-block">
            <h4 class="card-title">Daftar Pembayaran</h4>

                        <!-- Tombol Cetak (Hijau) -->
            <form class="mb-3" action="<?= base_url('Laporan/cetak') ?>" method="POST">
                <div class="row">
                    <div class="col-md-5">
                        <input type="date" class="form-control" name="tanggal_awal" placeholder="Tanggal Awal">
                    </div>
                    <div class="col-md-5">
                        <input type="date" class="form-control" name="tanggal_akhir" placeholder="Tanggal Akhir">
                    </div>
                    <div class="col-md-2 d-grid h-100">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-print"></i> Cetak
                        </button>
                    </div>
                </div>
            </form>

            <!-- Tombol PDF (Merah) -->
            <form class="mb-3" action="<?= base_url('Laporan/pdf') ?>" method="POST">
                <div class="row">
                    <div class="col-md-5">
                        <input type="date" class="form-control" name="tanggal_awal" placeholder="Tanggal Awal">
                    </div>
                    <div class="col-md-5">
                        <input type="date" class="form-control" name="tanggal_akhir" placeholder="Tanggal Akhir">
                    </div>
                    <div class="col-md-2 d-grid h-100">
                        <button class="btn btn-danger" type="submit">
                            <i class="fas fa-file-pdf"></i> PDF
                        </button>
                    </div>
                </div>
            </form>

            <!-- Tombol Excel (Hijau Muda) -->
            <form class="mb-3" action="<?= base_url('Laporan/excel') ?>" method="POST">
                <div class="row">
                    <div class="col-md-5">
                        <input type="date" class="form-control" name="tanggal_awal" placeholder="Tanggal Awal">
                    </div>
                    <div class="col-md-5">
                        <input type="date" class="form-control" name="tanggal_akhir" placeholder="Tanggal Akhir">
                    </div>
                    <div class="col-md-2 d-grid h-100">
                        <button class="btn text-white" type="submit" style="background-color: #28a745;">
                <i class="fas fa-print"></i> Excel
            </button>
                    </div>
                </div>
            </form>




            <!-- Input Pencarian -->
            <input type="text" id="searchInput" onkeyup="searchTable()" class="form-control mb-3" placeholder="Cari di tabel...">


                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0 text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Pengguna</th>
                                    <th>Tanggal</th>
                                    <th>Lapangan</th>
                                    <th>Total Harga</th>
                                    <th>Metode</th>
                                    <th>Bukti Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($bookings)) : ?>
                                    <tr>
                                        <td colspan="6" class="text-muted">Belum ada data pembayaran.</td>
                                    </tr>
                                <?php else : ?>
                                    <?php $no = 1; ?>
                                    <?php foreach ($bookings as $b): ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($b['nama_pengguna'] ?? '-') ?></td>
                                            <td><?= date('d-m-Y', strtotime($b['tanggal'])) ?></td>
                                            <td><?= esc($b['lapangan_nama'] ?? '-') ?></td>
                                            <td>Rp <?= number_format($b['total_harga'], 0, ',', '.') ?></td>
                                            <td>
                                                <?php
                                                    $metode = strtolower($b['metode_pembayaran']);
                                                    switch ($metode) {
                                                        case 'ovo':
                                                            $badgeClass = 'bg-warning';
                                                            break;
                                                        case 'dana':
                                                            $badgeClass = 'bg-primary';
                                                            break;
                                                        case 'bank transfer':
                                                            $badgeClass = 'bg-dark';
                                                            break;
                                                        case 'gopay':
                                                            $badgeClass = 'bg-info';
                                                            break;
                                                        default:
                                                            $badgeClass = 'bg-secondary';
                                                            break;
                                                    }
                                                ?>
                                                <span class="badge <?= $badgeClass ?>"><?= ucfirst($b['metode_pembayaran']) ?></span>
                                            </td>
                                            <td class="text-center">
                                                <?php if (!empty($b['bukti_pembayaran'])): ?>
                                                    <a href="<?= base_url('uploads/bukti/' . $b['bukti_pembayaran']) ?>" class="btn btn-outline-info btn-sm" target="_blank">
                                                        <i class="fas fa-image"></i> Lihat
                                                    </a>
                                                <?php else: ?>
                                                    <span class="text-muted">Belum ada</span>
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
</script>
