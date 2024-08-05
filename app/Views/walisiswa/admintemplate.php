<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $title; ?></title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="<?= base_url('IMG/10.png') ?>">


    <!-- __________________________________ css ______________________________________ -->
    <link href="<?= base_url('template/plugins/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('template/plugins/datatables/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?= base_url('template/plugins/datatables/responsive.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('template/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('template/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/metismenu.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/style.css') ?>" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- ============================================================== -->
    <!-- content here -->
    <!-- ============================================================== -->

    <div id="wrapper">
        <?= $this->include('walisiswa/adminnav'); ?>
        <?= $this->renderSection('walisiswa'); ?>
        <footer class="footer">
            © 2023 kominfoicm <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by ArWas.</span>
        </footer>
    </div>

    <!-- ============================================================== -->
    <!-- End content here -->
    <!-- ============================================================== -->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jQuery  -->
    <script src="<?= base_url('template/assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/jquery.slimscroll.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/waves.min.js') ?>"></script>

    <script src="<?= base_url('template/plugins/jquery-sparkline/jquery.sparkline.min.js') ?>"></script>

    <!-- Required datatable js -->
    <script src="<?= base_url('template/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('template/plugins/datatables/dataTables.bootstrap4.min.js') ?>"></script>
    <!-- Buttons examples -->
    <script src="<?= base_url('template/plugins/datatables/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('template/plugins/datatables/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('template/plugins/datatables/jszip.min.js') ?>"></script>
    <script src="<?= base_url('template/plugins/datatables/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('template/plugins/datatables/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('template/plugins/datatables/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('template/plugins/datatables/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('template/plugins/datatables/buttons.colVis.min.js') ?>"></script>
    <!-- Responsive examples -->
    <script src="<?= base_url('template/plugins/datatables/dataTables.responsive.min.js') ?>"></script>

    <script src="<?= base_url('template/plugins/datatables/responsive.bootstrap4.min.js') ?>"></script>

    <!-- Datatable init js -->
    <script src="<?= base_url('template/assets/pages/datatables.init.js') ?>"></script>

    <!-- App js -->
    <script src="<?= base_url('template/assets/js/app.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('.datatab').DataTable();
        });
    </script>

    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
</body>

</html>