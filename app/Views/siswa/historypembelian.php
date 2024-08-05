<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('keuangan'); ?>
<?php $this->session = session(); ?>
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
                        <h4 class="page-title">
                            <?= $this->session->nama_siswa; ?>
                        </h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="page-content-wrapper">

                <!-- end page content-->
                <div class="card m-b-20">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">Data Riwayat PPembelian
                                        </h4>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Pembelian</th>
                                                    <th>Tanggal dan jam</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $pin = $this->session->pin;
                                                $no = 1;
                                                ?>
                                                <tr>
                                                    <?php foreach ($histori as $k => $v) {
                                                        if ($pin == $v['pin']) {
                                                    ?>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $v['saldo']; ?></td>
                                                            <td><?= $v['created_at']; ?></td>
                                                </tr>
                                            <?php }  ?>
                                        <?php }  ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <!-- end col -->
                    </div>
                </div>
            </div> <!-- container-fluid -->

        </div> <!-- content -->



    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
    <?= $this->endSection(); ?>