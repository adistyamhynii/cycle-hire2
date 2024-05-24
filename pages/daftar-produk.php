<?php

require_once "../configuration/database_connection.php";

?>

<html>
<head>
    <title>CYCLE HIRE - Tempat Sewa Motor Termurah di Bali</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" type="text/css" href="../plugins/fancybox/jquery.fancybox.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column-12">
            <ul class="daftar-menu">
                <li><a href="../index.php">Beranda</a></li>
                <li><a href="daftar-produk.php">Daftar Produk</a></li>
                <li><a href="tentang-kami.php">Tentang Kami</a></li>
                <li><a href="kontak-kami.php">Kontak Kami</a></li>
                <li><a href="../admin/process/login.php">Halaman Login</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="column-12">
            <h1 align="center">Daftar Produk</h1>
            <p align="center">Cycle Hire merupakan tempat untuk menyewa sepeda motor dengan harga yang terjangkau dengan banyak pilihan sepeda motor antara lain, 
    Nmax, Beat, Vario, dll, dengan free helm SNI di setiap penyewaan.</p>
        </div>
    </div>

    <div class="row daftar-produk">

        <?php

        $sql = "SELECT * FROM motor ORDER BY product_name ASC";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) { ?>

                    <div class="column-3">
                        <a data-fancybox="gallery" href="../images/<?php echo $row['product_image'] ?>">
                            <img src="../images/<?php echo $row['product_image'] ?>" class="img-responsive">
                        </a>
                        <h2 align="center"><?php echo $row['product_name'] ?></h2>
                        <div class="harga-produk">Rp. <?php echo number_format($row['product_price']) ?></div>
                        <p align="center"><?php echo $row['product_description'] ?></p>
                        <div class="text-center">
                            <a href="https://wa.me/628990086701?text=Saya%20tertarik%20untuk%20membeli%20produk%20<?php echo urlencode($row['product_name']) ?>%20segera." target="_blank">
                                <img src="../images/whatsapp-button.png" width="160">
                            </a>
                        </div>
                    </div>

                    <?php
                }
            }
        }
        ?>
    </div>
</div>    

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="column-12">
                <h2 align="center">Cycle Hire</h2>
                <ul class="footer-menu">
                    <li><a href="">Beranda</a></li>
                    <li><a href="">Daftar Produk</a></li>
                    <li><a href="">Tentang Kami</a></li>
                    <li><a href="">Kontak Kami</a></li>
                </ul>
                <div class="text-center">
                    Alamat: Tembau, Jl. Sangalangit, Penatih, Kec. Denpasar Tim., Kota Denpasar, Bali 80238
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