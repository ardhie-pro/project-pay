<?= $this->extend('layout/depantemp'); ?>

<?= $this->section('content1'); ?>
<?php $this->session = session(); ?>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h1 class="card-title text-center ">Masukan Rekening Dan Nominal Tranfer </h1>
                        <p class="card-title text-center mb-5">dengan era digital untuk masa depan yang baik <?= $this->session->nama_siswa; ?></p>
                        <h5 class="card-title text-center ">saldo anda <strong class="text-primary"> Rp<?= $this->session->saldo; ?>,00</strong> </h5>
                        <form method="POST" action="<?= base_url('/rekening') ?>">
                            <div class="form-group">
                                <label>Rekening</label>
                                <input type="password" name="nis_siswa" placeholder="Masukan Rekening Siswa" class="form-control p_input text-light">
                            </div>
                            <div class="form-group">
                                <label>Nominal</label>
                                <input type="text" name="rekening" placeholder="Masukan Nominal Transfer" class="form-control p_input text-light">
                            </div>
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Lanjut</button>
                            </div>

                            <footer class="sign-up"> <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © arwaz company 2023</span></footer>
                        </form>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<script type="text/javascript">
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
<?= $this->endSection(); ?>