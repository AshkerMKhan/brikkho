

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brikkho";
$connection = mysqli_connect($servername,$username,$password,$dbname);
ob_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link  href="../css/login.css" rel="stylesheet" type="text/css">

    <title>Login</title>
  </head>
  <body>
      <!-- Navigation bar (Navbar) -->

    <div class="container-fluid bg-success">
      <nav class="navbar navbar-light navbar-expand-md">
        <div class="container">
          <a class="navbar-brand" href="../html/index.html">brikkho</a>
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link" href="signup.php">Registration</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Transperent Login Page -->

    <div class="container-fluid bg">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">

    <!--Div for LogiButton-->
    <div class="button">
      <button type="button" class="btn" onclick="userLogIn()">User</button>
      <button type="button" class="btn" onclick="retrailerLogIn()">Retrailer</button>
      <button type="button" class="btn" onclick="riderLogIn()">Rider</button>
    </div>
            <form class="form-container" action="login.php" method="post">

            <div class="container">

              <!-- User Login Form -->
            <div id="userLogIn">
              <form class="form" action="login.php" method="post">
                <h1 class="text-center">User Login</h1>
                <div class="form-group">
                  <input type="email" name="inputUserEmail" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" name="inputUserPassword" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <button type="submit" name="userLogIn" value="userLogIn" class="btn btn-success btn-block mt-3">Login</button>
                </div>
              </form>
            </div>

            <!--Retrailer Login-->
            <div id="retrailerLogIn">
              <form class="form" action="login.php" method="post">
                <h1 class="text-center">Retrailer Login</h1>
                <div class="form-group">
                  <input type="email" name="inputRetrailerEmail" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" name="inputRetrailerPassword" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <button type="submit" name="retrailerLogIn" value="retrailerLogIn" class="btn btn-success btn-block mt-3">Login</button>
                </div>
              </form>
            </div>

            <!--Rider Login Form-->
            <div id="riderLogIn">
              <form class="form" action="login.php" method="post">
                <h1 class="text-center">Rider Login</h1>
                <div class="form-group">
                  <input type="email" name="inputRiderEmail" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" name="inputRiderPassword" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <button type="submit" name="riderLogIn" value="riderLogIn" class="btn btn1 btn-success btn-block mt-3">Login</button>
                </div>
              </form>
            </div>

          </div>
        </form>

        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
      </div>
    </div>

    <script>
        function userLogIn()
          {
            var user = document.getElementById("userLogIn");
            var retrailer = document.getElementById("retrailerLogIn");
            var rider = document.getElementById("riderLogIn");
            if(user.style.display==="block"){
              user.style.display="none";
            }else{
              user.style.display="block";
              rider.style.display="none";
              retrailer.style.display="none";
            }
          }
      function retrailerLogIn()
        {
          var user = document.getElementById("userLogIn");
          var retrailer = document.getElementById("retrailerLogIn");
          var rider = document.getElementById("riderLogIn");
          if(retrailer.style.display==="block"){
            retrailer.style.display="none";
          }else{
            user.style.display="none";
            rider.style.display="none";
            retrailer.style.display="block";
          }
        }

      function riderLogIn()
        {
        var user = document.getElementById("userLogIn");
        var retrailer = document.getElementById("retrailerLogIn");
         var rider = document.getElementById("riderLogIn");
         if(rider.style.display==="block"){
          rider.style.display="none";
         }else{
          user.style.display="none";
          retrailer.style.display="none";
          rider.style.display="block";
         }
        }
    </script>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</body>
</html>

<?php
/* User Login */
if (isset($_POST['userLogIn'])) {
    $email = $_POST['inputUserEmail'];
    $password = $_POST['inputUserPassword'];

    $validation_query="SELECT * FROM user_data WHERE Email = '$email' AND Password = '$password'";
    $check_validity = mysqli_query($connection,$validation_query);
    if ($row=mysqli_fetch_array($check_validity)) {
        echo "Login Successful";
        header('Location:home.php');
        session_start();
        $_SESSION['id'] = $row['ID'];
        $_SESSION['1stname']=$row['First_Name'];
        $_SESSION['lastname'] = $row['Last_Name'];

        ob_enf_fluch();
    }
    else {
        echo "Login failed";
    }
    /* Retrailer Login */
}elseif (isset($_POST['retrailerLogIn'])) {
    $email = $_POST['inputRetrailerEmail'];
    $password = $_POST['inputRetrailerPassword'];

    $validation_query="SELECT * FROM retrailer_data WHERE Email = '$email' AND Password = '$password'";
    $check_validity = mysqli_query($connection,$validation_query);
    if (mysqli_num_rows($check_validity)) {
        echo "Login Successful";
        header("Location:uploadProduct.php");
        session_start();
        $_SESSION['id'] = $row['ID'];
        $_SESSION['1stname']=$row['First_Name'];
        $_SESSION['lastname'] = $row['Last_Name'];
    }
    else {
        echo "Login failed";
    }

    /* Rider Login */
}elseif (isset($_POST['riderLogIn'])) {
    $email = $_POST['inputRiderEmail'];
    $password = $_POST['inputRiderPassword'];

    $validation_query="SELECT * FROM rider_data WHERE Email = '$email' AND Password = '$password'";
    $check_validity = mysqli_query($connection,$validation_query);
    if (mysqli_num_rows($check_validity)) {
        echo "Login Successful";
        header("Location: ../html/home.html");
    }
    else {
        echo "Login failed";
    }

    echo "<br>"."$email"."<br>";
    echo "$password"."<br>";
    echo "Rider Login";
}
else {
    echo "Entry Failed";
}

?>
