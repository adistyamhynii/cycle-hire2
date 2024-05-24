<?php

require_once "../configuration/library.php";
require_once "../configuration/database_connection.php";

check_admin();

$id_product = $_GET['id_product'];
$sql = "SELECT * FROM motor WHERE id_product=$id_product";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

?>

<html>
<head>
    <title>Admin - CYCLE HIRE</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" type="text/css" href="../plugins/fancybox/jquery.fancybox.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column-12">
            <ul class="daftar-menu">
                <li><a href="../admin">Beranda Admin</a></li>
                <li class="active"><a href="manajemen_produk.php">Manajemen Produk</a></li>
                <li><a href="../index.php" target="_blank">Lihat Website</a></li>
                <li><a href="process/logout.php">Logout</a></li>
            </ul> 
        </div>
    </div>

    
    <div class="row">
        <div class="column-12">
            <h1 align="center">Halaman Manajemen Produk</h1>
            <br/>
            <br/>
            <br/>
        </div>
        <div class="column-12">
            <h3>Isi form dibawah ini untuk Edit Produk :</h3>
            <form action="process/product_update.php?id_product=<?php echo $id_product ?>"
method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control" name="product_name" value="<?php echo
$row['product_name'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Harga Produk</label>
                    <input type="text" class="form-control" name="product_price" value="<?php echo
$row['product_price'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Gambar Produk</label>
                    <br />
                    <img src="../images/<?php echo $row['product_image'] ?>" width="150">
                    <br />
                    <br />
                    <input type="file" class="form-control" name="product_image" value="<?php echo
$row['product_image'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi Produk</label>
                    <textarea class="form-control" name="product_description" required><?php echo
$row['product_description'] ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Perbaharui Produk</button>
                    <a href="manajemen_produk.php" class="btn btn_warning">Kembali ke Daftar Produk</a>
                </div>
            </form>
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