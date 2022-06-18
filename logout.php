<?php
unset($_SESSION['user_id']);
unset($_SESSION['auction_id']);
session_unset();
session_destroy();
//below from php website session unset function
session_write_close();
setcookie(session_name(),'',0,'/');
header("location:login_form.php");
?>
