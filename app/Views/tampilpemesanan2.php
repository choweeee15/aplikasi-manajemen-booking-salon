<div class="pagetitle">
  <h1>Pemesanan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
      <li class="breadcrumb-item">Data Master</li>
      <li class="breadcrumb-item active">Barang Masuk</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">

         <?php if (session()->get('level')==1||session()->get('level')==2) { ?>
          <div style="display: flex; align-items: center; gap: 10px; padding-top: 20px; padding-bottom: 10px;">
            <a href="<?=base_url('/gudang/fancytipekamar')?>" class="btn btn-success"><i class="bi bi-plus-square-dotted"></i>     Input Data</a>
          </div>  
        <?php } ?>

  <table class="table table-hover datatable">
    <thead>
      <tr>
        <th>No</th>
        <th>Tipe Kamar</th>
        <th>Lokasi</th>
        <th>Nama Pelanggan</th>
        <th>Nama Tamu</th>
        <th>Kuantitas</th>
        <th>Karyawan Pengurus</th>
        <th>Check-In</th>
        <th>Check-Out</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $ms=1;
      foreach ($chelsica as $key => $value): ?>
<tr>
  <td><?= $ms++ ?></td>
  <td><?= $value->tipe_kamar ?></td>
  <td><?= $value->lokasi ?></td>
  <td><?= $value->nama_pelanggan ?></td>
  <td><?= $value->nama_tamu ?></td>
  <td><?= $value->kuantitas ?></td>
  <td><?= $value->nama_karyawan ?></td>
  <td><?= $value->cek_in ?></td>
  <td><?= $value->cek_out ?></td>
  <td><?= $value->status_pesan == 1 ? 'Pending' : 'Lunas' ?></td>
   <?php
      if (session()->get('level')==1||session()->get('level')==2) { 
        ?>
          <td>
          <a href="<?= base_url('gudang/hapus_pemesanan/'.$value->id_pemesanan)?>" class="btn btn-info"><i class="bi bi-trash"></i>     Batalkan</a>
        </td>
        <?php } ?>
        
</tr>
<?php endforeach; ?>

    </tbody>
  </table>
</div>