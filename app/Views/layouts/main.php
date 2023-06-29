<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik - SMAN 3 Kuningan</title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- SB Admin 2 CSS -->
    <link href="<?= base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
        <i class="fas fa-school"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SMAN 3 Kuningan</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('siswa')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Siswa</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('guru')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Guru</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('pelajaran')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Pelajaran</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('alumni')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Alumni</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('staftatausaha')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Staf Tata Usaha</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url('img/profile.jpg') ?>">
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
                <!-- End of Main Content -->
            </div>
            <!-- End of Content Wrapper -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <span>&copy; 2023 Acep Triana. All rights reserved.</span>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>

    <!-- Bootstrap JavaScript -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

    <!-- SB Admin 2 JavaScript -->
    <script src="<?= base_url('js/sb-admin-2.min.js') ?>"></script>
</body>

</html>
