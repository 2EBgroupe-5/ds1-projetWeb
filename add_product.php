<?php
require 'product.php';
require 'config.php';


session_start();
require('header.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $image = $_POST["image"];
    $category = $_POST["category"];
    //$link = $_POST["link"];
    //$image = "/image/$link";
    $product = new Product($name, $price, $image,$category);

    // Insert product into database
    $sql = "INSERT INTO product (name, price, image ,category ) VALUES ('" . $product->getName() . "', '" . $product->getPrice() . "', '" . $product->getImage() . "','" . $product->getCategory() ."')";

    if (mysqli_query($conn, $sql)) {
        echo "Product added successfully";
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
