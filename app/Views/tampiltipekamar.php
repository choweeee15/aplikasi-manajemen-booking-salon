
<div class="pagetitle">
  <h1>Tipe Kamar</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
      <li class="breadcrumb-item">Pesan</li>
      <li class="breadcrumb-item active">Tipe Kamar</li>
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
            <a href="<?=base_url('/gudang/tipekamar')?>" class="btn btn-success"><i class="bi bi-plus-square-dotted"></i>     Input Data</a>
          </div>
        <?php } ?>

         <table class="table table-hover datatable">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tipe Kamar</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Harga</th>
              <th scope="col">Orang/Kamar</th>
              <th scope="col">Foto</th>
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
                <th  scope="row"><?= $ms++ ?></th>
                <td><?= $value->tipe_kamar ?></td>
                <td><?= $value->lokasi ?></td>
                <td><?= $value->harga ?></td>
                <td><?= $value->orang ?></td>
                <td><img src="<?= base_url('img/'.$value->foto);?>" width="300px" class="rounded-2"></td>
                <?php
                if (session()->get('level')==1) { 
                  ?>
                  
                  <td>
                    <a href="<?= base_url('gudang/edit_tipekamar/'.$value->id_tipe)?>" class="btn btn-info"><i class="bi bi-pencil-square"></i>       Edit</a>
                    <a href="<?= base_url('gudang/hapus_tipekamar/'.$value->id_tipe)?>" class="btn btn-danger"><i class="bi bi-trash"></i>       Hapus</a>
                  </td>
                <?php } ?>
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
