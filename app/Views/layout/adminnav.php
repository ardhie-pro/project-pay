    <!-- Top Bar Start -->
    <div class="topbar">
        <?php $this->session = session(); ?>
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="<?= base_url('keuangan') ?>" class="logo">
                <span>
                    <img src="<?= base_url('IMG/11.png') ?>" alt="" height="55">
                </span>
                <i>
                    <img src="<?= base_url('IMG/10.png') ?>" alt="" height="22">
                </i>
            </a>
        </div>

        <nav class="navbar-custom">

            <ul class="navbar-right d-flex list-inline float-right mb-0">
                <li class="dropdown notification-list d-none d-sm-block">
                    <form role="search" class="app-search">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" placeholder="Search..">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell noti-icon"></i>
                        <span class="badge badge-pill badge-info noti-icon-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                        <!-- item-->
                        <h6 class="dropdown-item-text">
                            Notifications (37)
                        </h6>
                        <div class="slimscroll notification-item-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-flag"></i></div>
                                <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                            </a>
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                            View all <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li class="dropdown notification-list">
                    <div class="dropdown notification-list nav-pro-img">
                        <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?= base_url('IMG/9.png') ?>" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                        </div>
                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-effect waves-light">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>
                <li class="d-none d-sm-block">
                    <div class="dropdown pt-3 d-inline-block">
                        <a class="btn btn-header waves-effect waves-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Create New
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </li>
            </ul>

        </nav>

    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->

                <ul class="metismenu" id="side-menu">
                    <?php if ($this->session->sudahku != 1) {

                    ?>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="<?= base_url('keuangan') ?>" class="waves-effect">
                                <i class="mdi mdi-home"></i><span class="badge badge-primary float-right">3</span> <span> Dashboard </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Data Keuangan Siswa <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="<?= base_url('statusblokir'); ?>">Blokir</a></li>
                                <li><a href="<?= base_url('datasiswa'); ?>">Data Siswa</a></li>
                                <li><a href="<?= base_url('tanggal'); ?>">Tambah Tanggal</a></li>
                                <li><a href="<?= base_url('tanggalmasuk'); ?>">Keuangan Wemart</a></li>
                                <li><a href="<?= base_url('tanggalmym'); ?>">keuangan Kantin</a></li>
                                <li><a href="<?= base_url('tanggaltransfer'); ?>">keuangan Transfer</a></li>
                                <li><a href="<?= base_url('admintenda'); ?>">Tenda</a></li>



                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> User WEMART<span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span> </a>
                            <ul class="submenu">
                                <li><a href="<?= base_url('userwemart'); ?>">User WEMART</a></li>
                                <li><a href="<?= base_url('tanggalmasuk'); ?>">Data Pembayaran</a></li>
                                <li><a href="<?= base_url('nominal'); ?>">Badge</a></li>

                            </ul>
                        </li>
                    <?php  } else {
                    ?>

                        <li>
                            <a href="<?= base_url('logouttf'); ?>" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> Logout<span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span> </a>

                        </li>
                    <?php   } ?>



                </ul>

            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->