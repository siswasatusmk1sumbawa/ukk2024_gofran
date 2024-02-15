<?php
include 'koneksi.php';

$username = $_POST['UserName'];
$password = md5($_POST['Pasword']);
$email = $_POST['Email'];
$namalengkap = $_POST['NamaLengkap'];
$alamat = $_POST['Alamat'];

$sql = mysqli_query($koneksi, "INSERT INTO user VALUES ('','
$username','$password','$email','$namalengkap','$alamat')");
if ($sql) {
    echo "<script>
    alert('pendaftaran akun berhasil');
    location.href='../login.php';
    
    </script>";
}



?>