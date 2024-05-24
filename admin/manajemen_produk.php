<?php
require_once "../configuration/library.php";
require_once "../configuration/database_connection.php";

check_admin();

?>

<html>
<head>
    <title>Admin - CYCLE HIRE</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" type="text/css" href="plugins/fancybox/jquery.fancybox.css">
</head>
<body>
    <div class="container">
        <div class="row">
           <div class="column-12">
              <ul class="daftar-menu">
                   <li><a href="../admin/home.php">Beranda Admin</a></li>
                   <li class="active"><a href="manajemen_produk.php">Manajemen Produk</a></li>
                   <li><a href="../index.php" target="_blank">Lihat Website</a></li>
                   <li><a href="process/logout.php">Logout</a></li>
              </ul>
            
        </div>
    </div>

    <div class="row">
        <div class="column-12">
            <h1 align="center">Halaman Manajemen Produk</h1>
            <br />
            <br />
            <br />
        </div>
    <div class="column-12">
        <div class="text-right">
            <a href="tambah_produk.php" class="btn btn-success">Tambah Produk</a>
        </div>
        <br />
        <table class="table table-bordered">
            <thead>
            <tr>
                    <th>No</th>
                    <th>Gambar Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Menu</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM motor ORDER BY product_name ASC";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    $number = 1;
                    while ($row = mysqli_fetch_array($result)) { ?>
                    </tr>
                         <td><?php echo $number++ ?>.</td>
                         <td>
                            <img src="../images/<?php echo $row['product_image']?>" width="150">
                         </td>
                         <td><?php echo $row['product_name'] ?></td>
                         <td><?php echo $row['product_price'] ?></td>
                         <td><?php echo $row['product_description'] ?></td>
                         <td><a href="edit_produk.php?id_product=<?php echo $row['id_product'] ?> " class="btn btn-success">Edit</a>
                        <a href="process/product_delete.php?id_product=<?php echo
                        $row['id_product'] ?>" class="btn btn-danger">Hapus</a>
                               </td>
                    </tr>
                    <?php


                      
                }
                }
            }
            ?>
            </tbody>
        </table>
    </div>
    </div>

</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="column-12">
                <h2 align="center">Cycle Hire</h2>
                <div class="text-center">
                    Alamat: Tembau, Jl. Sangalangit, Penatih, Kec. Denpasar Tim., Kota Denpasar, Bali
        80238            
                </div>
                <div class="text-center">
                    Telepon: (0361) 464700
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-credit">
    <div class="container">
        <div class="row">
            <div class="column-12 text-center">
            Created by Cycle Hire 2024
        </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script type="text/javascript" src="../plugins/fancybox/jquery.fancybox.js"></script>

</body>
</html>