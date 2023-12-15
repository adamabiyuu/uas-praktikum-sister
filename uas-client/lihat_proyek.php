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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Cari"
                                aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User 1</span>
                                <img class="img-profile rounded-circle" src="client/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
                    <form method="post" action="">
                        <h1>Data Proyek</h1>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>ID Proyek </th>
                                    <th>Nama Proyek</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Status Proyek</th>
                                    <th>Ubah</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // include "koneksi.php";
                                include "client_proyek.php";
                                $no = 1;
                                $data_array = $proyek->tampil_semua_proyek();
                                foreach ($data_array as $r) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $no ?>
                                        </td>
                                        <td>
                                            <?= $r->id_proyek ?>
                                        </td>
                                        <td>
                                            <?= $r->nama_proyek ?>
                                        </td>
                                        <td>
                                            <?= $r->tanggal_mulai ?>
                                        </td>
                                        <td>
                                            <?= $r->tanggal_selesai ?>
                                        </td>
                                        <td>
                                            <?= $r->status_proyek ?>
                                        </td>
                                        <td><a class="btn btn-warning"
                                                href="edit_proyek.php?id_proyek=<?= $r->id_proyek ?>">Ubah</a>
                                        </td>
                                        <td><a class="btn btn-danger"
                                                href="proses_proyek.php?aksi=hapus&id_proyek=<?= $r->id_proyek ?>"
                                                onclick="return confirm('Apakah Anda ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                }
                                unset($data_array, $r, $no);
                                ?>
                        </table>
                        </tbody>
                        </table>
                    </form>


                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="client/vendor/jquery/jquery.min.js"></script>
                <script src="client/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="client/vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="client/js/sb-admin-2.min.js"></script>

</body>

</html>