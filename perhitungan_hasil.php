<?php
include "koneksi.php";
$bobot_akreditasi = $_POST['bobot_akreditasi'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="perhitungan.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">User</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="perhitungan.php.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                SIMPLE ADDITIVE WEIGHTING
            </div>

            <li class="nav-item">
                <a class="nav-link" href="perhitungan.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pemilihan Sekolah</span></a>
            </li>
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Logout
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="logout.php">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <img class="img-profile rounded-circle" src="assets/img/Jeffrey.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    My Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->





                <div class="container-fluid">

                    <!-- <div id="page-inner" style="padding: 100px; "> -->

                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-head-line"> Hasil Pemilihan </h1>
                        </div>
                    </div>
                    <div class="col-md-16">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div>
                                    <tr>
                                        <th></th>
                                        <th>Bobot </th>
                                    </tr>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NPSP</th>
                                                <th>Nama</th>
                                                <th>Akreditasi</th>
                                                <th>Fasilitas</th>
                                                <th>Biaya Masuk</th>
                                                <th>Uang SPP</th>
                                                <th>Prestasi</th>
                                                <th>Jarak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $nomor = 0;
                                            $hasil = mysqli_query($connect, "select * from normal, alternatif where normal.id_sekolah =alternatif.id_sekolah");
                                            while ($data = mysqli_fetch_array($hasil)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor = $nomor + 1; ?></td>
                                                    <td><?php echo $data['id_sekolah']; ?></td>
                                                    <td><?php echo $data['nama']; ?></td>
                                                    <td><?php echo $data['Akreditasi2']; ?></td>
                                                    <td><?php echo $data['Fasilitas2']; ?></td>
                                                    <td><?php echo $data['Biaya_masuk2']; ?></td>
                                                    <td><?php echo $data['Uang_SPP2']; ?></td>
                                                    <td><?php echo $data['Prestasi2']; ?></td>
                                                    <td><?php echo $data['Jarak2']; ?></td>
                                                </tr>
                                            <?php }    ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php

                        #Cari nilai maximal
                        $carimax = mysqli_query($connect, "SELECT max(Akreditasi2) as max1,
    max(Fasilitas2) as max2,
    max(Biaya_masuk2) as max3,
    max(Uang_SPP2) as max4,
    max(Prestasi2) as max5,
    max(Jarak2) as max6
    FROM normal");
                        $max = mysqli_fetch_array($carimax);
                        # Cari nilai minimal
                        $carimin = mysqli_query($connect, "SELECT min(Akreditasi2) as min1, 
min(Fasilitas2) as min2,
    min(Biaya_masuk2) as min3,
    min(Uang_SPP2) as min4,
    min(Prestasi2) as min5,
    min(Jarak2) as min6 
    FROM normal");
                        $min = mysqli_fetch_array($carimin);
                        ?>
                        <!-- /. PAGE INNER  -->
                        <div class="col-md-16">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div>
                                        Normalisasi Data
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="datatable table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NPSP</th>
                                                    <th>Nama</th>
                                                    <th>Akreditasi</th>
                                                    <th>Fasilitas</th>
                                                    <th>Biaya Masuk</th>
                                                    <th>Uang SPP</th>
                                                    <th>Prestasi</th>
                                                    <th>Jarak</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $nomor = 0;
                                                $hasil = mysqli_query($connect, "select * from normal JOIN alternatif ON normal.id_sekolah =alternatif.id_sekolah where Akreditasi='$bobot_akreditasi' limit 10");
                                                while ($data = mysqli_fetch_array($hasil)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $nomor = $nomor + 1; ?></td>
                                                        <td><?php echo $data['nama']; ?></td>
                                                        <td><?php echo round($data['Akreditasi2'] / $max['max1'], 2); ?></td>
                                                        <td><?php echo round($data['Fasilitas2'] / $max['max2'], 2); ?></td>
                                                        <!-- <td><?php echo round($data['Biaya_masuk3'] / $max['max2'], 2); ?></td>
                                                        <td><?php echo round($data['Uang_SPP4'] / $max['max2'], 2); ?></td> -->
                                                        <td><?php echo round($min['min3'] / $data['Biaya_masuk2'], 2); ?></td>
                                                        <td><?php echo round($min['min4'] / $data['Uang_SPP2'], 2); ?></td>
                                                        <td><?php echo round($data['Prestasi2'] / $max['max5'], 2); ?></td>
                                                        <td><?php echo round($data['Jarak2'] / $max['max6'], 2); ?></td>

                                                        <!-- <td><?php echo $data['Jarak2']; ?></td> -->
                                                    </tr>
                                                <?php }    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $bobot_fasilitas = $_POST['bobot_fasilitas'];
                            $bobot_biaya_masuk = $_POST['bobot_biaya_masuk'];
                            $bobot_uang_SPP = $_POST['bobot_uang_SPP'];
                            $bobot_prestasi = $_POST['bobot_prestasi'];
                            $bobot_jarak = $_POST['bobot_jarak'];
                            ?>
                            <div class="col-md-16">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div>
                                            Perangkingan Data
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="datatable table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="rangking">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>NPSP</th>
                                                        <th>Nama</th>
                                                        <th>Akreditasi</th>
                                                        <th>Fasilitas</th>
                                                        <th>Biaya Masuk</th>
                                                        <th>Uang SPP</th>
                                                        <th>Prestasi</th>
                                                        <th>Jarak</th>
                                                        <th>Hasil Perangkingan </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $nomor = 0;
                                                    $hasil = mysqli_query($connect, "select alternatif.nama,
                                        alternatif.Akreditasi,
                                        alternatif.Fasilitas,
                                        alternatif.Biaya_masuk,
                                        alternatif.Uang_SPP,
                                        alternatif.Prestasi,
                                        alternatif.Jarak,
                                        round(
                                            ((normal.fasilitas2 / $max[max2]) * $bobot_fasilitas) +
                                            (($min[min3] / normal.biaya_masuk2) * $bobot_biaya_masuk) +
                                            (($min[min4] / normal.uang_SPP2) * $bobot_uang_SPP) +
                                            ((normal.prestasi2 / $max[max5]) * $bobot_prestasi) +
                                            ((normal.jarak2 / $max[max6]) * $bobot_jarak) 
                                            ,2) as ranks
                                    FROM normal JOIN alternatif ON normal.id_sekolah=alternatif.id_sekolah where Akreditasi='$bobot_akreditasi'  ORDER BY ranks DESC limit 10");
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $nomor = $nomor + 1; ?></td>
                                                            <td><?php echo $data['nama']; ?></td>
                                                            <td><?php echo $data['Akreditasi2'] ?></td>
                                                            <td><?php echo $data['Fasilitas'] ?></td>
                                                            <td><?php echo $data['Biaya_masuk'] ?></td>
                                                            <td><?php echo $data['uang_SPP'] ?></td>
                                                            <td><?php echo $data['Prestasi'] ?></td>
                                                            <td><?php echo $data['Jarak'] ?></td>
                                                            <td><?php echo $data['ranks'] ?></td>
                                                        </tr>
                                                    <?php }    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
            <!-- End of Content Wrapper -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="assets/vendor/jquery/jquery.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="assets/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="assets/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="assets/js/demo/chart-area-demo.js"></script>
            <script src="assets/js/demo/chart-pie-demo.js"></script>

            <!-- Page level plugins -->
            <!-- <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script> -->
            <script src="assets/js/custom.js"></script>
            <!-- Page level custom scripts -->
            <!-- <script src="assets/js/demo/datatables-demo.js"></script> -->
            <script>
                $(function() {
                    $("#rangking").tablesorter();
                });
            </script>

</body>

</html>