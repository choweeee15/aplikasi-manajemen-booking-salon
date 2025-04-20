<style>
    .bg-purple {
        background-color: #8e44ad !important;
        color: white;
    }

    .bg-primary {
        background-color: #007bff !important;
        color: white;
    }

    .bg-dark {
        background-color: #343a40 !important;
        color: white;
    }

    .bg-info {
        background-color: #17a2b8 !important;
        color: white;
    }

    .bg-secondary {
        background-color: #6c757d !important;
        color: white;
    }

    /* Badge untuk Status */
    .bg-warning {
        background-color: #ffc107 !important;
        color: black;
    }

    .bg-success {
        background-color: #28a745 !important;
        color: white;
    }

    .bg-info {
        background-color: #17a2b8 !important;
        color: white;
    }

    .btn-sm {
        padding: 5px 10px;
        font-size: 12px;
    }
</style>
<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <h2>Riwayat Pembayaran</h2>

                        <!-- Tombol Print dan PDF -->
                            <?php if (in_array(session()->get('level'), [1, 3, 10])): ?>
    <div class="mb-3">
        <a href="<?= base_url('PaymentController/generatePdf') ?>" class="btn btn-danger btn-lg" target="_blank">
            <i class="fas fa-file-pdf me-2"></i> Unduh PDF
        </a>
    </div>
<?php endif; ?>


                        <?php if (session()->has('success')) : ?>
                            <div class="alert alert-success"><?= session('success') ?></div>
                        <?php endif; ?>

                        <?php if (session()->has('error')) : ?>
                            <div class="alert alert-danger"><?= session('error') ?></div>
                        <?php endif; ?>

                        <table class="table table-striped">
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
                                <?php if (!empty($reservations)) : ?>
                                    <?php $no = 1;
                                    foreach ($reservations as $reservation) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $reservation['lokasi'] ?></td>
                                            
                                            <td>Rp<?= number_format($reservation['total_tagihan'], 0, ',', '.') ?></td>
                                            <td>
                                                <?php
                                                $metodePembayaran = strtolower($reservation['metode_pembayaran']);
                                                $badgeClass = '';

                                                switch ($metodePembayaran) {
                                                    case 'ovo':
                                                        $badgeClass = 'bg-purple';
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
                                                <span class="badge <?= $badgeClass; ?>"><?= ucfirst($reservation['metode_pembayaran']); ?></span>
                                            </td>
                                            <td>
                                                <span class="badge 
                                                    <?= ($reservation['status'] == 'Terbayar') ? 'bg-warning' : (($reservation['status'] == 'Terkonfirmasi') ? 'bg-info' : 'bg-success') ?>">
                                                    <?= $reservation['status'] ?>
                                                </span>
                                            </td>
                                            <td>
                                                <?php if (!empty($reservation['bukti_pembayaran'])) : ?>
                                                    <a href="<?= base_url($reservation['bukti_pembayaran']) ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                                                <?php else : ?>
                                                    <span class="text-danger">Tidak Ada</span>
                                                <?php endif; ?>
                                            </td>

                                           
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="<?= (session()->get('level') == 1) ? '9' : '8' ?>" class="text-center">Belum ada riwayat reservasi</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>