<?php
$connect = mysqli_connect("localhost","root","","brikkho");
$result = mysqli_query($connect,"SELECT * FROM product_data");
//session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/home.css">

    <title>Home</title>
  </head>
  <body>
    <nav class="navbar bg-dark navbar-expand-md">
      <div class="container">
        <a class="btn navar-brand" href="../html/index.html">brikkho</a>
        <ul class="navbar-nav mx-auto">
          <li class="navbar-item">
            <a class="btn navbar-link" href="#">Home</a>
          </li>
          <li class="navbar-item">
            <a class="btn navbar-link" href="cart.php">Cart</a>
          </li>
        </ul>
        <a class="btn navbar-link" href="logout.php"> Logout</a>
      </div>
    </nav>
    <?php
  //  echo "<h3>".$_SESSION['1stname']." ".$_SESSION['lastname']."</h3>";
     ?>
    <div class="container container-fluid">
      <h2>New Arrival</h2>
      <div class="row">
        <?php while ($row=mysqli_fetch_array($result)) {?>


        <div class="col-md-3">
          <div class="product-top">
            <img src="<?php echo $row['Product_Image'];?>" alt="">
            <form class="" action="insert.php" method="post">
              <input type="hidden" name="pImage" value="<?php echo $row['Product_Image'];?>">
              <input type="hidden" name="pName" value="<?php echo $row['Product_Name']; ?>">
              <input type="hidden" name="pPrice" value="<?php echo $row['Product_Price']; ?>">

            <div class="overlay">
              <button type="submit" name="quickshop" class="btn btn-secondary" title="Quick Shop" name="button"><i class="fa fa-eye"></i></button>
              <button type="submit" name="wishlist" class="btn btn-secondary" title="Add to Wishlist" name="button"><i class="fa fa-heart-o"></i></button>
              <button type="submit" name="cart" class="btn btn-secondary" title="Add to Cart" name="button"><i class="fa fa-shopping-cart"></i></button>
            </div>
            </form>

            <div class="product-bottom text-center">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
              <i class="fa fa-star-o"></i>
              <h3 ><?php echo $row['Product_Name']; ?></h3>
              <h5><?php echo $row['Product_Price']; ?></h5>

            </div>

          </div>
        </div>
        <?php   } ?>

      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
