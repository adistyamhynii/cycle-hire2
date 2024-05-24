<?php
require_once "../configuration/library.php";

check_login_page();

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
            <h1 align="center">Halaman Login Cycle Hire</h1>
            <hr />
        </div>
        <div class="column-6">
            <img src="../images/admin.jpg" class="img-responsive">
        </div>
        <div class="column-6">
            <br />
            <br />
            <br />
            <h3>Isi form dibawah untuk Login :</h3>
            <form action="process/login.php" method="post">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <button type="sumbit" class="btn btn-success">Login</button>
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