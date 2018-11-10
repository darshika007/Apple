<!-- stop the session-->
<?php
session_start();
session_unset();
session_destroy();
header("location:login.php");

?>
