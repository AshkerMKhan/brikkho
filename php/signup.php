<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brikkho";
$connection = mysqli_connect($servername,$username,$password,$dbname) or die($connection);
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
    <link rel="stylesheet" href="../css/registration.css">

    <title>Registration</title>
  </head>
  <body>


          <!-- Top Navigation Bar -->

    <nav class="navbar navbar-light navbar-expand-md bg-light">
      <div class="container">
        <a class="navbar-brand" href="../html/index.html">brikkho</a>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="btn nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn nav-link"
            data-toggle="modal" data-target="#userSignUpForm" href="#">User</a>
          </li>
          <li class="nav-item">
            <a class="btn nav-link" data-toggle="modal" data-target="#retrailerSignUpForm" href="#">Retrailer</a>
          </li>
          <li class="nav-item">
            <a class="btn nav-link" data-toggle="modal" data-target="#riderSignUpForm" href="#">Rider</a>
          </li>
        </ul>
      </div>
    </nav>


  <div class="container-fluid bg">

    <!-- User Signup Form -->

    <div class="modal fade" role="dialog" id="userSignUpForm">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form class="form" action="../php/signup.php" method="post">
          <div class="modal-header">
            <h3 class="modal-title">User Signup Form</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            <div class="form-group ">
              <input type="text" name="inputUserName1" class="form-control" placeholder="First Name" required>
              <input type="text" name="inputUserName2" class="form-control mt-3" placeholder="Last Name" required>
            </div>
            <div class="form-group">
              <input type="text" name="inputUserPhoneNo" class="form-control" placeholder="Phone no" required>
            </div>
            <div class="form-group">
              <input type="email" name="inputUserEmail" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" name="inputUserPassword1" class="form-control" placeholder="Password" required>
              <input type="password" name="inputUserPassword2" class="form-control mt-3" placeholder="Re-enter password" required>
            </div>
          </div>

          <div class="modal-footer justify-content-center">
            <button type="submit" name="userSignUp" value="userSignUp" class="btn btn-success">SignUP</button>
          </div>

          </form>
        </div>
      </div>
    </div>

    <!-- Retrailer Signup Form -->

    <div class="modal fade" role="dialog" id="retrailerSignUpForm">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form class="form" action="../php/signup.php" method="post">
            <div class="modal-header">
              <h3>Retrailer SignUP Form</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              <div class="form-group">
                <input type="text" name="inputRetrailerName1" class="form-control" placeholder="First Name" required>
                <input type="text" name="inputRetrailerName2" class="form-control mt-3" placeholder="Last Name" required>
              </div>
              <div class="form-group">
                <input type="text" name="inputRetrailerAddress" class="form-control" placeholder="Adress" required>
              </div>
              <div class="form-group">
                <input type="text" name="inputRetrailerPhoneNo" class="form-control" placeholder="Phone No" required>
              </div>
              <div class="form-group">
                <input type="email" name="inputRetrailerEmail" class="form-control" placeholder="Email" required>
              </div>
              <div class="form-group">
                <input type="password" name="inputRetrailerPassword1" class="form-control" placeholder="Password" required>
                <input type="password" name="inputRetrailerPassword2" class="form-control mt-3" placeholder="Re-Enter Password" required>
              </div>

              <div class="modal-footer justify-content-center">
                <button type="submit" name="retrailerSignUp" value="retrailerSignUp" class="btn btn-success">SignUP</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

        <!-- Rider Signup Form -->

    <div class="modal fade" role="dialog" id="riderSignUpForm">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h3>Raider SignUP Form</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            <form class="form" action="../php/signup.php" method="post">
              <div class="form-group">
                <input type="text" name="inputRiderName1" class="form-control" placeholder="First Name" required>
                <input type="text" name="inputRiderName2" class="form-control mt-3" placeholder="Last Name" required>
              </div>
              <div class="form-group">
                <input type="text" name="inputRiderAddress" class="form-control" placeholder="Adress" required>
              </div>
              <div class="form-group">
                <select class="browser-default custom-select" name="inputRiderVehicle">
                  <option selected>Vehicle Type</option>
                  <option value="Motorcycle">Motorcycle</option>
                  <option value="Bicycle">Bicycle</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" name="inputRiderPhoneNo" class="form-control" placeholder="Phone No" required>
              </div>
              <div class="form-group">
                <input type="email" name="inputRiderEmail" class="form-control" placeholder="Email" required>
              </div>
              <div class="form-group">
                <input type="password" name="inputRiderPassword1" class="form-control" placeholder="Password" required>
                <input type="password" name="inputRiderPassword2" class="form-control mt-3" placeholder="Re-Enter Password" required>
              </div>

              <div class="modal-footer justify-content-center">
                <button type="submit" name="riderSignUp" value="riderSignUp" class="btn btn-success">SignUP</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../js/bootstrap.min.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<?php
 /* User signup page*/

if (isset($_POST['userSignUp'])) {
    # code...
    $first_name = $_POST['inputUserName1'];
    $last_name = $_POST['inputUserName2'];
    $phone_no = $_POST['inputUserPhoneNo'];
    $email = $_POST['inputUserEmail'];
    $password1 = $_POST['inputUserPassword1'];
    $password2 = $_POST['inputUserPassword2'];

    if ($password1 === $password2) {
        $check_email_availability="SELECT Email FROM user_data WHERE Email='$email'";
        $get_email=mysqli_query($connection,$check_email_availability);
        $count = mysqli_num_rows($get_email);
        if ($count==0) {
            $assign_value="INSERT INTO user_data(First_Name,Last_name,Phone_No,Email,Password) VALUES ('$first_name','$last_name','$phone_no','$email','$password1')";
            $enter_value=mysqli_query($connection,$assign_value);
            if (!$enter_value) {
                echo "Data Not Updated";
            }else {
                echo "Data Updated Succcessfully";
            }

        }
    }else {
        header('Location:../html/registration.html');
    }

}

/* Retrailer signup */

elseif (isset($_POST['retrailerSignUp'])) {
    # code...
    $first_name = $_POST['inputRetrailerName1'];
    $last_name = $_POST['inputRetrailerName2'];
    $address = $_POST['inputRetrailerAddress'];
    $phone_no = $_POST['inputRetrailerPhoneNo'];
    $email = $_POST['inputRetrailerEmail'];
    $password1 = $_POST['inputRetrailerPassword1'];
    $password2 = $_POST['inputRetrailerPassword2'];

    if ($password1===$password2) {
        $check_email_availability = "SELECT Email FROM retrailer_data WHERE Email='$email'";
        $get_email = mysqli_query($connection,$check_email_availability);
        $count = mysqli_num_rows($get_email);
        if ($count==0) {
            $assign_value="INSERT INTO retrailer_data(First_Name,Last_name,Address,Phone_No,Email,Password) VALUES ('$first_name','$last_name',' $address','$phone_no','$email','$password1')";
            $enter_value=mysqli_query($connection,$assign_value);
            if (!$enter_value) {
                echo "Data Not Updated";
            }else {
                echo "Data Updated Succcessfully";
            }

        }
    }else {
        header('Location:../html/registration.html');
    }
}

/* Rider Signup */

elseif (isset($_POST['riderSignUp'])) {
    # code...
    $first_name = $_POST['inputRiderName1'];
    $last_name = $_POST['inputRiderName2'];
    $address = $_POST['inputRiderAddress'];
    $vehicle_type=$_POST['inputRiderVehicle'];
    $phone_no = $_POST['inputRiderPhoneNo'];
    $email = $_POST['inputRiderEmail'];
    $password1 = $_POST['inputRiderPassword1'];
    $password2 = $_POST['inputRiderPassword2'];

    if ($password1===$password2) {
        $check_email_availability = "SELECT Email FROM rider_data WHERE Email='$email'";
        $get_email = mysqli_query($connection,$check_email_availability);
        $count = mysqli_num_rows($get_email);
        if ($count==0) {
            $assign_value="INSERT INTO rider_data(First_Name,Last_name,Address,Vehicle_Type,Phone_No,Email,Password) VALUES ('$first_name','$last_name',' $address','$vehicle_type','$phone_no','$email','$password1')";
            $enter_value=mysqli_query($connection,$assign_value);
            if (!$enter_value) {
                echo "Data Not Updated";
            }else {
                echo "Data Updated Succcessfully";
            }

        }
    }else {
        header('Location:../html/registration.html');
    }
}
else {
    echo "No Data";
}

?>
