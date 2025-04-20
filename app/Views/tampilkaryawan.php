<div class="pagetitle">
  <h1>Table Karyawan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
      <li class="breadcrumb-item">Data Master</li>
      <li class="breadcrumb-item active">Karyawan</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">

         <?php if (session()->get('level')==1) { ?>
          <div style="display: flex; align-items: center; gap: 10px; padding-top: 20px; padding-bottom: 10px;">
            <a href="<?=base_url('/gudang/karyawan')?>" class="btn btn-success"><i class="bi bi-plus-square-dotted"></i>     Input Data</a>
          </div>
        <?php } ?>

        <div class="table-responsive">
        <table class="table table-hover datatable">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Karyawan</th>
        <th>Jenis Kelamin</th>
        <th>Username</th>
        <th>Level</th>
        <th>Jam Masuk</th>
        <th>Jam Keluar</th>
        <th>Gaji</th>
        <?php
      if (session()->get('level')==1) { 
        ?>
        <th>Aksi</th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>

      <?php
      $ms=1;
      foreach ($chelsica as $key => $value) {
        ?>
        <tr>
          <td><?= $ms++ ?></td>
          <td><?= $value->nama_karyawan ?></td>
          <td><?= $value->jenis_kelamin ?></td>
          <td><?= $value->username ?></td>
          <td><?= $value->level ?></td>
          <td><?= $value->jam_masuk ?></td>
          <td><?= $value->jam_keluar ?></td>
          <td><?= $value->gaji ?></td>
          <?php
      if (session()->get('level')==1) { 
        ?>
          <td>
          <a href="<?= base_url('gudang/edit_karyawan/'.$value->id_user)?>" class="btn btn-info"><i class="bi bi-question-circle-fill"></i>     Detail</a>
        </td>
        <?php } ?>
        </tr>
        <?php
      }
      ?>

    </tbody>
  </table>
</div>
