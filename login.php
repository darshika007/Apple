<?php
session_start();
if(isset($_SESSION['logged in'])){
    header("location:index.php");
}
// end login page disabled
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <!-- Twitter meta-->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@pratikborsadiya">
  <meta property="twitter:creator" content="@pratikborsadiya">
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--disable browser back button-->
<script type="text/javascript">
history.pushState(null,null,location.href);
window.onpopstate=function(){
    history.go(1);
};
</script>
<!--end disable browser back button-->
</head>

<body style="background: rgb(53, 176, 197);">


  <div class="row">
    <div class="container">
      <div class="col-md-6 offset-3" style="padding-top: 10%;">
        <h1 style="font-family:  'Abril Fatface', cursive; letter-spacing: 3px; font-size: 50px; text-align: center; color:rgb(245, 214, 38);">Login</h1>
        <br>
        <form action="login1.php" method="POST">
          <div class="form-group">
            <label for="InputEmail">Email address</label>
            <input type="email" name="email" class="form-control" id="InputEmail1" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label for="InputPassword">Password</label>
            <input type="password" name="pawd" class="form-control" id="InputPassword" placeholder="Password">
          </div>

          <button type="submit" name="login" id="login" class="btn btn-success">Login</button>
        </form>



      </div>

    </div>
  </div>


</body>

</html>