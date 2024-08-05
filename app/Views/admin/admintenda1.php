<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('keuangan'); ?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <h4 class="page-title mb-2">Data Kelas Diniah</h4>

          </div>
        </div>
      </div>
      <!-- end row -->

      <div class="page-content-wrapper">
        <div class="page-content-wrapper">

          <!-- end row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-12">
                  <div class="card m-b-20">
                    <div class="card-body">
                      <h4 class="mt-0 header-title">Default Datatable</h4>
                      <table id="datatable" class="table table-bordered dt-responsive nowrap" style="
                          border-collapse: collapse;
                          border-spacing: 0;
                          width: 100%;
                        ">

                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Menu</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 1;
                          foreach ($tenda  as $kls) {
                          ?>
                            <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $kls['adminwemart']; ?></td>
                              <td>
                                <a class="btn btn-primary" href="<?= base_url('aksitenda/' . $kls['adminwemart']); ?>">Masuk</a>

                              </td>
                            </tr>
                          <?php }  ?>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <!-- end col -->
                </div>

              </div> <!-- end row -->
            </div>
            <!-- end page content-->

          </div> <!-- container-fluid -->

        </div> <!-- content -->



      </div>


      <!-- ============================================================== -->
      <!-- End Right content here -->
      <!-- ============================================================== -->
      <?= $this->endSection(); ?>