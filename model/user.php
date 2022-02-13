<?php
include './auth/database.php';
class user extends database
{
    // Menampilkan semua data user
    function getAllUser()
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM user");
        if (mysqli_num_rows($data) > 0)
        {
            while ($d = mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil; 
        }
        else return null;
    }

    // Menampilkan data user bedasarkan id
    function getUserById($id)
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM user WHERE id='$id'");
        if (mysqli_num_rows($data) == 1)
        {
            while ($d = mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil;
        }
        else return null;
    }

    // Menambah data user
    function addUser($username, $password, $nama)
    {
        mysqli_query($this->koneksi, "INSERT INTO user VALUES('','$username','$password','$nama')");
    }

    // Mengedit data user
    function editUser($id, $username, $password, $nama)
    {
        mysqli_query($this->koneksi, "UPDATE user SET username='$username',`password`='$password',nama='$nama' WHERE id='$id'");
    }

    // Menghapus data user
    function hapusUser($id)
    {
        mysqli_query($this->koneksi, "DELETE FROM user WHERE id='$id'");
    }
}
?>