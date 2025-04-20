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
        <?php if (session()->get('level')==1) { ?>
          <div style="display: flex; align-items: center; gap: 10px; padding-top: 20px; padding-bottom: 10px;">
            <a href="<?=base_url('/gudang/kamar')?>" class="btn btn-success"><i class="bi bi-plus-square-dotted"></i>     Input Data</a>
          </div>
        <?php } ?>
        <div class="card-body">


         <table class="table table-hover datatable">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nomor Kamar</th>
              <th scope="col">ID_Tipe</th>
              <th scope="col">status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $ms=1;
            foreach ($chelsica as $key => $value) {
              ?>
              <tr>
                <th  scope="row"><?= $ms++ ?></th>
                <td><?= $value->nomor_kamar ?></td>
                <td><?= $value->id_tipe ?></td>
                <td><?= $value->status ?></td>
                
               </tr>
              <?php
            }
            ?>
          </tbody>
        </table>z

      </div>
    </div>
  </div>
</div>
</section>