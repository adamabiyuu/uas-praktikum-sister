<?php
include "client_proyek.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard User</title>

    <!-- Custom fonts for this template-->
    <link href="client/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <!-- Custom styles for this template-->
    <link href="client/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">USER</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- MENU NAVIGASI -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="form_pekerja.php" aria-expanded="true">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Form Pekerja</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="form_tugas.php" aria-expanded="true">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Form Tugas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="form_proyek.php" aria-expanded="true">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Form Proyek</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="form_tugas_pekerja.php" aria-expanded="true">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Form Tugas Pekerja</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="lihat_pekerja.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Pekerja</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lihat_tugas.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Tugas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lihat_proyek.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Proyek</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lihat_tugas_pekerja.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Tugas Pekerja</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Tables -->
        </ul>
        <!-- END MENU NAVIGASI -->


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

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Cari" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User 1</span>
                                <img class="img-profile rounded-circle" src="client/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Form Proyek</h1>
                    <!-- AWAL KONTAINER -->
                    <div class="container">
                        <!-- AWAL ROW -->
                        <div class="row1">
                            <div class="col-md-9 mx-auto">
                                <!-- AWAL CARD-1 -->
                                <div class="card">
                                    <div class="card-header bg-info text-center ">
                                        FORM INPUT PROYEK
                                    </div>
                                    <div class="card-body">
                                        <!-- AWAL FORM -->
                                        <form method="POST" action="proses_proyek.php">
                                            <input type="hidden" name="aksi" value="tambah" />
                                            <div class="mb-3">
                                                <label class="form-label">ID PROYEK</label>
                                                <input type="text" name=id_proyek class="form-control" placeholder="Masukkan ID ex: P01">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama Proyek</label>
                                                <input type="text" name=nama_proyek class="form-control" placeholder="Masukkan Username Anda">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Mulai</label>
                                                <input type="date" name=tanggal_mulai class="form-control" placeholder="Deskripsikan Proyek Anda">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Selesai</label>
                                                <input type="date" name=tanggal_selesai class="form-control" placeholder="Masukkan IK Anda">
                                            </div>
                                            <div class='mb-3'>
                                                <label class="form-label">Status Proyek</label>
                                                <select class="form-select" name="status_proyek">
                                                    <option selected>-Pilih-</option>
                                                    <option value="In Progress">In Progress</option>
                                                    <option value="Completed">Completed</option>
                                                    <option value="Pending">Pending</option>
                                                </select>
                                            </div>
                                            <div class="text-center">
                                                <hr>
                                                <button class="btn btn-primary" name="bsimpan" type="submit">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer bg-info">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- AKHIR CARD-1 -->
                        <!-- AKHIR ROW -->
                    </div>
                    <!-- AKHIR KONTAINER -->
                    <!-- Bootstrap core JavaScript-->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

                    <script src="client/vendor/jquery/jquery.min.js"></script>
                    <script src="client/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="client/vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="client/js/sb-admin-2.min.js"></script>

</body>

</html>