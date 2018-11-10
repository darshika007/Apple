<?php
include("include.php");
$cnameid=$_GET['cnameid'];
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
<?php
if(isset($_POST['submit']))
{
    if(isset($_POST['cname']))
    {
        $cname=$_POST['cname'];
    }
    $f1 =$_FILES['file1']['name'];
    $cname=$_POST['cname'];
    $query=mysqli_query($con,"SELECT * FROM profile WHERE cname='$cname'");
    if(mysqli_num_rows($query)>0){
    $sql = "INSERT INTO gallery values('NULL','$f1','$cname')";
    $res=mysqli_query($con,$sql);
    if($res)
    {
        move_uploaded_file($_FILES['file1']['tmp_name'], "Pictures/$f1");
        echo "sussfully";
    }
    }
else{
    echo "<script type='text/javascript'>
    alert('First Create a Profile')</script>";
    echo "<script>window.location.href='gallery.php'</script>";
}
}
if(isset($_REQUEST["delid"]))
{
    $delid=$_REQUEST["delid"];
    // mysqli_query($con,"DELETE * FROM  webs where id='$delid'");
    $sql="DELETE FROM gallery where id='$delid'";
    $res=mysqli_query($con,$sql);
    if($res){
        header("location:venue_gallery.php");
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
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
                <a class="app-menu__item " href="sched.php">
                    <i class="app-menu__icon fa fa-calendar" aria-hidden="true"></i>
                    <span class="app-menu__label"> Schedule</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item active" href="gallery.php">
                    <i class="app-menu__icon fa fa-clipboard"></i>
                    <span class="app-menu__label"> Gallery</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item " href="judges.php">
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
                    <i class="app-menu__icon fa fa-clipboard"></i>Gallery</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item">
                    <i class="fa fa-home fa-lg"></i>
                </li>
                <li class="breadcrumb-item">
                    <a href="gallery.html">Gallery</a>
                </li>
            </ul>
        </div>

        <!--Begin Main Content-->
        <section id="venue_gallery" style="margin-top: 5%; margin-bottom: 10%;">
                <div class="container" >
                    <div class="row">
                            <div class="col-md-10 col-md-push-2" style="margin-bottom: 5%;">
                                    <h1 style="font-family: 'Germania One', cursive; color: #000; margin-left: 25%; font-size: 50px;">Mount Carmel College</h1>
                                </div>
                                <?php
                                $sql="SELECT * FROM gallery WHERE cname='".$cnameid."'";
                    $res=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <div class="col-md-4"  style="margin-top: 20px;">
                            <img src="<?php echo '../admin/Pictures/'. $row['file1']; ?>" height="300px;" width="270px;" style="box-shadow: 3px 3px #4d4b4b; ">
                            <?php echo "<a href='venue_gallery.php?delid=".$row['id']."'>Delete</a>";?>
                        </div>
                    <?php } ?>
                    </div>

                </div>

                <div class="createModal" style="margin-top: 5%; margin-left: 2%; ">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createModal">
                            Create New
                        </button>
                    </div>
    
        </section>


       
        <!--End Main Content-->

        <!--Modal-->

        <!--Create Modal-->
        <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create New Entry</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="venue_gallery.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                                <label for="InputName">Venue</label>
                                <input type="text" name="cname" class="form-control" id="InputName">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Image</label>
                                <input type="file" name="file1" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <button type="submit" name="submit" class="btn btn-success" style="float: right;">Submit</button>


                        </form>
                    </div>

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