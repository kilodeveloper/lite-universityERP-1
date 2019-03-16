<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==1)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
$unitname=$_POST['unitname'];
$unitcode=$_POST['unitcode'];
$day=$_POST['day'];
$time=$_POST['time'];
$roomno=$_POST['roomno'];

$sql="INSERT INTO timetable(unitname,unitcode,day,time,roomno) VALUES(:unitname,:unitcode,:day,:time,:roomno)";
$query = $dbh->prepare($sql);
$query->bindParam(':unitname',$unitname,PDO::PARAM_STR);
$query->bindParam(':unitcode',$unitcode,PDO::PARAM_STR);
$query->bindParam(':day',$day, PDO::PARAM_STR);
$query->bindParam(':time',$time, PDO::PARAM_STR);
$query->bindParam(':roomno',$roomno, PDO::PARAM_STR);
//$query->bindParam(':day',$faculty, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Unit Successfully Added To Time Table";
}
else 
{
$error="Something Went Wrong. Please Try Again";
}

}


	?>
<!DOCTYPE html>
<head>
<title>Spu Admin | Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="SPU  web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="shortcut icon" href="images/logo.png" />
<!--//bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>

<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!--font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>

<link rel="stylesheet" href="css/monthly.css">
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<?php include("includes/header.php")?>
<!--header end-->
<!--sidebar start-->
<?php include("includes/navbar.php")?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            TimeTable Generation Panel
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                            <form method="post" action="" name="opinion" class="form-horizontal" >
          <div class="form-group">
          <label class="col-sm-2 control-label">Unit Name </label>
          <input type="text" name="unitname" id="unitname"  class="form-control" required="required" >
          </div>
          
          <div class="form-group">
          <label class="col-sm-2 control-label">Unit Code </label>
          <input type="text" name="unitcode" id="unitcode"  class="form-control" required="required" >
          </div>
          
          <div class="form-group">
          <label class="col-sm-2 control-label">Day Offered</label>
          <input type="text" name="day" id="day"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-2 control-label">Time</label>
          <input type="text" name="time" id="time"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-2 control-label">Room Number</label>
          <input type="text" name="roomno" id="roomno"  class="form-control" required="required" >
          </div>
          
          <div class="col-sm-6 col-sm-offset-4">
          <input type="submit" name="submit" Value="Add Unit"class="btn btn-success mr-2 ">
          </div>
          </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        <!-- page end-->
        </div>
</section>
 <!-- footer -->
		  <?php include("includes/footer.php")?>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
<?php } ?>
