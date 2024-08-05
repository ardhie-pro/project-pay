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
                        <h4 class="page-title">Data User WEMART</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <div class=" text-center">
                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Tambah User</button>
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
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Formulir Untuk Edit</h4>
                                <p class="text-muted m-b-30">Klick Tombol Edit</p>
                                <?php if ($hasil != null) {
                                    foreach ($hasil as $key => $value) { ?>
                                        <form action="<?= base_url('actionwemartuser') ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <div>
                                                        <input type="text" name="user_id" class="form-control floating-label" value="<?= $value['user_id']; ?>">
                                                        <input type="text" name="nama_user" class="form-control floating-label" value="<?= $value['nama_user']; ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <div>
                                                        <input type="text" name="adminwemart" class="form-control floating-label" value="<?= $value['adminwemart']; ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <div>
                                                        <input type="text" name="pass_user" class="form-control floating-label" value="<?= $value['pass_user']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        </form>
                                    <?php }
                                } else { ?>
                                    <!-- sample modal content -->
                                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0" id="myModalLabel">Form Tambah Data Siswa ICMBS</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Tambah User Tenda</h5>
                                                    <form action="<?= base_url('inputadmintenda') ?>" method="post" enctype="multipart/form-data">

                                                        <div class="form-group">
                                                            <label>Nama Lengkap</label>
                                                            <div>
                                                                <input type="text" name="nama_user" class="form-control floating-label">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <div>
                                                                <input type="text" name="adminwemart" class="form-control floating-label">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <div>
                                                                <input type="text" name="pass_user" class="form-control floating-label">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
            <!-- end page content-->
            <div class="card m-b-20">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">

                            <div class="card-body">

                                <h4 class="mt-0 header-title">Database Siswa ICMBS</h4>

                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Admin</th>


                                            <th>Menu</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($admin  as $sw) {
                                        ?>
                                            <tr>
                                                <td><?= $sw['nama_user']; ?></td>

                                                <td>
                                                    <a class="btn btn-danger" href="<?= base_url('deletesiswa/' . $sw['user_id']); ?>">Hapus</a>
                                                    <a class="btn btn-warning" href="<?= base_url('updateuserwm/' . $sw['user_id']); ?>">Edit</a>
                                                </td>
                                            </tr>
                                        <?php }  ?>


                                    </tbody>
                                </table>
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