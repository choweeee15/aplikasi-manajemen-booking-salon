<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Aplikasi</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Pengaturan Aplikasi</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="card-title">Pengaturan Aplikasi</h4>

                    <!-- Flashdata Success -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Flashdata Errors -->
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <li><?= $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <!-- Form Pengaturan Aplikasi -->
                    <form action="<?= base_url('AppSettingsController/save') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2" for="app_name">Nama Aplikasi:</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="app_name" value="<?= isset($settings['app_name']) ? esc($settings['app_name']) : 'E-Parkir'; ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2" for="app_logo">Logo Aplikasi:</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control" name="app_logo">
                                <!-- Tampilkan logo jika ada -->
                                <?php if (isset($settings['app_logo']) && $settings['app_logo'] != ''): ?>
                                    <p>Logo saat ini: <img src="<?= base_url('uploads/' . esc($settings['app_logo'])); ?>" alt="Logo" width="100"></p>
                                <?php else: ?>
                                    <p>Logo saat ini: <img src="<?= base_url('assets/img/logo-icon.png'); ?>" alt="Logo" width="100"></p>
                                <?php endif; ?>
                                <input type="hidden" name="existing_logo" value="<?= isset($settings['app_logo']) ? esc($settings['app_logo']) : ''; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
