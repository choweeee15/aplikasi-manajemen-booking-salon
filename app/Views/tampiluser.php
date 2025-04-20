<div class="pagetitle">
  <h1>Table User</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
      <li class="breadcrumb-item">Admin</li>
      <li class="breadcrumb-item active">User</li>
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
            <a href="<?=base_url('/gudang/user')?>" class="btn btn-success"><i class="bi bi-plus-square-dotted"></i>     Input Data</a>
          </div>
        <?php } ?>

        <table class="table table-hover datatable">
    <thead>
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
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
          <td><?= $value->username ?></td>
          <td><?= $value->password ?></td>
          <td><?= $value->level ?></td>
          <?php
      if (session()->get('level')==1) { 
        ?>
          <td>
          <a href="<?= base_url('gudang/edit_user/'.$value->id_user)?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i>      Edit</a>
          <a href="<?= base_url('gudang/hapus_user/'.$value->id_user)?>" class="btn btn-danger"><i class="bi bi-trash"></i>       Hapus</a>
        </td>
      <?php } ?>
        </tr>
        <?php
      }
      ?>

    </tbody>
  </table>