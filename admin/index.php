selamat datang
<?php
session_start();

echo $_SESSION['UserName'];

?>

<a href="../config/aksi.logout.php">logout</a>