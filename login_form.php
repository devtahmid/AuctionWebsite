<?php
require("header_newuser.php");
?>
<html>

<head>
  <script src="reg_loginformvalidation.js"> </script>
  <style>
    #login {
      margin-top: 135px;
      margin-left: auto;
      margin-right: auto;
      width: 700px;
      padding: 80px;
      padding-bottom: 25px;
      padding-top: 40px;
      border-radius: 5%;
      border: 5px solid black;
    }

    .submit {
      text-align: center;
    }

    .login {
      font-size: 50px;
    }

    p {
      margin: 1em 0;
    }
  </style>
</head>

<body class='bg-primary'>
  <div class='bg-secondary text-white container align-items-center' id='login'>
    <noscript>
      <h1><b>Please enable JavaScript or use another browser for better user experience</b></h1>
    </noscript>

    <div class="container d-flex align-items-center flex-column">
      <!-- Masthead Heading-->
      <h1 class="masthead-heading login">Login</h1>
      <!-- Icon Divider-->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
    </div>
    <!--login form-->
    <form onSubmit="return checkLoginInputs();" method='post' action='reg_login.php'>
      <label>
        <h3>Username: </h3>
      </label>
      <input class='form-control' type='text' name='username' placeholder="5-20 characters" onkeyup="checkUN(this.value,'login_username_msg')" size='20' required><span id='login_username_msg'></span><br>

      <label>
        <h3>Password</h3>
      </label>
      <input class='form-control' placeholder='6 to 20 characters' type='password' name='password' onkeyup="checkPWD(this.value,'login_pwd_msg')" size='20' required><span id='login_pwd_msg'></span><br>

      <input type='hidden' name='JSEnabled' value='false'>

      <input class='btn btn-lg btn-primary submit' type='submit' name='login_user' value='Login'>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#exampleModalCenter">
        Use Sample Accounts
      </button>
    </form>

    </br>
    <p>Dont have an account? <b><a href="registration_form.php">Sign up here!</a></b> </p>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Credentials</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <u>Auction owner and winner</u><br>
          <b>username:</b>alawi&nbsp&nbsp <b>pass:</b>Project1<br>
          <u>Active Auction bidder</u><br>
          <b>username:</b>shanib&nbsp&nbsp <b>pass:</b>Project8
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    if (screen.availWidth < 1080) {
      alert("Please use a bigger screen as the website is not fully responsive yet. Thank you");
    }
  </script>

  <?php

  $error = null;
  extract($_GET);
  if ($error == 1) {
    echo "<script> alert('Need to log in before acessing the page!'); </script>";
  } elseif ($error == 2) {
    echo "<script> alert('Please enter valid inputs, perhaps turn on client side scripting'); </script>";
  } elseif ($error == 3) {
    echo "<script> alert('Invalid credentials!'); </script>";
  } elseif ($error == 4) {
    echo "<script> alert('Database error :('); </script>";
  }

  ?>
</body>
<script>
  $ = function(id) {
    return document.getElementById(id);
  }

  var show = function(id) {
    $(id).style.display = 'block';
  }
  var hide = function(id) {
    $(id).style.display = 'none';
  }
</script>

</html>