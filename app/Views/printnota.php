<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nota</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      padding: 20px;
      background-color: #f9f9f9;
    }
    .receipt {
      width: 400px; 
      margin: 0 auto; 
      padding: 20px;
      background: white;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .receipt h2 {
      text-align: center;
      margin: 0;
      font-size: 1.5em;
    }
    .receipt .header, .receipt .footer {
      text-align: center;
      margin-bottom: 15px;
      font-size: 0.9em;
    }
    .receipt table {
      width: 100%;
      margin-top: 10px;
    }
    .receipt table th, .receipt table td {
      text-align: left;
      font-size: 0.85em;
      padding: 5px 0;
    }
    .receipt .total-row td {
      font-weight: bold;
    }
    .receipt .right {
      text-align: right;
    }
    .receipt .center {
      text-align: center;
    }

    @media print {
      body {
        margin: 0;
        padding: 0;
      }
      .receipt {
        width: 500px; 
        margin: 0 auto; 
        box-shadow: none;
        border: none;
      }
      .receipt h2 {
        font-size: 1.4em;
      }
    }
  </style>
</head>
<body>
  <div class="receipt">
    <h2>NOTA ELYSIUM HOTEL</h2>
    <div class="header">
      Jl. Elysium No. 123, Wonderland<br>
      Telp: +62-123-4567-890
    </div>
    <table>
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Tamu</th>
        <th>Tipe Kamar</th>
      </tr>
      <tr>
        <td>1</td>
        <td><?= $chelsica[0]->tanggal ?></td>
        <td><?= $chelsica[0]->nama_tamu ?></td>
        <td><?= $chelsica[0]->tipe_kamar ?></td>
      </tr>
    </table>
    <hr>
    <table>
      <tr>
        <td>Harga Kamar</td>
        <td class="right">Rp <?= number_format($chelsica[0]->harga, 0, ',', '.') ?></td>
      </tr>
       <tr>
        <td>Kuantitas</td>
        <td class="right"> <?= number_format($chelsica[0]->kuantitas, 0, ',', '.') ?></td>
      </tr>
      <tr>
        <td>Total</td>
        <td class="right">Rp <?= number_format($chelsica[0]->total, 0, ',', '.') ?></td>
      </tr>
      <tr>
        <td>Bayar</td>
        <td class="right">Rp <?= number_format($chelsica[0]->bayar, 0, ',', '.') ?></td>
      </tr>
      <tr class="total-row">
        <td>Kembalian</td>
        <td class="right">Rp <?= number_format($chelsica[0]->kembali, 0, ',', '.') ?></td>
      </tr>
    </table>
    <hr>
    <div class="footer">
      Terima Kasih atas kunjungan Anda!<br>
      <i>Have a nice day!</i>
    </div>
  </div>

  <script>
    window.print();
  </script>
</body>
</html>
