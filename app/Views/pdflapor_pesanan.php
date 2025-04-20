<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laporan Tamu</title>
  <style type="text/css">
    table,
    th,
    td {
      border-collapse: collapse;
      font-family: sans-serif;
      padding: 5px;
    }

    h1 {
      text-align: center;
    }
  </style>
</head>
<body>

  <table>
    <tr>
      <td width="100px"><img src="<?= base_url('img/elysium-logo.png'); ?>" width="100px"></td>
      <td width="250%">ELYSIUM HOTEL</td>
    </tr>
  </table>

  <h1>Laporan Tamu</h1>
  
  <!-- Filter Dates -->
  <p><strong>Tanggal Awal:</strong> <?= $a ?></p>
  <p><strong>Tanggal Akhir:</strong> <?= $b ?></p>

  <!-- Data Table -->
  <table border="1" id="my-table">
    <thead>
      <tr>
        <th style="font-weight: bold;">No</th>
        <th style="font-weight: bold;">Tipe Kamar</th>
        <th style="font-weight: bold;">Lokasi</th>
        <th style="font-weight: bold;">Nama Pelanggan</th>
        <th style="font-weight: bold;">Nama Tamu</th>
        <th style="font-weight: bold;">Kuantitas</th>
        <th style="font-weight: bold;">Karyawan Pengurus</th>
        <th style="font-weight: bold;">Check-In</th>
        <th style="font-weight: bold;">Check-Out</th>
        <th style="font-weight: bold;">Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $ms = 1;
      foreach ($chelsica as $key => $value) {
      ?>
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
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>

  <br>

</body>
</html>
