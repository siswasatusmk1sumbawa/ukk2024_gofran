<?php
session_start();
include 'koneksi.php';

$username = $_POST['UserName'];
$password = md5($_POST['Pasword']);

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE
UserName='$username' AND Pasword='$password'");
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $_SESSION['UserName'] = $username;
    $_SESSION['status'] = 'login';
    echo "<script>
    alert('login berhasil');
    location.href='../admin/index.php';
    </script>";
}else {
    echo "<script>
    alert('username atau pasword salah!');
    location.href='../login.php';
    </script>";
}

?>