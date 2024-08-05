<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('keuangan'); ?>

<div class="content-page">
  <?php $this->session = session(); ?>
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <h4 class="page-title">Selamat Datang</h4>

          </div>
        </div>
      </div>
      <!-- end row -->

      <div class="page-content-wrapper">

        <div class="row">
          <div class="col-12">
            <div class="card m-b-20">
              <div class="card-body">

                <h4 class="mt-0 header-title">Pengeluaran Keuangan</h4>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Pengirim</th>
                      <th>Jumlah Transfer</th>
                      <th>Time</th>
                    </tr>
                  </thead>


                  <tbody>

                    <?php
                    $no = 1;
                    ?>
                    <tr>

                      <?php foreach ($histori as $k => $v) {
                        $nishis = $this->session->nis_siswa;
                        if ($v['nis_siswa'] == $nishis) {
                      ?>
                          <td><?= $no++ ?></td>
                          <td><?= $v['nama_siswa']; ?></td>
                          <td><?= $v['saldo']; ?></td>
                          <td><?= $v['created_at']; ?></td>

                    </tr>
                  <?php
                        }  ?>
                <?php }  ?>

                <?php //}  
                ?>

                  </tbody>

                </table>


              </div>
            </div>
          </div> <!-- end col -->
        </div>
      </div>
      <?= $this->endSection(); ?>