<?php
session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Cart</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 style="margin-bottom:30px; margin-top:80px;">My Shopping List</h2>
        </div>
        <div class="col-md-12">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $quantity = 1;
              foreach ($_SESSION as $products){
              echo "<tr>";
              foreach ($products as $key => $value) {
                if ($key==2) {
                  echo "<td style='vertical-align:middle'>".$value."</td>";
                  $p=$value;
                }elseif ($key==1) {
                  echo "<td style='vertical-align:middle'>".$value."</td>";
                }elseif ($key==0) {
                  echo "<td width='80'><img src='$value' height='60'></td>";
                }
                }
                echo "<td style='vertical-align:middle' width='80'>".$quantity."</td>";
                $total = $quantity * $p;
                echo "<td>".$total."</td>";
                echo"<td><input type='submit' name='event' value='update' class='btn btn-warning'></td>" ;
                echo"<td><input type='submit' name='event' value='delete' class='btn btn-danger'></td>" ;
              echo "</tr>";
              }
               ?>
            </tbody>
          </table>
        </div>
        <div class="col-md-12">
          <div class="pull-right">
            <a href="home.php" class="btn">Back To shopping</a>
            <a href="#" class="btn btn-success">Checkout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
