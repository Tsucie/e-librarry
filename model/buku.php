<?php
include './auth/database.php';
class buku extends database
{
    // Method menampilkan semua data buku
    function getAllBuku()
    {
        $query = "SELECT * FROM buku
                    INNER JOIN user WHERE user.id = buku.id_user
                    ORDER BY buku.nama_buku";
        $data = mysqli_query($this->koneksi, $query);
        if (mysqli_num_rows($data) > 0) {
            while($d = mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil;
        }
        else return null;
    }

    // Method menampilkan data buku berdasarkan id
    function getBukuById($id)
    {
        $query = "SELECT * FROM buku WHERE id = '$id'";
        $data = mysqli_query($this->koneksi, $query);
        if (mysqli_num_rows($data) == 1) {
            while($d = mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil;
        }
        else return null;
    }

    // Method menambah data buku
    function addBuku($id_user, $nama_buku, $harga_buku)
    {
        mysqli_query($this->koneksi, "INSERT INTO buku VALUES ('','$id_user','$nama_buku','$harga_buku')");
    }

    // Method mengedit data buku
    function editBuku($id, $nama_buku, $harga_buku)
    {
        mysqli_query($this->koneksi, "UPDATE buku SET nama_buku='$nama_buku', harga_buku='$harga_buku' WHERE id='$id'");
    }

    // Method menghapus data buku
    function hapusBuku($id)
    {
        mysqli_query($this->koneksi, "DELETE FROM buku WHERE id='$id'");
    }
}
?>