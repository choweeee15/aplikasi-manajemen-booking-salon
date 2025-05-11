<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Riwayat Booking Salon</h4>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card-box">
                <div class="card-block">
                    <h4 class="card-title">Daftar Booking Salon</h4>

                    <input type="text" id="searchInput" onkeyup="searchTable()" class="form-control mb-3" placeholder="Cari di tabel...">

                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Pengguna</th>
                                    <th>Tanggal</th>
                                    <th>Services</th>
                                    <th>Jam</th>
                                    <th>Total Harga</th>
                                    <th>Metode</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Status</th>
                                    <?php if (session()->get('level') == 1 || session()->get('level') == 3 || session()->get('level') == 10) { ?>
                                        <th>Aksi</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($bookings)) : ?>
                                    <tr>
                                        <td colspan="8" class="text-center text-muted">Belum ada riwayat booking.</td>
                                    </tr>
                                <?php else : ?>
                                    <?php $no = 1; ?>
                                    <?php foreach ($bookings as $booking): ?>
                                        <tr>
                                            <td class="text-center"><?= $no++ ?></td>
                                            <td><?= esc($booking['nama_pengguna'] ?? '-') ?></td>
                                            <td><?= esc($booking['tanggal']) ?></td>
                                            <td><?= esc($booking['lapangan_nama'] ?? '-') ?></td>
                                           <!--  <td>
                                                <?php foreach ($booking['waktu'] as $jam): ?>
                                                    <div><?= esc($jam) ?></div>
                                                <?php endforeach; ?>
                                            </td> -->
                                            <td>
                                                <?php foreach ($booking['waktu'] as $jam): ?>
                                                    <?php $pecah = explode('-', $jam); ?>
                                                    <div><?= esc(trim($pecah[0])) ?></div>
                                                <?php endforeach; ?>
                                            </td>
                                            <td>Rp <?= number_format($booking['total_harga'], 0, ',', '.') ?></td>
                                            <td><?= esc($booking['metode_pembayaran'] ?? '-') ?></td>
                                            <td class="text-center">
                                                <?php if (!empty($booking['bukti_pembayaran'])): ?>
                                                    <a href="<?= base_url('uploads/bukti/' . $booking['bukti_pembayaran']) ?>" class="btn btn-outline-info btn-sm" target="_blank">
                                                        <i class="fas fa-image"></i> Lihat
                                                    </a>
                                                <?php else: ?>
                                                    <span class="text-muted">Belum ada</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php
                                                $badgeClass = 'secondary';
                                                if ($booking['status'] == 'Menunggu Konfirmasi') $badgeClass = 'warning';
                                                elseif ($booking['status'] == 'Terkonfirmasi') $badgeClass = 'info';
                                                elseif ($booking['status'] == 'Selesai') $badgeClass = 'success';
                                                elseif ($booking['status'] == 'Batal') $badgeClass = 'danger';
                                                ?>
                                                <span class="badge bg-<?= $badgeClass ?>"><?= ucfirst($booking['status']) ?></span>
                                            </td>
                                            <?php if (session()->get('level') == 1 || session()->get('level') == 3 || session()->get('level') == 10) { ?>
                                                <td>
                                                    <form action="<?= base_url('booking/update_status/' . $booking['id']) ?>" method="post">
                                                        <?= csrf_field() ?>
                                                        <select name="status" class="form-control" onchange="this.form.submit()">
                                                            <option value="Menunggu Konfirmasi" <?= $booking['status'] == 'Menunggu Konfirmasi' ? 'selected' : '' ?>>Menunggu Konfirmasi</option>
                                                            <option value="Terkonfirmasi" <?= $booking['status'] == 'Terkonfirmasi' ? 'selected' : '' ?>>Terkonfirmasi</option>
                                                            <option value="Selesai" <?= $booking['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
                                                            <option value="Batal" <?= $booking['status'] == 'Batal' ? 'selected' : '' ?>>Batal</option>
                                                        </select>
                                                    </form>
                                                </td>
                                            <?php } ?>
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