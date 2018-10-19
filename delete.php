<?php
require_once("koneksidb.php");
$nim   = $_GET['nim'];
$query="DELETE from mahasiswa where nim ='$nim'";
mysqli_query($conn, $query);

header("location:tampilan.php");
?>