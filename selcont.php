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
<?php
if(isset($_POST['reject'])){
  $id=$_POST['id'];
echo '$status';
$sql="UPDATE regis set status='reject' where id='$id'";
$res=mysqli_query($con,$sql);
if($res){
 
header("location:selcont.php");

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
                <a class="app-menu__item " href="cont.php">
                    <i class="app-menu__icon fa fa-users"></i>
                    <span class="app-menu__label"> Contestants</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item active" href="selcont.php">
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
                    <i class="fa fa-user"></i>Selected Contestants</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item">
                    <i class="fa fa-home fa-lg"></i>
                </li>
                <li class="breadcrumb-item">
                    <a href="selcont.php">Selected Contestants</a>
                </li>
            </ul>
        </div>

        <!--Begin Company Table-->

        <table class="table table-hover table-dark table-responsive">
            <thead-dark>
                <tr>
                    <th scope="col">Sl. No.</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Date Of Birth(Age)</th>
                    <th scope="col">Email ID</th>
                    <th scope="col">Contact Number</th>
                    <!-- <th scope="col">Image</th> -->
                    <th scope="col">Venue</th>
                    <!-- <th scope="col">Height</th> -->
                    <th scope="col">Weight</th>
                    <!-- <th scope="col">ID Proof</th> -->
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
                            <td><?php echo $row['lname']; ?></td>
                            <td><?php echo $row['date']; ?>(<?php echo $row['age']; ?>)</td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <!-- <td> <i class="fa fa-file-image-o" aria-hidden="true" data-toggle="modal" data-target="#imageModal"></i>
                        </td> -->
                        <td><?php echo $row['drop1']; ?></td>
                        <!-- <td>160cm</td> -->
                        <td><?php echo $row['weight']; ?></td>
                        <!-- <td><i class="fa fa-id-card-o" aria-hidden="true" data-toggle="modal" data-target="#IDModal"></i>
                        </td> -->
                    <form action='selcont.php' method='POST'> <td> 
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <button ID="button" name="reject" value="reject" class="btn btn-danger btn-sm">Reject</button>
                        </td>
                        </form>
                        <?php } ?>

                    </tr>
                </tbody>
        </table>

        <!--End Company Table-->
        <!--Begin: To create new entries-->
        <div class="new_entry">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#new_entry">
                Create New
            </button>
        </div>


        <!--End: To create new entries-->
        <!--Modals-->
        <!--Purpose Modal-->
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto soluta saepe unde quos accusamus
                        ipsa explicabo officiis!
                        Adipisci et, deleniti laboriosam, numquam animi earum dolorem autem praesentium culpa enim
                        repellat.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        <!--Image Modal-->
        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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

        <!--ID Modal-->
        <div class="modal fade" id="IDModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ID Proof</h5>
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





        <!--Create new entry modal-->
        <div class="modal fade" id="new_entry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create New Entry</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="InputFName">First Name</label>
                                <input type="text" class="form-control" id="InputFName" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="InputLName">Last Name</label>
                                <input type="text" class="form-control" id="InputLName" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label for="InputDOB">Date of Birth</label>
                                <input type="date" class="form-control" id="InputDOB">
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">Email address</label>
                                <input type="email" class="form-control" id="InputEmail" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="InputContNo">Contact Number</label>
                                <input type="tel" class="form-control" id="InputContNo" placeholder="Enter Contact Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Profile Image</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <div class="form-group">
                                <label for="InputVenue">Venue</label>
                                <select class="form-control form-control-sm">
                                    <option>Mount Carmel College</option>
                                    <option>Christ University</option>
                                    <option>St. Joseph's College of Commerce</option>
                                    <option>Phoenix Market City</option>
                                    <option>1 MG</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="InputHeight">Height(in cm)</label>
                                <input type="number" class="form-control" id="InputHeight" placeholder="Enter Height">
                            </div>
                            <div class="form-group">
                                <label for="InputWeight">Weight(in Kg)</label>
                                <input type="number" class="form-control" id="InputWeight" placeholder="Enter Weight">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile2">Upload Image for ID Proof</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile2">
                            </div>

                            <button type="submit" class="btn btn-success" style="float: right;">Submit</button>
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