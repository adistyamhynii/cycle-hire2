<?php

session_start();
require_once "../../configuration/database_connection.php";

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_description = $_POST['product_description'];
$product_image_name = $_FILES['product_image'] ['name'];
$product_image_tmp_name = $_FILES['product_image'] ['tmp_name'];
$product_image_directory = '../../images/';
$terupload = move_uploaded_file($product_image_tmp_name, $product_image_directory.$product_image_name);

$sql = "INSERT INTO motor (product_name, product_price, product_description, product_image)
VALUES ('$product_name', '$product_price', '$product_description', '$product_image_name')";

$conn->query($sql);

header('location:../manajemen_produk.php');