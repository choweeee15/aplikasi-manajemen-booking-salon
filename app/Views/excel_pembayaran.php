<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Pengguna</th>
            <th>Tanggal</th>
            <th>Lapangan</th>
            <th>Total Harga</th>
            <th>Metode</th>
            <th>Bukti</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($data)) : ?>
            <tr><td colspan="7">Tidak ada data</td></tr>
        <?php else: $no=1; foreach ($data as $b): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $b['nama_pengguna'] ?></td>
                <td><?= date('d-m-Y', strtotime($b['tanggal'])) ?></td>
                <td><?= $b['lapangan_nama'] ?></td>
                <td>Rp <?= number_format($b['total_harga'], 0, ',', '.') ?></td>
                <td><?= ucfirst($b['metode_pembayaran']) ?></td>
                <td><?= !empty($b['bukti_pembayaran']) ? 'Ada' : 'Belum Ada' ?></td>
            </tr>
        <?php endforeach; endif; ?>
    </tbody>
</table>
