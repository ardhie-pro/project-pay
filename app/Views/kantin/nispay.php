<?= $this->extend('layout/depantemp'); ?>

<?= $this->section('content1'); ?>
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
      <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
        <div class="card col-lg-4 mx-auto">
          <div class="card-body px-5 py-5">
            <h1 class="card-title text-center ">E-Pay Card Student</h1>
            <p class="card-title text-center mb-5">dengan era digital untuk masa depan yang baik</p>

            <?php if (session()->get('pin')) : ?>

              <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                <strong>Silahkan Konfirmasi,</strong> <?= session()->getFlashdata('pin'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

            <?php endif; ?>

            <?php if (session()->get('tdk')) : ?>

              <div class="alert alert-primary alert-dismissible fade show mt-4" role="alert">
                <strong>Mohon Maaf,</strong> <?= session()->getFlashdata('tdk'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

            <?php endif; ?>

            <form method="POST" action="<?= base_url('/actionkantin') ?>">
              <div class="form-group">
                <label>Your Card</label>
                <input type="password" name="nis_siswa" placeholder="Scan Your Card" class="form-control p_input text-light">
              </div>
              <div class="text-left">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Masuk</button>
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