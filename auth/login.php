<?php
session_start();
$_SESSION['user'] = NULL;

include './database.php';
$db = new database();

if (isset($_POST['submit'])) {
    $user = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['password']);
    $query = mysqli_query($db->koneksi, "SELECT * FROM user WHERE `username` = '$user' AND `password` = '$pass'");
    $result = mysqli_num_rows($query);

    if ($result == 1) {
        $data = mysqli_fetch_array($query);
        $_SESSION['id'] = $data['id'];
        $_SESSION['nama'] = $data['nama'];
        header('location:../dashboard.php');
    }
    else {
        echo "<script>alert('Username atau Password salah gan!');</script>";
    }
}
?>