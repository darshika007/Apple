<?php
include("include.php");
SESSION_START();
//url is not visible    
{
  if(isset($_SESSION['logged in'])!= TRUE)
  {
    
header("location:login.php");
  }
}
// end URL is not vissible
?>
<?php
if(isset($_POST['submit']))
{
    $date=$_POST['date'];
    $day=$_POST['day'];
    $venu=$_POST['venu'];
    $time=$_POST['time'];
    $sql = "INSERT INTO schedule(date,day,venu,time) values('$date','$day','$venu','$time')";
    $res=mysqli_query($con,$sql);
    if($res)
    {
            echo "sussfully";
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
        <a class="app-menu__item" href="cont.php">
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
        <a class="app-menu__item active" href="sched.php">
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
          <i class="fa fa-calendar"></i> Schedule</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">
          <i class="fa fa-home fa-lg"></i>
        </li>
        <li class="breadcrumb-item">
          <a href="sched.php">Schedule</a>
        </li>
      </ul>
    </div>

    <!--Begin Company Table-->




    <div class="row">
      <div class="col-md-7.4 offset-2">
        <table class="table table-hover table-dark table-responsive">
          <thead-dark>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Day</th>
              <th scope="col">Venue</th>
              <th scope="col">Time</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>

            </tr>
            </thead>
            <tbody>
            <?php
include("include.php");
?>
            <?php

//delete query
if(isset($_REQUEST["delid"]))
{
    $delid=$_REQUEST["delid"];
    // mysqli_query($con,"DELETE * FROM  webs where id='$delid'");
    $sql="DELETE FROM schedule where id='$delid'";
    $res=mysqli_query($con,$sql);
    if($res){
    }
}
//end delete query

                //select query
                $query=mysqli_query($con,"SELECT * FROM schedule");
                while ($row = mysqli_fetch_array($query)) { 
                    echo "<tr>
                    <td>{$row['date']}</td>
                    <td>{$row['day']}</td>
                    <td>{$row['venu']}</td>
                    <td>{$row['time']}</td>
                <td>
                <a href='schedule.php?edit=".$row['id']."'><i class='fa fa-pencil'></i></a>
                </td>
                <td>
               <a href='sched.php?delid=".$row['id']."'> <button type='button' class='btn btn-danger'>
                    Delete
                  </button>  </a> 
                </td>
                </tr>";
                }
                  ?>
                

            </tbody>
        </table>
        <!--Begin: To create new entry-->
        <div class="new_sched">
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#new_sched">
            Create New
          </button>
        </div>


        <!--End: To create new entry-->
      </div>
    </div>
    <!--End Company Table-->







    <!--Modal-->

    <!--Create Modal-->
    <div class="modal fade" id="new_sched" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Entry</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="sched.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="InputDate">Date</label>
                <input type="date" name="date" class="form-control" id="InputDate" required="">
              </div>

              <div class="form-group">
                <label for="InputDay">Day</label>
                <input type="text" name="day" class="form-control" id="InputDay" required="">
              </div>


              <div class="form-group">
                <label for="InputVenue">Venue</label>
                <input type="text" name="venu" class="form-control" id="drop1" required="">
              </div>

              <div class="form-group">
                <label for="InputTime">Time</label>
                <input type="text" name="time" class="form-control" id="InputTime" required="">
              </div>

              <button type="submit" name="submit" class="btn btn-success" style="float: right;">Submit</button>


            </form>
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