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
    if(isset($_GET["edit"]))
    {
        $_SESSION['edit']=$_GET['edit'];
        $edit=$_SESSION['edit'];
    }

    if(isset($_POST['update'])){
        $date=$_POST['date'];
        $day=$_POST['day'];
        $venu=$_POST['venu'];
        $time=$_POST['time'];
    $edit=$_SESSION['edit'];
    
    $sql="UPDATE schedule  set date='$date',day='$day',venu='$venu',time='$time' where id='$edit'";
    $res=mysqli_query($con,$sql);
    if($res){
       
      header("location:sched.php");
    
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
<!--disable browser back button-->
<script type="text/javascript">
history.pushState(null,null,location.href);
window.onpopstate=function(){
    history.go(1);
};
</script>
<!--end disable browser back button-->


</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="color:blue;">Update</h5>
              <a href="sched.php"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button></a>
            </div>
            <div class="modal-body">
              <form action="schedule.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="InputDate">Date</label>
                  <input type="date" name="date" class="form-control" id="InputDate">
                </div>
                <div class="form-group">
                  <label for="InputDay">Day</label>
                  <input type="text" name="day" class="form-control" id="InputDay">
                </div>
                <div class="form-group">
                  <label for="InputVenue">Venue</label>
                    <input type="text" name="venu" id="drop1" class="form-control" id="InputDay">
                </div>
                <div class="form-group">
                  <label for="InputTime">Time</label>
                  <input type="text" name="time" class="form-control" id="InputTime">
                </div>
                <button type="submit" name='update' class="btn btn-success" style="float: right;">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
</body>

</html>