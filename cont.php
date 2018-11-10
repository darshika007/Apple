<?php
include("include.php");
//url is not visible    
{
  session_start();
  if(isset($_SESSION['logged in'])!= TRUE)
  {
    
header("location:login.php");
  }
}
// end URL is not vissible
?>
?>
<?php
if(isset($_POST['reject'])){
  $id=$_POST['id'];
echo '$status';
$sql="UPDATE regis set status='reject' where id='$id'";
$res=mysqli_query($con,$sql);
if($res){
 
header("location:cont.php");

}
else{
echo "error";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <!-- Twitter meta-->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@pratikborsadiya">
  <meta property="twitter:creator" content="@pratikborsadiya">
  <!-- Open Graph Meta-->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Vali Admin">
  <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
  <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
  <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
  <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
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

<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header">
    <a class="app-header__logo" href="index.html">Face Of Bengaluru</a>
    <!-- Sidebar toggle button-->
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Search">
        <button class="app-search__button">
          <i class="fa fa-search"></i>
        </button>
      </li>
      <!-- User Menu-->
      <li class="dropdown">
        <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
          <i class="fa fa-user fa-lg"></i>
        </a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li>
            <a class="dropdown-item" href="page-user.html">
              <i class="fa fa-user fa-lg"></i> Profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="logout.php">
              <i class="fa fa-sign-out fa-lg"></i> Logout</a>
          </li>
        </ul>
      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user">
      <!-- <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"> -->
      <br>
      <div>
        <p class="app-sidebar__user-name"></p>
        <p class="app-sidebar__user-designation"></p>
      </div>
    </div>
    <ul class="app-menu">
      <li>
        <a class="app-menu__item " href="index.php">
          <i class="app-menu__icon fa fa-user"></i>
          <span class="app-menu__label">User Details</span>
        </a>
      </li>
      <li>
        <a class="app-menu__item active" href="cont.php">
          <i class="app-menu__icon fa fa-users"></i>
          <span class="app-menu__label"> Contestants</span>
        </a>
      </li>
      <li>
        <a class="app-menu__item " href="selcont.php">
          <i class="app-menu__icon fa fa-user" aria-hidden="true"></i>
          <span class="app-menu__label"> Selected Contestants</span>
        </a>
      </li>
      <li>
        <a class="app-menu__item" href="sched.php">
          <i class="app-menu__icon fa fa-calendar" aria-hidden="true"></i>
          <span class="app-menu__label"> Schedule</span>
        </a>
      </li>
      <li>
        <a class="app-menu__item" href="gallery.php">
          <i class="app-menu__icon fa fa-clipboard"></i>
          <span class="app-menu__label"> Gallery</span>
        </a>
      </li>
      <li>
        <a class="app-menu__item" href="judges.php">
          <i class="app-menu__icon fa fa-clipboard"></i>
          <span class="app-menu__label"> Judges</span>
        </a>
      </li>
      <li>
        <a class="app-menu__item" href="sponsors.php">
          <i class="app-menu__icon fa fa-clipboard"></i>
          <span class="app-menu__label"> Sponsors</span>
        </a>
      </li>

    </ul>
  </aside>



  <main class="app-content">
    <div class="app-title">
      <div>
        <h1>
          <i class="fa fa-users"></i> Contestants</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">
          <i class="fa fa-home fa-lg"></i>
        </li>
        <li class="breadcrumb-item">
          <a href="cont.php">Contestants</a>
        </li>
      </ul>
    </div>

    <!--Begin Company Table-->
    <div class="row">
      <div class="col-md-7.4 offset-1">
        <table class="table table-hover table-dark table-responsive">
          <thead-dark>
            <tr>
              <th scope="col">Sl. No.</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Date Of Birth(Age)</th>
              <!-- <th scope="col">Image</th> -->
              <!-- <th scope="col">Height</th> -->
              <th scope="col">Weight</th>
              <!-- <th scope="col">Purpose</th> -->
              <th scope="col">Reject</th>

            </tr>
            </thead>
            <tbody>
                <?php
                $query=mysqli_query($con,"SELECT * FROM regis WHERE status='approve'");
                while ($row = mysqli_fetch_array($query)) {
               
                  ?>          
              <tr>
                <th scope="row"><?php echo $row['id']; ?></th>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['date']; ?>(<?php echo $row['age']; ?>)</td>
                <!-- <td><i class="fa fa-file-image-o" aria-hidden="true" data-toggle="modal" data-target="#imageModal"></i></td> -->
                <!-- <td>160cm</td> -->
                <td><?php echo $row['weight']; ?></td>
                
                <!-- <td> -->
                <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Purpose</button> -->
                <!-- </td> -->
                <form action='cont.php' method='POST'> <td> 
                 <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <td><button ID="button" name="reject" class="btn btn-danger btn-sm" value="reject" />Reject</button></td>
                </form>
                <?php } ?>
              </tr>
            </tbody>
        </table>
      </div>
    </div>
    <!--End Company Table-->



    <!--Modal-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Purpose</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto soluta saepe unde quos accusamus ipsa
            explicabo officiis! Adipisci et, deleniti laboriosam, numquam animi earum dolorem autem praesentium culpa
            enim repellat.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="images/cupcake.jpg" height="350px;" width="300px;">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>


  </main>
  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>

</body>

</html>