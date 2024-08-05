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
                        <h4 class="page-title">Data Siswa ICMBS</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <div class=" text-center">
                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Tambah Siswa</button>
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
                                        <form action="<?= base_url('actionsiswapass') ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group">

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <div>
                                                        <input type="hidden" name="siswa_id" class="form-control floating-label" value="<?= $value['siswa_id']; ?>">
                                                        <input type="text" name="pass_siswa" class="form-control floating-label" value="<?= $value['pass_siswa']; ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label></label>
                                                    <div>
                                                        <input type="hidden" name="keterangan" class="form-control floating-label" value="<?= $value['keterangan']; ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        </form>
                                    <?php }
                                } else { ?>
                                    <!-- sample modal content -->
                                <?php } ?>
                            </div>
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