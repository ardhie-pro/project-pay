<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('keuangan'); ?>

<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <h4 class="page-title">Data Kelas</h4>

          </div>
        </div>
      </div>
      <!-- end row -->

      <div class="page-content-wrapper">

        <div class="row">
          <div class="col-12">
            <div class="card m-b-20">
              <div class="card-body">

                <h4 class="mt-0 header-title">Admin Datatable</h4>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>NIS</th>
                      <th>Pengeluaran</th>
                      <th>Time</th>
                    </tr>
                  </thead>


                  <tbody>

                    <?php
                    $no = 1;
                    $hargatotal = 0;
                    foreach ($tanggal as $key => $value) {

                    ?>
                      <tr>

                        <?php foreach ($mym as $k => $v) {
                          switch (date('m', strtotime($v['created']))) {
                            case '01':
                              $bulan = 'JANUARI';
                              break;
                            case '02':
                              $bulan = 'FEBUARI';
                              break;
                            case '03':
                              $bulan = 'MARET';
                              break;
                            case '04':
                              $bulan = 'APRIL';
                              break;
                            case '05':
                              $bulan = 'MEI';
                              break;
                            case '06':
                              $bulan = 'JUNI';
                              break;
                            case '07':
                              $bulan = 'JULI';
                              break;
                            case '08':
                              $bulan = 'AGUSTUS';
                              break;
                            case '09':
                              $bulan = 'SEPTEMBER';
                              break;
                            case '10':
                              $bulan = 'OKTOBER';
                              break;
                            case '11':
                              $bulan = 'NOVEMBER';
                              break;
                            case '12':
                              $bulan = 'DESEMBER';
                              break;
                            default:
                              $bulan = 'tidak Ditemukan bulan';
                              break;
                          }
                          if ($value['tanggal'] == $bulan) {  ?>
                            <td><?= $no++ ?></td>
                            <td><?= $v['nama_siswa']; ?></td>
                            <td><?= $v['nis_siswa']; ?></td>
                            <td><?= $v['saldo']; ?></td>
                            <td><?= $v['created_at']; ?></td>

                      </tr>
                    <?php
                            $saldo = $v['saldo'];
                            $harga = $hargatotal += $saldo;
                          }  ?>


                  <?php }  ?>
                <?php }  ?>




                  </tbody>
                  <h3><strong class="text-warning bg-primary m-2 p-2">Rp <?= $harga ?></strong></h3>
                </table>


              </div>
            </div>
          </div> <!-- end col -->
        </div>
      </div>
      <?= $this->endSection(); ?>