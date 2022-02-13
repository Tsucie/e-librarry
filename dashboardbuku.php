<?php
include './model/buku.php';
$buku = new buku();
session_start();
if (!isset($_SESSION['id'])) {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/logo/coding.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <title>E-Library | Buku</title>
</head>
<body>
    <header class="container pt-3">
        <nav class="navbar navbar-dark glass rounded-3">
            <div class="container-fluid justify-content-start gap-4">
                <a class="navbar-brand" href="#">E-Librarry</a>
                <a href="./dashboard.php" class="menu-list">User</a>
                <a href="#top" class="menu-list active">Buku</a>
            </div>
        </nav>
    </header>
    <main class="container pt-3">
        <h1 class="text-white">Table Buku</h1>
        <span class="d-flex justify-content-end mb-3">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#add-modal">Tambah Buku</button>
        </span>
        <table border="1" class="table table-responsive glass text-white rounded-3 overflow-hidden">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Buku</th>
                    <th>Nama User</th>
                    <th>Harga Buku</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                    $no = 1;
                    if (!empty($buku->getAllBuku()))
                    {
                        foreach ($buku->getAllBuku() as $b)
                        { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $b['buku']['id']; ?></td>
                                <td><?php echo $b['buku']['nama_buku']; ?></td>
                                <td><?php echo $b['user']['nama']; ?></td>
                                <td><?php echo $b['buku']['harga_buku']; ?></td>
                                <td class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-success" role="button">Detail</a>
                                    <a href="#" class="btn btn-primary" role="button">Edit</a>
                                    <button class="btn btn-danger" role="button" onclick="">Hapus</a>
                                </td>
                            </tr>
                    <?php } 
                    }
                    else echo '<tr><td colspan="6">Tidak ada data</td></tr>';
                ?>
            </tbody>
        </table>
    </main>
    <footer>
        
    </footer>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="add-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>spadkowakdoawkodkoaw</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>