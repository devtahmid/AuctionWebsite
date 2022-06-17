<?php require('header.php') ;
session_start();
if (!isset($_SESSION['userId']))
  header('location: login_form.php?error=1');
?>
<html>
<head>
<title>
AUCTIONS.COM
</title>
<style>
h1 {
  text-align: center;
  font-size:3vw;
}
body {
  background-image: url("images/wallpaper.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: scroll;
}
</style>
</head>

<body>
<div style="margin:20%; color:#f4a100">
<h1 style=""> Hii!</h1>
<h1> WELCOME TO AUCTIONS.COM </h1>
</div>
<style>
</style>

</body>
<!--test line-->
</html>
