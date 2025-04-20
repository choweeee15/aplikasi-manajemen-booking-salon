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

          <!-- Label for the form -->
          <h5 class="mt-3 fw-bold">Laporan Tamu</h5>
          <hr>

          <!-- Form Section -->
          <form class="mb-4" action="<?= base_url('gudang/pdflapor_pesanan') ?>" method="POST" target="_blank">
    <div class="row g-3 align-items-end">
        <!-- Tanggal Awal -->
        <div class="col-md-2">
            <label for="tanggal_awal_3" class="form-label">Tanggal Awal</label>
            <input type="datetime-local" id="tanggal_awal_3" class="form-control" name="tanggal_awal">
        </div>
        
        <!-- Tanggal Akhir -->
        <div class="col-md-2">
            <label for="tanggal_akhir_3" class="form-label">Tanggal Akhir</label>
            <input type="datetime-local" id="tanggal_akhir_3" class="form-control" name="tanggal_akhir">
        </div>
        
        <!-- Submit Button -->
        <div class="col-md-2 d-grid">
            <button class="btn btn-danger">
                <i class="bi bi-file-pdf-fill"></i> Generate PDF
            </button>
        </div>
    </div>
</form>

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
  <td>
    <?php if ($value->status_pesan == 1): ?>
      <a href="<?= base_url('gudang/nota/'.$value->id_pemesanan)?>" class="btn btn-danger">Belum Bayar</a>
    <?php else: ?>
      <button class="btn btn-secondary" disabled>Sudah Bayar</button>
    <?php endif; ?>
  </td>
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