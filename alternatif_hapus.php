<?php

// Check If form submitted, insert form data into users table.

$idm = $_GET['id_sekolah'];


// include database connection file
include("koneksi.php");

// Insert user data into table
$result = mysqli_query($connect, "DELETE from alternatif  WHERE id_sekolah=$idm");

// Show message when user added
header("location:alternatif.php");
echo "<script type=text/javascript>
                       window.location.href='http://localhost/saw_sekolah/alternatif.php';
                       </script>";
