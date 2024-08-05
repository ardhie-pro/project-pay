<?= $this->extend('layout/depantemp'); ?>

<?= $this->section('content1'); ?>
<?php $this->session = session(); ?>
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
      <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
        <div class="card col-lg-4 mx-auto">
          <div class="card-body px-5 py-5">
            <h1 class="card-title text-center ">E-Pay Card Student</h1>
            <p class="card-title text-center mb-4">dengan era digital untuk masa depan yang baik</p>
            <h5 class="card-title text-center ">saldo anda <strong class="text-primary"> Rp<?= $this->session->saldo; ?>,00</strong> </h5>
            <form method="POST" action="<?= base_url('/actionnominaltenda') ?>">

              <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Tenda</label>
                <?php
                $no = 1;
                foreach ($tenda as $key => $v) {
                ?>
                  <select name="adminwemart" class="form-control" id="exampleFormControlSelect1">
                    <option name="adminwemart" value="<?= $v['adminwemart']; ?>"><?= $v['adminwemart']; ?></option>
                  </select>
                <?php }  ?>
              </div>
              <div class="form-group">
                <label>Masukkan Nominal</label>
                <input type="hidden" name="siswa_id" class="form-control p_input text-light" value="<?= $this->session->siswa_id; ?>">
                <input type="text" name="pembayaran" placeholder="Nominal Yang Harus Dibayar" class="form-control p_input text-light">
              </div>
              <div class="text-left">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Lanjut</button>
              </div>

              <footer class="sign-up"> <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © kominfoicm 2023</span></footer>
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
<?= $this->endSection(); ?>