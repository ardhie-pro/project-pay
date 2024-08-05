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
                            Data Siswa
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
                                                    <th>Nama</th>
                                                    <th>NIS</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                $hargatotal = 0;
                                                ?>
                                                <tr>
                                                    <?php foreach ($siswa as $v) {
                                                    ?>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $v['nama_siswa']; ?></td>
                                                        <td><?= $v['nis_siswa']; ?></td>
                                                        <td>
                                                            <?php
                                                            $status = $v['keterangan'];
                                                            $status == "ACTIVE";
                                                            $status == "BLOKIR"
                                                            ?>
                                                            <?php if ($status == "ACTIVE") { ?>
                                                                <a class="btn btn-danger btn-block enter-btn" href="<?= base_url('actionblokir/' . $v['siswa_id']); ?><?= base_url('actionblokir'); ?>">Blokir</a>
                                                            <?php } ?>
                                                            <?php if ($status == "BLOKIR") { ?>
                                                                <a class="btn btn-primary btn-block enter-btn" href="<?= base_url('actionactive/' . $v['siswa_id']); ?><?= base_url('actionactive'); ?>">Aktif</a>
                                                            <?php } ?>
                                                        </td>
                                                </tr>
                                            <?php
                                                    }  ?>
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