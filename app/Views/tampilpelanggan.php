<div class="pagetitle">
  <h1>Table Pelanggan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
      <li class="breadcrumb-item">Data Master</li>
      <li class="breadcrumb-item active">Pelanggan</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">

        <div class="table-responsive">
        <table class="table table-hover datatable">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Username</th>
        <th>No Telp</th>
        <th>No KTP</th>
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
          <td><?= $value->nama_pelanggan ?></td>
          <td><?= $value->username ?></td>
          <td><?= $value->no_telp ?></td>
          <td><?= $value->no_ktp ?></td>
          <?php
      if (session()->get('level')==1) { 
        ?>
          <td>
          <a href="<?= base_url('gudang/edit_pelanggan/'.$value->id_user)?>" class="btn btn-info"><i class="bi bi-question-circle-fill"></i>     Detail</a>
        </td>
        <?php } ?>
        </tr>
        <?php
      }
      ?>

    </tbody>
  </table>
</div>
