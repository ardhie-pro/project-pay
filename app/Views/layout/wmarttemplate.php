<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $title; ?></title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="<?= base_url('template/') ?>assets/images/favicon.ico">

    <link rel="stylesheet" href="<?= base_url('template/') ?>plugins/morris/morris.css">

    <link href="<?= base_url('template/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/metismenu.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/style.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- ============================================================== -->
    <!-- content here -->
    <!-- ============================================================== -->

    <div id="wrapper">
        <?= $this->include('layout/wmartnav'); ?>
        <?= $this->renderSection('wmart'); ?>
        <footer class="footer">
            © 2023 kominfoicm <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by ArWas.</span>
        </footer>
    </div>

    <!-- ============================================================== -->
    <!-- End content here -->
    <!-- ============================================================== -->



    <!-- jQuery  -->
    <script src="<?= base_url('template/assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/jquery.slimscroll.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/waves.min.js') ?>"></script>

    <script src="<?= base_url('template/plugins/jquery-sparkline/jquery.sparkline.min.js') ?>"></script>

    <!-- Peity JS -->
    <script src="<?= base_url('template/plugins/peity/jquery.peity.min.js') ?>"></script>

    <script src="<?= base_url('template/plugins/morris/morris.min.js') ?>"></script>
    <script src="<?= base_url('template/') ?>plugins/raphael/raphael-min.js"></script>

    <script src="<?= base_url('template/assets/pages/dashboard.js') ?>"></script>

    <!-- App js -->
    <script src="<?= base_url('template/assets/js/app.js') ?>"></script>

</body>

</html>