<?php
//"connect the database
include("include.php");
?>
<?php
// only admin can login the page
if(isset($_POST['email']))
 $email=$_POST['email'];
 if(isset($_POST['pawd']))
 $pawd=$_POST['pawd'];
 if(isset($_POST['login'])){
     if($email=="admin@gmail.com" && $pawd=="admin"){
         //url is not working
        session_start();
        $_SESSION['logged in'] = 'true';
    $_SESSION['email'] = $email;
    //end url is not working
       header("location:index.php");
    }
else{
   header("location:login.php");
 }

 }
 ?>