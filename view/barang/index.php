<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Barang</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis_barang/index.php">jenis_barang</a>
        </li>
       </ul>
    </div>
</div>
</nav>
<div class="container">
    <h1>Data Barang</h1>
    <a href="tambah.php" class="btn btn-info">Tambah Data Baru</a>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID_barang</th>
          <th scope="col">Nama_barang</th>
          <th scope="col">ID_jenis</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Aksi</th>
        </tr>
        <?php
            include '../../config/koneksi.php';
            $query = mysqli_query($conn, "SELECT * FROM barang");
            $no=1;
            if(mysqli_num_rows($query)){
                echo "Data Ada";
                while($result = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $result['id_barang'] ?></td>
                        <td><?php echo $result['nama_barang'] ?></td>
                        <td><?php echo $result['id_jenis'] ?></td>
                        <td><?php echo $result['harga'] ?></td>
                        <td><?php echo $result['stok'] ?></td>
                        <td>
                            <a href="" class="btn btn-warning">Edit </a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                $no++;
                }
            } else{
                echo "Data Kosong";
            }
            ?>
            </thead>
          </table>
          </div>    
</body>
</html>