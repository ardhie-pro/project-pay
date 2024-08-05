<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('keuangan'); ?>

<div class="contant-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Flot Chart</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                            <li class="breadcrumb-item active">Flot Chart</li>
                        </ol>

                        <div class="state-information d-none d-sm-block">
                            <div class="state-graph">
                                <div id="header-chart-1"></div>
                                <div class="info">Balance $ 2,317</div>
                            </div>
                            <div class="state-graph">
                                <div id="header-chart-2"></div>
                                <div class="info">Item Sold 1230</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Multiple Statistics</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">362411</h5>
                                        <p class="text-muted">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">8489</h5>
                                        <p class="text-muted">Pending</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">985412</h5>
                                        <p class="text-muted">Deactivated</p>
                                    </li>
                                </ul>

                                <div id="website-stats" class="flot-chart flot-chart-height"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Realtime Statistics</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">365214</h5>
                                        <p class="text-muted">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">6521</h5>
                                        <p class="text-muted">Pending</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">44587</h5>
                                        <p class="text-muted">Deactivated</p>
                                    </li>
                                </ul>

                                <div id="flotRealTime" class="flot-chart flot-chart-height"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Donut Pie</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">5484</h5>
                                        <p class="text-muted">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">964984</h5>
                                        <p class="text-muted">Pending</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">98498</h5>
                                        <p class="text-muted">Deactivated</p>
                                    </li>
                                </ul>

                                <div id="donut-chart">
                                    <div id="donut-chart-container" class="flot-chart flot-chart-height">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Pie Chart</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">86541</h5>
                                        <p class="text-muted">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">2541</h5>
                                        <p class="text-muted">Pending</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">102030</h5>
                                        <p class="text-muted">Deactivated</p>
                                    </li>
                                </ul>

                                <div id="pie-chart">
                                    <div id="pie-chart-container" class="flot-chart flot-chart-height">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
            <!-- end page content-->

        </div> <!-- container-fluid -->

    </div> <!-- content -->
</div>

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

                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myModalLabel">Form Tambah Data Siswa ICMBS</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>Tambah Menu</h5>
                                            <form action="<?= base_url('aksisiswa') ?>" method="post" enctype="multipart/form-data">

                                                <div class="form-group">
                                                    <label>Nama Siswa</label>
                                                    <div>
                                                        <input type="text" name="nama_siswa" class="form-control floating-label">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Nis Siswa</label>
                                                    <div>
                                                        <input type="text" name="nis_siswa" class="form-control floating-label">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <div>
                                                        <input type="text" name="pass_siswa" class="form-control floating-label">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Pin</label>
                                                    <div>
                                                        <input type="hidden" name="pin" class="form-control floating-label">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Saldo</label>
                                                    <div>
                                                        <input type="text" id="time" name="saldo" class="form-control floating-label">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <div>
                                                        <input type="text" name="status" class="form-control floating-label">
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
                                            <th>Nama Siswa</th>
                                            <th>Nis Siswa</th>
                                            <th>Password</th>
                                            <th>Pin</th>
                                            <th>Status</th>
                                            <th>Menu</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($siswa  as $sw) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $sw['nama_siswa']; ?></td>
                                                <td><?= $sw['nis_siswa']; ?></td>
                                                <td><?= $sw['pass_siswa']; ?></td>
                                                <td><?= $sw['pin']; ?></td>
                                                <td><?= $sw['status']; ?></td>
                                                <td>
                                                    <a class="btn btn-danger" href="<?= base_url('deletesiswa/' . $sw['siswa_id']); ?>">Hapus</a>
                                                    <a class="btn btn-warning" href="<?= base_url('updatesiswa/' . $sw['siswa_id']); ?>">Edit</a>
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