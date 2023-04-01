<?php

include 'connect.php';
session_start();

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "select * from createAccount where username = '$username' && password = '$password'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_num_rows($result);

  if ($row > 0) {

    header("Location: welcome.php");
  } else {
    echo "<script>alert('username or password is wrong')</script>";
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="bootstrap.bundle.min.js"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'arial';
    }

    body {

      background-image: url(/bg.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      height: 100vh;
      /* background-color:; */
      background-blend-mode: darken;

    }
    .card-width {

      margin-top: 140px;

    }
  </style>
</head>

<body>

  <section class="wrapper">
    <div class="container">

      <form action="" method="POST" class="rounded p-3 card-width">
        <div class=" col-xl-4 offset-xl-4  ">

          <div class="d-flex justify-content-center align-items-center ">
            <h4 class="text-info">Auto</h4>
            <h4 class="text-danger">Tron</h4>
          </div>
          <h3 class="text-dark fw-bolder fs-4 mb-3 w-100 text-center">Sign In</h3>
          <div class="fw-normal text-muted mb-4 text-center">
            New Here? <a href="createAccount.php" class="text-primary fw-bold text-decoration-none">Create Account</a>
          </div>

          <div class="form-floating mb-3 w-100">
            <input type="text" class="form-control shadow" id="floatingInput" name="username" placeholder="Username%223">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control shadow" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button type="submit" class="btn btn-primary submit_btn w-100 my-4" name="submit" onclick="saveData()" onclick="getData()">Sign
            In</button>

          <div class="text-center text-muted text-uppercase mb-3"></div>
      </form>
    </div>
    </div>
</body>
</html>