<div class="pagetitle">
  <h1>Nota</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
      <li class="breadcrumb-item">Nota</li>
      <li class="breadcrumb-item active">Biaya</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <!-- Label for the form -->
          <h5 class="mt-3 fw-bold">Laporan Keuangan</h5>
          <hr>

          <!-- Form Section -->
          <form class="mb-4" action="<?= base_url('gudang/excellapor_nota')?>" method="POST" target="_blank">
            <div class="row g-3 align-items-end">
              <!-- Tanggal Awal -->
              <div class="col-md-2">
                <label for="tanggal_awal_3" class="form-label">Tanggal Awal</label>
                <input type="date" id="tanggal_awal_3" class="form-control" name="tanggal_awal">
              </div>
              
              <!-- Tanggal Akhir -->
              <div class="col-md-2">
                <label for="tanggal_akhir_3" class="form-label">Tanggal Akhir</label>
                <input type="date" id="tanggal_akhir_3" class="form-control" name="tanggal_akhir">
              </div>
              
              <!-- Submit Button -->
              <div class="col-md-2 d-grid">
                <button class="btn btn-success">
                  <i class="bi bi-file-excel-fill"></i> Generate Excel
                </button>
              </div>
            </div>
          </form>

          <!-- Table Section -->
          <table class="table table-hover datatable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nomor Nota</th>
                <th scope="col">Total</th>
                <th scope="col">Bayar</th>
                <th scope="col">Kembalian</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $ms=1;
              foreach ($chelsica as $key => $value) {
                ?>
                <tr>
                  <th scope="row"><?= $ms++ ?></th>
                  <td><?= $value->tanggal ?></td>
                  <td><?= $value->nomor_nota ?></td>
                  <td><?= $value->total ?></td>
                  <td><?= $value->bayar ?></td>
                  <td><?= $value->kembali ?></td>
                  <td>
                    <a href="<?= base_url('gudang/printhistorinota/' . $value->id_nota) ?>" class="btn btn-primary">
                      Print
                    </a>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
