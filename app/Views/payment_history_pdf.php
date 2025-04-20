<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Riwayat Pembayaran</title>
    <style>
        /* Style untuk tampilan PDF */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 100px;
            height: auto;
        }
        .header h1 {
            font-size: 24px;
            margin: 10px 0 0;
        }
        .info-laporan {
            margin-bottom: 20px;
            text-align: left;
        }
        .info-laporan p {
            margin: 5px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
            font-size: 14px;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            text-align: center;
        }
        td a {
            color: #007bff;
            text-decoration: none;
        }
        td a:hover {
            text-decoration: underline;
        }
        .total-section {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="header">
    <h1>Laporan Riwayat Pembayaran</h1>
</div>


    <!-- Informasi Laporan Keuangan -->
    <div class="info-laporan">
        <p><strong>Tanggal Cetak:</strong> <?= date('d-m-Y') ?></p>
    </div>

    <!-- Tabel Riwayat Pembayaran -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Lokasi Parkir</th>
                <th>Total Tagihan</th>
                <th>Metode Pembayaran</th>
                <th>Status</th>
                <th>Bukti Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($reservations as $reservation): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($reservation['lokasi'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td>Rp<?= number_format($reservation['total_tagihan'], 0, ',', '.') ?></td>
                    <td><?= ucfirst(htmlspecialchars($reservation['metode_pembayaran'], ENT_QUOTES, 'UTF-8')) ?></td>
                    <td><?= ucfirst(htmlspecialchars($reservation['status'], ENT_QUOTES, 'UTF-8')) ?></td>
                    <td>
                        <?php if (!empty($reservation['bukti_pembayaran'])): ?>
                            <a href="<?= base_url($reservation['bukti_pembayaran']) ?>" target="_blank">Lihat</a>
                        <?php else: ?>
                            Tidak Ada
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Total Keseluruhan -->
    <div class="total-section">
        <p><strong>Total Keseluruhan Tagihan:</strong> Rp<?= number_format(array_sum(array_column($reservations, 'total_tagihan')), 0, ',', '.') ?></p>
    </div>

</body>
</html>
