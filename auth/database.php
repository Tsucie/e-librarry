<?php
class database
{
    var $hostname = "localhost"; // Database server atau hostname
    var $username = "root"; // Username akun DBA pada database
    var $password = ""; // Passwork akun DBA pada database
    var $database = "perpus"; // Nama database
    var $port = 3306; // Port database
    var $koneksi; // Properti koneksi yang akan bisa diakses oleh object instance

    // Membuat koneksi ketika class koneksi di instance
    function __construct()
    {
        // PHP 7.3
        $this->koneksi = mysqli_connect($this->hostname, $this->username, $this->password, $this->database, $this->port);
    }
}
?>