<?php

session_start();

require_once "../../configuration/database_connection.php";

/**
 * Untuk menampung variable dari tipe data get
 */

 $id_product = $_GET['id_product'];
 $sql = "DELETE FROM motor WHERE id_product=$id_product";

 $conn->query($sql);
 header("Location: ../manajemen_produk.php");
 
?>