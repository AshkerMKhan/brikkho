<?php

if (isset($_POST['cart'])) {
  session_start();
  $image = $_POST['pImage'];
  $name = $_POST['pName'];
  $price = $_POST['pPrice'];
  $product = array($image,$name,$price);
  $_SESSION[$name] = $product;
  header('location:home.php');
  }


?>
