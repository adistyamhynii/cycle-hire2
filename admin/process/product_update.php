<?php

session_start();
require_once "../../configuration/database_connection.php";

$id_product = $_GET['id_product'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_description = $_POST['product_description'];
$product_image_name = $_FILES['product_image'] ['name'];
$product_image_tmp_name = $_FILES['product_image'] ['tmp_name'];
$product_image_directory = '../../images/';
$terupload = move_uploaded_file($product_image_tmp_name, $product_image_directory.$product_image_name);

$sql = "UPDATE motor SET product_name = '$product_name', product_price = '$product_price', 
product_image = '$product_image_name',product_description = '$product_description' WHERE
id_product=$id_product";  

$conn->query($sql);

header('location:../manajemen_produk.php');