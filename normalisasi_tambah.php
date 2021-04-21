<?php
include "koneksi.php";
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="alternatif.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="alternatif.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                SIMPLE ADDITIVE WEIGHTING
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="alternatif.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Alternatif</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kriteria.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Kriteria</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="subkriteria.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Sub Kriteria</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="normalisasi.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pembobotan</span></a>
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





                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="col-lg-7">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">TAMBAH ALTERNATIF</h1>


                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="panel-heading">
                                    Form Tambah Pembobotan
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form action="normalisasi_tambah.php" method="post" name="form1">
                                            <table width="25%" border="0">
                                                <div class="form-group">
                                                    <label>Masukkan No NPSN</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="id_sekolah" placeholder="NPSN" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Akreditasi</label>
                                                    <div>
                                                        <select name="akreditasi" class="form-control">
                                                            <option>Pilih Akreditasi</option>
                                                            <?php
                                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='1' ORDER BY id_sub asc";
                                                            $hasil = mysqli_query($connect, $query);
                                                            while ($data = mysqli_fetch_array($hasil)) {
                                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Fasilitas</label>
                                                    <div>
                                                        <select name="fasilitas" class="form-control">
                                                            <option>Pilih Fasilitas</option>
                                                            <?php
                                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='2' ORDER BY id_sub asc";
                                                            $hasil = mysqli_query($connect, $query);
                                                            while ($data = mysqli_fetch_array($hasil)) {
                                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Biaya Masuk</label>
                                                    <div>
                                                        <select name="biaya_masuk" class="form-control">
                                                            <option>Pilih Biaya</option>
                                                            <?php
                                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='4' ORDER BY id_sub asc";
                                                            $hasil = mysqli_query($connect, $query);
                                                            while ($data = mysqli_fetch_array($hasil)) {
                                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Uang SPP</label>
                                                    <div>
                                                        <select name="uang_SPP" class="form-control">
                                                            <option>Pilih Uang SPP</option>
                                                            <?php
                                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='5' ORDER BY id_sub asc";
                                                            $hasil = mysqli_query($connect, $query);
                                                            while ($data = mysqli_fetch_array($hasil)) {
                                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Prestasi</label>
                                                    <div>
                                                        <select name="prestasi" class="form-control">
                                                            <option>Pilih Prestasi</option>
                                                            <?php
                                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='3' ORDER BY id_sub asc";
                                                            $hasil = mysqli_query($connect, $query);
                                                            while ($data = mysqli_fetch_array($hasil)) {
                                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Jarak</label>
                                                    <div>
                                                        <select name="jarak" class="form-control">
                                                            <option>Pilih Jarak</option>
                                                            <?php
                                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='6' ORDER BY id_sub asc";
                                                            $hasil = mysqli_query($connect, $query);
                                                            while ($data = mysqli_fetch_array($hasil)) {
                                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <tr>
                                                    <td><input type="submit" name="Submit" value="Tambah" class="btn btn-primary btn-sm"></td>
                                                    <td><a href="alternatif.php" value="Batal" class="btn btn-danger btn-sm">Batal</a></td>
                                                </tr>
                                            </table>
                                        </form>

                                    </div>

                                    <?php

                                    // Check If form submitted, insert form data into users table.
                                    if (isset($_POST['Submit'])) {
                                        $id = $_POST['id_sekolah'];
                                        $akreditasi = $_POST['akreditasi'];
                                        $fasilitas = $_POST['fasilitas'];
                                        $biaya_masuk = $_POST['biaya_masuk'];
                                        $uang_SPP = $_POST['uang_SPP'];
                                        $prestasi = $_POST['prestasi'];
                                        $jarak = $_POST['jarak'];


                                        // include database connection file
                                        include_once("koneksi.php");


                                        $result = mysqli_query($connect, "INSERT INTO normal VALUES('','$id','$akreditasi','$fasilitas','$biaya_masuk','$uang_SPP','$prestasi','$jarak')") or die(mysqli_error($connect));

                                        echo "<script>    alert('Data Add successfully');    window.location.href='http://localhost/saw_sekolah/normalisasi.php';
    </script>";
                                    }
                                    ?>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>


</body>

</html>