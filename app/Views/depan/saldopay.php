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
            <p class="card-title text-center mb-5">dengan era digital untuk masa depan yang baik</p>
            <form>
              <h3 class="text-center mb-4">Saldo Anda : <strong class="text-primary"> Rp<?= $this->session->saldo; ?>,00</strong></h3>

              <div class="text-center">
                <a class="btn btn-primary btn-block enter-btn" href="<?= base_url('nominal'); ?>">Masuk</a>
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