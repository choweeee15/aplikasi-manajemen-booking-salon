<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h2>Pengaturan Aplikasi</h2>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('AppSettingsController/save') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="app_name" class="form-label">Nama Aplikasi 3</label>
            <input type="text" class="form-control" id="app_name" name="app_name" value="<?= old('app_name', $settings['app_name']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="app_logo" class="form-label">Logo Aplikasi</label>
            <input type="file" class="form-control" id="app_logo" name="app_logo">
            <?php if (!empty($settings['app_logo'])): ?>
                <div class="mt-3">
                    <img src="<?= base_url('uploads/' . $settings['app_logo']) ?>" alt="Logo Aplikasi" width="100">
                </div>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
    </form>
</div>

<?= $this->endSection() ?>
