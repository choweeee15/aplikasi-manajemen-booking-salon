<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Pembayaran (PDF)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #444;
            padding: 6px 12px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .total-row {
            background-color: #f9f9f9;
            font-weight: bold;
        }

        .total-amount {
            text-align: right;
            padding-right: 20px;
        }

        .no-data {
            text-align: center;
            font-style: italic;
        }

        .footer {
            text-align: right;
            font-size: 12px;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <h2>Laporan Pembayaran Booking Lapangan</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Pengguna</th>
                <th>Tanggal</th>
                <th>Lapangan</th>
                <th>Total Harga</th>
                <th>Metode Pembayaran</th>
                <th>Bukti Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($bookings)) : ?>
                <tr class="no-data">
                    <td colspan="7">Tidak ada data ditemukan.</td>
                </tr>
            <?php else : ?>
                <?php $no = 1; $totalPendapatan = 0; ?>
                <?php foreach ($bookings as $b): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($b['nama_pengguna'] ?? '-') ?></td>
                        <td><?= date('d-m-Y', strtotime($b['tanggal'])) ?></td>
                        <td><?= esc($b['lapangan_nama'] ?? '-') ?></td>
                        <td>Rp <?= number_format($b['total_harga'], 0, ',', '.') ?></td>
                        <td><?= ucfirst($b['metode_pembayaran']) ?></td>
                        <td><?= !empty($b['bukti_pembayaran']) ? 'Ada' : 'Tidak Ada' ?></td>
                    </tr>
                    <?php $totalPendapatan += $b['total_harga']; ?>
                <?php endforeach ?>
                <tr class="total-row">
                    <td colspan="4" class="total-amount">Total Pendapatan:</td>
                    <td colspan="3">Rp <?= number_format($totalPendapatan, 0, ',', '.') ?></td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>

    <div class="footer">
        <p>Dicetak pada: <?= date('d-m-Y H:i:s') ?></p>
    </div>
</body>
</html>
