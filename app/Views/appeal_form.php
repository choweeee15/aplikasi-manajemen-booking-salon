<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-info"><?= session()->getFlashdata('message') ?></div>
<?php endif; ?>

<?php if (session()->get('level') == 4): ?>
    <!-- Form Pengajuan Banding -->
    <div class="page-wrapper bg-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title text-danger">Pengajuan Banding</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h4 class="card-title text-danger">Anda Diblokir dari Mereservasi Parkir Karena Melanggar Aturan</h4>
                        <p class="card-text">Silakan ajukan banding jika Anda merasa pembatasan ini tidak sesuai.</p>
                        
                        <form action="<?= base_url('AppealController/submit') ?>" method="post">
                            <div class="form-group row">
                                <label for="appeal_reason" class="col-form-label col-md-2">Alasan Banding:</label>
                                <div class="col-md-10">
                                    <textarea id="appeal_reason" name="appeal_reason" class="form-control" rows="4" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2">
                                    <button type="submit" class="btn btn-warning">Ajukan Banding</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
