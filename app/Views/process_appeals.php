<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Pengajuan Banding</h4>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card-box">
                <div class="card-block">
                    <h4 class="card-title">Daftar Pengajuan Banding</h4>

                    <?php if (session()->getFlashdata('message')): ?>
                        <div class="alert alert-info"><?= session()->getFlashdata('message') ?></div>
                    <?php endif; ?>

                    <input type="text" id="searchInput" onkeyup="searchTable()" class="form-control mb-3" placeholder="Cari di tabel...">

                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>User ID</th>
                                    <th>Alasan Banding</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($appeals)) : ?>
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">Tidak ada data pengajuan banding</td>
                                    </tr>
                                <?php else : ?>
                                    <?php foreach ($appeals as $appeal) : ?>
                                        <tr>
                                            <td><?= $appeal['user_id'] ?></td>
                                            <td><?= $appeal['appeal_reason'] ?></td>
                                            <td><?= $appeal['status'] == 'pending' ? '<span class="badge bg-warning">Pending</span>' : ($appeal['status'] == 'accepted' ? '<span class="badge bg-success">Diterima</span>' : '<span class="badge bg-danger">Ditolak</span>') ?></td>
                                            <td>
                                                <?php if ($appeal['status'] == 'pending'): ?>
                                                    <a href="<?= base_url('AppealAdminController/accept/' . $appeal['id']) ?>" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Terima</a>
                                                    <a href="<?= base_url('AppealAdminController/reject/' . $appeal['id']) ?>" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Tolak</a>
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
