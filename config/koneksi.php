<?php
$hostname = 'localhost';
$userdb = 'root';
$passdb = '';  
$namedb = 'ukk_gofran';

$koneksi = mysqli_connect ($hostname,$userdb,$passdb,$namedb);

if ($koneksi) {
    echo "Terhubung";
}else {
    echo "tidak terhubung";
}

?>