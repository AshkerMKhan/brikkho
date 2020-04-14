
<?php
session_start();
$RID = $_SESSION['id'];
$connect = mysqli_connect("localhost","root","","brikkho");

if (isset($_POST['productInput'])) {
$product_name = $_POST['inputName'];
$product_price = $_POST['inputPrice'];
$product_image = $_FILES['inputImage']['name'];
$product_image_type = $_FILES['inputImage']['type'];
$product_image_size = $_FILES['inputImage']['size'];
$product_image_tmp_name = $_FILES['inputImage']['tmp_name'];
$product_image_store = "../image/productImage/".$product_image;
$input_query = "INSERT INTO product_data(Product_Name,Product_Price,Product_Image) VALUES ('$product_name','$product_price','$product_image_store')";
$run_query = mysqli_query($connect,$input_query);
if ($run_query) {

  echo "Data updated successfully";
  header('Location:uploadProduct.php');
}
else {

  echo "Upload Error";
}

move_uploaded_file($product_image_tmp_name,$product_image_store);
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/uploadproduct.css">

    <title>Product Upload</title>
  </head>
  <body>
    <nav class="navbar bg-dark navbar-expand-md">
      <div class="container">
        <a class="btn navar-brand text-light" href="../html/index.html">brikkho</a>
        <a class="btn navbar-link text-light" href="logout.php"> Logout</a>
      </div>
    </nav>
    <div class="container container-fluid">
      <div class="row">
          <!--Input product data-->
          <form class="form" action="uploadProduct.php" method="POST" enctype="multipart/form-data">
            <!--Input Name Field-->
            <div class="input-group">

            <div class="form-group mt-3 ">
              <input class="form-control" type="text" name="inputName" placeholder="Product Name">
            </div>
            <!--Input product data-->
            <div class="form-group mt-3 mx-3">
              <input class="form-control" type="text" name="inputPrice" placeholder="Product Price" >
            </div>
            <!--Input product Image-->
            <div class="form-group mt-3">
              <label for="inputImage">Enter Image</label>
              <input type="file" name="inputImage" >
            </div>
            <!--submit button-->
            <div class="form-group mt-3  text-center">
              <button class="btn bg-success" type="submit" name="productInput">Input</button>
            </div>

          </div>
          </form>
      </div>
      <div class="Product Table">
        <table class="table">
          <thead>
            <tr class="text-center">
              <th scope="col">ID</th>
              <th scope="col1">Product Image</th>
              <th scope="col2">Product Name</th>
              <th scope="col3">Product Price</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $select_table = "SELECT * FROM product_data";
            $execute_query = mysqli_query($connect,$select_table);
            while ($row = mysqli_fetch_array($execute_query)) {?>

            <tr class="text-center">
              <td><?php echo $row['ID']; ?></td>
              <td width="40"><img class="img-fluid" src="<?php echo $row['Product_Image'];?>"></td>
              <td><?php echo $row['Product_Name']; ?></td>
              <td><?php echo $row['Product_Price']; ?></td>
            </tr>
            <?php
          }
          ?>
          </tbody>
        </table>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
