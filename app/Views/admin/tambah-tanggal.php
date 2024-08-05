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
                        <h4 class="page-title mb-2">Tambah Bulan</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <div class=" text-center">
                                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#myModal">Tambah Tanggal</button>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card m-b-20">
                            <!-- sample modal content -->
                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myModalLabel">Keuangan Siswa</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>Tambah Bulan</h5>
                                            <form action="<?= base_url('inputtanggal') ?>" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Masukan Kelas</label>
                                                    <div>
                                                        <input type="text" name="tanggal" placeholder="JANUARI" class="form-control floating-label">
                                                    </div>
                                                    <!-- input-group -->
                                                </div>
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                        <div class="card m-b-20">
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
                                                            <th>Bulan</th>
                                                            <th>Menu</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($tanggal  as $kls) {
                                                        ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td><?= $kls['tanggal']; ?></td>
                                                                <td>
                                                                    <a class="btn btn-danger" href="<?= base_url('deletetanggal/' . $kls['tanggal_id']); ?>">Hapus</a>
                                                                </td>
                                                            </tr>
                                                        <?php }  ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
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