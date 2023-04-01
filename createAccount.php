<?php

include 'connect.php';
session_start();

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['confirmpassword'];

    $existemail = "select * from `createAccount` where email = '$email'";
    $result = mysqli_query($con, $existemail);
    $useremail = mysqli_num_rows($result);

    $existusername = "select * from `createAccount` where username = '$username'";
    $resultuser = mysqli_query($con, $existusername);
    $usernamedata= mysqli_num_rows($resultuser);

    if ($useremail > 0) {

        //checking if email exist in db
        echo "<script>alert('Try Different Email ID')</script>";
    } elseif ($password != $c_password) {
        echo "<script>alert('Password Should Be Same.')</script>";
        // exit();

    } elseif ($usernamedata> 0) {
        //to checking if username is already in db
        echo "<script>alert('Username Exist ! Try Another ')</script>";
        // exit();
    } else {
        if ($password = $c_password) {

            $sql = "INSERT INTO `awp`.`createaccount` (`fname`, `lname`, `username`, `email`, `password`, `datetime`) VALUES ('$fname', '$lname', '$username', '$email', '$password', CURRENT_TIMESTAMP);";

            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<script>alert('Account Created!')</script>";
                $_SESSION['username'] = $row['username'];
                // header("Location: welcome.php");
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account here</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.bundle.min.js"></script>
    <style>
        .card-width {
            margin-top: 150px;
        }

        body {

            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            background-color: rgb(255, 255, 255);
            background-blend-mode: darken;

        }
    </style>
</head>

<body>
    <div class="wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="signup-form">
                        <form action="" method="POST" class="mt-5 border p-4 bg-white shadow p-5 rounded">
                            <div class="d-flex justify-content-center align-items-center ">
                                <a href="#" class="text-decoration-none">
                                    <h4 class="text-info">Auto</h4>
                                </a>
                                <a href="#" class="text-decoration-none">
                                    <h4 class="text-danger">Tron</h4>
                                </a>
                            </div>

                            <!-- <div class="wrapper">
                                <h4 class="text-primary text-center">Auto Tron</h4>
                            </div> -->
                            <h5 class="mb-3 text-dark text-center">Create Your Account</h5>
                            <div class="row">

                                <div class=" mb-2 col-md-6  text-dark">
                                    <label>First Name</label>
                                    <input type="text" name="fname" class="form-control shadow" placeholder=" First Name">
                                </div>

                                <div class="mb-2 col-md-6 text-dark">
                                    <label>Last Name</label>
                                    <input type="text" name="lname" class="form-control shadow" placeholder="Last Name">
                                </div>

                                <div class="mb-2 col-md-6 text-dark">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control shadow" placeholder="Enter Username">
                                </div>

                                <div class="mb-2 col-md-6 text-dark">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control shadow" placeholder="Enter email">
                                </div>

                                <div class="mb-2 col-md-12 text-dark">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control shadow" placeholder="**********">
                                </div>

                                <div class="mb-2 col-md-12 text-dark">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirmpassword" class="form-control shadow" placeholder="**********">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary  w-100 shadow" name="submit" onclick="saveData()">Continue</button>
                                </div>
                            </div>
                            <div class="col bg-white w-100">

                                <p class="text-center mt-3 text-secondary ">If you have account, Please <a href="./login.php">Login Now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>