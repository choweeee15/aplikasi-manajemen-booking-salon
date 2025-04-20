<style>
    .pagination .active a {
        color: white !important;
        background-color: #007bff !important;
        border-color: #007bff !important;
        font-weight: bold;
        padding: 8px 12px;
        border-radius: 5px;
    }
</style>
<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Log Activity</h4>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card-box">
                <div class="card-block">
                    <h4 class="card-title">Log Activity</h4>
                    <form method="GET" action="<?= route_to('LogActivityController::index') ?>" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search logs..." value="<?= esc($search) ?>">
                            <button type="submit" class="btn btn-primary">Search</button>
                            <?php if ($search): ?>
                                <a href="<?= base_url('/log-activity') ?>" class="btn btn-secondary">Reset</a>
                            <?php endif; ?>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Activiy</th>
                                    <th>Timestamp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($logs)): ?>
                                    <?php foreach ($logs as $key => $log): ?>
                                        <tr>
                                            <td><?= ($pager->getCurrentPage() - 1) * $pager->getPerPage() + $key + 1 ?></td>
                                            <td><?= esc($log['user_name'] ?? 'Unknown') ?></td>
                                            <td><?= esc($log['what_happens']) ?></td>
                                            <td><?= date('l, d F Y H:i:s', strtotime($log['created_at'])) ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4" class="text-center">No activity logs found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <?= $pager->links() ?>
            </div>
        </div>
    </div>
</div>